<!DOCTYPE html>
<html lang="en">
<body>
	<form action="#" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				Hobi : <br/>
				<input type="checkbox" name="hobi[]" value="berenang">Berenang<br/>
				<input type="checkbox" name="hobi[]" value="hiking">Hiking<br/>
				<input type="checkbox" name="hobi[]" value="diving">Diving<br/>
				<input type="checkbox" name="hobi[]" value="mancing">Mancing<br/>
				<input type="checkbox" name="hobi[]" value="nonton film">Nonton Film<br/><br/>
				<input type="reset" name="delete" value="Delete Hobi"><br/><br/>
			</tr>
			<tr>
			    Select image to upload:<br/>
			    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
			    <input type="submit" value="Upload Image" name="submit"><br/><br/>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="kirim"/></td>
			</tr>	
		</table>
	</form>
	<hr/>
</body>
</html>

<br/>
<?php 
if (isset($_POST ['kirim'])) {
	$data=$_POST["hobi"];
	foreach ($data as $nilai) {
		echo "Hobi Yang di pilih = ".$nilai."<br/>";
	}
}
?>
