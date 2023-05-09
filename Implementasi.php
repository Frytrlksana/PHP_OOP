<?php
require_once 'classproduct.php';
require_once 'classcdmusic.php';
require_once 'classcdrack.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Belanja Produk</title>
	<style>
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}
		.product {
			background-color: #fff;
			border: 1px solid #ddd;
			padding: 20px;
			margin-bottom: 20px;
			box-shadow: 0px 2px 2px #ccc;
			text-align: center;
		}
		.product-name {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.product-price {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.product-discount {
			font-size: 16px;
			margin-bottom: 10px;
		}
		.cdmusic, .cdrack {
			background-color: #fff;
			border: 1px solid #ddd;
			padding: 20px;
			margin-bottom: 20px;
			box-shadow: 0px 2px 2px #ccc;
		}
		.cdmusic .product-name, .cdrack .product-name {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
			text-align: center;
		}
		.cdmusic-artist {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.cdmusic-genre {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.cdmusic-discount {
			font-size: 16px;
			margin-bottom: 10px;
		}
		.cdmusic-price {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.cdmusic-notes {
			font-size: 14px;
			color: #666;
			margin-top: 10px;
		}
		.cdrack-capacity {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.cdrack-model {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.cdrack-discount {
			font-size: 16px;
			margin-bottom: 10px;
		}
		.cdrack-price {
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.cdrack-notes {
			font-size: 14px;
			color: #666;
			margin-top: 10px;
		}
		hr {
			border: none;
			height: 1px;
			background-color: #ddd;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<?php
		$beli = new product();
		$beli_cdm = new CDMusic();
		$beli_cdr = new CDRack();
		$beli->setName("CD lagu");
		$beli->setPrice(500000);
		$beli->setDiscount("Discount saat ini : 1. CDMusic = 5% <br/> 2. CDRack = 0% (Tidak ada discount)");
		echo "<div class='product'>";
		echo "<div class='product-name'>Nama Product : " . $beli->getName() . "</div>";
		echo "<div class='product-price'>Harga : Rp. " . $beli->getPrice() . ",-</div>";
		echo "<div class='product-discount'>" . $beli->getDiscount() . "</div>";
		echo "</div><hr/>";
		$beli_cdm->setArtist("One Direction");
		$beli_cdm->setGenre("Pop");
		$beli_cdm->setDiscount("5%");
		$beli_cdm->setPrice(250000);
		echo "<div class='cdmusic'>";
		echo "<div class='product-name'>---SELAMAT DATANG DI CDMUSIC---</div>";
		echo "<div class='product-name'>Nama Product : " . $beli->getName() . "</div>";
		echo "<div class='cdmusic-artist'>Artis : " . $beli_cdm->getArtist() . "</div>";
		echo "<div class='cdmusic-genre'>Genre : " . $beli_cdm->getGenre() . "</div>";
		echo "<div class='cdmusic-discount'>Selamat anda mendapatkan Discount Sebesar " . $beli_cdm->getDiscount() . "</div>";
		echo "<div class='cdmusic-price'>Total Harga : Rp." . $beli_cdm->getPrice() . ",-</div>";
		echo "<div class='cdmusic-notes'>Harga diatas sudah termasuk PPN sebesar 10% dan Discount 5%</div>";
		echo "</div><hr/>";
		$beli_cdr->setCapacity("600mb");
		$beli_cdr->setModel("Keluaran terbaru album pertama");
		$beli_cdr->setPrice(350000);
		echo "<div class='cdrack'>";
		echo "<div class='product-name'>---SELAMAT DATANG DI CDRACK---</div>";
		echo "<div class='cdrack-capacity'>Kapasitas : " . $beli_cdr->getCapacity() . "</div>";
		echo "<div class='cdrack-model'>Model : " . $beli_cdr->getModel() . "</div>";
		echo "<div class='cdrack-discount'>Mohon maaf anda tidak mendapatkan Discount</div>";
		echo "<div class='cdrack-price'>Total Harga : Rp." . $beli_cdr->getPrice() . ",-</div>";
		echo "<div class='cdrack-notes'>Harga diatas sudah termasuk PPN sebesar 15% dan tidak mendapatkan discoun";
?>
</body>
