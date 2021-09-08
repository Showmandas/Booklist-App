<?php

include 'dbcon.php';


if(isset($_POST['query'])){
    $inptxt=$_POST['query'];
    $query="select title,author,publication from booklists where title LIKE '%$inptxt%'";
    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)>0){
        while($r=mysqli_fetch_array($result)){
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$r['title']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Record </p>";
    };
};

?>