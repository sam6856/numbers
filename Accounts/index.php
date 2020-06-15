
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="Keywords" content="Accounting solutions in Uganda">
		<title>Numbers Accounting</title>
		<meta name="viewport" content="width=device-width, initial scale=1.0">
		<link rel="stylesheet" href="static/css/style.css">
	</head>
	
	<body>
		<div class="container" id="blur">
			<div class="header" style="background-image:url('static/images/pencil.jpg');">
				<div class="logo">
				<a href="index.php" style="text-decoration:none;"><h1><span class="highlight">Numbers</span> Accounting</h1></a>
				</div>
				<div class="navbar">
					<nav>
						<ul>
							<li><a href="#Services">Services</a></li>
							<li><a href="#Pricing">Pricing</a></li>
							<li><a href="#Contact">Contact</a></li>
						<ul>
					</nav>
					<select name="menu">
						<option value="" selected disabled>menu</option>
						<option value="services"><a href="#Services">Services</a></option>
						<option value="Pricing"><a href="#Pricing">pricing</a></option>
						<option value="Contact"><a href="#Contact">Contact</a></option>
					</select>
				</div>
				<div class="summary">
					<h1><span class="highlight">Affordable bookkeeping solutions for your company</span></h1>
					<section class="mark">
					<ul>
						<li>Client information is stored securely on the cloud</li>
						<li>Easy to set up</li>
						<li>Use on desktops, laptops tablets and phones</li>
						<li>Nothing to install</li>
						<li>Remote access</li>
						<li>Multi access</li>
						<li>user permissions</li>
					</ul>
					</section>
					<a href="#"  id="openbtn" onclick="toggle()">send us a message</a>
				</div>
				
				<div id="popup">
				<?php 
				include('includes/function.php');
				?>
									<form action="index.php" method="post" class="form">
						<input type="email" name="email" placeholder="Email"></input><br><br>
						<textarea name="message" rows="5" placeholder="message"></textarea></br>
						<button type="submit" name="submit">send</button>
					</form>
					</br>
					<a href="#" onclick="toggle()">close</a>
				</div>
				
				<script type="text/javascript">
				function toggle() {
				  var blur=document.getElementById('blur');
				  blur.classList.toggle('active');
				}
				function toggle() {
				  var overlay= document.getElementById('popup');
				  overlay.classList.toggle('active');
				}
				</script>
			</div>			
			<div class="info">
				<section id="ease">
					<center><img src="static/images/phone.jpg"></center>
					<h2>Easy to use</h2>
					<p>Can be accessed remotely on laptops, desktops tablets and mobile phones</p>
				</section>
				<section id="permissions">
					<center><img src="static/images/security.png"></center>
					<h2>User permissions</h2>
					<p>Company books can only be accessed by authorized personell</p>
				</section>
				<section id="access">
					<center><img src="static/images/users.png"></center>
					<h2>Multi Access</h2>
					<p>As many accoutants as necessary can be authorized </p>
				</section>
			</div>
			<div class="services">
				<center><h1 id="Services">Services</h1>
				<h3>Full-Featured Accounting</h3></center>
				</br></br>
				<section id="1">
					<p><b>Bank reconciliation</b></p>
					<p><b>Recievables management</b></p>
					<p><b>Payables management</b></p>
				</section>
				<section id="2">
					<p><b>Cash management</b></br></p>
					<p><b>Filing Paye returns</b></p>
					<p><b>Filing VAT returns</b></p>
				</section>
				<section id="3">
					<p><b>Filing NSSF returns</b></p>
					<p><b>Reports</b></p>
					<p> </p>
				</section>
			</div>
			<div class="footer">
				<p>contact info</p>
				<p>Copyright &copy;<?php echo date('Y');?></p>
				<p>Image by <a href="https://pixabay.com/users/JessBaileyStudio-7369896/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3288398">Jess Bailey</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3288398">Pixabay</a></p>
			</div>
		</div>
	</body>
</html>