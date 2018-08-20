<h2>KATEGORI BARANG</h2>
<?php
echo anchor('kategori/post','<h3>Tambah Data</h3>')
?>
<table border="1">
	<tr><th>No</th><th>Nama Kategori</th><th colspan="2">operasi</th></tr>
	<?php
	$no=1;
	foreach ($record->result() as $r)
	{
		echo "<tr>
			<td>$no</td>
			<td>$r->nama_kategori</td>
			<td>".anchor('kategori/edit'.$r->kategori_id,'Edit')."</td>
			<td>".anchor('kategori/delete'.$r->kategori_id, 'Delete')."</td>
			</tr>";
		$no++;
	}
	?>
</table>