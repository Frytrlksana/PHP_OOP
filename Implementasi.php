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
		/* Style untuk tampilan produk */
		.product-container {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
		}

		.product-name {
			font-weight: bold;
			font-size: 1.2em;
			margin-bottom: 10px;
		}

		.product-price {
			font-weight: bold;
			font-size: 1.2em;
			margin-bottom: 10px;
		}

		.product-discount {
			margin-top: 10px;
		}

		/* Style untuk tampilan CDMusic */
		.cd-music-container {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
		}

		.cd-music-title {
			font-weight: bold;
			font-size: 1.2em;
			margin-bottom: 10px;
		}

		.cd-music-artist {
			margin-bottom: 5px;
		}

		.cd-music-genre {
			margin-bottom: 5px;
		}

		.cd-music-discount {
			margin-top: 10px;
		}

		.cd-music-price {
			font-weight: bold;
			font-size: 1.2em;
			margin-top: 10px;
		}

		/* Style untuk tampilan CDRack */
		.cd-rack-container {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
		}

		.cd-rack-title {
			font-weight: bold;
			font-size: 1.2em;
			margin-bottom: 10px;
		}

		.cd-rack-capacity {
			margin-bottom: 5px;
		}

		.cd-rack-model {
			margin-bottom: 5px;
		}

		.cd-rack-price {
			font-weight: bold;
			font-size: 1.2em;
			margin-top: 10px;
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