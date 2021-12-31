<?php 
//Hubungkan halamant Index dengan functions
require 'functions.php';

if (isset($_POST['submit'])) {
	// Cek apakah data berhasil di tambahkan atau tidak


	if (tambah($_POST) > 0) {
		echo "
				<script>
					alert('Pesan yang anda masukkan sudah kami terima, Terima Kasih !!!'); 
					document.location.href='../Index.php';
				</script>
			";
	} else {
		echo "
				<script>
					alert('Pesan yang anda masukkan Gagal kami terima, Terima Kasih !!!'); 
					document.location.href='../Index.php';
				</script>
			";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- link -->
	<link rel="stylesheet" href="style.css">

	<title>KUA Selong. Lombok Timur | Kementrian Agama Prov.NTB</title>
</head>
<body>

	<section>
		<div class="container">
			<div class="contactInfo">
				<div>
					<h2>Contact Info</h2>
					<ul class="info">
						<li>
							<span><img src="img/location.png"></span>	
							<span>Pancor, Selong, Kabupaten Lombok Timur, Nusa Tenggara Barat. 83611</span>
						</li>
						<li>
							<span><img src="img/mail.png"></span>	
							<span>kuaselong05@gmail.com</span>
						</li>
						<li>
							<span><img src="img/call.png"></span>	
							<span>(0376) 21135</span>
						</li>
					</ul>
				</div>

				<ul class="sci">
					<li>
						<a href="#"><img src="img/1.png"></a>
					</li>
					<li>
						<a href="#"><img src="img/2.png"></a>
					</li>
					<li>
						<a href="#"><img src="img/3.png"></a>
					</li>
					<li>
						<a href="#"><img src="img/4.png"></a>
					</li>
					<li>
						<a href="#"><img src="img/5.png"></a>
					</li>
				</ul>
			</div>

			<form action="" method="POST">
				<div class="contactForm">
				<h2>Send a Message</h2>
				<div class="formBox">
					<div class="inputBox w50">
						<input type="text" name="first_name" required id="first_name" autocomplete="off">
						<span>First Name</span>
					</div> 

					<div class="inputBox w50">
						<input type="text" name="last_name" required id="last_name" autocomplete="off">
						<span>Last Name</span>
					</div> 

					<div class="inputBox w50">
						<input type="email" name="email" required id="email">
						<span>Email Addres</span>
					</div> 

					<div class="inputBox w50">
						<input type="text" name="mobile_phone" required id="mobile_phone" autocomplete="off">
						<span>Mobile Number</span>
					</div> 

					<div class="inputBox w100">
						<textarea name="message" id="message" cols="30" rows="2" required autocomplete="off"></textarea>
						<span>Write your message here . . .</span>
					</div> 

					<div class="inputBox w100">
						<button type="submit" name="submit">Send</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</section>
	
</body>
</html>