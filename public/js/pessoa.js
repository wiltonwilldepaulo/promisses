//RETORNA UMA PROMESSA
function send(url, options) {
    return fetch(url, options);
}

async function lista() {
    try {

    } catch (error) {

    }
    const pesquisa = document.getElementById("frmpesquisa");
    const linha = document.getElementById("dados");
    const form = new FormData(pesquisa);
    const options = {
        method: 'GET',
        mode: 'cors',
        //body: form,
        cache: 'default'
    }
    //APOS TERMINAR RECEBEMOS O RETORNO DA FUNÇÃO
    const result = await send(`pessoa.php`, options);
    //APOS RECEBERMOS O RETORNO DA FUNÇÃO TENTAMOS CONVERTER PRA JSON
    const data = await result.text();
    linha.outerHTML = (data);
}
document.addEventListener("DOMContentLoaded", function (event) {
    lista();
});