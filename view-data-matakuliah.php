<html>
<head>
	<title>form matakuliah</title>
</head>
<body>
    <center>
	<?php echo validation_errors(); ?>
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
					<?= $kode;?>
				</td>
			</tr>
						<tr>
				<th>nama MTK</th>
				<th>:</th>
				<td>
                <?= $nama; ?>
				</td>
			</tr>
						<tr>
				<th>SKS</th>
				<th>:</th>
				<td>
                <?= $sks; ?>
				</td>
                <td colspan="3" align="center">
                <a herf= "<?= base_url('Matakuliah'); ?>">kembali</a>
            </td>
			</tr>
		</table>
</form>
</center>
</body>
</html>