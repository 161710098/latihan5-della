<?php 
echo '<center>';
	require_once 'tugas.php';

	$identitas1 = new identitas ('Beat', 'hitam', 'Rp.1500000000', 'Honda');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "Warna = ".$identitas1->get_warna().'<br>';
	echo "harga = ".$identitas1->get_harga().'<br>';
	echo "tipe = ".$identitas1->get_tipe().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
