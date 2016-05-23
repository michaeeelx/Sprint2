<html>
<?php include 'main.php';?>
   <head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!--<link href="css/StyleCK.css" rel="stylesheet">-->

      <title>PHP -- SRS logged in as <?php echo $_SESSION['login_user'];?> </title>
    
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
			background-image:url("images/rainbow.png");
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#333333 solid 1px;
         }
		 
		 button[type=button]{
		 width:300px;
		 height:50px;
		 }
		 
		 input[type=submit]{
			 width:300px;
			 height:40px;
		 }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
   <div id="header">
   <div style="max-width:1200px;
	    margin-top:10px;
	    margin-left: auto;
	    margin-right: auto;
	    margin-bottom:50px;
	    background-color: #F8F8FF;
	    border: 6px outset #FF0000;
	    border-radius: 15px;
        text-align:center;">
     <h1><div align="center"><img src="images/pharmacy.jpg" alt="Pharmacy" title="Pharmacy" width="450" height="180 " "font-family:verdana"/><br/>People Health Pharmacy</h1></div>
	 </div>
	</div>

	
   </body>
</html>
