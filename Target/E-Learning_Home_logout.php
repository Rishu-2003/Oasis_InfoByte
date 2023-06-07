<html>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mentor</title>
	<link rel="stylesheet" type="text/css" href="css/E_style.css">

	<link rel="icon" type="image/x-icon" href="image/web.png">

	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&family=Poppins:ital,wght@0,400;0,800;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	

</head>
<body>
<div class="main-div">
	<!-- Header section start -->
	<nav class="menu">
		<div class="logo"><h1>Mentor..</h1></div>
		<ul class="box-menu">
			<li><a href="#">Home</a></li>
			<li><a href="#course">Course</a></li>
			<li><a href="#faculty">Facilty</a></li>
			<li><a href="#">Service</a></span>
			<li><a href="#contact">Contact</a></li>
			<a href="E_learning_signin.html">
				<form action="logout.php" method="POST"><button type="submit" class="signin-btn" name="logout">Logout</button></form></a>
		</ul>
		<div class="menu-icon">
			<ion-icon name="menu"></ion-icon>
			<ion-icon name="close"></ion-icon>
		</div>
	</nav>
	<script type="text/javascript">
	
		const menu_icon=document.querySelector('.menu-icon');
		const menu=document.querySelector('.menu');
		const toggleNav = () => {
			//alert("Active toggle");
			menu.classList.toggle("active");
		};

		menu_icon.addEventListener('click', () => toggleNav());
	</script>
	<!-- Header section end -->

	<!-- Body section start -->
	<section>
		<div class="body">
			<div class="content">
				<h3>Online <p>Learning</p></h3>
				<span> Platform</span>
			</div>
			<div class="image">
				<img src="image/e-learn.svg">
			</div>
		</div>
	</section>
	<!-- Body section end -->

	<!--  Eduction section start -->
	<section>
		 <div class="count">
		 	<div class="course">
		 		<ion-icon name="school"></ion-icon>
		 		<div class="view">
		 			<h3 class="sta" data-count="150">0</h3> <p>Courses</p>
		 		</div>
		 	</div>

		 	<div class="course">
		 		<ion-icon name="contacts"></ion-icon>
		 		<div class="view">
		 			<h3 class="sta" data-count="1300">0</h3> <p>Students</p>
		 		</div>
		 	</div>

		 	<div class="course">
		 		<ion-icon name="person"></ion-icon>
		 		<div class="view">
		 			<h3 class="sta" data-count="70">0</h3> <p>Teachers</p>
		 		</div>
		 	</div>

		 	<div class="course">
		 		<ion-icon name="happy"></ion-icon>
		 		<div class="view">
		 			<h3 class="sta" data-count="100">0</h3> <p>Saticfaction</p>
		 		</div>
		 	</div>
		 </div>
		<script type="text/javascript">
			const counterNum=document.querySelectorAll(".sta");
			const speed=20;
			counterNum.forEach((curElem)=>{
				const updateNumber= () => {
					const targetNumbar = parseInt(curElem.dataset.count);
					//console.log(targetNumbar);
					const initialNum=parseInt(curElem.innerText);
					//console.log(initialNum);

					const increment = Math.trunc(targetNumbar/speed);
					//console.log(increment);
					if(initialNum<targetNumbar){
						curElem.innerText=`${initialNum+increment+"+"}`;
						setTimeout(updateNumber,70);
					}
				}
				updateNumber();
			});
		</script>
	</section>
	
	<!-- Eduction section end -->

	<!-- Choice section start -->
	<section>
		<div class="choose">
			<div class="image">
				<img src="image/choose.svg">
			</div>
			<div class="content">
				<h2>Why Choose Us?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<a href="#">Contact us</a>
			</div>
		</div>
	</section>
	<!-- Choice section end -->

	<!-- Course section start -->
	<section>
		<div class="course" id="course">
			<h1>Our <span> Courses</span></h1>
		</div>
		<div class="course-slide">

				<div class="slide">
					<img src="image/engineer.svg">
					<h1>Enginnering</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">21$</button>
				</div>

				<div class="slide">
					<img src="image/data-sci.png">
					<h1>Data Science</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">20$</button>
				</div>

				<div class="slide">
					<img src="image/data-analyst.png">
					<h1>Data Analyst</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">18$</button>
				</div>

				<div class="slide">
					<img src="image/biology.png">
					<h1>Science And Biology</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">12$</button>
				</div>

				<div class="slide">
					<img src="image/digital.png">
					<h1>Digital Markating</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">15$</button>
				</div>

				<div class="slide">
					<img src="image/graphic.png">
					<h1>Graphic Design</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">20$</button>
				</div>

				<div class="slide">
					<img src="image/web.png">
					<h1>Web Developer</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<button class="btn">8$</button>
				</div>
			
		</div>
	</section>
	<!-- Course section end -->

	<!-- Expert section start -->
	<section>
		<div class="expert" id="faculty">
			<h1>Expert <span> Tutors</span></h4>
		</div>
		<div class="Expert-slide">
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Rishu kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Nitish kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Pawan kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Harsh kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Alok kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Kanhiya kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Bablu kumar</h4>
				</div>
				<div class="user">
					<img src="image/rishu.jpg">
					<div class="prof">
						<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
						<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
						<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
						<a href="#"><ion-icon name="mail"></ion-icon></a>						
					</div>
					<h4>Mahesh kumar</h4>
				</div>
		</div>
	</section>
	<!-- Expert section end -->

	<!-- Contact section start -->
	<section id="contact">
		<div class="contact-us" >
			<h1>Contact <span> Us</span></h4>
		</div>
		<div class="contact">
			<form action="Enquire.php" method="POST">
				<div class="form">
					<div>Your Name:</div>
					<input type="name" name="name" placeholder="Enter your full name">
					<div>Your Email:</div>
					<input type="email" name="email" placeholder="Enter your vaild email">
					<div>Your Number:</div>
					<input type="number" name="number" placeholder="Enter your valid number">
					<div>Message</div>
					<textarea cols="46" rows="5" placeholder="More enquire then type message" name="message"></textarea>
					<button type="submit" name="submit" class="btn">Send Message</button>
				</div>	
			</form>
			<div class="contact-img">
				<img src="image\contact_bg_1.png">
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Socail media section start -->
	<div class="social-media">
		<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
		<a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
		<a href="#"><ion-icon name="logo-reddit"></ion-icon></a>
		<a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
		<a href="#"><ion-icon name="logo-google"></ion-icon></a>

	</div>
	<!-- Socail media section end -->

	<!-- Footer section start -->
	<div class="footer">
		<div class="term">
			<div><a href="#">Terms & conditions</a></div>
			<div><a href="#">Privacy Private</a></div>
			<div><a href="#">About Us</a></div>
			<div><a href="#">Careers</a></div>
			<div><a href="#">Contact Us</a></div>
		</div>
		<div class="copy-right">
			Copyright © 2023 Mentors Pvt. Ltd. All right reversed.
		</div>
	</div>
	<!-- footer section end -->

</div>
</body>
</html>

