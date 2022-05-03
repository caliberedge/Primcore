 <?php
include("header.php");
?>
  
<?php

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$message = stripcslashes($message);




include("connection.php");

$sql =mysqli_query($connection, "insert into contact(name,email,phone,message) values('$name','$email','$phone','$message')");
if($sql) {
    echo '<script type="text/javascript"> alert("Thank You; We Have Recieved Your Message, We Will Get Back to You Shortly") 
                    window.location.assign("contact.php")
                                </script>';
    exit();
}
else{
    echo "Submition Failed";
}
  }
  
?>



<script>
    function validateForm() {
 var z = document.forms["form"]["name"].value;
  if (z == "") {
    alert("Please Enter your Name");
    return false;
 }
  var x = document.forms["form"]["phone"].value;
  if (x == "") {
    alert("Enter your Phone Number");
    return false;
  }
  var f = document.forms["form"]["email"].value;
  if (f == "") {
    alert("Please Enter your Email Address");
    return false;
  }
  var y = document.forms["form"]["message"].value;
  if (y == "") {
    alert("Please Enter your Intended Message or Complaint");
    return false;
  }
}
</script>


    <!-- End header -->

    <!-- Start Banner -->
	  <div class="section inner_page_header">
	     <div class="container">
		    <div class="row">
              <div class="col-lg-12">
			     <div class="full">
				    <h3>Contact Us</h3>
				 </div>
			  </div>
			</div>
		 </div>
	  </div>
    <!-- end Banner -->
	
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <div class="left">
						     <p class="section_count">01</p>
						   </div>
						   <div class="right">
						    <p class="small_tag">Contact Us</p>
                            <h2><span class="theme_color">Reach Out to Us </span> And we will be swift to respond to your orders.</h2>
                          </div>	
                        </div>
                    </div>
                </div>
            </div>

<div class="col-lg-5 col-sm-5 col-xs-12 margin-top_30">
					<div class="left-contact">
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p>17 B Medical Road Ikeja, Lagos.</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="mailto:demoinfo@gmail.com">demoinfo@gmail.com</a><br>
								<a href="#">demoinfo@gmail.com</a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="tel:+2348066402002">08066402002</a><br>
							<!--	<a href="#">12345 67890</a>-->
							</div>
						</div>
					</div>
				</div>
		
			<div class="row margin-top_30">
				<div class=" col-sm-7 col-xs-12 margin-top_30">
					<form  method="POST" name="form" onsubmit="return validateForm()" >
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Your Name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Phone Number" class="form-control" name="phone">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" type="text" name="message" placeholder="Your Message" rows="8"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" name="submit" type="submit">Send Message</button>
								<div class="h3 text-center hidden"></div> 
								<div class="clearfix"></div>  
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
			</div>
        </div>
    </div>
	<!-- end section -->
	
<?php
include("footer.php");
?>
    <!-- Start Footer -->
    