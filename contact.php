
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="fitness, gym, workouts, personal training, group fitness, health, wellness" />
<meta name="keywords" content="fitness, gym, workouts, personal training, group fitness, health, wellness " />
<link rel="canonical" href="https://gym.com" />
<link rel="image_src" href="images/socialmedia-image.jpg" />
<meta property="og:title" content="Gym"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://gym.com" />
<meta property="og:image" content="images/socialmedia-image.jpg"/>
<meta property="og:site_name" content="fitness, gym, workouts, personal training, group fitness, health, wellness"/>
<meta property="og:description" content="fitness, gym, workouts, personal training, group fitness, health, wellness"/>
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" value="@Gym" />
<meta property="twitter:url" content="https://gym.com" />
<meta property="twitter:title" content="Gym"/>
<meta property="twitter:description" content="fitness, gym, workouts, personal training, group fitness, health, wellness" />

</head>
<?php include("includes/links.php"); ?>
<body>
    
    
    
    
    

<!--================header start=================-->
<?php include("includes/header.php"); ?>





<section class="page-title title-bg23">
<div class="d-table">
<div class="d-table-cell">
<h2>Contact Us</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Contact Us</li>
</ul>
</div>
</div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</section>


<div class="contact-card-section ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-10 offset-lg-1">
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="contact-card">
<i class="bx bx-phone-call"></i>

<p>
<a href="tel:+919502721345">
+919502721345
</a>
</p>


</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="contact-card">
<i class="bx bx-mail-send"></i>
<p>
<a href="mailto:info.nexusintern@gmail.com">info.nexusintern@gmail.com</a>
</p>
</div>
</div>
<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
<div class="contact-card">
<i class="bx bx-location-plus"></i>
<p>Coimbatore south, Tamilnadu</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="contact-form-section pb-100">
<div class="container">
<div class="contact-area">
<h3>Lets' Talk With Us</h3>


<?php

$email_to ='krishnaleelakothamasu@gmail.com'; //put your email address here
$subject ='Gym'; //put the email sibject line prefix here
$email_from ='donotreply@gym.com'; //put the email address that this form will be sent from
$email_from_nice ='Gym'; //put in the 'nice' name for the email sender



if(isset($_POST['email'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
    $phone = $_POST['phone']; 
	
    $message = $_POST['message']; 
	

    $emailTo = $email_to; //Put your own email address here 
    $body = "Full Name: $name\n\n Email Address: $email\n\nPhone Number: $phone\n\n Message: $message ";
           $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;
//$headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_to;

mail($emailTo, $subject, $body, $headers);
$emailSent = true;
	// create email headers
}
?>
    <?php if(isset($emailSent) && $emailSent == true) {   //If email is sent ?>

        <div class="container">
        <div class="row">
         
            <div class="col-md-12 mx-auto mbr-form">
                <div class="wrapper">
		   <div class="form-row">
                            <div class="alert text-center text-black col-12">
				
							
							
              <div id="formulario">
                <p class="mbr-text mbr-fonts-style pb-5 display-7">Thank you,<br>A member of our team will be in touch with you soon</p></div></div>
                    
                        </div> </div> </div> 
                      
                      </div> </div>
		

       <?php /*?> <?php } ?><?php */?>
  <?php } else{?>







<form id="contactForm">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Full Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="number" name="phone" id="phone" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">

</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" class="form-control message-field" id="message" cols="30" rows="7" required data-error="Please type your message" placeholder="Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12 text-center">
<button type="submit" id="submit" class="default-btn contact-btn">
Send Message
</button>
<!--<div id="submit" class="h3 alert-text text-center hidden"></div>
<div class="clearfix"></div>-->
</div>
</div>
</form>
<?php } ?>
</div>
</div>
</section>


<section class="subscribe-section">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="section-title">
<h2>Join Our Gym</h2>
<p>Subscribe & get all related Gym notification</p>
</div>
</div>
<div class="col-md-6">
<form class="newsletter-form" data-toggle="validator">
<input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
<button class="default-btn sub-btn" type="submit">
Subscribe
</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</section>






<div class="top-btn">
<i class="bx bx-chevrons-up bx-fade-up"></i>
</div>


<!-- Link of JS files -->
    <?php include("includes/footer.php"); ?>
    <?php include("includes/script.php"); ?>


</body></html>