<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

    <?php
    /*

Conta telefônica - Uma conta telefônica é composta dos seguintes custos:

Assinatura:		R$ 12,90
Impulsos:		R$ 0,04 por impulso que exceder a 90 interurbanos
chamadas p/ celular: 	R$0,20 por impulso

Sabendo que Maria Lúcia ligou 247 vezes no mês, sendo 120 interurbanos e
37 ligações para celular, qual o valor total da conta?

    */



    // Variaveis

    $valor_assinatura = 12.90;
    $valor_impulso_extra = 0.04;
    $valor_impulso_celular = 0.20;
    $total_ligacoes_interurbanos = 120;
    $total_ligacoes_celular = 37;
    $interurbanos_sem_cobrar = 90;

// Outra forma de resolver:
//    $valor_interurbano = (($total_ligacoes_interurbanos - $interurbanos_sem_cobrar) * $valor_impulso_extra);
//    $valor_celular = ($valor_impulso_celular * $total_ligacoes_celular);
//
//    $valor_total = $valor_assinatura + $valor_interurbano + $valor_celular;

    // Formula

 echo "O valor total da conta de telefone é: R$ " .
 ($valor_assinatura + (($total_ligacoes_interurbanos - $interurbanos_sem_cobrar) *
 $valor_impulso_extra) + ($total_ligacoes_celular * $valor_impulso_celular));


//  Outra forma de resolver:
//    echo "O valor total da conta de telefone é: R$ $valor_total";


    ?>


</body>
</html>
