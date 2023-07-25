<?php 
session_start();
if(isset($_GET['dno'])&&isset($_GET['owner']))
{
	$_SESSION['owner']=$_GET['owner'];
$_SESSION['dno']=$_GET['dno'];
}
?>
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;

}

body{

}

.wrapper{
  max-width: 1450px;
  width: 1000px;
  height: 360px;
  background: #fff;
  padding: 60px 45px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 20px;
}

.wrapper .title{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #3aaf9f;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #eeeeee;
  border-radius: 50%;
  cursor: pointer;
  color: #eeeeee;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid #3aaf9f;
  color: #3aaf9f;
}

.wrapper .form .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form .input_field .input{
  width:290px;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
  font-size:18px;
}

.wrapper .form .btn{
  width: 250px;
   height:70px;
  
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
  
}
.btn{
	margin:2px 50px;
}
.wrapper .form .btnn{
  width: 250px;
   height:70px;
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnn{
	margin:-60px 1100px;
}
.wrapper .form .btnnn{
  width: 250px;
   height:70px;
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnnn{
	margin:20px 110px;
}
.wrapper .form .btnnnn{
  width: 150px;
   height:70px;
 
  background: #3aaf9f;
 text-align:center;
  padding: 12px;
  border-radius: 25px;
}
.btnnnn{
	 margin: -80px 500px;
}

.wrapper .form .btn a{
  color: #fff;
}
.wrapper .form .btnn a{
  color: #fff;
}
.wrapper .form  .btnnn a{
  color: #fff;
}
.wrapper .form  .btnnnn a{
  color: #fff;
}

.wrapper .form .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}
input[type=text]{
    width:350px;
    border:5px solid #3aaf9f;
    border-radius:4px;
    
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition:.3s;
	font-size:20px;
  }
  
  input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;
  }
  .button{
	width:280px;
	height:60px;
	border-radius:30px;
	border:2px solid #a8cf45;
    margin:60px 30px;	
}
.button:hover{
	background-color:#a8cf45;
}
.payment{

	width:460px;
	border-radius: 30px;
	margin: 170px 100px;	
	font-family:'Open Sans',times new roman;
	height:500px;
	position: absolute;
    left: 0;
    top: 0;
	
  
}
.buttons{
	width:280px;
	height:60px;
	border-radius:30px;
	border:2px solid #a8cf45;
    margin:60px 30px;	
}
.buttons:hover{
	background-color:#a8cf45;
}	
.dropbtn {
  background-color: transparent;
  color: black;
  padding: 8px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#a8cf45;
  min-width: 104px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.9);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #a8cf45}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #a8cf45;
}	
</style>
</head>
<body class="realestate_version">
<?php include('ownerheader.php')?>
<div class="parallax" style="background-color: #3aaf9f;">
        <div class="container">
		 <div class="row">
		
<form method="post">
<?php
                  include 'config.php';
								$sql1 = "select rentusers.name,rentusers.agreement, maintain.remianing_advance from maintain inner join rentusers on maintain.door_no=rentusers.door_no  where rentusers.door_no='".$_SESSION['dno']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
									
								{ 
							$sl+=1;
								$id=$row1[0];
				                $name=$row1[1];
								$agreement=$row1[2];
								$advance=$row1[3];		     
                             
			?>
			

<div class="wrapper">
  
  <div class="form">
  
  
    <div class="input_field">
	      <label>DOOR NUMBER&nbsp;:&nbsp;<input type="text" class="input" value="<?php $_SESSION['dno']; ?>"></label>

      <label>NAME&nbsp;:&nbsp;<input type="text" class="input" value="<?php echo $name; ?>"></label>
     
    
   <br><br><div class="input_field">

	 
      
      <label>AGREEMENT&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input" value="<?php echo $agreement; ?>"><label>
<label>ADVANCE&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input" value="<?php echo $advance; ?>"></label>
    </div>
  

	  <div class="btnnn" style="font-size:20px;width:200px;">
	<a href="#?dno=<?php echo $dno; ?>&owner=">PAID</a>
	</div>
		  <div class="btnnnn" style="font-size:20px;width:200px;">
	<a href="#?dno=<?php echo $dno; ?>&owner=">CANCEL</a>
    </div>
	 
  </div>
</div>

</div>

</div>
</div>
</div>
<?php
							}
				}
								
													
	?> 
</form>

</body>
</html>