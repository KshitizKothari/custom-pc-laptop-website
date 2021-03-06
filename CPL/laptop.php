<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/1jcpl-176x107.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>LAPTOP</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section id="dropdown-menu-7" data-rv-view="47">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="" class="navbar-logo"><img src="assets/images/1jcpl-176x107.png" alt="Mobirise"></a>
                <a class="text-black" href="">CPL</a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="/"></a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-black-outline btn-black" href="signup_user.html">Sign up</a></li><li class="nav-item nav-btn"><a class="nav-link btn btn-black-outline btn-black" href="login_user.html">Login</a></li></ul>

        </div>

    </nav>

</section>

<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--isolated" id="header3-12" data-rv-view="63">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4">MAKE YOUR DREAM LAPTOP</h3>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-c" data-rv-view="44" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
          
		<?php
		$con=mysqli_connect("localhost","root","","custom_pc_laptop");
		
		$r=mysqli_query($con,"select * from lap_ram limit 4");	
		while($row=mysqli_fetch_array($r))
		{ ?>
		  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-success">RAM</div>
                    <div class="card-block lead">
							<span>INR</span><span><?php echo $row[2]; ?></span> <small>/-</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong><?php echo $row[1]; ?>
					</strong>&nbsp;</li><li class="list-group-item"><strong>DDR4</strong></li><li class="list-group-item"><strong>16000MHZ</strong></li></ul></div>
                    <div class="card-block">
					<strong>
					Select <?php echo $row[1]; ?>:<input type='radio' name='r1' value='<?php echo $row[1]; ?>'></a></div>
					</strong>
				</div>
            </div>
			
            <?php } ?>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-c" data-rv-view="44" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
          
		<?php
		$con=mysqli_connect("localhost","root","","custom_pc_laptop");
		
		$r=mysqli_query($con,"select * from lap_graphic_card limit 4");	
		while($row=mysqli_fetch_array($r))
		{ ?>
		  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-warning">Graphic Card</div>
                    <div class="card-block lead">
                        <span>INR</span><span><?php echo $row[2]; ?></span> <small>/-</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong><?php echo $row[1]; ?>
					</strong>&nbsp;</li><li class="list-group-item"><strong>DDR4</strong></li><li class="list-group-item"><strong>16000MHZ</strong></li></ul></div>
                    <div class="card-block">
					<strong>
					Select <?php echo $row[1]; ?>:<input type='radio' name='r1' value='<?php echo $row[1]; ?>'></a></div>
					</strong>
				</div>
            </div>
			
            <?php } ?>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section-small" id="pricing-table1-c" data-rv-view="44" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
          
		<?php
		$con=mysqli_connect("localhost","root","","custom_pc_laptop");
		
		$r=mysqli_query($con,"select * from lap_processor limit 4");	
		while($row=mysqli_fetch_array($r))
		{ ?>
		  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-danger">Processor</div>
                    <div class="card-block lead">
                        <span>INR</span><span><?php echo $row[2]; ?></span> <small>/-</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong><?php echo $row[1]; ?>
					</strong>&nbsp;</li><li class="list-group-item"><strong>DDR4</strong></li><li class="list-group-item"><strong>16000MHZ</strong></li></ul></div>
                    <div class="card-block">
					<strong>
					Select <?php echo $row[1]; ?>:<input type='radio' name='r1' value='<?php echo $row[1]; ?>'></a></div>
					</strong>
				</div>
            </div>
			
            <?php } ?>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-c" data-rv-view="44" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
          
		<?php
		$con=mysqli_connect("localhost","root","","custom_pc_laptop");
		
		$r=mysqli_query($con,"select * from lap_ssd limit 4");	
		while($row=mysqli_fetch_array($r))
		{ ?>
		  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-primary">SSD</div>
                    <div class="card-block lead">
                        <span>INR</span><span><?php echo $row[2]; ?></span> <small>/-</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong><?php echo $row[1]; ?>
					</strong>&nbsp;</li><li class="list-group-item"><strong>DDR4</strong></li><li class="list-group-item"><strong>16000MHZ</strong></li></ul></div>
                    <div class="card-block">
					<strong>
					Select <?php echo $row[1]; ?>:<input type='radio' name='r1' value='<?php echo $row[1]; ?>'></a></div>
					</strong>
				</div>
            </div>
			
            <?php } ?>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-c" data-rv-view="44" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
          
		<?php
		$con=mysqli_connect("localhost","root","","custom_pc_laptop");
		
		$r=mysqli_query($con,"select * from lap_hard_disk limit 4");	
		while($row=mysqli_fetch_array($r))
		{ ?>
		  <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-success">Hard Disk</div>
                    <div class="card-block lead">
                        <span>INR</span><span><?php echo $row[2]; ?></span> <small>/-</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong><?php echo $row[1]; ?>
					</strong>&nbsp;</li><li class="list-group-item"><strong>DDR4</strong></li><li class="list-group-item"><strong>16000MHZ</strong></li></ul></div>
                    <div class="card-block">
					<strong>
					Select <?php echo $row[1]; ?>:<input type='radio' name='r1' value='<?php echo $row[1]; ?>'></a>
					</strong>
					</div>
                </div>
            </div>
			
            <?php } ?>
        </div>
    </div>
</section>



<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="61" style="background-color: rgb(0, 0, 0); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <p><strong>Address</strong><br>54 Fatehpura, Udaipur, Rajasthan, India<br><br>
<strong>Contacts</strong><br>
Email: support@cpl.com<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
            </div>
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1738.4967359288212!2d73.68897306630568!3d24.60855960601357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e504d6032a87%3A0x6ade3ca564ef6496!2sFatepura%20Circle!5e0!3m2!1sen!2sin!4v1576071485228!5m2!1sen!2sin" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  
  
</body>
</html>