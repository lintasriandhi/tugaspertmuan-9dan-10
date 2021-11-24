<html>
<head>
	<title>form matakuliah</title>
</head>
<body>
    <center>
	<?php echo validation_errors(); ?>
	<form action="<?=  base_url('Matakuliah/cetak'); ?>" method= "post">
		<table>
			<tr>
				<th colspan="3">
					form input data matakuliah
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>kode MTK</th>
				<th>:</th>
				<td>
					<input type="text" name="kode" id="kode" >
				</td>
			</tr>
						<tr>
				<th>nama MTK</th>
				<th>:</th>
				<td>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>
						<tr>
				<th>SKS</th>
				<th>:</th>
				<td>
					<select name="sks" id="sks">
                        <option value="">pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select> 
				</td>
                <td colspan="3" align= "center">
                <input type="submit" value="submit">
            </td>
			</tr>
		</table>
</form>
</center>
</body>
</html>