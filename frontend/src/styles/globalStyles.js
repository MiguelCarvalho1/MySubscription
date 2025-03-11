import { StyleSheet } from 'react-native';
import { colors } from './colors'; // As cores personalizadas devem ser definidas no arquivo colors.js

export const globalStyles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: colors.background, // Fundo suave
    padding: 16,
  },
  input: {
    height: 45,
    borderColor: colors.border,
    borderWidth: 1,
    borderRadius: 8, // Bordas arredondadas
    paddingHorizontal: 12,
    marginBottom: 20, // Maior espaçamento
    backgroundColor: colors.white,
    fontSize: 16, // Fonte maior para inputs
  },
  button: {
    backgroundColor: colors.primary, // Cor principal do botão
    paddingVertical: 12, // Padding maior para botões mais largos
    paddingHorizontal: 30,
    borderRadius: 25, // Bordas arredondadas para o botão
    alignItems: 'center',
    marginBottom: 20,
    elevation: 3, // Sombra leve para o botão
  },
  buttonText: {
    color: colors.white,
    fontSize: 18, // Tamanho de fonte aumentado
    fontWeight: 'bold',
  },
  card: {
    backgroundColor: colors.white,
    padding: 20,
    borderRadius: 12, // Bordas mais suaves
    marginBottom: 20,
    shadowColor: colors.black,
    shadowOffset: { width: 0, height: 4 },
    shadowOpacity: 0.2,
    shadowRadius: 8,
    elevation: 4, // Efeito de sombra mais pronunciado
  },
  title: {
    fontSize: 28, // Título maior para maior destaque
    fontWeight: 'bold',
    marginBottom: 16,
    color: colors.black,
  },
  text: {
    fontSize: 16, // Fonte maior e mais legível
    color: colors.darkGray,
    lineHeight: 24, // Melhora a legibilidade
  },
  errorText: {
    color: colors.error, // Cor de erro consistente
    fontSize: 16,
    marginTop: 10,
    textAlign: 'center', // Alinhamento centralizado
  },
  description: {
    fontSize: 18,
    color: colors.darkGray,
    marginVertical: 12,
    textAlign: 'justify',
    lineHeight: 28, // Espaçamento de linha maior
  },
  price: {
    fontSize: 20,
    fontWeight: 'bold',
    color: colors.primary, // Cor mais viva para o preço
    marginVertical: 10,
  },
  profileContainer: {
    marginBottom: 20,
    width: '100%',
    padding: 20,
    borderColor: colors.gray,
    borderWidth: 1,
    borderRadius: 10,
    backgroundColor: colors.white,
  },
  profileText: {
    fontSize: 18, // Maior tamanho para o texto do perfil
    color: colors.darkGray,
  },
  productItem: {
    marginBottom: 20,
    padding: 20,
    borderColor: colors.gray,
    borderWidth: 1,
    borderRadius: 10,
    backgroundColor: colors.white,
    width: '100%',
    elevation: 3, // Efeito de sombra para os produtos
  },
  productName: {
    fontSize: 20,
    fontWeight: 'bold',
    color: colors.black,
  },
  loading: {
    fontSize: 18,
    fontWeight: 'bold',
    color: colors.primary,
    marginTop: 20,
  },
});

