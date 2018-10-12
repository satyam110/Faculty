<?php 
include 'includes/db.php';

if(isset($_POST['submit'])){
     $fac_id=$_POST['fac_id'];
     $salut=$_POST['salut'];
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $occupation=$_POST['occupation'];
     $gender=$_POST['gender'];
     $password=$_POST['password'];
     $confirmpw=$_POST['confirmpw'];
     $startdate=$_POST['startdate'];
    
     $errorEmpty = false;
     $errorEmail = false;
     $errorPassword = false;
    
  if(empty($fac_id)||empty($fname)||empty($mname)||empty($lname)||empty($email)||empty($occupation)||empty($password)||empty($confirmpw)||empty($startdate)){
        ?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
      echo "<span class='form-error'> Fill in all fields!</span>";
      $errorEmpty = true;
  }
     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
      echo "<span class='form-error'> Write a valid e-mail address!</span>";
      $errorEmail = true;
  }
    elseif($password != $confirmpw){?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
        echo "<span class='form-error'>Passwords does not match";
        $errorPassword = true;
    }
    
    else{
        
        $img="";
        if($gender=="Male"){
            $img="images/1.jpg";
        }elseif($gender=="Female"){
            $img="images/2.jpg";
        }
    $query="INSERT INTO fac_info (fac_id,salut,fname,mname,lname,email, occupation,pwd,gender,join_dt,image) VALUES ('$fac_id', '$salut','$fname','$mname','$lname','$email','$occupation','$password','$gender','$startdate','$img')";
        $result=mysqli_query($connection,$query);
        
        if($result){
         echo "<span class='form-success'>Personal Details Stored !!</span>";
         echo "<a href='signup2.php?fac_id=".$fac_id."'>Proceed Further</a>";?>     
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
  <?php   }
      else{
          die("query Failed" . mysqli_error($connection));        
      }
    }
}
else{
    echo "There was an error!";
}
?>

<script>
 
  $("#fac_id,#salut,#fname,#mname,#lname,#email,#occupation,#gender,#password,#confirmpw,#startdate").removeClass("input-error");
  
var errorEmpty="<?php echo $errorEmpty; ?>";
var errorEmail="<?php echo $errorEmail; ?>";
var errorPassword="<?php echo $errorPassword; ?>"

  if(errorEmpty == true){
    $("#fac_id,#salut,#fname,#mname,#lname,#email,#occupation,#password,#confirmpw,#startdate").addClass("input-error");
  }

  if(errorEmail==true){
        $("#email").addClass("input-error");
    }
 
  if(errorPassword==true){
        $("#password,#confirmpw").addClass("input-error");
    }
    
  if(errorEmpty == false){
    $("#fac_id,#salut,#fname,#mname,#lname,#email,#occupation,#gender,#password,#confirmpw,#startdate").val("");
  }
</script>