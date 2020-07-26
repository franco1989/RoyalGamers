<?php
$services = array();
$timeout = "0.5";

$services[] = array("port" => "25565","service" => "KitPvp", "ip" => "");
$services[] = array("port" => "25565","service" => "Creativa", "ip" => "");
$services[] = array("port" => "25565","service" => "RolePlay", "ip" => "");
$services[] = array("port" => "25565","service" => "Faction", "ip" => "");
$services[] = array("port" => "25565","service" => "Eventi", "ip" => "");

$data = "<from>";

foreach ($services  as $service) {
  if($service['ip']==""){
     $service['ip'] = "localhost";
  }

  $data .="<div></div>".$service['service'];
  $spento = "<div class='spento'>Spento</div>";
  $accesso = "<div class='accesso'>Acceso</div>";

  /*.$service['ip'] .$service['port']*/

  $fp = @fsockopen($service['ip'], $service['port'], $errno, $errstr, $timeout);
  if (!$fp) {
    $data .= $spento;
  } else {
    $data .= $accesso;
    fclose($fp);
  }
}  

echo($data);
$data .= "</from>";
?>
