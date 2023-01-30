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
    <br><br>
<!------------------- MAIN -------------------->
<div align = "center">
<div class = "hotel1" id = "hotel1">
<h3>
        <?php 
            include("mydbase.php");

            $query = "SELECT * FROM hotel WHERE ID = 1";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel2" id = "hotel2">
<h3>
        <?php 
            $query = "SELECT * FROM hotel WHERE ID = 2";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel3" id = "hotel3">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 3";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel4" id = "hotel4">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 4";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel5" id = "hotel5">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 5";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel6" id = "hotel6">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 6";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel7" id = "hotel7">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 7";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel8" id = "hotel8">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 8";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel9" id = "hotel9">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 9";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel10" id = "hotel10">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 10";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel11" id = "hotel11">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 11";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel12" id = "hotel12">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 12";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel13" id = "hotel13">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 13";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
<br>
<div class = "hotel14" id = "hotel14">
<h3>
        <?php 

             $query = "SELECT * FROM hotel WHERE ID = 14";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $hotel = $row["Hotel"];
                    $distance = $row["Distance"];
                    ?>
                    
                    Hotel : <?php echo $hotel; ?><br>
                    Distance : <?php echo $distance; ?><br>
                    
                    <?php
                }
        } else {
            echo "0 results";
        }           
        ?>
</h3>
</div>
</div>
    

</body>
</html>