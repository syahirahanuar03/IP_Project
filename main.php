<!-- main.php -->
<!-- Homepage of the MalaysiaTourism webpage --> 

<html>
<head>
	<title>MalaysiaTourism</title>
	<link rel="icon" type="image/x-icon" href="malaysia.ico">
	<link rel="stylesheet" href="mystyle.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1ff4109b5.js" crossorigin="anonymous"></script>
	<!--<script src="BusyBus-JS.js"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<style>
  .container img {
        vertical-align: middle;
      }
</style>
<body>
    <?php
        // set the default time zone to use in Malaysia 
        date_default_timezone_set('Asia/Kuala_Lumpur');
    ?>
	<div align="center">
	<table id = "table1">
	<tr>
	
	<th>
		<div class="mypic">
		<a href="malaysia.png">
		<img src="malaysia.png" alt="image1" width="auto" height="auto">
		</a>
		</div>
		
	<h1><b>MalaysiaTourism</b></h1>
	</th>
	</tr>
	</table>
	</div>
	
<!------------------- NAVBAR -------------------->
	<div class = "header" id="myHeader">
	<div class = "navbar">
		<a href="main.php" class = "Main">Main</a>
		<a href="explore.php" class = "Explore">Explore</a>
		<a href="hotel.php" class = "Hotel">Hotels</a>
	</div>
	</div>
<!------------------- MAIN -------------------->

  <center> 
  <h2>Where would you like to explore? </h2>

  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 14</div>
      <img src="selangor.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 14</div>
      <img src="batu-ferringghi.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 14</div>
      <img src="centralmarket.jpg" style="width:100%">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">4 / 14</div>
      <img src="genting.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 14</div>
      <img src="kotakayang.jpg" style="width:100%">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">6 / 14</div>
      <img src="kundasang.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">7 / 14</div>
      <img src="langkawi.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">8 / 14</div>
      <img src="melaka.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 14</div>
      <img src="MuluNationalPark.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 14</div>
      <img src="pangkor-island.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 14</div>
      <img src="island.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 14</div>
      <img src="sitikhadijahmarket.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">13 / 14</div>
      <img src="skyworld.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">14 / 14</div>
      <img src="legoland.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
      <div class="column">
        <img class="demo cursor" src="selangor.jpg" style="width:100%" onclick="currentSlide(1)" alt="Batu Caves, Selangor">
      </div>
      <div class="column">
        <img class="demo cursor" src="batu-ferringghi.jpg" style="width:100%" onclick="currentSlide(2)" alt="Batu Ferringghi Beach, Penang">
      </div>
      <div class="column">
        <img class="demo cursor" src="centralmarket.jpg" style="width:100%" onclick="currentSlide(3)" alt="Central Market, Kuala Lumpur">
      </div>
      <div class="column">
        <img class="demo cursor" src="genting.jpg" style="width:100%" onclick="currentSlide(4)" alt="Genting Highlands, Pahang">
      </div>
      <div class="column">
        <img class="demo cursor" src="kotakayang.jpg" style="width:100%" onclick="currentSlide(5)" alt="Kota Kayang Museum, Penang">
      </div>    
      <div class="column">
        <img class="demo cursor" src="kundasang.jpg" style="width:100%" onclick="currentSlide(6)" alt="Kundasang, Sabah">
      </div>
      <div class="column">
        <img class="demo cursor" src="langkawi.jpg" style="width:100%" onclick="currentSlide(6)" alt="Langkawi Skybridge, Kedah">
      </div>
      <div class="column">
        <img class="demo cursor" src="melaka.jpg" style="width:100%" onclick="currentSlide(6)" alt="Malacca City, Melaka">
      </div>
      <div class="column">
        <img class="demo cursor" src="MuluNationalPark.jpg" style="width:100%" onclick="currentSlide(6)" alt="Mulu National Park, Sarawak">
      </div>
      <div class="column">
        <img class="demo cursor" src="pangkor-island.jpg" style="width:100%" onclick="currentSlide(6)" alt="Pangkor Island, Perak">
      </div>
      <div class="column">
        <img class="demo cursor" src="island.jpg" style="width:100%" onclick="currentSlide(6)" alt="Perhentian Island, Terengganu">
      </div>
      <div class="column">
        <img class="demo cursor" src="sitikhadijahmarket.jpg" style="width:100%" onclick="currentSlide(6)" alt="Siti Khadijah Market, Kelantan">
      </div>
      <div class="column">
        <img class="demo cursor" src="skyworld.jpg" style="width:100%" onclick="currentSlide(6)" alt="Genting Skyworld, Pahang">
      </div>
      <div class="column">
        <img class="demo cursor" src="legoland.jpg" style="width:100%" onclick="currentSlide(6)" alt="Legoland Malaysia, Johor">
      </div>
    </div>
  </div>
      </center>

	<script>
		let slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		showSlides(slideIndex = n);
		}

		function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("demo");
		let captionText = document.getElementById("caption");
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>   
</body>
</html>