<div class="content">
	<header>
		<h1 class="judul">TempatWisata</h1>
		<h3 class="deskripsi">Wisata</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">DATA</a></li>
		</ul>
	</div>
<<<<<<< HEAD
	<p>qwerty</p>
	<div class="badan">
=======
 
	<div class="body">
>>>>>>> e0008e3da68dc3dd2afc7807193759577d2d6626
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'data':
				include "halaman/data.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
