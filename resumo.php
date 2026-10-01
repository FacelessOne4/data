<?php
date_default_timezone_set('America/Sao_Paulo');
echo date("D/M/Y")."<br>";
echo date("H:i:s")."<br>";
echo date("D/M/Y H:i:s")."<br>";
 
echo time()."<br>";
 
$agora = time();
$seteDias = 7 * 24 * 60 * 60;
$futuro = $agora + $seteDias;
echo date ("D/M/Y",$futuro)."<br>";
 
$data = strtotime("tomorrow");
echo date("D/M/Y",$data)."<br>";
 
$data1 = strtotime("2026-10-10");
$data2 = strtotime("2026-10-10");
if($data1 < $data2){
    echo "A primeira data é menor que a segunda."
}else{
    echo "A primeira data é maior que a segunda."
}
 
$vencimento = strtotime("2026-09-20");
$hoje = time();
if($vencimento < $hoje){
    echo "Data de Validade está vencida."
}else{
    echo "Data de Validade está no prazo."
}
 
?>