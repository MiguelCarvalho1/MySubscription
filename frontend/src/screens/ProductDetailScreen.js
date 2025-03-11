import React, { useState, useEffect } from 'react';
import { View, Text, ActivityIndicator, Button } from 'react-native';
import { globalStyles } from '../styles/globalStyles';
import api from '../services/api';

const ProductDetailsScreen = ({ route }) => {
  const { productId } = route.params;
  const [product, setProduct] = useState(null);
  const [errorMessage, setErrorMessage] = useState('');
  const [loading, setLoading] = useState(true);

  // Função para buscar detalhes do produto
  const fetchProductDetails = async () => {
    setLoading(true);
    setErrorMessage('');

    try {
      // Faz requisição para buscar os detalhes do produto com base no productId
      const response = await api.get(`products/${productId}`);
      setProduct(response.data);
    } catch (error) {
      // Define mensagem de erro conforme o status da resposta
      setErrorMessage(
        error.response?.status === 404
          ? 'Produto não encontrado'
          : 'Erro ao buscar detalhes do produto'
      );
    } finally {
      // Finaliza o estado de carregamento
      setLoading(false);
    }
  };

  // Hook useEffect para buscar detalhes do produto ao montar o componente
  useEffect(() => {
    fetchProductDetails();
  }, [productId]);

  if (loading) {
    return (
      <View style={globalStyles.container}>
        {/* Exibe indicador de carregamento enquanto os dados estão sendo buscados */}
        <ActivityIndicator size="large" color="#0000ff" />
      </View>
    );
  }

  if (!product) {
    return (
      <View style={globalStyles.container}>
        {/* Exibe mensagem de erro e botão para tentar novamente se o produto não for encontrado */}
        <Text style={globalStyles.error}>{errorMessage}</Text>
        <Button title="Tentar novamente" onPress={fetchProductDetails} />
      </View>
    );
  }

  return (
    <View style={globalStyles.container}>
      {/* Exibe os detalhes do produto */}
      <Text style={globalStyles.title}>{product.name}</Text>
      <Text style={globalStyles.description}>{product.description}</Text>
      <Text style={globalStyles.price}>Preço: ${product.price.toFixed(2)}</Text>
    </View>
  );
};

export default ProductDetailsScreen;
