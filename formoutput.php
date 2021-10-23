<!DOCTYPE html>
<html>
<head>
	<title>Form Output data sepatu</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					data dan harga sepatu
				</th>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>:</th>
				<td>
					<?= $nama ?>
				</td>
			</tr>
			<tr>
				<th>No.HP</th>
				<th>:</th>
				<td>
					<?= $nomer ?>
				</td>
			</tr>
			<tr>
				<th>Merk</th>
				<th>:</th>
				<td>
					<?= $merk ?>
				</td>
			</tr>
			<tr>
				<th>Ukuran</th>
				<th>:</th>
				<td>
					<?= $ukuran ?>
				</td>
			</tr>
			<tr>
				<th>harga</th>
				<th>:</th>
				<td>
					Rp.<?= $harga ?>
				</td>
			</tr>
			<tr>
			<td colspan="3" align="center">
				<a href="<?=base_url ('tokoSepatu'); ?>">Kembali form input sepatu</a>
			</td>
		</tr>
		</table>
	</center>

</body>
</html>