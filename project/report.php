

<?php include("validate.php"); 
include("photoupload.php");
include("database/database.php");
include("header.php");

?>

<?php

if (!empty($errors['global'])) {
    echo "<p style='color:red; border: 1px solid #ccc; padding: 10px;'>" . $errors['global'] . "</p>";
} elseif (isset($_POST['report_form'])) {
    echo "<p style='color:green'>Your incident report form is submitted we will get back to you as soon as possible !</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	h1{
        margin-top:20px;
    }
    .option{
        display:flex;
        gap:20px;
    }
    select{
        padding:20px;
        width:190px;
        margin-top:10px;
    }
    .submit button{
        padding:20px;
        width:190px;
        margin-top:10px;
    }
    


</style>
<body>

<div class="container">
<form method="POST" action="" enctype="multipart/form-data" name = "report_form">
   <h1 class="f_h1">REPORT FORM</h1>  
<h1>Who is filing this complaints?</h1>  <hr><small>Note: fields marked with <span>*</span> are required</small>

<div class="conrainer_text">
    <h3>
        If you were the victim of this incident please indicate so below <br>in the event that you are completing this form on behalf <br> of another person or business.
    </h3>
    <div class="option">
        <select name="victim" id="victim">
            <option value="SELECT" id="select">SELECT</option>
            <option value="SELECT" id="YES">YES</option>
            <option value="SELECT" id="NO">NO</option>
        </select>
        <div class="submit"> <button> <a href="formfilling/next1.php">NEXT >></a></button></div>
    </div>
</div>

</form>	
</body>
</html>


