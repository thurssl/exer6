<?php
$valorHora = $_GET['vh'];
$mesHora = $_GET['hm'];
$salBruto = $mesHora * $valorHora;
$inss = 0;
    
    if ($salBruto < 1212.00) {
        $inss = ($salBruto * 0.075);

    } else if ($salBruto >= 1212.01 && $salBruto <= 2427.35) {
        $inss = ($salBruto * 0.09);

    } else if ($salBruto >= 2457.36 && $salBruto <= 3641.03) {
        $inss = ($salBruto * 0.12);

    } else {
        $inss = ($salBruto * 0.14);
    }

    $salLiquido = $salBruto - $inss;

    echo "Salário Bruto: $salBruto <br><br>
          Desconto INSS: $inss <br><br>
          Salário Líquido: $salLiquido "



?>