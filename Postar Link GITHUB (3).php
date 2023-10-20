<?php

$fighters = array(
    array(
        "name" => "Roger Gracie",
        "description" => "Amplamente considerado um dos maiores praticantes de BJJ de todos os tempos, Roger Gracie possui vários títulos mundiais em diferentes categorias de peso. Sua habilidade técnica e dominação nas competições solidificaram seu status como uma lenda do BJJ."
    ),
    array(
        "name" => "Marcus Almeida 'Buchecha'",
        "description" => "Com múltiplos títulos mundiais e um estilo dinâmico que combina tanto atletismo explosivo quanto finesse técnica, Buchecha é uma força a ser reconhecida no mundo do BJJ. Ele é conhecido por sua adaptabilidade e versatilidade nos tatames."
    ),
    array(
        "name" => "Rafael Mendes",
        "description" => "Um fenômeno dos pesos-penas, Rafael Mendes possui um impressionante histórico de Campeonatos Mundiais e é conhecido por suas técnicas inovadoras. Ele é considerado um dos melhores nas categorias de peso mais leves e tem um impacto substancial na evolução do esporte."
    ),
    array(
        "name" => "Fábio Gurgel",
        "description" => "Veterano do esporte, Fábio Gurgel não é apenas um competidor altamente talentoso, mas também um treinador renomado. Ele é uma figura fundamental na formação de vários campeões mundiais de BJJ e contribuiu significativamente para o desenvolvimento da arte."
    ),
    array(
        "name" => "Marcelo Garcia",
        "description" => "Marcelo Garcia é celebrado por suas habilidades técnicas excepcionais e domínio dos princípios fundamentais do BJJ. Ele é um múltiplo campeão mundial e é conhecido por suas estratégias inovadoras e abordagens criativas para o esporte."
    )
);

echo '<h1>Top 5 Lutadores de Brazilian Jiu-Jitsu do Brasil</h1>';
echo '<ol>';
foreach ($fighters as $fighter) {
    echo '<li><strong>' . $fighter["name"] . ':</strong> ' . $fighter["description"] . '</li>';
}
echo '</ol>';
?>
