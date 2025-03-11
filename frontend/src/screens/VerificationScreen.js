import React, { useState } from 'react';
import { View, TextInput, Button, Text, ActivityIndicator } from 'react-native';
import { globalStyles } from '../styles/globalStyles'; 
import api from '../services/api';

const VerificationScreen = ({ route, navigation }) => {
  const { phone } = route.params;
  const [verificationCode, setVerificationCode] = useState('');
  const [errorMessage, setErrorMessage] = useState('');
  const [isLoading, setIsLoading] = useState(false);

  // Função para lidar com a verificação do código
  const handleVerification = async () => {
    if (!verificationCode) {
      setErrorMessage('Por favor, insira o código de verificação');
      return;
    }

    // Validação simples do código (apenas números e um tamanho específico)
    if (!/^\d{6}$/.test(verificationCode)) {
      setErrorMessage('O código de verificação deve ter 6 dígitos numéricos');
      return;
    }

    setIsLoading(true);
    setErrorMessage(''); // Limpar erros anteriores

    try {
      // Envia uma solicitação para verificar o código de verificação
      const response = await api.post('verify', { phone, code: verificationCode });
      if (response.data.status === 'success') {
        navigation.navigate('Dashboard');
      } else {
        setErrorMessage('Código de verificação inválido');
      }
    } catch (error) {
      setErrorMessage('Erro ao verificar código');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <View style={globalStyles.container}>
      <Text style={globalStyles.title}>Verifique seu código de SMS enviado para {phone}</Text>
      
      <TextInput 
        style={globalStyles.input}
        placeholder="Código de Verificação"
        value={verificationCode}
        onChangeText={setVerificationCode}
        keyboardType="numeric"
      />
      
      <Button title={isLoading ? 'Verificando...' : 'Verificar'} onPress={handleVerification} disabled={isLoading} />
      
      {isLoading && <ActivityIndicator size="large" color="#0000ff" />}
      
      {errorMessage && <Text style={globalStyles.error}>{errorMessage}</Text>}
    </View>
  );
};

export default VerificationScreen;
