<?php 
require 'php/config.php'; ?>
<!DOCTYPE html>

<html>
  <head>
    <title>BookCorner</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="res/js/jquery-2.0.3.min.js"><\/script>')</script>
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<link rel="stylesheet" type="text/css" href="engine0/book.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="coverflow.css" />
	<link rel="stylesheet" type="text/css" href="visual.css" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet"
	
  
  <script type="text/javascript" src="reflection.js"></script>
	<script type="text/javascript" src="coverflow.min.js" ></script>
	

</head>

  <body id="main_body">
  <?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
      ?>
       <div class="login">
      <h2 style='color: #fff';>Dobrodošli <?php echo $_SESSION['username'] ?> !</h2>
    </div>
    <br>  
<?php
}
else{
        ?>
    <div class="login">
      <h3><a href="Ulaz/index.php">Log in <span class="glyphicon glyphicon-log-in"></span></a></h3>
    </div>
    <br>
    <?php

	
	 
}
?><div>
<h1 style="font-family: 'Satisfy', cursive; font-size:75px;">Dobrodošli na sajt <br>E-biblioteke KD</h1>
<div class="demo">
	<div class="wrapper">
		<div class="coverflow">
			<img class="reflect"  src="demo/img/gorillaz-plasticbeach.jpg" data-artist="Gorillaz" data-album="Plastic Beach"/>
			<img class="reflect"  src="demo/img/kingsofleon-comearoundsunshine.jpg" data-artist="Kings Of Leon" data-album="Come Around Sunshine"/>
			<img class="reflect"  src="demo/img/kidrock-bornfree.jpg" data-artist="Kid Rock" data-album="Born Free"/>
			<img class="reflect"  src="demo/img/recovery-recovery.jpg" data-artist="Eminem" data-album="Recovery"/>
			<img class="reflect"  src="demo/img/lilwayne-iamnotahumanbeing.jpg" data-artist="Lil Wayne" data-album="I Am Not A Human Being"/>
			<img class="reflect"  src="demo/img/taylorswift-speaknow.jpg" data-artist="Taylor Swift" data-album="Speak Now"/>
			<img class="reflect"  src="demo/img/thebandperry-thebandperry.jpg" data-artist="The Band Perry" data-album="The Band Perry"/>
			<img class="reflect"  src="demo/img/maroon5-handsallover.jpg" data-artist="Maroon 5" data-album="Hands All Over"/>
			<img class="reflect"  src="demo/img/mychemicalromance-dangerdays.jpg" data-artist="My Chemical Romance" data-album="Danger Days"/>
			<img class="reflect"  src="demo/img/ironmaiden-thefinalfrontier.jpg" data-artist="Iron Maiden" data-album="The Final Frontier"/>
			<img class="reflect"  src="demo/img/order of the black - black label society.jpg" data-artist="Order Of The Black" data-album="Black Label Society"/>
			<img class="reflect"  src="demo/img/usher-raymondvraymond.jpg" data-artist="Usher" data-album="Raymond V Raymond"/>
		</div>
	</div>
</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="res/js/jquery-2.0.3.min.js"><\/script>')</script>
<script type="text/javascript" src="dist/coverflow.min.js" ></script>
<script>
$(document).ready(function(){
$('.coverflow').coverflow({active :3});

});
</script>
	


	<!-- End WOWSlider.com BODY section -->
	 <div class="home">
    <h1 ><a href="index2.php">Početna <span class="glyphicon glyphicon-home"></span></a></h1>
  </div>
<?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  	if($_SESSION['status']=='Admin'){
      ?>
      <div class="home">
    <h1 ><a href="index3.php">Admin panel <span class="glyphicon glyphicon-wrench"></span></a></h1>
  </div>
  	
       
<?php
}
}

?>
  



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>
