<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>

    <header id="myCarousel" class="carousel slide">
       
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/background.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/he.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <!-- <div class="item">
                <div class="fill" style="background-image:url('images/do.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div> -->
        </div>

       
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                   Saving Crew
                </h1>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>To register as a Donor and help our community grow . </p>
                        <a href="Donor_reg.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Request for blood according to your needed blood type and receive blood for specific locations.</p>
                        <a href="request_blood.php" class="btn btn-primary">Request Now</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Search for a donor according to your need in your time of distress.</p>
                        <a href="Search_Donor.php" class="btn btn-primary">Search Now</a>
                    </div>
                </div>
            </div>
			 
        </div>
      
      <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Blood Donor Camps</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>
        </div> -->
       
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">About Saving Crew</h2>
            </div>
            <div class="col-md-6">
              

			<ul>
				<li>Saving Crew is a blood donation management system. Our website provides 
                    the blood seekers with their respective blood group with donors location .
                     The users can search for donors and request for blood.</li>

				<!-- <li>Many people would not be alive today if donors had not generously given their blood.</li> -->


			</ul>
            </div>
            <!-- <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div> -->
        </div>
       

        <hr>

        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>For contacting with us and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Contact us</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
