<?php include ("header.php"); ?>
<a href="login.php" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
            </div>
          </div> 
        </div>
      </div>
    </header>
    <section class="background-gray-lightest">
      <div class="container">
        <div class="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
        <h1>Contact</h1>
        <p class="lead">If you need some help you can ask one of our customer service team online using our live chat service below – you’ll just need to have your booking reference to hand. Alternatively you can use one of the forms or contact details listed.  </p>
      </div>
    </section>
    <section>  
      <div id="contact" class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-map-2"></i></div>
              <div class="content">
                <h4>Address</h4>
                <p>4 Blackwall Way<br>London, E149QS<br>England, <strong>United Kingdom</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-phone"></i></div>
              <div class="content">
                <h4>Call center</h4>
                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                <p><strong>+33 555 444 333</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-mail-open"></i></div>
              <div class="content">
                <h4>Electronic support</h4>
                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                <ul>
                  <li><strong><a href="mailto:">info@destinationdereves.com</a></strong></li>
                  <li><strong><a href="#">
                        Ticketio
                         - our ticketing support platform</a></strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-pen"></i></div>
              <div class="content">
                <h4>Contact form</h4>
                <p class="text-muted">Please fill this form for any request you might have</p>
<?php
$firstname=$lastname=$email=$subject=$message="";
$efirstname=$elastname=$eemail=$esubject=$emessage="";
$error=1;
$msg="";

if($_POST){
    $error=0;
    if(empty($_POST['firstname']))
    {
        $efirstname="Firstname section is empty";
        $error=1;
    } 
    else{
        $firstname = checkdata($_POST['firstname']);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
        $efirstname = "Only letters and white space allowed"; 
        $error=1;
     }
    }

    if(empty($_POST['lastname']))
    {
        $elastname="lastname section is empty";
        $error=1;
    } 
    else{
        $lastname = checkdata($_POST['lastname']);
        // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $elastname = "Only letters and white space allowed"; 
        $error=1;
     }
    }

    if(empty($_POST['email']))
    {
        $eemail="email section is empty";
        $error=1;
    }
    else{
        $email = checkdata($_POST['email']);
        // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $eemail = "Invalid email format"; 
        $error=1;
     }
    }
     
    if(empty($_POST['subject']))
    {
        $esubject="Subject section is empty";
        $error=1;
    }
    else{
        $subject = checkdata($_POST['subject']);
    }

    if(empty($_POST['message']))
    {
        $emessage="Message section is empty";
        $error=1;
    }
    else{
        $message = checkdata($_POST['message']);
    }

    if($error==0){
        include('base.php');
        $q="insert into contact (firstname,lastname,email,subject,message) values('".$firstname."','".$lastname."','".$email."','".$subject."', '".$message."')";
        $conn->query($q);
        $msg="Your form has been submitted successfully";
        $firstname=$lastname=$email=$subject=$message="";
    }
}

function checkdata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($error==1 || $error==-1)
{
?>
<p><span style="color:red" class="error">* required field</span></p>
<form method="post" action="contact.php" enctype="multipart/form-data">  
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
        <span style="color:red" class="error">
        *<?php echo $efirstname; ?>
        </span>
        <br>
        <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <span style="color:red" class="error">
        *<?php echo $elastname; ?>
        </span>
        <br>
        <label for="lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <span style="color:red" class="error">
        *<?php echo $eemail; ?>
        </span>
        <br>
        <label for="email">Email</label>
        <input id="email" type="text" name="email" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        <span style="color:red" class="error">
        *<?php echo $esubject; ?>
        </span>
        <br>
        <label for="subject">Subject</label>
        <input id="subject" type="text" name="Subject" class="form-control">
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
        <span style="color:red" class="error">
        *<?php echo $emessage; ?>
        </span>
        <br>
        <label for="message">Message</label>
        <textarea id="message" name="message" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
    </div>
    </div>
<?php
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $subject;
echo "<br>";
echo $message;
?>
</form> 
<?php
}
echo $msg;
?>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>

<?php include ('footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/front.js"></script>
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>