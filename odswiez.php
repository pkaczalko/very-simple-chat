<!-- odświeżanie czatu -->
<?php
require_once("connection.php");

$ids = $_POST['id']; //id początkowe

 $sql = "SELECT id FROM czat ORDER BY id DESC LIMIT 1";
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy');}
 $w = mysqli_query($db,$sql);
while($r= mysqli_fetch_array($w)){
$id=$r['id'];
;}//id najnowsze
if ($ids<$id) {
	
	$sql = "SELECT * FROM czat";
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy');}
 $w = mysqli_query($db,$sql);
  while($r= mysqli_fetch_array($w)){
echo 
 '<div id="dymek">
      <div class="media">
      <a class="pull-left">
          <img id="av" class="pull-left media-object" src="'.$r['zdjecie'].'" alt="...">
          </a>
      <div class="media-body">
      <h4 class="media-heading">'.$r['nazwa'].'</h4>
      <h6 class="data">'. $r['data'] . '</h6>'
     . $r['wiadomosc'] .
     '</div>
</div>
</div>
<br>';
if ((($r['nazwa']=="pierdolec")||($r['nazwa']=="Pierdolec"))&&(($r['wiadomosc']=="ściernisko")||($r['wiadomosc']=="Ściernisko"))&&($r['id']==$ids)) {
  echo '<script type="text/javascript">var snd = new Audio("audio/sciernisko.mp3"); snd.autoplay = true; console.log("audio");</script>';
}
if ((($r['nazwa']=="pierdolec")||($r['nazwa']=="Pierdolec"))&&(($r['wiadomosc']=="Pole")||($r['wiadomosc']=="pole"))&&($r['id']==$ids)) {
  echo '<script type="text/javascript">var snd = new Audio("audio/pole.mp3"); snd.autoplay = true; console.log("audio");</script>';
}
;}
echo '<script type="text/javascript">'.
  "$('[id=".'"czat"]'."').scrollTop($('[id=".'"czat"]'."')[0].scrollHeight);
 </script>";

echo '<script type="text/javascript">var snd = new Audio("audio/nowa.mp3"); snd.autoplay = true; console.log("audio");</script>'
;
 }
else{

	$sql = "SELECT * FROM czat";
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy');}
 $w = mysqli_query($db,$sql);
  while($r= mysqli_fetch_array($w)){
echo 
 '<div id="dymek">
      <div class="media">
          <a class="pull-left">
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
 }



?>

