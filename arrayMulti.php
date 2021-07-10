<?php


$times = array(
    "Asuma" => array("Nara Shikamaru,","Yamanaka Ino", " e Akimichi Chouji"),
    "Kurenai"  => array("Hyuuga Hinata,","Aburame Shino", " e Inuzuka Kiba"),
    "Kakashi" => array("Haruno Sakura,", "Uchiha Sasuke", " e Uzumaki Naruto"),
    "Gai" => array("Hyuuga Neji,", "Rock Lee", " e Ten Ten")
);
        
echo "Os personagens do time 7 são: " . PHP_EOL;
foreach ($times['Kakashi'] as $personagem) {
    echo $personagem . PHP_EOL;
}     
echo "<hr>";

echo "Os personagens do time 8 são: " . PHP_EOL;
foreach($times['Kurenai'] as $personagem){
    echo $personagem . PHP_EOL;
}
echo "<hr>";
        
echo "Os personagens do time 9 são: " . PHP_EOL;
foreach($times['Gai'] as $personagem){
    echo $personagem . PHP_EOL;
}
echo "<hr>";
        
echo "Os personagens do time 10 são: " . PHP_EOL;
foreach($times['Asuma'] as $personagem){
    echo $personagem . PHP_EOL;
}
echo "<hr>";
       