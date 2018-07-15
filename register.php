<?php include ('header.php');?>
<?php

    include ('base.php');
    $email=$password="";
    $erremail=$epassword="";
    $error=1;
    $msg="";
    if ($_POST){
      $error=0;
      if(empty($_POST['erremail']))
      {
        $erremail="Email section is empty";
        $error=1;
      }
      else{
        $erremail = checkdata($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $eemail = "Invalid email format"; 
            $error=1;
      }
    }
      if(empty($_POST['epassword']))
      {
        $epassword="Password section is empty";
        $error=1;
      }
      else{
        $epassword = checkdata($_POST['password']);
        if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password)){
          $epassword = "at least one lowercase char";
          "at least one uppercase char";
          "at least one digit";
          "at least one special sign of @#-_$%^&+=§!?";
          $error=1;
        }
      }
        $clumsy=password_hash($_POST['clumsy'],PASSWORD_DEFAULT);
        $q= "insert into users (Email, Password) values('".$_POST['uemail']."' ,'".$clumsy."')";
        //to generate user generated passwords or verification codes
        //bin2hex(random_bytes(8));
        $iuser=$conn->query($q);
        if($iuser){
        echo "You registered succesfully";
    }

}
function checkdata($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    //to make your form disappear
    if ($error==1 || $error==-1){
    ?>
     <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="false" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer register</h4>
          </div>
    <div class="modal-body">
            <form action="register.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input id="email_modal" type="text" name="uemail" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" name="clumsy" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Register</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
        }
    ?>
 </body>
   
    