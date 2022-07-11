function carregarDadosEdicao(id, cadastro){
    if(cadastro=="cliente"){

        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoCliente.php", //pagina php que recebe o id e retorna todos os campos
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
        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoPet.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#nomeEdt").val(dados.nome); //nomes conforme o banco de dados
                 $("#racaEdt").val(dados.raca);
                 $("#dataNascEdt").val(dados.dataNasc);
                 $("#nomeClienteEdt").val(dados.clientes_id);
            }
        });
    }  else if(cadastro=="funcionario"){
        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoFuncionario.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#nomeFuncionarioEdt").val(dados.nomeComp); //nomes conforme o banco de dados
                 $("#cpfFuncionarioEdt").val(dados.cpf);
                 $("#telefoneFuncionarioEdt").val(dados.telefone);
            }
        });
    } else if (cadastro=="servico") {
        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoServico.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#dataEdt").val(dados.data); //nomes conforme o banco de dados
                 $("#horarioInicioEdt").val(dados.horarioInicio);
                 $("#horarioFinalEdt").val(dados.horarioFinal);
                 $("#funcionarioEdt").val(dados.funcionarios_id);
                 $("#servicoEdt").val(dados.servicos_id);
            }
        });
    } else if (cadastro=="multa") {
        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoMulta.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#multaEdt").val(dados.valor); //nomes conforme o banco de dados
            }
        });
    } else if (cadastro=="modalidade") {
        $.ajax({
            url: "../php/retornos/retornaDadosEdicaoModalidade.php", //pagina php que recebe o id e retorna todos os campos
            data: {id:id}, //dado que é enviado no onchange do select 
            type:"post", //equivalente ao method
            success: function(dados){
                dados=JSON.parse(dados);
                console.log(dados.cpf); 
                //é preciso dar ids específicos no formulário de edição
                 $("#descricaoServicoEdt").val(dados.descricao); //nomes conforme o banco de dados
                 $("#valorServicoEdt").val(dados.valor);  
            }
        });
    }
}