<?php

$ip = gethostbyname($_SERVER["REMOTE_ADDR"]);
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_URL, 'http://check.getipintel.net/check.php?ip='.$ip.'&contact=AdresseEmail@VotreDomaine.com');
 $result = curl_exec($ch);
 curl_close($ch);

if($result == '0'){
 echo "IP r�sidentielle / non classifi�e (c'est-�-dire Safe IP)";
}
else if($result == '1'){
 echo "D�tection d'un VPN ou PROXY ou VPS ou Serveur d�di� ou h�bergeur hosting...";
}
else {
 echo "Connexion inconnue";
}
?>