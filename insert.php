<?php
include 'includes/db.php';
if(isset($_POST['submit'])){
    $fac_id=$_POST['fac_id'];
    $nat_conf=$_POST['nat_conf'];
    $nat_jour=$_POST['nat_jour'];
    $internat_conf=$_POST['internat_conf'];
    $internat_jour=$_POST['internat_jour'];
    $title=$_POST['title'];
    $date=$_POST['date'];
    $pname=$_POST['pname'];
    $aname=$_POST['aname'];
    $coname=$_POST['coname'];
    $i_fac=$_POST['i_fac'];
    $h_index=$_POST['h_index'];
    $isbn=$_POST['isbn'];
    $books=$_POST['books'];
    $monographs=$_POST['monographs'];
    $books_chap=$_POST['books_chap'];
    $bks_edited=$_POST['bks_edited'];
    $bks_with_isbn=$_POST['bks_with_isbn'];
    $publisher=$_POST['publisher'];
    $c_index=$_POST['c_index'];
    $snip=$_POST['snip'];
    $sjr=$_POST['sjr'];
    $arti_cases=$_POST['arti_cases'];
    $filed_pat=$_POST['filed_pat'];
    $regd_pat=$_POST['regd_pat'];
    $prsntly_regd=$_POST['prsntly_regd'];
    $deg_awd=$_POST['deg_awd'];
    
    $errorEmpty = false;
    //$errorEmail = false;

    if(empty($fac_id)||empty($nat_conf)||empty($nat_jour)||empty($internat_conf)||empty($internat_jour)||empty($title)||empty($date)||empty($pname)||empty($aname)||empty($coname)||empty($i_fac)||empty($h_index)||empty($isbn)||empty($books)||empty($monographs)||empty($books_chap)||empty($bks_edited)||empty($bks_with_isbn)||empty($publisher)||empty($c_index)||empty($snip)||empty($sjr)||empty($arti_cases)||empty($filed_pat)||empty($regd_pat)||empty($prsntly_regd)||empty($deg_awd)){
        ?> <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
  
<?php 
      echo "<span class='form-error'>Fill in all fields!(If Some data is not available fill with &apos;NA&apos;.)</span>";
      $errorEmpty=true;
    }
    else{

      $query1="INSERT INTO publications (fac_id, nat_con, nat_jour, in_con, in_jour, title, date_of_pub, name_of_pub, author, co_author, impact_factor, h_index, isbn, books, monographs, chapters_in_books, book_edited, book_with_isbn, publisher, citation_index, snip, sjr, articles_or_case, patent_filed, patent_reg, phd_present_stud, phd_degree_awded) VALUES ('$fac_id','$nat_conf','$nat_jour','$internat_conf','$internat_jour','$title','$date','$pname','$aname','$coname','$i_fac','$h_index','$isbn','$books','$monographs','$books_chap','$bks_edited','$bks_with_isbn','$publisher','$c_index','$snip','$sjr','$arti_cases','$filed_pat','$regd_pat','$prsntly_regd','$deg_awd')";
      $result= mysqli_query($connection,$query1);
      if($result){
         echo "<span class='form-success'>Publication Details Stored !!</span>";
         echo "<a href='project.php?fac_id=".$fac_id."'>Proceed Further</a>";
?> <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
  
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
 
  $("#fac_id,#nat_conf,#nat_jou,#internat_conf,#internat_jour,#title,#date,#pname,#aname,#coname,#i_fac,#h_index,#isbn,#books,#monographs,#books_chap,#bks_edited,#bks_with_isbn,#publisher,#c_index,#snip,#sjr,#arti_cases,#filed_pat,#regd_pat,#prsntly_regd,#deg_awd").removeClass("input-error");
  
var errorEmpty="<?php echo $errorEmpty; ?>";

  if(errorEmpty == true){
    $("#fac_id,#title,#date,#pname,#aname,#coname,#i_fac,#h_index,#isbn,#books,#monographs,#books_chap,#bks_edited,#bks_with_isbn,#publisher,#c_index,#snip,#sjr,#arti_cases,#filed_pat,#regd_pat,#prsntly_regd,#deg_awd").addClass("input-error");
  }
  if(errorEmpty == false){
    $("#fac_id,#title,#date,#pname,#aname,#coname,#i_fac,#h_index,#isbn,#books,#monographs,#books_chap,#bks_edited,#bks_with_isbn,#publisher,#c_index,#snip,#sjr,#arti_cases,#filed_pat,#regd_pat,#prsntly_regd,#deg_awd").val("");
  }
</script>