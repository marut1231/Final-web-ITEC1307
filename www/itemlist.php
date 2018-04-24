<?php
include('topmenu.php');
$connect = mysqli_connect("localhost", "root", "", "shopping") or
die("Please, check your server connection.");
$category=$_REQUEST['category'];
$query = "SELECT item_code, item_name, description, imagename, price FROM
products " .
"where category like '$category' order by item_code";
$results = mysqli_query($connect, $query) or die(mysql_error());
echo "<table border=\"0\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    if ($x <= 3) // #1
    {
    $x = $x + 1;
    extract($row);
    echo "<div class='col-xs-6 col-md-2'>";
    echo "<a href=itemdetails.php?itemcode=$item_code class='thumbnail'>"; // #2
    echo '<img src=' . $imagename . ' style="max-width:230px;max-height:180px;
    width:auto;height:auto;"></img><br/>';
    echo $item_name .'<br/>';
    echo '$'.$price .'<br/>';
    echo "</a>";
    echo "</div>";
    }
    else
    {
    $x=1;
    echo "</tr><tr>";
    }
    }
    echo "</table>";
    ?>

<head>


<style>
body{
    background-color : #e5cace ;
}

</style>
</head>


    </body>
    </html>