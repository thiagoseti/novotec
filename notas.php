<?php
// Função para calcular a média, encontrar a menor e a maior nota
function calcularMediaEMenorEMaiorNota($notas) {
  $soma = 0;
  $menorNota = $notas[0];
  $maiorNota = $notas[0];
  foreach ($notas as $nota) {
    $soma += $nota;
    if ($nota < $menorNota) {
      $menorNota = $nota;
    }
    if ($nota > $maiorNota) {
      $maiorNota = $nota;
    }
  }
  $media = $soma / count($notas);
  return array(
    "media" => $media,
    "menorNota" => $menorNota,
    "maiorNota" => $maiorNota
  );
}
// Entrada de dados
$notas = array(
  10, 2, 5, 7
);


// Calcular a média, encontrar a menor e a maior nota
$resultado = calcularMediaEMenorEMaiorNota($notas);

// Exibir os resultados
echo "<h1>Resultados</h1>";
echo "<p>Média: " . $resultado['media'] . "</p>";
echo "<p>Menor nota: " . $resultado['menorNota'] . "</p>";
echo "<p>Maior nota: " . $resultado['maiorNota'] . "</p>";

?>