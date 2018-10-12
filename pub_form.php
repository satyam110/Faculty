<?php 
   $fac_id= $_GET['fac_id']; 
?>
<!DOCTYPE html>
<html>  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script >
          $(document).ready(function(){
                $("form").submit(function(event){
                      event.preventDefault();
                      var fac_id = <?php echo $fac_id;?>;
                      var nat_conf = $("#nat_conf").val();
                      var nat_jour = $("#nat_jour").val();
                      var internat_conf = $("#internat_conf").val();
                      var internat_jour = $("#internat_jour ").val();
                      var title = $("#title").val();
                      var date = $("#date").val();
                      var pname = $("#pname").val();
                      var aname = $("#aname").val();
                      var coname = $("#coname").val();
                      var i_fac = $("#i_fac").val();
                      var h_index = $("#h_index").val();
                      var isbn = $("#isbn").val();
                      var books = $("#books").val();
                      var monographs = $("#monographs").val();
                      var books_chap = $("#books_chap").val();
                      var bks_edited = $("#bks_edited").val();
                      var bks_with_isbn = $("#bks_with_isbn").val();
                      var publisher = $("#publisher").val();
                      var c_index = $("#c_index").val();
                      var snip = $("#snip").val();
                      var sjr = $("#sjr").val();
                      var arti_cases = $("#arti_cases").val();
                      var filed_pat = $("#filed_pat").val();
                      var regd_pat = $("#regd_pat").val();
                      var prsntly_regd = $("#prsntly_regd").val();
                      var deg_awd = $("#deg_awd").val();
                      var submit=$("#submit").val();
                      $(".form-message").load("insert.php",{
                            fac_id:fac_id,
                            nat_conf:nat_conf,
                            nat_jour:nat_jour,
                            internat_conf:internat_conf,
                            internat_jour:internat_jour,
                            title:title,
                            date:date,
                            pname:pname,
                            aname:aname,
                            coname:coname,
                            i_fac:i_fac,
                            h_index:h_index,
                            isbn:isbn,
                            books:books,
                            monographs:monographs,
                            books_chap:books_chap,
                            bks_edited:bks_edited,
                            bks_with_isbn:bks_with_isbn,
                            publisher:publisher,
                            c_index:c_index,
                            snip:snip,
                            sjr:sjr,
                            arti_cases:arti_cases,
                            filed_pat:filed_pat,
                            regd_pat:regd_pat,
                            prsntly_regd:prsntly_regd,
                            deg_awd:deg_awd,
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
  <li><a href='pub_form.php'><strong>Publication Form</strong></a></li>
  </div>
</ul>

                <form action="insert.php" method="post">
                    <h2>Publications Information</h2>
                    <br/>
                    <p class="form-message"></p>
                    <br/>
                    <!--<label for="fac_id">Enter Faculty ID:</label>
                    <input type="number" id="fac_id" name="fac_id" >
                    <br />-->
                    <label><strong>National</strong></label>
                    <label for="nat_conf">Conference<span>*</span></label>
                    <select id = "nat_conf" name="nat_conf" >
                        <option value = "Yes">Yes</option>
                        <option value = "No">No</option>
                    </select>
                    <label for="nat_jour">Journal<span>*</span></label>
                     <select id = "nat_jour" name="nat_jour" >
                        <option value = "Yes">Yes</option>
                        <option value = "No">No</option>
                    </select>
                    <br />
                    <label><strong>International</strong></label>
                    <label for="internat_conf">Conference<span>*</span></label>
                    <select id = "internat_conf" name="internat_conf" >
                        <option value = "Yes">Yes</option>
                        <option value = "No">No</option>
                    </select>
                    <label for="internat_jour">Journal<span>*</span></label>
                     <select id = "internat_jour" name="internat_jour" >
                        <option value = "Yes">Yes</option>
                        <option value = "No">No</option>
                    </select>
                    <br />
                    <label><strong>Papers</strong></label>
                    <label for="title">Title<span>*</span></label>
                      <input type="text" id="title" name="title" >
                    <br />
                      <label for="date">Date of Publication<span>*</span></label>
                      <input type="date" id="date" name="date">
                    <br />
                      <label for="pname">Name of Publisher<span>*</span></label>
                      <input type="text" id="pname" name="pname" >
                    <br />
                      <label for="aname">Author Name<span>*</span></label>
                      <input type="text" id="aname" name="aname" >
                    <br />
                      <label for="coname">Co-Author<span>*</span></label>
                      <input type="text" id="coname" name="coname" >
                    <br />
                      <label for="i_fac">Impact Factor<span>*</span></label>
                      <input type="text" id="i_fac" name="i_fac" >
                    <br />
                      <label for="h-index">h-index<span>*</span></label>
                      <input type="text" id="h_index" name="h_index" >
                    <br />
                      <label for="isbn">ISBN NO<span>*</span></label>
                      <input type="text" id="isbn" name="isbn" >
                    <br />
                    	 <label for="books">Books<span>*</span></label>
                      <textarea id="books" name="books"  rows="5" cols="15"></textarea>
                    <br />
                      <label for="monographs">Monographs<span>*</span></label>
                      <textarea id="monographs" name="monographs"  rows="5" cols="15"></textarea>
                    <br />
                      <label for="books_chap">Chapter in Books<span>*</span></label>
                      <textarea id="books_chap" name="books_chap"  rows="5" cols="15"></textarea>
                    <br />
                      <label for="bks_edited">Books Edited<span>*</span></label>
                      <textarea id="bks_edited" name="bks_edited"  rows="5" cols="15"></textarea>
                    <br />
                    	 <label for="bks_with_isbn">Books with ISBN/ISSN Number<span>*</span></label>
                      <input type="text" id="bks_with_isbn" name="bks_with_isbn" >
                    <br />
                    	 <label for="publisher">Publisher<span>*</span></label>
                      <input type="text" id="publisher" name="publisher" >
                      <!--<textarea id="publisher" name="publisher" rows="5" cols="15"></textarea>-->
                    <br />
                      <label for="c_index">Citation Index<span>*</span></label>
                      <input type="text" id="c_index" name="c_index" >
                    <br />
                    	 <label for="snip">SNIP<span>*</span></label>
                      <input type="text" id="snip" name="snip" >
                    <br />
                    	 <label for="sjr">SJR<span>*</span></label>
                      <input type="text" id="sjr" name="sjr" >
                    <br />
                    	 <label for="arti_cases">Articles/Case studies prepared<span>*</span></label>
                      <input type="text" id="arti_cases" name="arti_cases" >
                      <!--<textarea  id="arti_cases" name="arti_cases" rows="5" cols="15"></textarea>-->
                    <br />
                    
                    <label><strong>Patents</strong></label>
                    	 <label for="filed_pat">Filed Patents<span>*</span></label>
                      <input type="text" id="filed_pat" name="filed_pat" >
                      <!--<textarea  id="filed_pat" name="filed_pat" rows="5" cols="15"></textarea>-->
                      <br />
                      <label for="regd_pat">Registered Patents<span>*</span></label>
                      <input type="text" id="regd_pat" name="regd_pat" >
                      <!--<textarea  id="regd_pat" name="regd_pat" rows="5" cols="15"></textarea>-->
                    	 <br />
                    	 
                    <label><strong>PhD Students</strong></label>
                    	 <label for="prsntly_regd">Presently Registered<span>*</span></label>
                      <input type="text" id="prsntly_regd" name="prsntly_regd" >
                      <!--<textarea  id="prsntly_regd" name="prsntly_regd" rows="5" cols="15"></textarea>-->
                      <br />
                      <label for="deg_awd">Degree awarded<span>*</span></label>
                      <input type="text" id="deg_awd" name="deg_awd" >
                      <!--<textarea  id="deg_awd" name="deg_awd" rows="5" cols="15"></textarea>-->
                    	 <br />
                    	 
                    <button  type="reset" >Reset</button>
                    <button id="submit" type="submit" name="submit" >Next</button>
                    

                </form>
        
</body>
</html>
