<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->

<?php


echo "<p style='color:green; font-size:20px;'>" ." Fazendo Manipulação <span style='color:#088'> de Array </span>" ."</p>";

$index =[
"T'Leva",
"INOKri",
"TUPUCA"
];


// array_unshift Adiciona um novo índice no começo do array
array_unshift($index," ","BUCA");
$assoc =[
"company_1"=>"OIP",
"company_2"=>"Brangeh LD",
"company_3"=>"jh"
];
    
$assoc =["company_4"=>"TUPUCA", "company_5"=>"Digital Factory",] +$assoc;
// array_push Adiciona um novo índice no fim do array
array_push($index," ");
$assoc = $assoc+["company_6"=>" "];
//array_shift remove o primeiro índice
array_shift($index);
array_shift($assoc);
//array_pop remove o último índice
array_pop($index);
array_pop($assoc);
    
// array_filter remove campos vazios
$index = array_filter($index);
$assoc = array_filter($assoc);
    
var_dump(
$index,
$assoc
);
    
   
echo "<p style='color:green; font-size:20px;'>" ." Ordenação de<span style='color:#088'> Array </span>" ."</p>";

//array_reverse inverte a ordem 
$index = array_reverse($index);
$assoc = array_reverse($assoc);


//asort ordena  os eementos pelo alfaberto
asort($index);
asort($assoc);
//ksort ordena os índices 
ksort($index);


//Pesquisa sobre Outras e deia sua comtribuição ou me puxe no OFF . let´s do it

sort($index);
rsort($index);
    
    
var_dump(
$index,
$assoc
);

echo "<p style='color:green; font-size:20px;'>" ." Verificando <span style='color:#088'> Array </span>" ."</p>";   
    
var_dump(
[
array_keys($assoc),
array_values($assoc)
]
);
    
if(in_array("TUPUCA",$assoc)){
echo " This company exist  ";
}
    
$arrayToString = implode(" ,", $assoc);
echo "<p>Eu quero trabalar em {$arrayToString} e muitas  outras company</p>";
echo "<p>{$arrayToString}</p>";
    
var_dump(explode(",",$arrayToString));
    