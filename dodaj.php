<!-- sterylizuje i dodaje wiadomości -->
<?php
require_once("connection.php");
$wiadomosc = $_POST['wiadomosc'];
$data = date("H:i j.m.Y");
$zdjecie = $_POST['wiadomosc'];
$nazwa= $_POST['nazwa'];
$zdjeciep= $_POST['zdjecie'];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['HTTP_USER_AGENT'];


// sprawdzenie długośći nazwy
if ((strlen($nazwa)<3) || (strlen($nazwa)>20)) 
  {
     echo ' <script type="text/javascript">
$(document).ready(function(){
alert('."'Nazwa musi posiadać od 3 do 20 znaków!'".')
});
     </script>';
     exit();
  }
// domyślne zdjęcie
  if ($zdjeciep=="") {
    $zdjecie="img/av.png";
  }else{
   $zdjeciee = explode('://', $zdjeciep);
   if($zdjeciee[0]!='http')
$zdjecie = 'https://'.$zdjeciep;
else{$zdjecie = 'https://'.$zdjeciee[1];}
  }
 
 // długość wiadomości
 if (strlen($wiadomosc)>225) 
  {
     echo ' <script type="text/javascript">
$(document).ready(function(){
alert('."'Za długa wiadomość! Max 225 znaków!'".')
});
     </script>';
     exit();
  }
// blokowanie pustych wiadomości
  if ($wiadomosc==""||$wiadomosc==" ") {
    echo ' <script type="text/javascript">
$(document).ready(function(){
alert('."'Pusta wiadomość!'".')
});
     </script>';
    exit();
  }

if($nazwa=="Zbysiu"||$nazwa=="zbysiu"){
  $zdjecie="https://i2.wp.com/brzeg24.pl/wp-content/uploads/2015/06/Zbigniew-Stonoga-e1434539892479.jpg?fit=800%2C801";
}
if($nazwa=="Pierdolec"||$nazwa=="pierdolec"){
  $zdjecie="https://a.wattpad.com/useravatar/DoYouNowDaWae.256.39712.jpg";
}
// czyszczenie wiadomosci
$wiadomosc = htmlentities($wiadomosc,ENT_QUOTES, "UTF-8");
$nazwa = htmlentities($nazwa,ENT_QUOTES, "UTF-8");
$zdjecie = htmlentities($zdjecie,ENT_QUOTES, "UTF-8");
mysqli_real_escape_string($db,$nazwa);
mysqli_real_escape_string($db,$zdjecie);
mysqli_real_escape_string($db,$wiadomosc);


//dodawanie do tabeli
if($db){
mysqli_select_db($db, 'czat') or die('błąd bazy');}
mysqli_query($db,"INSERT INTO czat VALUES (NULL, '$wiadomosc' ,'$data','$nazwa','$zdjecie','$user','$ip' )");


$sql = "SELECT * FROM czat";
//wyciąganie z tabeli
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy');}
 $w = mysqli_query($db,$sql);
	while($r= mysqli_fetch_array($w)){
echo 
 '<div id="dymek">
      <div class="media">
          <a class="pull-left" href="#">
          <img id="av" class="media-object" src="'.$r['zdjecie'].'" alt="...">
          </a>
      <div class="media-body">
      <h4 class="media-heading">'.$r['nazwa'].'</h4>
      <h6 class="data">'. $r['data'] . '</h6>'
     . $r['wiadomosc'] .
     '</div>
</div>
</div>
<br>'
           
 ;}


?>



