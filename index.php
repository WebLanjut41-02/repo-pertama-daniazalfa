 <form method="post" action="">
 	tinggi : <br><input type="text" name="tinggi"><br>
 	berat badan : <br><input type="text" name="beratbadan"><br>
 	jenis kelamin : <br><input type="radio" name="jk" value="laki laki">laki laki<br><input type="radio" name="jk" value="perempuan">perempuan<br>
<input type="submit" name="submit"> </form>

<?php
include "berat.php";
$hasil = new berat();
if (isset($_POST['submit'])) {
	$hasil->beratideal($_POST['tinggi'],$_POST['beratbadan'],$_POST['jk']);
	echo $hasil->beratideal();
}

?>
