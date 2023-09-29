<?php
    $title = 'If-Else Statement';
    include 'includes/header.php'
?>
    <h1 style = 'color:violet'>If Statement</h1>
    <?php
        echo "<h2>If-Else Statement</h2>";
        $grade = 85;
        if($grade >= 35){
            echo "<h3 style='color: green'>You Have Passed</h3>";
        }
        else{
            echo "<h3 style='color: red'>You Have Failed</h3>";
        }
    ?>
<?php require 'includes/footer.php' ?>