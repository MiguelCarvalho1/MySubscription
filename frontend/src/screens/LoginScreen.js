import React, { useState } from 'react';
import { View, TextInput, Button, Text, ActivityIndicator } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';
import api from '../services/api';
import { globalStyles } from '../styles/globalStyles';

const LoginScreen = ({ navigation }) => {
    const [email, setEmail] = useState('admin@example.com');
    const [password, setPassword] = useState('as');
    const [errorMessage, setErrorMessage] = useState('');
    const [loading, setLoading] = useState(false);

    // Função para lidar com o processo de login
    const handleLogin = async () => {
        if (!email || !password) {
            setErrorMessage('Email e password são obrigatórios');
            return;
        }

        setLoading(true);
        setErrorMessage('');

        try {
            // Envia uma solicitação de login para o backend
            const response = await api.post('/login', { email, password });

            if (response.data.status === 'success') {
                // Armazena o ID do usuário no AsyncStorage e navega para a tela de verificação
                await AsyncStorage.setItem('user_id', response.data.user_id);
                navigation.navigate('Verification', { phone: response.data.phone });
            } else {
                // Define mensagem de erro se as credenciais forem inválidas
                setErrorMessage('Credenciais inválidas');
            }
        } catch (error) {
            // Define mensagem de erro em caso de falha na solicitação
            setErrorMessage(
                error.response?.data?.message || 'Erro ao tentar fazer login'
            );
        } finally {
            setLoading(false);
        }
    };

    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.title}>Login</Text>

            <TextInput
                style={globalStyles.input}
                placeholder="Email"
                value={email}
                onChangeText={setEmail}
                keyboardType="email-address"
                autoCapitalize="none"
            />

            <TextInput
                style={globalStyles.input}
                placeholder="Password"
                value={password}
                onChangeText={setPassword}
                secureTextEntry
            />

            {loading ? (
                // Exibe indicador de carregamento enquanto a solicitação de login está em andamento
                <ActivityIndicator size="large" color="#0000ff" />
            ) : (
                // Botão de login que chama a função handleLogin ao ser pressionado
                <Button title="Login" onPress={handleLogin} />
            )}

            {/* Exibe mensagem de erro se houver algum erro */}
            {errorMessage ? <Text style={globalStyles.error}>{errorMessage}</Text> : null}
        </View>
    );
};

export default LoginScreen;