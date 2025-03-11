import React, { useState, useEffect, useCallback } from 'react';
import { View, Text, Button, FlatList, ActivityIndicator, Alert } from 'react-native';
import { useFocusEffect } from '@react-navigation/native';
import api from '../services/api';
import { globalStyles } from '../styles/globalStyles';

const DashboardScreen = ({ navigation }) => {
  const [products, setProducts] = useState([]);
  const [clientProfile, setClientProfile] = useState(null);
  const [loading, setLoading] = useState(true);

  // Função para buscar dados do backend
  const fetchData = async () => {
    setLoading(true);
    try {
      // Faz requisições para buscar produtos e perfil do cliente
      const productsResponse = await api.get('products');
      const profileResponse = await api.get('profile');

      // Atualiza o estado com os dados recebidos
      setProducts(productsResponse.data);
      setClientProfile(profileResponse.data);
    } catch (error) {
      // Exibe alerta em caso de erro na requisição
      Alert.alert('Erro', 'Falha ao carregar dados. Tente novamente mais tarde.');
    } finally {
      // Define o estado de carregamento como falso
      setLoading(false);
    }
  };

  // Atualiza os dados ao entrar na tela
  useFocusEffect(
    useCallback(() => {
      fetchData();
    }, [])
  );

  // Navega para a tela de edição de perfil
  const handleEditProfile = () => {
    navigation.navigate('EditProfile');
  };

  // Função para inscrever-se em um produto
  const handleSubscribe = async (productId) => {
    try {
      const response = await api.post('subscribe', { productId });
      if (response.data.status === 'success') {
        // Exibe alerta de sucesso e atualiza a lista de produtos
        Alert.alert('Sucesso', 'Inscrição realizada com sucesso!');
        fetchData(); // Atualiza a lista após inscrição
      } else {
        // Exibe alerta de erro
        Alert.alert('Erro', 'Falha ao realizar inscrição.');
      }
    } catch (error) {
      // Exibe alerta de erro em caso de falha na conexão com o servidor
      Alert.alert('Erro', 'Falha ao conectar ao servidor.');
    }
  };

  return (
    <View style={globalStyles.container}>
      {loading ? (
        // Exibe indicador de carregamento enquanto os dados estão sendo buscados
        <ActivityIndicator size="large" color="#0000ff" />
      ) : (
        <>
          {clientProfile && (
            <View style={globalStyles.profileContainer}>
              <Text style={globalStyles.title}>Perfil</Text>
              <Text style={globalStyles.profileText}>Nome: {clientProfile.name}</Text>
              <Text style={globalStyles.profileText}>Email: {clientProfile.email}</Text>
              <Button title="Editar Perfil" onPress={handleEditProfile} />
            </View>
          )}

          <Text style={globalStyles.title}>Produtos Disponíveis</Text>
          <FlatList
            data={products}
            renderItem={({ item }) => (
              <View style={globalStyles.productItem}>
                <Text style={globalStyles.productName}>{item.name}</Text>
                <Text style={globalStyles.price}>Preço: ${item.price.toFixed(2)}</Text>
                <Button title="Inscrever-se" onPress={() => handleSubscribe(item.id)} />
              </View>
            )}
            keyExtractor={(item) => item.id.toString()}
          />
        </>
      )}
    </View>
  );
};

export default DashboardScreen;
