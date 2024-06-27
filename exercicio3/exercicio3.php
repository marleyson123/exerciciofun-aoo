
<?php 
$dados = [
  ['salario' => 1000, 'filhos'=> 2],
  ['salario' => 3000, 'filhos'=> 1],
  ['salario' => 200, 'filhos'=> 3],
  ['salario' => 350, 'filhos'=> 5],
  ['salario' => 100, 'filhos'=> 4],
];

function estatistica($dados){
    $somaSalario = 0;
    $somaFilhos = 0;
    $totalPessoas = count($dados);
    $maiorSalario = 0;
    $salarioAte350 = 0;
    foreach($dados as $d){
        $salario = $d['salario'];
        $filhos = $d['filhos'];

        $somaSalario += $salario;
        $somaFilhos += $filhos;

        if($salario > $maiorSalario){
           $maiorSalario = $salario;
        }
        if($salario <= 350){
            $salarioAte350++;
        }

    }


$mediaSalario = $somaSalario/$totalPessoas;
$mediaFilhos = $somaFilhos/$totalPessoas;
$porcentagemSalario350 = ($salarioAte350/$totalPessoas)*100;
 echo"Media do salario da população: " .number_format($mediaSalario,2)."\n";
 echo"Maior salario: R$ " .number_format($maiorSalario,2)."\n";
 echo"Media numero de filhos: " .number_format($mediaSalario)."\n";
 echo"Porcentagem de pessoas com salario ate 350: " .number_format($porcentagemSalario350,2)."\n";
}

 estatistica($dados);
