<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->

<?php


echo "<p style='color:green; font-size:20px;'>" ."Manipulando <span style='color:#088'> Objectos </span>" ."</p>";


 $arrprofile =[
    "name"=>"Tiago Mabango",
    "company" => "ot prestação de serviços",
    "mail" => "tiagomabango@gmail.com"
    ];

$objectProfile = (object)$arrprofile;

//var_dump($arrprofile,$objectProfile);

echo "<p>{$arrprofile['name']} trabalha na {$arrprofile['company']}</p>";
echo "<p>{$objectProfile->name} trabalha na {$objectProfile->company}</p>";
$ceo = $objectProfile;
unset($ceo->company);
var_dump($ceo);

$company = new StdClass();
$company->company="Ot Prestação de Serviço";
$company->ceo=$ceo;
$company->manager = new StdClass();
$company-> manager->name ="Osvaldo";
$company-> manager->mail ="wearephp@gamil.com";


var_dump($company);

echo "<p style='color:green; font-size:20px;'>" ."Pegando informações sobre o <span style='color:#088'> Objecto </span>" ."</p>";


var_dump([
    "class"=>get_class($company),
    "methods" =>get_class_methods($company)
]);