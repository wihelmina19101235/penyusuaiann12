<h3>DATA BARANG</h3>


<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama Barang</th>
		<th>Stok</th>
		<th>Harga</th>
		<th>Tgl Tambah</th>
		<th>Tgl Ubah</th>
	</tr>
	@foreach($barang as $a => $tampilkan)
		<tr>
			<td>{{ $tampilkan->id_barang }}</td>
			<td>{{ $tampilkan->nama_barang }}</td>
			<td>{{ $tampilkan->stok_barang }}</td>
			<td>Rp. {{ number_format($tampilkan->harga_barang) }}</td>
			<td>{{ $tampilkan->tanggal_tambah }}</td>
			<td>{{ $tampilkan->tanggal_ubah }}</td>
		</tr>
		<input type="hidden"name="_method"value="insert">
				<input type="submit"value="delete">
	@endforeach
</table>
	<a href="/barang/create">tambah</a>