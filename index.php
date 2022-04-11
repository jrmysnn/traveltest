<html>
	<head>
		<title>Tarvel Proto</title>
		<link rel="stylesheet" href="lib/bootstrap513/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/css/slideshow.css">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<style>
			@font-face {
				font-family: OpenSans;
				src: url('resources/fonts/OpenSans.ttf');
			}
			
			@font-face {
				font-family: Barcelony;
				src: url('resources/fonts/Barcelony.ttf');
			}
			
			@font-face {
				font-family: SummerBeach;
				src: url('resources/fonts/SummerBeach.ttf');
			}
			
			@font-face {
				font-family: CountrySide;
				src: url('resources/fonts/CountrySide1.ttf');
			}
			
			@font-face {
				font-family: Clattering;
				src: url('resources/fonts/Clattering.ttf');
			}
			
			
			body,html {
				padding:0px;margin:0px;
				font-family:"OpenSans";
				background-color:#404040 !important;
				
			}
			
			.location-title {
				font-family:"CountrySide" !important;
				font-size:200%;
				color:white;
				background-color:#404040;
				padding:10px;
			}
			
			
			
			.header-holder {
				
				
				height:100px;
				padding-left:20vw;
				padding-right:20vw;
			}
			
			.header-main {
				background-color:black;
			}
			
			.description-holder {
				
				color:#404040 !important;
				padding: 20px;
			}
			
			.info-panel {
				padding:20px;
				background-color:rgba(255,255,255,0.9);
			}
			
			.panel {
				padding-left:20vw;
				padding-right:20vw;
			}
			
			
			
			#main-map {
				display:none;
			}
			
			.initial-info {
				
			}
			
			.us-image {
				border-radius:100%;
			}
			
			.nav-holder {
				position:absolute;
				z-index:1;
				width:100%;
				text-align:center;
				top:0px;
			}
			.nav-holder::after {
				z-index:0;
			}
			
			.my-nav {
				/*background-color:black;*/	
				width:100%;
				padding-top:20px;
				font-size:100%;
			}
			.my-nav-link {
				color:white;
				cursor:pointer;	
				font-weight:bold;
				padding-left:2vw;
				padding-right:2vw;
				font-family:"OpenSans" !important;
				text-decoration:none;
			}
			
			.my-nav-link:hover {
				color:white;
				cursor:pointer;	
				font-weight:bold;
				padding-left:2vw;
				padding-right:2vw;
				font-family:"OpenSans" !important;
				text-decoration:none;
			}
			.my-nav-link:visited {
				color:white;
				cursor:pointer;	
				font-weight:bold;
				padding-left:2vw;
				padding-right:2vw;
				font-family:"OpenSans" !important;
				text-decoration:none;
			}
			
			/* parallax */
			
			body {
			  margin: 0;
			}

			main {
			  height: 100vh;
			  overflow-x: hidden;
			  overflow-y: auto;
			  perspective:2px;
			}

			section {
			 transform-style: preserve-3d;
			  position: relative;
			  height: 100vh;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  color: white;

			}

			.section-footer {
              display:block;
			  height: 20vh;
			  background-color:#404040;
			}
			
			.no-parallax {
			  background-color:#3A2B30	;
			  z-index: 999;
			  
			}
			
			
			
			.parallax::after {
			  content: ' ';
			  position: absolute;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  left: 0;
			  transform: translateZ(-1px) scale(1.5);
			  background-size: 100%;
			  z-index: -1;
			}

			section h1 {
			  text-align: center;
			  font-size: 4rem;
			  font-family: sans-serif;
			}

			.parallax h1 {
			  width: 60%;
			  font-size: 2rem;
			}
						
			
			.our-travels-holder {
				width:300px;
				text-align:center;
				border:4px solid white !important;
			}
			
			.bg1::after {
			  background: url('resources/images/parr1.jpg');
			  background-size: cover;
			}
			
			.bg2::after {
			  background: url('resources/images/parr2.jpg');
			  background-size: cover;
			}
			
			.our-travels-holder:hover {
				width:300px;
				color:#cdfff3 !important;
				border:4px solid #cdfff3 !important;
				cursor:pointer;
			}
			
		
			.our-travels-button{
				font-size:25px;
				 
			}
			
			.enlarge-text {
				
				color:#cdfff3 !important;
			}
			
			
			
			.pickdestination {
				font-family: "Clattering";
				font-size:200% !important;
				color:white;
			}
			.backtoph {
				padding:10px;
				text-decoration:none !important;
				font-size:15pt;
				border: 2px solid #515453;	
				color:#515453 !important;
			}
			
			.backtoph:hover {
				background-color:#515453 !important;
				color:white !important;
			}
			
			.info-holder-column {
				padding:0px;
				
			}
			
			.info-card {
				padding:0px;
				border-radius:20px 20px 20px 20px !important;
				box-shadow: -5px 8px 0px 0px rgba(246,218,164, 0.5);
				z-index:9999;
				
			}
			
			.meet-us {
				background-color:#404040;
				margin:0px;
				color:white;
				border-radius: 20px 20px 0px 0px ;
				border:2px solid #404040 !important;
				
			}
			
			
			@media (max-width: 800px) {
			  /* CSS that should be displayed if width is equal to or less than 800px goes here */
			  .info-holder-column {
				  display:none;
			  }
			  
			  .contact-left-panel {
				 display:none;
			  }
			  
			  .map-search {
				  display:none;
			  }
			  
			}
			
			.search-input {
				border-top:0px !important;
				border-left:0px !important;
				border-right:0px !important;
				border-bottom:1px solid #e9e9e9 !important;
			}
			
			.search-input:focus {
				background-color:rgba(0,0,0,0) !important;
				-webkit-box-shadow: none !important;
				box-shadow: none !important;
				
			}
		</style>
	</head>
	
	<body>

	<main>
		
		
		<section class="section parallax bg1">
		<div class="nav-holder" id="my-nav-holder" align="center">
			<div class="my-nav">
				<a class="my-nav-link">Home</a>
				<a class="my-nav-link">The Philippines</a>
				<a class="my-nav-link">Travel</a>
				<a class="my-nav-link">About Us</a>
			</div>
		</div>
			<span class=" p-4 our-travels-holder ">
				<button class="btn text-white our-travels-button">Our Travels</button>
			</span>
		</section>
		
		<section class="section no-parallax" id="map-section">
			
			<div class="container responsive">
			<div class="map-search" style="position:fixed;top:50px;left:10%;width:25%;" align="left">
				<div class="p-2 pickdestination">Pick your destination!</div>
				<div class="" style="background-color:white;width:60%;color:#404040;padding:20px;border-radius:20px;box-shadow: 5px 8px 0px 0px rgba(246,218,164, 0.8);">
					<div class="item lead" style="padding:10px;border-bottom:1px solid #e9e9e9;cursor:pointer;">Calatagan, Batangas	</div>
					<div class="item lead" style="padding:10px;border-bottom:1px solid #e9e9e9;cursor:pointer;">Morong, Bataan</div>
					<div class="item lead" style="padding:10px;">
						<input 
						placeholder="Or type your destination.."
						class="lead form-control search-input" style="background-color:rgba(0,0,0,0) !important;"/>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col col-8 " style="height:100vh !important;" align="center">
					
					<div class="maps" id="main-map-holder" >
					<img id="main-map" src="resources/images/map-ph-grey.png" usemap="#image-map" height="90%"/>
					<map name="image-map" id="image-map">
						<area id="calabarzon" target="" alt="calabarzon" title="calabarzon" href="#" onclick="changeMap('calabarzon')"
						coords="1209,1749,1201,1708,1267,1684,1373,1762,1419,1839,1454,1836,1413,1730,1400,1692,1481,1681,1410,1646,1381,1668,1370,1635,1342,1646,1378,1681,1304,1635,1291,1646,1361,1697,1302,1675,1267,1637,1234,1531,1267,1529,1207,1428,1166,1499,1141,1526,1144,1597,1125,1599,1101,1572,1038,1635,1046,1724,1076,1686,1095,1719,1084,1757,1160,1762" shape="poly">
						<area id="centralluzon" target="" alt="centralluzon" title="centralluzon" href="#"  onclick="changeMap('centralluzon')"
						coords="1326,1169,1179,1299,1157,1237,1097,1242,1087,1307,1040,1294,978,1346,942,1299,901,1305,907,1370,916,1473,931,1516,980,1540,999,1584,1040,1581,1026,1497,1094,1524,1130,1516,1366,1222,1366,1168" shape="poly">
					</map>
					</div>
					
					<div class="maps" id="calabarzon-map-holder" style="display:none;" >
					<img id="calabarzon-map" src="resources/images/map-ph-calabarzon-selected.png" usemap="#calabarzon-image-map" width="100%"/>
					<map name="calabarzon-image-map" id="calabarzon-image-map">
						<area id="calatagan" target="" alt="calatagan" title="calatagan" href="#" coords="113,303,116,309,121,311,125,320,122,322,113,323,115,335,113,338,104,330,103,319,103,311,103,302,107,302" shape="poly">
					</map>
					</div>
					
					<div class="maps" id="centralluzon-map-holder" style="display:none;">
					<img id="centralluzon-map" src="resources/images/map-ph-centralluzon-selected.png" usemap="#centralluzon-image-map" width="100%"/>
					<map name="centralluzon-image-map" id="centralluzon-image-map">
						<area target="" alt="bataan" title="bataan" href="#" coords="190,395,199,400,197,406,198,411,189,415,181,417,171,417,165,409,161,400,167,396,181,396,186,387,189,388" shape="poly">
					</map>
					</div>
	
					<a  href="#" onclick="changeMap('philippines')" class="backtoph btn btn-link ">Back</a>
				</div>
				<div class="col col-sm col-4 p-5 info-holder-column" >
				<div class="info-holder  p-0 m-0" id="info-holder" >
					<div class="info-card bg-white  p-0 m-0">
					<div class="info-card row w-100 p-0 m-0">
						
						<div class="col col-12 info-header m-0 p-0" align="center">
							<div class="meet-us border p-2 m-0 w-100" > Meet us! </div>
						</div>
						
						<div class="col col-12 info-photo p-4" align="center">
							<br/>
							<img src="resources/images/us.jpg" class="us-image img-fluid border border-0" width="80%"/>
							<br/>
						</div>
						
						<div class="col col-12 info-description text-secondary" align="center"  >
							<p> 
							Hello, we are Shannen & Jeremy!<br/>
							<br/>
							We are a couple who loves to travel with our trusty scooter called 'beat'. We crave the adventure
							of seeing and experiencing new things first-hand, which we share in this blog as an inspiration and guide
							for those who seek to travel! 
							<br/>
							<br/>

							<i>"A journey of a thousand miles starts with a single step"</i>

							</p>
						</div>
					</div>
					</div>
				</div>
			
				<div id="slide-show-holder" class="slide-show-holder" width="100%" style="display:none;">
					<!-- Slideshow container -->
					<div id="location-title" class="location-title" align="center"  ></div>
					<div style="height:200px;">
					<div class="slideshow-container p-0 m-0">

					  <!-- Full-width images with number and caption text -->
					  <div class="mySlides ">
						<div class="numbertext">1 / 5</div>
						<img class="slide-image" src="resources/content/calatagan/1.jpg">
						<div class="text">Caption Text</div>
					  </div>

					  <div class="mySlides ">
						<div class="numbertext">2 / 5</div>
						<img class="slide-image" src="resources/content/calatagan/2.jpg">
						<div class="text">Caption Two</div>
					  </div>

					  <div class="mySlides ">
						<div class="numbertext">3 / 5</div>
						<img class="slide-image" src="resources/content/calatagan/3.jpg">
						<div class="text">Caption Three</div>
					  </div>
					  
					  <div class="mySlides ">
						<div class="numbertext">4 / 5</div>
						<img class="slide-image" src="resources/content/calatagan/4.jpg">
						<div class="text">Caption Three</div>
					  </div>
					  
					  <div class="mySlides ">
						<div class="numbertext">5 / 5</div>
						<img class="slide-image" src="resources/content/calatagan/5.jpg">
						<div class="text">Caption Three</div>
					  </div>

					  <!-- Next and previous buttons -->
					  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					</div>
					

					<!-- The dots/circles -->
					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span>
					  <span class="dot" onclick="currentSlide(2)"></span>
					  <span class="dot" onclick="currentSlide(3)"></span>
					  <span class="dot" onclick="currentSlide(4)"></span>
					  <span class="dot" onclick="currentSlide(5)"></span>
					</div>
					
					<div class="description-holder lead" align="justify" width="80%">
						&nbsp;&nbsp;&nbsp;&nbsp;Calatagan is probably one of the easiest beach destination near metro manila. Just 130-140km away from the bustling and crowded city of the metro anyone can experience the gorgeous view beaches calatagan has to offer. Calatagan, derived from the filipino word "Latag", to be lay-out, to be vast,or to spread... 
						<a class="btn btn-outline-primary w-100" href="">Read More</a>
					</div>				
				</div>
				
			</div>
			</div>
			</div>

		</section>
		
		
		<section class="section parallax bg2 ">
			<div class="container">
				<div class="row w-100" align="center" style="padding-bottom:20px !important;">
					<div class="col col-12">
						<h1>Got a Question? Message us, we don't bite!</h1>
					</div>
				</div>
				<div class="row w-100">

				<div class="col col-6 ">
				
					<div class="col col-12">
						Name *
					</div>
					<div class="col col-12">
						<input class="form-control"/>
					</div>
					<div class="col col-12">
						Email *
					</div>
					<div class="col col-12">
						<input class="form-control"/>
					</div>
					<div class="col col-12">
						Subject *
					</div>
					<div class="col col-12">
						<input class="form-control"/>
					</div>
					<div class="col col-12">
						Message *
					</div>
					<div class="col col-12">
						<textarea class="form-control"></textarea>
					</div>
					<div class="col col-12">
						&nbsp;
					</div>
					<div class="col col-12">
						<button class="btn btn-primary w-100">SUBMIT</button>
					</div>
				</div>
				</div>
			</div>
			
			
		</section>
		<div class="section-footer" style="z-index:9999;">
	
	</div>
	
	</main>
	

	
	<script src="lib/jquery.min.js"></script>

	<script src="lib/bootstrap513/js/bootstrap.bundle.min.js"></script>
	<script src="lib/maphighlight.js"></script>
	<script src="lib/imagemap.resizer.min.js"></script>
	<script type="text/javascript">
	var currentLocation = "ph";
	(function() {
	
		$(".backtoph").hide();
		
		$("#main-map").fadeIn({
			duration:1000,
			complete: function() {
				$('map').imageMapResize();
			}
		});
		
		
		$("#calabarzon").hover(
		  function() {
			  if (currentLocation=="ph"){
				$("#main-map").prop("src",
				"resources/images/map-ph-calabarzon.png");
			  }
		  }, function() {
			  if (currentLocation=="ph"){
				$("#main-map").prop("src",
				"resources/images/map-ph-grey.png");
			  }
		  })
		  
		 $("#centralluzon").hover(
		  function() {
			   if (currentLocation=="ph"){
				$("#main-map").prop("src",
				"resources/images/map-ph-centralluzon.png");
			   }
		  }, function() {
			  if (currentLocation=="ph"){
				$("#main-map").prop("src",
				"resources/images/map-ph-grey.png");
			  }
		  })
		
		
		
		
		$(".our-travels-holder").hover(
			function() {
				$(".our-travels-button").addClass("enlarge-text");

				
				$(".our-travels-holder").addClass("our-travels-holder-black");
				$(".our-travels-holder").removeClass("our-travels-holder-white");
			} , 
			function() {
				$(".our-travels-button").removeClass("enlarge-text");
	
				$(".our-travels-holder").removeClass("our-travels-holder-black");
				$(".our-travels-holder").addClass("our-travels-holder-white");
			}
		);

		$("#calatagan").hover(
		  function() {
				$("#info-holder").hide();
			  
				$("#location-title").html("Calatagan");
				$("#slide-show-holder").fadeIn(1000);
		  }, function() {
				//$("#location-title").html("");
				//$("#slide-show-holder").fadeOut(500);
		  });
		
		
		
		
		  
	})();
	let slideIndex = 0;
	showSlides();
	
	function changeMap(map){
		$(".maps").hide();
		
		if (map!='philippines'){
			$(".backtoph").fadeIn({
			duration:1000});
			$("#" + map + "-map-holder").fadeIn({
				duration:1000,
				complete: function() {

					$('#'  + map + '-image-map').imageMapResize();
					
				}
			});
		} else {
			$(".backtoph").hide();
			$("#main-map-holder").fadeIn({
			duration:1000,
			complete: function() {

				$('#image-map').imageMapResize();
				
			}
		});
		}
	}

	function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 3000); // Change image every 2 seconds
	}
	
	
	</script>
	</body>
</html>