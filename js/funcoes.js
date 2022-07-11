function carregarDadosEdicao(id, cadastro){
    if(cadastro=="cliente"){

        $.ajax({
            url: "retornaDadosEdicaoCliente.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#nomeCompletoEdt").val(dados.nomeCompleto); //nomes conforme o banco de dados
                 $("#cpfEdt").val(dados.cpf);
                 $("#emailEdt").val(dados.email);
                 $("#telefoneEdt").val(dados.telefone);
                 $("#cepEdt").val(dados.CEP);
                 $("#numeroEdt").val(dados.numero);
            }
        });

    }  else if(cadastro=="pet"){
        //
    }  else if(cadastro=="funcionario"){
        //
    }
}