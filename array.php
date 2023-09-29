<?php
    $title = 'Arrays';
    include 'includes/header.php'
?>
    <h1 style='color:brown'>Arrays</h1>
    <?php 
        $ar = array(1,2,3,4,5,6,7,8,9,10);
        echo $ar[5];
        echo "<p>$ar[9]</p>";
        $size = count($ar);
        echo "<P>Array Size is: $size</p>";
        echo "<h3>Array Elements</h3>";
        for($i=0;$i<$size;$i++){
            echo '<p>Array element'. $i+1 .": $ar[$i]</p>";
        }

    ?>
<?php require 'includes/footer.php' ?>