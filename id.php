<!-- id dla html -->
<?php
require_once("connection.php");
 $sql = "SELECT id FROM czat ORDER BY id DESC LIMIT 1";
if($db){
 mysqli_select_db($db, 'czat') or die('błąd bazy');}
 $w = mysqli_query($db,$sql);
while($r= mysqli_fetch_array($w)){
$id=$r['id'];
;}
 echo '<input type="text" class="form-control" style="display: none;" id="id" value="'.$id.'">';

?>