<?php

//ESTILO

/* 
Elemento de codificação

Estilo padrão de codificação:
	Variavel camelCase
	Funções  camelCase
*/

//Código sem estilo padrão de codificação.
$NOME_CLIENTE = "Rubens";
function CALCULAR_VALOR_TOTAL($VALOR1, $VALOR2){
return $VALOR1+$VALOR2;
}

//Correção de estilo de codificação.
$nomeCliente = "Rubens";
function calcularValorTotal($valor1, $valor2){
    return $valor1+$valor2;
}

//Beneficio: Agora o código segue as convenções de estilo recomendados, tornando o código mais legivel e facil de entender.


//INDENTAÇÂO

//Use uma indentação consistente para melhorar a legibilidade do código. A maioria dos programadore PHP usa 4 espaços para cada nivel de indentação.

//Sem indentação
if($idade>=18){
echo "Maior de idade";
if($itemCarteira){
echo"Pode dirigir";
}
}

//Correção da indentação
if ($idade >= 18) {
	echo "Maior de idade";
	if ($itemCarteira) {
		echo"Pode dirigir";
	}
}

//Beneficio: A correção da indentação torna o código mais organizado e fácil de ler, facilitando a compreensão da estrutura condicional e dos blocos de código associados.


//LEGIBILIDADE

//Evite usar nomes de variaveis e funções que sejam confusos ou não descritivos

$a = 100;
$b = 0.1;
$c = $a + $b;

//Correção da legibilidade
$preco = 100;
$desconto = 0.1;
$valorFinal = $preco + $desconto;

//Beneficio: A correção da legibilidade torna o código mais claro e fácil de entender, pois os nomes das variaveis agora refletem seu propósito e significado. facilitandoa compreenção do que o código está fazendo.


//COMENTÁRIOS

//Use comentários para explicar o propósito do código, especialmente em partes complexas. Evite comentários obvios ou redundantes.


//Soma dois números
$soma = $a + $b;

//Correção dos comentários

//Calcula o valor final aplicando o desconto ao preço
$valorFinala = $preco + $desconto;

//Beneficio: A correção dos comentários torna o código mais informativo e 

?>