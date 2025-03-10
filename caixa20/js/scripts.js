function login(event) {
    event.preventDefault(); // Evita recarregar a página

    // Obtendo os valores do formulário
    let email = document.getElementById("email").value;
    let senha = document.getElementById("senha").value;

    // Simulação de login (substituir por uma requisição ao back-end)
    if (email === "kleiton@gmail.com" && senha === "1234") {
        window.location.href = "caixa.html"; // Redireciona para a página principal
    } else {
        document.getElementById("mensagem").innerText = "E-mail ou senha incorretos!";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    fetch("get_produtos.php") // Busca os produtos do banco
        .then(response => response.json())
        .then(data => {
            const selectProduto = document.querySelector("select"); // Pega o dropdown de produtos
            const tabelaEstoque = document.querySelector("#tabela-estoque tbody"); // Pega a tabela de estoque
            
            tabelaEstoque.innerHTML = ""; // Limpa a tabela antes de adicionar os produtos

            data.forEach(produto => {
                // Adiciona produto ao dropdown
                let option = document.createElement("option");
                option.value = produto.id;
                option.textContent = produto.name;
                selectProduto.appendChild(option);

                // Adiciona produto à tabela de estoque
                let row = `<tr>
                    <td>${produto.name}</td>
                    <td>${produto.quantidade}</td>
                    <td>R$ ${produto.preco}</td>
                </tr>`;
                tabelaEstoque.innerHTML += row;
            });
        })
        .catch(error => console.error("Erro ao carregar produtos:", error));
});



