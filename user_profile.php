<?php 
include('db_connect_db_new.php');  
  session_start();	$r_id = $_SESSION['rid'];
	$sql = "SELECT * FROM info_visitor WHERE ReceiptID = $r_id";
  $re = mysqli_query($link, $sql);
  $result = mysqli_fetch_array($re, MYSQLI_ASSOC);
	
?>
<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
    <style>
	#col-1{

		margin-left:-10%;
		
	}
	span {
		text-underline-position: right;
		font-size: 20px;
	}
	@media print {
  /* style sheet for print goes here */
  .hide-from-printer{  display:none; }
}

	.row{margin-top: 5%;margin-left: 20%;}
  @page { 
  
    size: A4 landscape;
    float: none;
    width: auto; 
  	border: 0; 
  	margin: 0 5%; 
  	padding: 0; 
  	font-size:13pt;
  }
  .navbar-nav li.active a {
     color: #fff !important;
     background-color:#29292c !important;
    }
   .navbar {
    margin-bottom: 0;
    background-color:##ff4d4d;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 2px;
    opacity:0.9;
    color: #000000;
  }

  #background{
    position:absolute;
    z-index:0;
    background:white;
    display:block;
    min-height:50%; 
    min-width:50%;
    color:yellow;
}

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:lightgrey;
    font-size:100px;
    transform:rotate(200deg);
    -webkit-transform:rotate(350deg);
}


</style> 
</head>
  <body>
    <div  class="row">
      <div class="col-sm-8">
      <!-- <p id="bg-text">Background</p> -->
      <!-- <div class="col-sm-8" > -->
        <div style="width:678px;margin-top:-40px;text-align:center;"><h3><b>FIVE STAR LOGISTICS GUESTS TAG</b></h3></div>
        <br>
        <span id="col-1" name="main"><b>Date :</b> <?php echo $result['Date'];?>&nbsp;&nbsp;
        <b>Time In :</b> <?php echo $result['TimeIN'];?></span><br>
          <span id="col-1" name="main"><b>FullName :</b>&nbsp;
          <?php echo $result['FirstName'].' '.$result['LastName'];?>&nbsp;&nbsp;
          <b>Gender :</b><?php echo $result['gender'];?></span><br>
          <span id="col-1"><b>Tag ID :</b>&nbsp;
            <?php echo $result['ReceiptID'];?></span><br>
        <span id="col-1"><b>Contact No :</b>&nbsp;
          <?php echo $result['Contact']?><br>
          <span id="col-1"><b>Purpose of Visit :</b>&nbsp;
            <?php echo $result['Purpose'];?></span><br>
          <span id="col-1"><b>Whom to Meet :</b>&nbsp;
            <?php echo $result['meetingTo'];?></span><br>
            <span id="col-1"><b>Department of Whom to Meet :</b>&nbsp;
            <?php echo $result['department'];?></span><br>
          <span id="col-1"><b>Address :</b>&nbsp;
            <?php echo $result['HomeAddress'];?></span><br>
        </span>
        
        </div>
    </div>
     <p style="text-align:center;padding-top:20px;">NOTE: <i><b>This Guest's tag is only valid for 2 hours, please return it at the exit when checking out!</b></i></p>
     <p style="text-align:center;padding-top:1px;"><i>Five Star Logistics @ <?php echo date("Y/m/d");?></i></p>
    <br>
    <br>
    <div style="text-align:center;"> <button type="button" id="button" class="hide-from-printer"
        onclick="window.print()" value="Print Badge">Print Guest Tag</button> <a type="button"
        id="button" class="hide-from-printer" href="front.php">Back To Home</a></div>
    <a type="button" id="button" class="hide-from-printer" href="front.php"> </a>
  </body>
</html>
