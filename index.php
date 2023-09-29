    <?php
        $title = 'Index'; 
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
        //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>'
    ?>
    <?php
        $name = 'Varma';
        $age = 19;
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo "<h1> My age is: $age </h1>";
    ?>
    <?php require 'includes/footer.php' ?>