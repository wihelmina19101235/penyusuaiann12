<h3>FORM TAMBAH DATA</h3>

<a href="/barang">KEMBALI</a>

<form method="POST" action="{{ route('barang.store') }}">
	{{ csrf_field() }}
	<table>
		<tr>
			<th>ID</th>
			<td>
				<input type="text" name="id_barang">
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<td>
				<input type="text" name="nama_barang">
			</td>
		</tr>
		<tr>
			<th>Stok</th>
			<td>
				<input type="number" name="stok_barang">
			</td>
		</tr>
		<tr>
			<th>Harga</th>
			<td>
				<input type="number" name="harga_barang">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<button type="submit">SIMPAN</button>
			</td>
		</tr>
	</table>
</form>