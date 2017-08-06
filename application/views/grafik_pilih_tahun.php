<?php 
echo "<div class='container' style='background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2); padding: 30px;'>";
	echo "<form method='POST' action='".base_url()."index.php/menu/proses_grafik'>
			<input size='1' type='text' class='form-control' name='tahun'>
			<br>
			<br>
			<input type='submit' class='btn btn-info' value='Search'>
		</form>	";
echo "</div>";
?>