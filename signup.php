
<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script >
          $(document).ready(function(){
                $("form").submit(function(event){
                      event.preventDefault();
                      var fac_id =$("#fac_id").val();
                      var salut = $("#salut").val();
                      var fname = $("#fname").val();
                      var mname = $("#mname").val();
                      var lname = $("#lname").val();
                      var email = $("#email").val();
                      var occupation = $("#occupation").val();
                      var password = $("#password").val();
                      var confirmpw = $("#confirmpw").val();
                      var gender = $("#gender").val();
                      var startdate = $("#startdate").val();
                      var submit=$("#submit").val();
                      $(".form-message").load("reg_user.php",{
                          fac_id:fac_id,
                          salut:salut,
                          fname:fname,
                          mname:mname,
                          lname:lname,
                          email:email,
                          occupation:occupation,
                          password:password,
                          confirmpw:confirmpw,
                          gender:gender,
                          startdate:startdate,
                          submit:submit
                      });

                });
          });
        </script>
    </head>
    <body>
<ul>
  <div id="brand">
  <li><a class="active" href="index.php">DMCE</a></li>
  </div>
  <div class="other" id="right">
  <li><a href='signup.php'>Sign Up</a></li>
  </div>
</ul>

                <form action="reg_user.php" method="POST" enctype="multipart/form-data">
                    <h2>Personal Information</h2>
                    <br/>
                    <p class="form-message"></p>
                    <br/>
                    <label for="fac_id">Enter Faculty ID:</label>
                    <input type="number" id="fac_id" name="fac_id" >
                    <br />
                    <label for="salut">Salutation</label>
                    <select name="salut" id="salut">
                          <option value="Dr." >Dr.</option>
                          <option value="Mr." >Mr.</option>
                          <option value="Ms." >Ms.</option>
                          <option value="Mrs." >Mrs.</option>
                      </select>
                    <br/>
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" >
                    <br />
                    <label for="mname">Middle Name</label>
                    <input type="text" id="mname" name="mname" >
                    <br />
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" >
                    <br />
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" >
                    <br />
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation" >
                    <br />
                   
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" >
                    <br />
                    <label for="confirmpw">Confirm Password</label>
                    <input type="password" id="confirmpw" name="confirmpw" >
                    <br />
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                          <option value="Male" >Male</option>
                          <option value="Female" >Female</option>
                      </select>
                    <br />
                      <label for="startdate">Joining Date:</label>
                      <input type="date" name="startdate" id="startdate">
                    <br />
                    <button  type="reset" >Reset</button>
                    <button  type="submit" id="submit" name="submit" >Next</button>

                </form>
    </body>
</html>