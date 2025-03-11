import axios from 'axios';

// Cria uma instância do Axios com a URL base relativa
const api = axios.create({
    baseURL: '/', // O proxy redirecionará para o backend
    headers: {
        'Content-Type': 'application/json', // Define o tipo de conteúdo como JSON
    },
});

export default api;