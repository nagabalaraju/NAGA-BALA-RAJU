<?php 
	error_reporting(0);
	session_start();
	session_destroy();
	


	if($_SESSION['message'])
	{
		$message=$_session['message'];
		echo "<script type='text/JavaScript'> alert('$message')</script>";
	}
?>






<!DOCTYPE html>
<html lang="len">
<head>
	<meta charset="UTF-8">
	<title>STUDENT MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<label class="logo">SARTHAK GREENS</label>
		<ul>
			<li><a href=" ">HOME</a></li>
			<li><a href=" ">CONTACTUS </a></li>
			<li><a href=" ">RENT</a></li>
			<li><a href=" ">SALES</a></li>
			<li><a href="login.php" class="btn btn-success">LOGIN</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text" > YOUR DREAMS,OUR MISSION</label>

		<img  class="main_img" src="OIP (10).jpg">

	</div>

	<div class="Container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="OIP (10).jpg">
</div>
<div class="col-md-8">
	<h1>WELCOME TO SARTHAK GREENS</h1>
	<p>At Sarthak Greens, we take immense pride in offering you more than just a home; we present a lifestyle that harmonizes modern comforts with the tranquility of nature. As you step into our community, you're not just buying a property; you're investing in a sanctuary of peace, comfort, and lasting memories.Our meticulously designed homes are crafted to cater to the unique aspirations of our residents, providing a perfect blend of elegance and functionality. From lush green surroundings to state-of-the-art amenities, Sarthak Greens is more than a residential address – it's a promise of a fulfilling and enriched life.Whether you're a first-time homebuyer or seeking a new chapter for your family, we are here to guide you every step of the way. Our dedicated team is committed to ensuring your experience with Sarthak Greens is not only seamless but also profoundly rewarding.</p>
	</div>
</div>
</div>
<center>
	<h1 class="adm">Properties for Sale in Mumbai</h1>

</center>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img class="teacher" src="pfs-img1.jpg">
			<br>
<h3>Builder Floors</h3>
</div>
		<div class="col-md-4">
			<img class="teacher" src="pfs-img6.jpg">
			<br>
			<h3>Budget Within in 3 crores</h3>
			
		</div>
		<div class="col-md-4">
			<img class="teacher" src="builder-floor.jpg">
			<br>
			<h3>Budget Within in 3 crores</h3>
			
			
		</div>
</div>
</div>
<center>
	<h1 class="adm">Properties for Rent in Mumbai</h1>

</center>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img class="teacher" src="1bhk.jpg">
			<h3>2BHK APARTMENTS</h3>
			</div>
			<div class="col-md-4">
			<img class="teacher" src="2bhk.jpg">
			<h3>FLATS</h3>
			</div>
			<div class="col-md-4">
			<img class="teacher" src="flats-apartments.jpg">
			<h3>1BHK APARTMENTS</h3>

</div>
		
</div>
</div>

<center>
<h1 class="adm">REGISTRATION FORM</h1></center>

<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
	<div class="adm_int">
		<label class="label_text">NAME</label>
		<input class="input_deg" type="text" name="NAME"
</div>
<div  class="adm_int">
		<label class="label_text">EMAIL</label>
		<input class="input_deg" type="text" name="EMAIL"
</div>
<div  class="adm_int">
		<label class="label_text">PHONE</label>
		<input class="input_deg" type="text" name="PHONE"
</div>

<div  class="adm_int">
		<label class="label_text"  >MESSAGE</label>
		<textarea class="input_text"  name="MESSAGE" ></textarea>
	</div>
	<div  class="adm_int">
		<input  class=" btn btn-primary" name="apply" type="SUBMIT"  id="submit" value="RESISTER">
		</div>


 </form>

</div>

<footer>
	<h3 class="footer_text">ALL @COPYRIGHT RESERVED BY BATHULA NAGA BALA RAJU </h3>
</footer>


	</body>
	</html>