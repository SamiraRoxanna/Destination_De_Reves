<?php include ('header.php'); ?>
<a href="login.php" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
         </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
         </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <section class="background-gray-lightest">
      <div class="container">
        <div class="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Gallery</li>
          </ul>
        </div>
        <h1>GALLERY</h1>
        <p class="lead">When it comes to holidays, whoever you are and whatever you're looking for- we've got you covered. Check out some of our best dynamically packaged holidays for families, couples, mates, and more. With deposits from as low as £50pp, it's super simple to book once you've found the perfect getaway; just fill out the form and we'll handle the rest.</p>
      </div>
    </section>
    <section class="blog-post">
      <div class="container">
        <div class="row">
          
        <?php include('base.php');
        $q="select * from Travels where TravelID=". $_GET['p'];
        $res= $conn->query($q);
        while($rec= mysqli_fetch_assoc($res)){
        echo "<div class='col-lg-12'>";
        echo "<div class='post-content margin-bottom--big'>";
		   echo "<h2>";
		   echo $rec['Name'];
		   echo "</h2>";
		   echo "<ol>";
		   echo "<li>";
		   echo $rec['City'];
		   echo "</li>";
		   echo "<li>";
		   echo $rec['Country'];
		   echo "</li>";
		   echo "<li>";
		   echo $rec['Continent'];
		   echo "</li>";
		   echo "</ol>";
		   echo "<blockquote>";
		   echo $rec['Description'];
		   echo "</blockquote>";
		   echo "<p>";
		   echo "<img src='image/".$rec['PicOne'];
		   echo "'/>";
		   echo "</p>";
		   echo "</div>";
		   echo "</div>";
  }
  ?>
  <div class="row no-space padding-horizontal">
  <?php
  $q="select * from Travels where TravelID=". $_GET['p'];
  $res= $conn->query($q);
  while($rec= mysqli_fetch_assoc($res)){
  echo "<div class='col-sm-6 col-sx-8'>";
  echo "<div class='box'>";
  echo "<a href='#'>";
  echo "<img class='img-responsive' src='images/".$rec['PicTwo'];
  echo "'>";
  echo "</a>";
  echo "</div>";
  echo "</div>";
}
?>
        </div>
      </div>
    </section>
    <section class="background-gray-lightest section--padding-bottom-small">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center text-uppercase margin-bottom">You might also like</h4>
          </div>
        </div>
        <div class="row">
        <?php
          $q="SELECT * FROM `travels` WHERE TravelID='1' OR TravelID='2' OR TravelID='3'";
          $res= $conn->query($q);
          while($rec= mysqli_fetch_assoc($res)){
            echo "<div class='col-sm-4'>";
            echo "<div class='post'>";
            echo "<div class='image'>";
            echo "<a href='Gallery.php?p=";
            echo $rec["TravelID"];
            echo "'>";
            echo "<img class='img-responsive' src='image/".$rec['PicOne']."'>";
            echo "</a>";
            echo "</div>";
            echo "<h3>";
            echo "<a href='Gallery.php?p=".$rec['Name']."'>";
            echo $rec['Name'];
            echo "</a>";
            echo "</h3>";
            echo "<p class='post__intro'>";
            echo substr($rec['Description'],0,100);
            echo "...";
            echo "<p class='read-more'>";
            echo "<a href='Gallery.php?p=". $rec["TravelID"];
            echo "' class='btn btn-ghost'>";
            echo "Continue reading";
            echo "</a>";
            echo "</p>";
            echo "</div>";
            echo "</div>";
          }
          ?>
        </div>
      </div>
    </section>
    <?php include('footer.php');?>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/front.js"></script><!-- substitute:livereload -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
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

