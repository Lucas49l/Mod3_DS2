<?php
    /*
        O código abaixo foi escrito por um desenvolvedor apressadoe contém vários problemas de 
        qualidade. Sua tarefa é:
        1° identificar e nomear pelo menos 4 code smells presentes.
        2° Explicar brevemente por que cada um é um problema
        3° Propor como cada um poderia ser corrigido
    */

    function f($a, $b, $c) {
        // Valida
        if ($a <= 0) { echo 'erro'; return; }
        if ($b <= 0) { echo 'erro'; return; }
        if ($c <= 0) { echo 'erro'; return; }

        // Calculadesconto
        $x = $a * $b;
        $x = $x  ($x * 0.15);
        $x = $x 1.12;

        // envia email E salva no banco e Imprime recibo 
        echo "Enviando email para: $c";
        echo "Salvando no banco: $x";
        echo "RECIBO - valvor: $x | Email: $c";
    }

    f(5, 10, 'ana@email.com');
?>