<?php
	include('topmenu.php');
?>
<head>
    <style>
      p{
        text-align: center;
		font-size: 2em;
	  }
	  
	  #p1{
        text-align: center;
		font-size: 3em;
		color : #336666;
	  }


	  #img_smartphone img{
	   height: 400px;
	   margin: auto auto;
	   display: block;
	 }

	
	 #img_labtop img{
        height: 450px;
		margin: auto auto;
		display: block;
	  }
	
	body{
		background-image:url('/images/bb.jpg');
    	background-size : cover; 
	}





    </style>
</head>
<body>
			<div id="p1"><b>Category</b></div>
			<br>
			<div id="img_smartphone">
			<a href="itemlist.php?category=CellPhone">
			<p>Smart Phones </p>
			</a>	
			<br>
			<img style = "max-width:900px;max-height:200px;" src = "images/aaa.png">
			<br><br>
			</div>
		
			<div id="img_labtop">
			<a href="itemlist.php?category=Laptop">
			<br>
			<p>Labtop </p>
			</a>
			<img style = "max-width:900px;max-height:300px;" src="images/bbb.png"/>
    		</div>
</body>
	
</html>


		<!--span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/AppleiPhone4s.jpg" style="max-width:350px;max-height:350px;width:auto; height:auto;" />
			<img class="top" src="images/MicromaxKnight2E471.jpg" style="max-width:350px;max-height:350px;width: auto;height: auto;" /></a>
		</span>

		<span id="crossfade">
			<a href="itemlist.php?category=CellPhone">
			<img class="bottom" src="images/MicrosoftLumia640XL.jpg" style="max-width:350px;max-height:350px;width:auto; height: auto;" />
			<img class="top" src="images/XperiaT3White.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>

		<span id="crossfade">
			<a href="itemlist.php?category=Laptop">
			<img class="bottom" src="images/DellVostro153558.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" />
			<img class="top" src="images/HPProbook6570.jpg" style="max-width:350px;max-height:350px;width:auto;height: auto;" /></a>
		</span>
	</body>
</html>