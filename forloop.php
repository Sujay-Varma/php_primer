<?php
    $title = 'For Loop';
    include 'includes/header.php'
?>
    <h1 style='color:blue'> For Loop </h1>
    <?php 
        for($count=0;$count<5;$count++){
            echo "<p> Hello World </p>";
        }
        for($count=1;$count<=6;$count++){
            echo "<p>The Count is: $count</p>";
            //echo "<br/>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>