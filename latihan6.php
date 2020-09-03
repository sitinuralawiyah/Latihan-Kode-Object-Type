<?php
							//latihan kode object type//
class produk{
	public $namabarang,
			$ukuran,
			$harga;

	public function getCetak(){
		return "$this->namabarang, $this->ukuran, (Rp $this->harga)";
	}

	public function __construct($namabarang="nama barang", $ukuran="ukuran", $harga=0){
		$this->namabarang = $namabarang;
		$this->ukuran = $ukuran;
		$this->harga = $harga;
	}
}

class cetakInfoProduk{
	public function cetakInfo(produk $produk){
		$str = "{$produk->getCetak()}";
		return $str;
	}
}

$produk1 = new produk("Frame Scrabok","13x15",20000);
$produk2 = new produk("Bucket Bunga mini","20cm",5000);
$produk3 = new produk("Frame Scrabok","20x20",30000);
$produk4 = new produk("20 Foto polaroid","3R",15000);
$infoProduk = new cetakInfoProduk();

echo "Nama Barang: " . $produk1->getCetak();
echo "<br>";
echo "Aksesoris: " . $produk2->getCetak();
echo "<br>";
echo"Nama Barang: " . $produk3->getCetak();
echo "<br>";
echo "Aksesoris: " . $produk4->getCetak();
echo "<br>";
echo "<br>";
echo $infoProduk->cetakInfo($produk3);
