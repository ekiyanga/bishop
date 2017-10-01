<?php
if(isset($_POST['submit'])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$subject = $firstName.' '.$lastName;
	$email = $_POST['email'];
	$message = $_POST['message'];
	$mymail = "eliseth_speke@yahoo.com";
	if(mail($mymail, $subject, $message)){
		echo "Sent Success";
	}else{
		echo "Failed";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bishop Mpango SS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!--<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">-->
	<!-- Latest compiled and minified CSS -->
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript --
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	-->
	 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
		padding-top: 50px;
	}
</style>
<body data-spy="scroll" data-target="#navbar">

	<!--nav bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top bg-inverse" id="navbar">
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="" class="navbar-brand">Bishop Mpango SS</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#gallery">Gallery</a></li>
					<li><a href="#features">Features</a></li>
					<li><a href="#team">Administration</a></li>
					<li><a href="#contactus">Contact US</a></li>
				</ul>
			</div>
		</div>
	</nav><!--End of Nav Bar-->

	<!--Jumbotron-->
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Bishop Mpango Secondary School</h1>
			<p>School Motto</p>
			<hr>
			<button type="btn" class="btn btn-lg btn-primary">Joining Instructions</button>
			<a href="http://www.necta.go.tz/matokeo/2016/csee/results/s1740.htm"><button type="btn" class="btn btn-lg btn-warning">CSEE 2017 Necta Results</button></a>
			<hr>
		</div>
	</div> <!--End of Jumbotron-->

	<!--Gallery-->
	<div class="container">
		<section>
			<div class="page-header" id="gallery">
				<h2>Gallery</h2>			
			</div>
			<div class="carousel slide" id="sreenshot-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshot-carousel" data-slide-to="1"></li>
						<li data-target="#screenshot-carousel" data-slide-to="2"></li>
						<li data-target="#screenshot-carousel" data-slide-to="3"></li>
					</ol>		
					<div class="carousel-inner">
						<div class="item active">
							<img src="slide1.jpg" width="100%" alt="image">
							<div class="carousel-caption">
								<h3>Students</h3>
								<p>This is caption</p>
							</div>
						</div>
						<div class="item">
							<img src="slide2.jpg" width="100%" alt="image">
							<div class="carousel-caption">
								<h3>Laboratories</h3>
								<p>This is caption</p>
							</div>
						</div>
						<div class="item">
							<img src="slide3.jpg" width="100%" alt="image">
							<div class="carousel-caption">
								<h3>Students</h3>
								<p>This is caption</p>
							</div>					
						</div>
					 	<div class="item" alt="image">
							<img src="slide4.jpg" width="100%">
							<div class="carousel-caption">
								<h3>class</h3>
								<p>This is caption</p>
							</div>					
						</div>
						<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#screenshot-carousel" class="right carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
		</section>
	</div><!--End og gallery-->

	<hr>

	<!--Features-->
	<div class="container">
		<section>
			<div class="page-header" id="features">
				<h2>Features <small>what do we do in this school?</small></h2>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<h3>Maabara za Sayansi</h3>
					<p>Maabara za sayansi ili kuwasaidia wanafunzi kujifunza zaidi kupitia mafunzo ya vitendo</p>
				</div>
				<div class="col-sm-4">
					<img src="slide2.jpg" width="100%" alt="students conducting practicals">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-8">
					<h3>Dini</h3>
					<p>Uwepo wa Dini zote ili kuwasaidia wanafunzi kiimani na kimaadili kupitia kuruhusu vikundi vyote vya kidini</p>
				</div>
				<div class="col-sm-4">
					<img src="slide6.jpg" width="100%" alt="students conducting practicals">
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-8">
					<h3>Tehama</h3>
					<p>Shule inatoa huduma za Tehama kwa wanafunzi kwa kuhakikisha wanafuzni wanaweza kutumia Intaneti kupata taarifa tofauti za kimasomo kupitia vitabu na machapisho mbalimbali ya kielimu yaliyopo mitandaaoni</p>
				</div>
				<div class="col-sm-4">
					<img src="slide5.jpg" width="100%" alt="students conducting practicals">
				</div>
			</div>
		</section>
	</div><!--End of features-->

	<hr>

	<div class="container">
		<section>
			<div class="page-header" id="team">
				<h3>Kutana na Uongozi</h3>			
			</div>
			<div class="row">
				<div class="col-sm-3" style="text-align: center">
					<img src="No_Profile.png" width="150" height="150" alt="School Headmaster" class="img-circle">
					<h3><strong>Full Name</strong></h3>
					<em>School Headmaster</em>
				</div>
				<div class="col-sm-3" style="text-align: center">
					<img src="No_Profile.png" width="150" height="150" alt="Second Master" class="img-circle">
					<h3><strong>Full Name</strong></h3>
					<em>Second Master</em>
				</div>
				<div class="col-sm-3" style="text-align: center">
					<img src="female.png" width="150" height="150" alt="Academic Master" class="img-circle">
					<h3><strong>Full Name</strong></h3>
					<em>Academic Mistress</em>
				</div>
				<div class="col-sm-3" style="text-align: center">
					<img src="pic.jpg" width="150" height="150" alt="Manager" class="img-circle">
					<h3><strong>Chizero Bungubuliho</strong></h3>
					<em>Manager</em>
				</div>
			</div>
		</section>
	</div>

	<!--Contact us-->
	<div class="container">
		<section>
			<div class="page-header" id="contactus">
				<h3>Wasiliana Nasi <small>Kwa Maoni, Ushauri au Kujiunga na Shule</small></h3>
			</div>
			<div class="row">
				<div class="col-md-4">
					<address>
						Shule Ya Sekondari Bishop Mpango,<br>
						S.L.P ,<br>
						Kibondo, Kigoma<br>	
					</address>
					<span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>

<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
				</div>
				<div class="col-md-8">
					<form action="" method="POST" class="form-horizontal">
						<div class="form-group">
							<label for="firstName" class="col-md-2 control-label">First Name</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter Your First Name" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="lastName" class="col-md-2 control-label">Last Name</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Your Last Name" required="required">
							</div>
						</div>
						<div class="form-group">	
							<label for="email" class="col-md-2 control-label">Your Email</label>
							<div class="col-md-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-md-2 control-label">Your Message</label>
							<div class="col-md-10">
								<textarea rows="10" cols="20" class="form-control" id="message" name="message" placeholder="Enter Your Message" required="required"></textarea>	
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 col-md-offset-2">
								<button type="submit" class="btn btn-primary" name="submit">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div><!--End of contact us-->

	<hr>

	<footer>
		<div class="container text-center">
			<ul class="list-inline">
			  <li><a href=#">Twitter</a></li>
		      <li><a href="https://www.facebook.com/chidzero.mulenga">Facebook</a></li>
        	  <li><a href="#">YouTube</a></li>
			</ul>
			<p>&copy; Copyright 2017</p>
		</div>
	</footer>
	<script src="jquery-3.1.1.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>