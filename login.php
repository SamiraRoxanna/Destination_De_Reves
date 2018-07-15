<?php
include ('base.php');
    if ($_POST){
        $clumsy=password_hash($_POST['clumsy'],PASSWORD_DEFAULT);
        $q= "select * from users where Email='".$_POST['uemail']."'";
        $iuser=$conn->query($q);
        if($curuser=mysqli_fetch_assoc($iuser))
        {
            
            if(password_verify($_POST['clumsy'],$curuser['Password']))
            {session_start();
            $_SESSION['uid']=$curuser['UserID'];
            $_SESSION['uemail']=$curuser['Email'];
            //$_SESSION['role']=$curuser['role'];
            header("Location:userarea.php");
    }
    else
    {
        echo "Login Failed: Password incorrect";

    }
    }
    else
    {
        echo "Login Failed: Email incorrect";
    }
    }
    else
    {
?>
   <!-- <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>-->
          <div class="modal-body">
            <form action="login.php" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" name="uemail" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" name="clumsy" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
         <!-- </div>
        </div>
      </div>-->
    </div>
    <?php
        }
    ?>
 </body>