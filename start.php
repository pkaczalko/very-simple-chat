<!-- pierwsze odświeżenie strony -->
<?php
require_once("connection.php");
 $sql = "SELECT * FROM czat";
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy start');
  }
  
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
echo '<script type="text/javascript">'.
  "$('[id=".'"czat"]'."').scrollTop($('[id=".'"czat"]'."')[0].scrollHeight);
 </script>";
?>