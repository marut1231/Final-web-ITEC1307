<?php
    include('topmenu.php');
?>
<html>
<head>

<style>
  #scle{
    text-align: center;
    font-size:2em;
    color : #336666;}
  body{
    background-image:url('/images/dd.png');
    background-size : cover;    
      }
  #scle2{
    text-align: center;
    color : #336666;}
  #button1{
    width: 10%;     
    height: 10%;     
    border-radius: 10px;     
    font-size: 20px;     
    font-weight: bold;
    color: #336666; 
  }
</style>

</head>
    <body>


    <form action="validateuser.php" method="post">
    <table border="0" cellspacing="1" cellpadding="3">

    <div id = scle > <b><br>Login<br></b>
    </div>

    <div id = scle2>
    <label for="exampleInputEmail1" style="color: aquamarine" >Email address</label>
    <form action="validateuser.php" method="post">
  <div>
    <input type="email" class="form-group" id="exampleInputEmail1" placeholder="Email" name="emailaddress">
  </div>
  <label for="exampleInputPassword1" style="color: aquamarine" >Password</label>
  <div class="form-group">
    
    <input type="password" class="form-group" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>  
  <button id = button1 type="submit" class="btn btn-default">Login</button>
</form>
</html>

<script language="javascript">
function js_popup(theURL,width,height) { //v2.0
	leftpos = (screen.availWidth - width) / 2;
    	toppos = (screen.availHeight - height) / 2;
  	window.open(theURL, "viewdetails","width=" + width + ",height=" + height + ",left=" + leftpos + ",top=" + toppos);
}
</script>

<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>or</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onClick="js_popup('validatesignup.php',900,400); return false;" title="Code PHP Popup">Signup</a>