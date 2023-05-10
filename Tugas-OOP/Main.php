<?php 
    require_once('product.php');
    require_once('CDRack.php');
    require_once('CDMusic.php');

    $CDMusic1 = new Product("Dark Side of the Moon", 150000, 0.15);
    $CDMusic2 = new Product("Thriller", 100000, 0.1);
    $CDMusic3 = new Product("Nevermind", 200000, 0.15);
    $CDMusic4 = new Product("Back in Black", 250000, 0.2);
    
    $Rack1 = new Product("Malm", 300000, 0.15);
    $Rack2 = new Product("Billy", 150000, 0.2);
    $Rack3 = new Product("Kallax", 170000, 0.1);
    $Rack4 = new Product("Eket", 510000, 0.2);
    
    $MUSIC1 = new CDMusic($CDMusic1->getName(), $CDMusic1->getPrice(), $CDMusic1->getDiscount(), "Pink Floyd", "Rock" );
    $MUSIC2 = new CDMusic($CDMusic2->getName(), $CDMusic2->getPrice(), $CDMusic2->getDiscount(), "Michael Jackson", "Pop" );
    $MUSIC3 = new CDMusic($CDMusic3->getName(), $CDMusic3->getPrice(), $CDMusic3->getDiscount(), "Nirvana", "Grunge" );
    $MUSIC4 = new CDMusic($CDMusic4->getName(), $CDMusic4->getPrice(), $CDMusic4->getDiscount(), "AC/DC", "Rock" );
    
    $CDRack1 = new CDRack($Rack1->getName(), $Rack1->getPrice(), $Rack1->getDiscount(), "55", "Vintage" );
    $CDRack2 = new CDRack($Rack2->getName(), $Rack2->getPrice(), $Rack2->getDiscount(), "50", "Vintage" );
    $CDRack3 = new CDRack($Rack3->getName(), $Rack3->getPrice(), $Rack3->getDiscount(), "100", "Minimalist" );
    $CDRack4 = new CDRack($Rack4->getName(), $Rack4->getPrice(), $Rack4->getDiscount(), "30", "Futuristic" );

?>
<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<style>
	    body {
  font-family: 'Merriweather', serif;
}
h4 {
    background-color: #F2DEBA;
    height:50px;
    display:flex;
    padding-left:20px;
    border-radius: 5px;
    align-items: center;
  }

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
  grid-gap: 20px;
}

.grid-item {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

.grid-item:hover {
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* Beberapa pilihan warna background */
.grid-item:nth-child(odd) {
  background-color: #D8D9CF;
}
.grid-item:nth-child(even) {
  background-color: #EDEDED;
}
.grid-item:nth-child(3n) {
  background-color: #FF8787;
}
.grid-item:nth-child(4n) {
  background-color: #E26868;
}
	</style>
</head>
<body>
	<h4>LIST PRODUCT</h4>

	<div class='grid-container'>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDMusic1->getName(); ?></p>
		    <p>Harga : <?php echo $CDMusic1->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDMusic1->getDiscount() . " (15 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDMusic2->getName(); ?></p>
		    <p>Harga : <?php echo $CDMusic2->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDMusic2->getDiscount() . " (10 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDMusic3->getName(); ?></p>
		    <p>Harga : <?php echo $CDMusic3->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDMusic3->getDiscount() . " (15 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDMusic4->getName(); ?></p>
		    <p>Harga : <?php echo $CDMusic4->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDMusic4->getDiscount() . " (20 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $Rack1->getName(); ?></p>
		    <p>Harga : <?php echo $Rack1->getPrice(); ?></p>
		    <p>Diskon : <?php echo $Rack1->getDiscount() . " (15 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $Rack2->getName(); ?></p>
		    <p>Harga : <?php echo $Rack2->getPrice(); ?></p>
		    <p>Diskon : <?php echo $Rack2->getDiscount() . " (20 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $Rack3->getName(); ?></p>
		    <p>Harga : <?php echo $Rack3->getPrice(); ?></p>
		    <p>Diskon : <?php echo $Rack3->getDiscount() . " (10 %)"; ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $Rack4->getName(); ?></p>
		    <p>Harga : <?php echo $Rack4->getPrice(); ?></p>
		    <p>Diskon : <?php echo $Rack4->getDiscount() . " (20 %)"; ?></p>
		</div>

	</div>

	<h4>LIST PRODUCT MUSIC</h4>

	<div class='grid-container'>

		<div class='grid-item'>
		    <p>Nama : <?php echo $MUSIC1->getName(); ?></p>
		    <p>Artis : <?php echo $MUSIC1->getArtist(); ?></p>
            <p>Genre : <?php echo $MUSIC1->getGenre(); ?></p>
            <p>Harga : <?php echo $MUSIC1->getPrice(); ?></p>
		    <p>Diskon : <?php echo $MUSIC1->getDiscount() . " (20 %)"; ?></p>
            <p>Harga Diskon : <?php echo $MUSIC1->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
            <p>Nama : <?php echo $MUSIC2->getName(); ?></p>
		    <p>Artis : <?php echo $MUSIC2->getArtist(); ?></p>
            <p>Genre : <?php echo $MUSIC2->getGenre(); ?></p>
            <p>Harga : <?php echo $MUSIC2->getPrice(); ?></p>
		    <p>Diskon : <?php echo $MUSIC2->getDiscount() . " (15 %)"; ?></p>
            <p>Harga Diskon : <?php echo $MUSIC2->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
            <p>Nama : <?php echo $MUSIC3->getName(); ?></p>
		    <p>Artis : <?php echo $MUSIC3->getArtist(); ?></p>
            <p>Genre : <?php echo $MUSIC3->getGenre(); ?></p>
            <p>Harga : <?php echo $MUSIC3->getPrice(); ?></p>
		    <p>Diskon : <?php echo $MUSIC3->getDiscount() . " (20 %)"; ?></p>
            <p>Harga Diskon : <?php echo $MUSIC3->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
            <p>Nama : <?php echo $MUSIC4->getName(); ?></p>
		    <p>Artis : <?php echo $MUSIC4->getArtist(); ?></p>
            <p>Genre : <?php echo $MUSIC4->getGenre(); ?></p>
            <p>Harga : <?php echo $MUSIC4->getPrice(); ?></p>
		    <p>Diskon : <?php echo $MUSIC4->getDiscount() . " (25 %)"; ?></p>
            <p>Harga Diskon : <?php echo $MUSIC4->FinalPrice(); ?></p>
		</div>

	</div>

    <h4>LIST PRODUCT RACK</h4>

	<div class='grid-container'>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDRack1->getName(); ?></p>
		    <p>Model : <?php echo $CDRack1->getModel(); ?></p>
            <p>Kapasitas : <?php echo $CDRack1->getCapacity(); ?></p>
            <p>Harga : <?php echo $CDRack1->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDRack1->getDiscount() . " (15 %)"; ?></p>
            <p>Harga Diskon : <?php echo $CDRack1->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDRack2->getName(); ?></p>
		    <p>Model : <?php echo $CDRack2->getModel(); ?></p>
            <p>Kapasitas : <?php echo $CDRack2->getCapacity(); ?></p>
            <p>Harga : <?php echo $CDRack2->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDRack2->getDiscount() . " (20 %)"; ?></p>
            <p>Harga Diskon : <?php echo $CDRack2->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDRack3->getName(); ?></p>
		    <p>Model : <?php echo $CDRack3->getModel(); ?></p>
            <p>Kapasitas : <?php echo $CDRack3->getCapacity(); ?></p>
            <p>Harga : <?php echo $CDRack3->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDRack3->getDiscount() . " (10 %)"; ?></p>
            <p>Harga Diskon : <?php echo $CDRack3->FinalPrice(); ?></p>
		</div>

		<div class='grid-item'>
		    <p>Nama : <?php echo $CDRack4->getName(); ?></p>
		    <p>Model : <?php echo $CDRack4->getModel(); ?></p>
            <p>Kapasitas : <?php echo $CDRack4->getCapacity(); ?></p>
            <p>Harga : <?php echo $CDRack4->getPrice(); ?></p>
		    <p>Diskon : <?php echo $CDRack4->getDiscount() . " (20 %)"; ?></p>
            <p>Harga Diskon : <?php echo $CDRack4->FinalPrice(); ?></p>
		</div>

	</div>
</body>
</html>
