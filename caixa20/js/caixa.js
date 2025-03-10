// Função para validar o login e redirecionar para caixa.html
function login(event) {
    event.preventDefault(); // Impede o envio do formulário

    let email = document.getElementById("email").value;
    let senha = document.getElementById("senha").value;

    // Simulação de um usuário válido
    if (email === "admin@caixa.com" && senha === "1234") {
        window.location.href = "caixa.html"; // Redireciona para a página do caixa
    } else {
        document.getElementById("mensagem").textContent = "Usuário ou senha incorretos!";
    }
}
