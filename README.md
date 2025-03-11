# MySubscriptionsApp


## Estrutura do Projeto

### Backend (PHP)
O backend é responsável por gerenciar as operações do banco de dados, autenticação de usuários e fornecer APIs para o frontend. A estrutura do backend é a seguinte:src/
├── config.php # Configurações do banco de dados e API
├── database.php # Conexão com o banco de dados e criação de tabelas
├── index.php # Ponto de entrada principal para as APIs
├── login.php # Lógica de autenticação de usuários
├── products.php # Gerenciamento de produtos (CRUD)
├── profile.php # Gerenciamento de perfil do usuário
├── verification.php # Envia um código de verificação por SMS para um número de telefone utilizando a API do Whapi e retorna o código gerado.
└── verifyCode.php # Compara um código de verificação fornecido com um código recebido e retorna se a verificação foi bem-sucedida ou não.




### Frontend (React Native)
O frontend é uma aplicação móvel desenvolvida em React Native que consome as APIs do backend. A estrutura do frontend é a seguinte:

src/
├── screens/
│ ├── DashboardScreen.js # Tela principal com lista de produtos e perfil do usuário
│ ├── LoginScreen.js # Tela de login
│ ├── ProductDetailsScreen.js # Tela de detalhes do produto
│ ├── ProfileScreen.js # Tela de edição de perfil
│ └── VerificationScreen.js # Tela de verificação de código SMS
├── styles/
│ └── globalStyles.js # Estilos globais para a aplicação
├── api/
│ └── api.js # Configuração do Axios para chamadas API
├── App.js # Componente principal da aplicação
└── index.js # Ponto de entrada da aplicação



## Configuração do Projeto

### Backend
1. **Banco de Dados**: 
   - Crie um banco de dados MySQL chamado `my_subscriptions`.
   - Configure as credenciais do banco de dados no arquivo `src/config.php`.

2. **Servidor Web**:
   - Coloque a pasta `src` no diretório raiz do seu servidor web (por exemplo, `htdocs` no XAMPP).
   - Certifique-se de que o servidor web está configurado para executar PHP.

3. **API Token**:
   - O token da API está definido no arquivo `src/config.php`. Certifique-se de que ele seja seguro e único.

### Frontend
1. **Dependências**:
   - Instale as dependências do projeto executando `npm install` ou `yarn install` na raiz do projeto.

2. **Configuração do Axios**:
   - No arquivo `src/api/api.js`, configure a URL base do backend. Se estiver usando um servidor local, você pode usar `http://localhost` ou configurar um proxy.

3. **Executando o Projeto**:
   - Execute o projeto com `npm start` ou `yarn start`.
   - Use um emulador ou dispositivo físico para testar a aplicação.
  
   

## Como Usar

### Backend
- **Autenticação**: O endpoint `/login` é usado para autenticar usuários. Ele verifica o email e a senha e retorna um token de autenticação.
- **Produtos**: Os endpoints `/products` permitem listar, adicionar, atualizar e excluir produtos.
- **Perfil**: O endpoint `/profile` permite que os usuários visualizem e atualizem seus perfis.
- **Verificação**: O endpoint `/verify` é usado para verificar códigos SMS enviados aos usuários.

### Frontend
- **Login**: Na tela de login, os usuários podem inserir seu email e senha para acessar o aplicativo.
- **Dashboard**: Após o login, os usuários são redirecionados para o dashboard, onde podem ver seus perfis e uma lista de produtos disponíveis para inscrição.
- **Detalhes do Produto**: Os usuários podem clicar em um produto para ver mais detalhes e se inscrever.
- **Perfil**: Os usuários podem editar suas informações de perfil, como nome, email e telefone.
- **Verificação**: Após o login, os usuários são solicitados a inserir um código de verificação enviado por SMS.

## Dependências

### Backend
- PHP 7.0 ou superior
- MySQL
- Servidor web (Apache, Nginx, etc.)

### Frontend
- React Native
- Axios para chamadas API
- React Navigation para navegação entre telas
- AsyncStorage para armazenamento local



## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
