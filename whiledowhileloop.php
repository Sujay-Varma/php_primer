<?php
    $title = 'While and Do-While';
    include 'includes/header.php'
?>
    <h1 style = 'color:blue'>While Loop</h1>
    <?php 
        $grade = 0;
        while($grade < 10){
            echo "<p1>$grade is less than 10</p>";
            $grade++;
        }
        echo '<p style="color:red">It exits the loop when $grade >=10</p>';
    ?>
    <h1 style = 'color:violet'>Do-While Loop</h1>
    <?php
        $count = 0; 
        do{
            echo "<p>Do-While Loop</p>";
            $count++;
        }while($count<10)
    ?>
    
    <?php require 'includes/footer.php' ?>