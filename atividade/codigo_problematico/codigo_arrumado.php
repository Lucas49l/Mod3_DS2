
<?php
    //variaveis representando o valor que armazenam
    //função que valida os dados de desconto, valorTotal e email
    function validarDados($desconto, $valorTotal, $email){

        //if retornando erros espicificos de acordo com cada variavel
        if($desconto <= 0){
            return 'valor de desconto inferior a zero';
        }
        if($valorTotal <= 0){
            return 'valor Total inferior a zero';
        }
        //validação correta de email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'E-mail inválido';
        }
        return true;
    }

    //finção para calcular e retorna o desconto do valor total
    function calcularDesconto($desconto, $valorTotal){
        $descontoAplicado = $desconto * $valorTotal;
        $descontoAplicado = $descontoAplicado - ($descontoAplicado * 0.15);
        $descontoAplicado = $descontoAplicado * 1.12;

        return $descontoAplicado;
    }

    //Função principal por receber os parametros e chamar as funções auxiliares e retornar mensagem: 
    function descontoAplicado($desconto, $valorTotal, $email){
        $dados = validarDados($desconto, $valorTotal, $email);
        if($dados !== true){
            echo $dados;
            return;
        }
        $valorAplicado = calcularDesconto($desconto, $valorTotal);
        
        echo "Enviando email para: $email<br>";
        echo "Salvando no banco: $valorAplicado<br>";
        echo "RECIBO - valvor: $valorAplicado | Email: $email";
    }

    descontoAplicado(2, 5, 'ana@email.com');
?>