<?php
    $title = 'Date and Time';
    include 'includes/header.php'
?>
    <h1>Date and Time Manipulation</h1>

    <?php 
        $date = getdate();
        echo "<p>Today's Date: </p>";
        echo "<p>".$date['mday']. "</p>";
        echo "<p>".$date['mon']. "</p>";
        echo "<p>".$date['year']. "</p>";

        echo "<P>Today's Date: ".$date['mday']."/".$date['mon']."/".$date['year']."</p>";
        echo "<p>Unix time value: ".time()."</p>";
        print date("m/d/y G.i:s<br>", time()). "</br>";
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
        

    ?>
<?php require 'includes/footer.php' ?>