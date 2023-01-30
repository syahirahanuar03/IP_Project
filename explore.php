<!-- main.php -->
<!-- Homepage of the MalaysiaTourism webpage --> 

<html>
<head>
	<title>MalaysiaTourism</title>
	<link rel="icon" type="image/x-icon" href="malaysia.ico">
	<link rel="stylesheet" href="mystyle.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1ff4109b5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, charset=utf-8">
</head>
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

    <!-----SELANGOR------->
    <div align="center">
    <button class="accordion">Selangor</button>
    <div class="panel">
        <?php 
            include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 1";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel1" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>

    <!-----PERAK------->
    <button class="accordion">Perak</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 2";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel2" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----PAHANG------->
    <button class="accordion">Pahang</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 3";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel3" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----PULAU PINANG------->
    <button class="accordion">Penang</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 4";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel4" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Kelantan------->
    <button class="accordion">Kelantan</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 5";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel5" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Terengganu------->
    <button class="accordion">Terengganu</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 6";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel6" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Melaka------->
    <button class="accordion">Melaka</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 7";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel7" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Kuala Lumpur------->
    <button class="accordion">Kuala Lumpur</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 8";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel8" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Sabah------->
    <button class="accordion">Sabah</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 9";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel9" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Kedah------->
    <button class="accordion">Kedah</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 10";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel10" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Sarawak------->
    <button class="accordion">Sarawak</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 11";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel11" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Perlis------->
    <button class="accordion">Perlis</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 12";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel12" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Negeri Sembilan------->
    <button class="accordion">Negeri Sembilan</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 13";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel13" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    <!-----Johor------->
    <button class="accordion">Johor</button>
    <div class="panel">
        <?php 
            //include("mydbase.php");

            $query = "SELECT * FROM place WHERE ID = 14";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0)
            {
                //output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["ID"];
                    $place = $row["Place"];
                    $activity = $row["Activity"];
        ?>
                Place : <?php echo $place; ?><br>
                Activities : <?php echo $activity; ?><br>
                
        <?php
                }
            } 
            else 
                {
                    echo "0 results";

                }
        ?>
        <h4><a href="hotel.php?id=#hotel14" style="cursor: pointer;"> Click Here for the Hotel Info<br></a></h4>
    </div>
    </div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>

</html>