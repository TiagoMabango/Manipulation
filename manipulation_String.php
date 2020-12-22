<!-- 

    Data_15/12/2020
    We are PHP
    Dev Tiago Mabango

    LinkDin Tiago Mabango
    Facebook Tiago Mabango
    Intagram @tiagomabango
-->

<?php


echo "<p style='color:green; font-size:20px;'>" ." Usando <span style='color:#088'> Strings e Multibytes </span>" ."</p>";

 $string = "We are PHP é muito fixe!";

 // Ao usar strlen os acentos tbm foram contados
 // Ao usar substr começaou a contar aprtir do espaço
 //Ao usar o strtoupper os caracter com acento n foram substituidos

 var_dump([ 
     "string" => $string,
     "strlen" => strlen($string),
     "mb_strlen" => mb_strlen($string),
     "substr" => substr($string , "14"),
     "mb_substr" => mb_substr($string , "14"),
     "strtoupper" => strtoupper($string),
     "mb_strtoupper" => mb_strtoupper($string )
 ]);

 echo "<p style='color:green; font-size:20px;'>" ." Trabalhando com <span style='color:#088'> Conversão de caixa </span>" ."</p>";
 $mbstring = $string;
 
 var_dump([
     "mb_strtoupper" => mb_strtoupper($mbstring),
     "mb_strtolower" => mb_strtolower($mbstring),
     "mb_convert_case UPPER" => mb_convert_case($mbstring,MB_CASE_UPPER),
     "mb_convert_case LOWER" => mb_convert_case($mbstring,MB_CASE_LOWER),
     "mb_convert_case TITLE" => mb_convert_case($mbstring,MB_CASE_TITLE)
 ]);
 
 echo "<p style='color:green; font-size:20px;'>" ." Usando <span style='color:#088'> Substituições </span>" ."</p>";

 $mbReplace = $mbstring."Fui, iria novamente, e foi maravilhoso";
 
 var_dump([
     "mb_strlen" => mb_strlen($mbReplace),
     "mb_strpos" => mb_strpos($mbReplace,","),
     "mb_strrpos" => mb_strrpos($mbReplace,","),
     "mb_substr" => mb_substr($mbReplace,40+1,14),
     "mb_strstr" => mb_strstr($mbReplace,","),
     "mb_strrchr" => mb_strrchr($mbReplace,",")
 ]);
 
 
 $mbReplace = $string;
 
 
 echo "<p>",$mbReplace ,"</p>";
 echo "<p>",str_replace("PHP","We are PHP",$mbReplace) ,"</p>";
 echo "<p>",str_replace(["PHP","eu fui","último"],"We are PHP",$mbReplace) ,"</p>";
 echo "<p>",str_replace(["PHP","íncrivel"],["We are PHP","épicooo"],$mbReplace) ,"</p>";
 
 
 echo "<p style='color:green; font-size:20px;'>" ." Usando <span style='color:#088'> EndPoint</span>" ."</p>";
 
 $endPoint ="name=Tiago Mabango&eemail=tiagomabango@gmail.com";
 mb_parse_str($endPoint, $parseEnpoint);
 var_dump(
     $parseEnpoint
 );
