<?php 
include('db_connect_db_new.php');  
session_start();	
if($_SESSION["loggedIn"] == 0)
	 	header("location: index.php");
	$user_ = $_SESSION["user"];

?>
<html>
<head>
<!--  <meta http-equiv = "refresh" content = "10;url= front.php"/>  -->
 <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="navbar3.css">
   <script src= "BootStrap/js/bootstrap.min.js"></script>
  <script src="BootStrap/js/jQuery.min.js"></script>
 <script src="BootStrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="webcam/webmaster/webcam.js"></script>

<style>
html {
  position: relative;
  min-height: 100%;
}body {
  /* Margin bottom by footer height */
  margin-bottom: 40px;
}#head{
	  text-decoration:underline;
}input:required:invalid, input:focus:invalid, input:invalid {
    border-radius: 5px;
    border:soild 1px;

}input:required:valid, input:valid {
    border-radius: 5px;
}input[type='number'] {
    -moz-appearance:textfield;
}input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}.affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
 </style>

</head>

 <body  onload=display_ct();>
 
  <?php
	$success =0;

  if(!$link)
    die("error". mysqli_link_error());


  if($_SERVER["REQUEST_METHOD"] =="POST"){

  if(empty($_POST["fname"]))
	$name_error = "Enter the FirstName Properly!";
   else
        $fname = $_POST["fname"];

    if(empty($_POST["lname"]))
	$name_error = "Enter the LastName Properly!";
   else
        $lname = $_POST["lname"];
 
  if(strlen($_POST["cno"]) != 11)
	$cno_error = "Enter Valid Contact number";
  else
	$cno = $_POST["cno"];

  if(empty($_POST["purpose"]))
	$p_error = "Enter Valid Purpose";
  else
	$p = $_POST["purpose"];
date_default_timezone_set("Africa/Lagos");
$timein = date("h:i:s");
$rid = rand(100000,900000);
$_SESSION["rid"] = $rid ;

$date = date("Y/m/d");
$address = $_POST["address"];
$day = date("d");
$month = date("m");
$year = date("Y");
$meet =$_POST["MeetingTo"];
$department =$_POST["department"];
$gender =$_POST["gender"];

	$sql = "INSERT INTO info_visitor(FirstName, LastName, gender, Contact, Purpose, meetingTo, department, day, 
                                 month, year, Date, TimeIN, ReceiptID,Status,
				 HomeAddress,registeredBy) VALUES ('$fname','$lname','$gender','$cno','$p',
				 '$meet','$department','$day', '$month', '$year', '$date',
				 '$timein','$rid','ONLINE', '$address', 
				 '$user_')";

  if(mysqli_query($link,$sql)) 
	$success =1;   //redirection to the printing page.
  else
	echo "Error: " . $sql . "<br>" . mysqli_error($link);}

//echo "<h4>You will be redirected to the home page after 10 secs !</h4> ";
  if($success == 1)
	header('location: user_profile.php');
   
?>
	<!--   Navigation Menu   -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" id = "li"><?php echo "Logged in as : ".strToUpper($user_);?></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="front.php" id = "li">Home</a></li>
      <li class="active"><a  href="myform.php">Add Guest</a></li>
      <li ><a  id = "li" href="logoutform.php">Checked Out Guests</a></li>
      <li><a id = "li" href="query_data.php">View Data</a></li> 
      <li><a id = "li" href="logout.php">Logout</a></li> 
    </ul>
  </div>
</nav>
<!-- time and date script -->

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
      var date = new Date();
        var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
        var am_pm = date.getHours() >= 12 ? "PM" : "AM";
        hours = hours < 10 ? "0" + hours : hours;
        var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
        time = hours + ":" + minutes + ":" + seconds + " " + am_pm;
document.getElementById('t1').innerHTML = time;
var x = new Date()
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
document.getElementById('t2').innerHTML = x1;
display_c();
 } 
 
</script>


<div style= "float:right; padding-right:8px;padding-top:10px;">
  <p id = "timeDisplay" > Time : <span id="t1"></span>
</p>
  <p id = "dateDisplay"> Date : <span id="t2"></span></p>
</div>	 
<div style="margin-left:110px;padding-bottom:12px">
  <h2>Add New Guest Information</h2>
  <p id = "redBoxSyndrome"><p>
</div>
  <div class="row" style="margin-left:100px">
   <div class="col-sm-6">
    <form class= "myForm" action= "<?php echo $_SERVER["PHP_SELF"];?>" method= "POST" id ="form">
      <?echo $displayError ;?>
	<div class="row">
         <div class="col-sm-6">
          <div class="form-group">
            <label for="fname"> FirstName :</label> 
  <input autocomplete="off" class="form-control" type= "text" name ="fname" placeholder= "Enter Guest's FirstName." required id = "fname"
         oninvalid="this.setCustomValidity(this.willValidate?'':'FirstName is required')" onblur="isEmpty('fname')" onfocus="onfo('fname')"
	 data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
          </div>
</div>
<div class="col-sm-6">
          <div class="form-group">
            <label for="lname"> LastName :</label> 
  <input autocomplete="off" class="form-control" type= "text" name ="lname" placeholder= "Enter Guest's LastName." required id = "lname"
         oninvalid="this.setCustomValidity(this.willValidate?'':'LastName is required')" onblur="isEmpty('lname')" onfocus="onfo('lname')"
	 data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
          </div>
</div>
         </div>
         <div class="row">
         <div class="col-sm-6">
<div class="form-group">
<label for="cno"> Contact No. :</label> <span id = "span" style = "padding-bottom: 5px;float:right;"></span>
 <input maxlength="10" class="form-control" type="number" name="cno" placeholder="Enter Contact Number." required />
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="gender"> Gender:</label> <span id = "span" style = "padding-bottom: 5px;float:right;"></span>
<select class="form-control" required name="gender">
     <option value="">--Select Gender--</option>
     <option value="Male">Male</option>
     <option value="Female">Female</option>
</select>
</div>
</div>
</div>

<div class="form-group">
<label for ="prps">Purpose :</label> 
<input autocomplete="off" class="form-control" type="text" name="purpose" placeholder="Enter Purpose of meeting" required id = "Purpose" 
       oninvalid="this.setCustomValidity(this.willValidate?'':'Enter your Purpose')" maxlength="100000" onblur="isEmpty('Purpose')"
       data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus" />
</div>

  <div class="form-group">
   <label for = "meetingTo">Meeting With <i>(FullName of staff that guest wants to meet!)</i>:</label>
    <input autocomplete="off" class="form-control" type="text" required name = "MeetingTo" id = "meetingTo" 
	   placeholder="FullName of staff that guest wants to meet"       oninvalid="this.setCustomValidity(this.willValidate?'':'Whom do you want to meet ?')" maxlength="30"  onblur="isEmpty('meetingTo')"
	   data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger = "onfocus"/>
   </div>

<div class="form-group">
   <label  for = "department">Staff Department <i>(Department of the staff guest wants to meet!)</i></label>  
   <select class="form-control" required name="department">
     <option  value="">--Select Department--</option>
     <option value="Account">Account</option>
     <option value="IT">IT</option>
     <option value="Releasing">Releasing</option>
     <option value="Container control">Container control</option>
     <option value="Planning and statistics">Planning and statistics</option>
     <option value="Safety">Safety</option>
     <option value="Human Resource">Human Resource</option>
     <option value="Finance">Finance</option>
</select>
     <br>
 </div>

 <div class="form-group">
   <label  for = "addresss">Address :</label>  
     <input autocomplete="off" class="form-control" placeholder= "Enter Guests Address." type= "varchar" maxlength="10000000" name = "address" height="100px" >
     <br>
 </div>
<div>
 <input id="submitme" type="submit" name="submit_post" 
	class="btn btn-success" value="Submit" onclick="return emptys()"/>
 <input autocomplete="off" id="mydata" type="hidden" name="mydata">
		
  </div>
 </form>
</div>

	</body>
</html>
