function buscacep(){
    //variavel do campo que vou digitar o cep
    var cep = document.querySelector("input#cep").value

    //confere se o cep não ta vazio
    if(cep != ""){

        //guarda na variavel a api de endereço
        var url = `https://brasilapi.com.br/api/cep/v1/${cep}`
        
        //requisição do JS para http
        var req = new XMLHttpRequest()

        //metodo de busca valor do cep pela API
        req.open("GET", url)
        req.send()

        //tratar a resposta da requisição
        //function para quando sair do campo ele carregar os outros campos
        req.onload = function(){
            //se nao der erro na requisição que seria status 200 ele pega os valores do metodo JSON da API
            if(req.status === 200){
                var endereco = JSON.parse(req.response)

                //coloca o valor nos campos pela resposta da API
                document.querySelector("input#rua").value = endereco.street
                document.querySelector("input#bairro").value = endereco.neighborhood
                document.querySelector("input#cidade").value = endereco.city
                document.querySelector("input#estado").value = endereco.state

                //caso der erro ele imprime um alert
            }else if(req.status === 404){
                alert("CEP inválido")
                //caso dê qualquer tipo de erro sem ser 404(pagina nao encontrada) ele imprime outro alert
            }else{
                alert("Erro ao fazer a requisição")
            }
        }
    }
}

//fala para a function que ela vai rodas quando a pagina carregar e o cep estiver inteiro digitado
window.onload = function(){
    var txtcep = document.querySelector("input#cep")
    txtcep.addEventListener("blur", buscacep)
}