<?php
include ('dbconnection.php');

if(isset($_POST['rsignup'])){
       $rname=$_POST['r_name'];
       $remail=$_POST['r_email'];
       $rpassword=$_POST['r_password'];
       
       if($rname=="" ||$remail=="" || $rpassword=="" ){
        $regmsg="please fill all text feidls";
       }
       else{
      
       $sql2="SELECT count(r_email)from registerlogin where r_email='".$_POST['r_email']."' order by login_id" ;

       $result2=mysqli_query($con,$sql2);

      if($result2>1){
        echo 'you have already registered!';
      }
      else{
         $sql="INSERT INTO requesterlogin (r_name,r_email,r_password) VALUES ('$rname','$remail','$rpassword')";
    //  $result=mysqli_query($con,$sql);
        $result1=mysqli_query($con,$sql);

        if($result1){
          $regmsg= "you're suceesfully register";
        }
        else{
          $regmsg= "cannot register ";
        }
      }
        }

     
}
?>


<div class="container pt-5">
        <h2 class="text-center">create an Account!</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" method="POST" class="shadow-lg p-4">
                    <div class="form-group">
                       <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label><input type="text" placeholder="name" class="form-control" name="r_name" id="r_name" required >
                    </div>

                    <div class="form-group">
                       <i class="fas fa-key"></i><label for="name" class="font-weight-bold pl-2">email</label><input type="text"  placeholder="email" class="form-control" name="r_email" required="" id="r_email">
                    </div>

                    <small class="form-text">we'll not share your email or password</small>
                    <div class="form-group">
                       <i class="fas fa-key"></i><label for="name" class="font-weight-bold pl-2"> password</label><input type="text" placeholder="password" class="form-control" name="r_password" required="" id="r_password">
                    </div>
                    <button class="btn btn-danger mt-5
                     btn-block" name="rsignup">Sign-up</button>
                     <em style="font-size: 10px">By clicking sign-up you agree to our terms and policy and cookie policy</em>
                     <?php 
                       if(isset($regmsg)){
                         echo $regmsg;
                       }
                     ?>
            </form>
        </div>
    </div>
</div>



