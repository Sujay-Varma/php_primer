<?php
    $title = 'Switch Statement';
    include 'includes/header.php'
?>
    <h1 style = 'color:brown'> Switch Statement </h1>
    <?php 
        $grade = 'B';

        switch($grade){
            case 'A':
                echo "<h2 style = 'color:green'> Very Good</h2>";
                break;
            case 'B':
                echo "<h2 style = 'color:blue'> Good</h2>";
                break;
            default:
                echo "<h2 style = 'color:red'> Failed</h2>";
        }
    ?>
    
    <?php require 'includes/footer.php' ?>