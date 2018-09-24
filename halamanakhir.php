<?php 
session_start();
$user = $_SESSION['user'];
?>

<table width="800px" align="center" border="1">
	<th></th>
	<tr align="left">
		<th>Hobi</th>
		<th>Gambar</th>
	</tr>
	<tr valign="top">
		<td>
			<?php
				foreach ($user['hobby'] as $hobbies => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<img src="<?php echo $user["filegambar"]; ?>" alt="">
		</td>
	</tr>
</table>
<a href="formawal.html">HOME</a>
