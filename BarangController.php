
    	// $barang = DB::table('tb_barang')->insert([
    	// 	[
    	// 		'id_barang'		=> 'B-03',
    	// 		'nama_barang'	=> 'Komputer',
    	// 		'stok_barang'	=> '3',
    	// 		'harga_barang'	=> '3000000',
    	// 		'tanggal_tambah'	=> $tgl,
    	// 		'tanggal_ubah'		=> $tgl
    	// 	]
    	// ]);

    	// MENGUBAH DATA
    	$tanggal = date('Y-m-d H:i:s');
    	$barang = DB::table('tb_barang')->where('id_barang', 'B-03')->update(
    		[
    			'nama_barang'	=> 'Laptop',
    			'tangal_ubah'		=> $tanggal
    		]
    	);

    	// MENGHAPUS DATA
    	$barang = DB::table('tb_barang')->where('id_barang', 'B-03')->delete();

    	// MENAMPILKAN DATA
    	$barang = DB::table('tb_barang')->get();

    	return view('penjualan/barang', compact('barang'));
    }
}
