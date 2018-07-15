<?php include ("header.php"); ?>  
<a href="login.php" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white pull-left"><i class="fa fa-sign-in"></i>Log in</a>
            </div>
          </div> 
        </div>
      </div>
    </header>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
  
    <div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
      <!-- Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">
        <div style="background-image: url('images/Burano_Italy.jpg');" class="item active">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Destination de reves</h1>
            <p class="super-paragraph">Destination de Reves is a members only luxury travel club, offering unforgettable getaways, at unbelievable prices.</p>
          </div>
        </div>
        <div style="background-image: url('images/Cars_Cuba.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Destinations de Reves</h1>
            <p class="super-paragraph">From humble beginnings in France, Destination de Reves is now expanding its concept all around the world, with offices in France, UK, Italy and South Africa.</p>
          </div>
        </div>
        <div style="background-image: url('images/Masai_Mara.jpg');" class="item">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <h1 class="super-heading">Destination de Reves</h1>
            <p class="super-paragraph">We are a small but well defined team of travel experts. Our editors source some of the best hotels and resorts worldwide, our negotiators guarantee exclusive offers and our pricing controllers make sure you get the best possible deal with discounts of up to 80%.</p>
          </div>
        </div>
      </div>
    </div>
    <section class="background-gray-lightest negative-margin">
      <div class="container">
        <h1> Destinations de Reves.</h1>
        <p class="lead">Each week you will receive newsletters from us, containing our best and most inspirational offers of the week. Our offers (flash sales) are live for up to 14 days but you'll always find a selection of chic city breaks, beautiful country getaways and gorgeous beach retreats.</p>
        <p> <a href="Gallery.php?p=" class="btn btn-ghost">Continue reading   </a></p>
      </div>
    </section>
    <section class="section--padding-bottom-small">
    <div class="container">
        <div class="row">  
        <?php include ("base.php");
        $q="SELECT * FROM `travels` WHERE TravelID='1' OR TravelID='13'";
        $res= $conn->query($q);
        while($rec= mysqli_fetch_assoc($res)){
          echo "<div class='col-sm-6'>";
          echo "<div class='post'>";
          echo "<div class='image'>";
          echo "<a href='Gallery.php?p=";
          echo $rec["TravelID"];
          echo "'>";
          echo "<img class='img-responsive' src='image/".$rec['PicOne']."'>";
          echo "</a>";
          echo "</div>";
          echo "<h3>";
          echo "<a href='Gallery.php?p=".$rec['TravelID']."'>";
          echo $rec['Name'];
          echo "</a>";
          echo "</h3>";
          echo "<p class='post__intro'>";
          echo substr($rec['Description'],0,100);
          echo "...";
          echo "</p>";
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
      <div class="row">
          <?php
          $q="SELECT * FROM `travels` WHERE TravelID='14' OR TravelID='10' OR TravelID='9'";
          $res= $conn->query($q);
          while($rec= mysqli_fetch_assoc($res)){
            echo "<div class='col-sm-4'>";
            echo "<div class='post'>";
            echo "<div class='image'>";
            echo "<a href=Gallery.php?p=". $rec["TravelID"];
            echo " '>";
            echo "<img class='img-responsive' src='image/".$rec['PicOne']."'>";
            echo "</a>";
            echo "</div>";
            echo "<h3>";
            echo "<a href='Gallery.php?p=".$rec['TravelID']."'>";
            echo $rec['Name'];
            echo "</a>";
            echo "</h3>";
            echo "<p class='post__intro'>";
            echo substr($rec['Description'],0,100);
            echo "...";
            echo "</p>";
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
        <!--   *** SERVICES ***-->
    <section class="background-gray-lightest">
      <div class="container clearfix">
        <div class="row services">
          <div class="col-md-12">
            <h2>Our Services</h2>
            <p class="lead margin-bottom--medium"> We pride ourselves on putting our members first, that's why over 95% of our customers give us positive feedback when they return from a Destination de Reves holiday.</p>
            <div class="row">
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-alarm"></i></div>
                  <h4 class="services-heading">Help & Customer support</h4>
                  <p>At Destination de Reves we want you to have an amazing holiday so we'll always be there for you whenever and wherever you need us.
                  Whether you want local tips and information, need some help or advice on exploring your destination, we’re available 24/7. You can relax knowing we’re never far away.</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-cloud"></i></div>
                  <h4 class="services-heading">Accesibility</h4>
                  <p>At Destination de Reves we appreciate the importance to provide a website that is accessible to the widest possible audience, regardless of ability or the technology used to access the internet. We strive to meet conformance level AA of the World Wide Web Consortium's (W3C) <a href="https://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines 2.0. </a></p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="box box-services">
                  <div class="icon"><i class="pe-7s-id"></i></div>
                  <h4 class="services-heading">Travel Insurance</h4>
                  <p>It is a good idea to make sure that all of your exciting holiday plans are backed up by a reliable holiday insurance package. Ensure that your health, belongings, prebooked accommodation and cruises all fall under a valid policy with Thomas Cook while you travel.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--   *** SERVICES END ***-->

    <!-- portfolio-->
    <section id="portfolio" class="section--no-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Gallery</h1>
            <p class="lead margin-bottom--big">Enjoy a tour around the world</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
                <?php
                $q="SELECT * FROM `travels` WHERE TravelID='11' OR TravelID='12' OR TravelID='13' OR TravelID='14' OR TravelID='3' OR TravelID='4' OR TravelID='5' OR TravelID='9'";
                $res= $conn->query($q);
                while($rec= mysqli_fetch_assoc($res)){
                echo "<div class='col-lg-3 col-sm-4 col-xs-6'>";
                echo "<div class='box'>";
                echo "<a href='Gallery.php?p=".$rec['TravelID'];
                echo " '>";
                echo "<img class='img-responsive' src='image/".$rec['PicOne']."'>";
                echo "</a>";
                echo "</div>";
                echo "</div>";
                }
                ?>
        </div>
        </div>
    </section>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<?php include ("footer.html"); ?>
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