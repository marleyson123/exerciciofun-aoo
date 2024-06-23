<?php
$dados = array(
array("nome"=> "joao", "salario"=>500, "numfilhos" => 3),
array("nome"=> "fernando", "salario"=>1000, "numfilhos" => 1),
array("nome"=> "maria", "salario"=>450, "numfilhos" => 2),
array("nome"=> "natan", "salario"=>600, "numfilhos" => 4),
);

foreach($dados as $d){
    echo"\nNome: ".$d['nome']. "salario:".$d['salario']. "numfilhos:" ['numfilhos'];
}
 
$totalSalario = 0;
$totalFilhos = 0;
$maiorSalario = 0;
$numPessoasAte350 = 0;

foreach ($dados as $d) {
    $totalSalario += $d['salario'];
    $totalFilhos += $d['numfilhos'];
    if ($d['salario'] > $maiorSalario) {
        $maiorSalario = $d['salario'];
    }
    if ($d['salario'] <= 350) {
        $numPessoasAte350++;
    }
}

$mediaSalario = $totalSalario / count($dados);
$mediaFilhos = $totalFilhos / count($dados);
$percentualAte350 = ($numPessoasAte350 / count($dados)) * 100;

echo "Média de salário: R$" . number_format($mediaSalario, 2, ',', '.') . "\n";
echo "Média de filhos: " . number_format($mediaFilhos, 2, ',', '.') . "\n";
echo "Maior salário: R$" . number_format($maiorSalario, 2, ',', '.') . "\n";
echo "Percentual de pessoas com salário até R$350,00: " . number_format($percentualAte350, 2, ',', '.') . "%\n";
?>