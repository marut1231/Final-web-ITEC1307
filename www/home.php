<?php
	include('topmenu.php');
?>
<head>


    <style>
    body{
        background-image:url('/images/13.jpg');
        background-size : cover;
    }
    #button{
        width: 20%;     
        height: 20%;     
        border-radius: 15px;     
        font-size: 30px;     
        font-weight: bold;
        color:  #CC33FF; 
        margin: auto auto;
        display : block;
    }

    #p{
        text-align: center;
		font-size: 8em;
		color : #CC33FF;
    }


    </style>
</head>

<body>

<br>

<div id = "p">Welcome to BMK Online</div>  
<a href="index.php">
<button id = button type="submit" class="btn btn-default">Enter Site</button>
</a>

</body>
</html>