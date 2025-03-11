import React, { useState } from 'react';
import { View, Text, TextInput, Button, ActivityIndicator, Alert } from 'react-native';
import { useAuth } from '../components/AuthContext';
import { globalStyles } from '../styles/globalStyles';
import api from '../services/api';

const ProfileScreen = () => {
  const { user } = useAuth();
  const [name, setName] = useState(user.name);
  const [email, setEmail] = useState(user.email);
  const [phone, setPhone] = useState(user.phone);
  const [isLoading, setIsLoading] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');

  const validateForm = () => {
    if (!name.trim()) {
      setErrorMessage('O nome não pode estar vazio');
      return false;
    }
    if (!email.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      setErrorMessage('Formato de email inválido');
      return false;
    }
    if (!phone.trim() || phone.length < 10) {
      setErrorMessage('Telefone inválido');
      return false;
    }
    return true;
  };

  const updateProfile = async () => {
    if (!validateForm()) return;

    setIsLoading(true);
    setErrorMessage('');

    try {
      const response = await api.post('updateProfile.php', {
        action: 'updateProfile',
        user_id: user.id,
        name,
        email,
        phone,
      });

      if (response.data.status === 'success') {
        Alert.alert('Sucesso', 'Perfil atualizado com sucesso');
      } else {
        setErrorMessage(response.data.message || 'Falha ao atualizar o perfil');
      }
    } catch (error) {
      console.error('Erro ao atualizar o perfil:', error);
      setErrorMessage('Erro ao atualizar o perfil');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <View style={globalStyles.container}>
      <Text style={globalStyles.title}>Perfil</Text>

      <Text style={globalStyles.profileText}>Nome:</Text>
      <TextInput
        style={globalStyles.input}
        value={name}
        onChangeText={setName}
      />

      <Text style={globalStyles.profileText}>Email:</Text>
      <TextInput
        style={globalStyles.input}
        value={email}
        onChangeText={setEmail}
        keyboardType="email-address"
      />

      <Text style={globalStyles.profileText}>Telefone:</Text>
      <TextInput
        style={globalStyles.input}
        value={phone}
        onChangeText={setPhone}
        keyboardType="phone-pad"
      />

      {errorMessage ? <Text style={globalStyles.error}>{errorMessage}</Text> : null}

      <Button
        title={isLoading ? 'Atualizando...' : 'Salvar'}
        onPress={updateProfile}
        disabled={isLoading}
      />

      {isLoading && <ActivityIndicator size="large" color="#0000ff" />}
    </View>
  );
};

export default ProfileScreen;