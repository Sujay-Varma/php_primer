<?php
    $title = 'String Manipulation';
    include 'includes/header.php'
?>
    <h1 style='color:blue'> String Operations </h1>
    <?php 
        //Concatenation of strings
        echo "<h3> String Concatenation: </h3>";
        $a = "He Watches a lot of anime";
        $b = "and reads manga too!";
        $n = "ben ten";
        echo $a; echo "</br>";
        echo $b; echo "<br/>";
        echo $a . " " . $b;
        echo "</hr>";
        //String Transformation
        echo "<h3> String Transformation: </h3>";
        echo "upper case 1st letter of word: ".ucfirst($n)."</br>";
        echo "upper case 1st letter of every word in a sentence: ".ucwords($a)."</br>";
        echo "Complete upper case: ".strtoupper($n)."</br>";
        echo "Complete lower case: ".strtolower("BEN 10")."</br>";
        echo "</hr>";
        echo "<h4> Repeat String: ".str_repeat('a',6)."</h4>";
        echo "<h4> Repeat String with Transformation: ".strtoupper(str_repeat('a',6))."</h4>";
        echo "<h4> Sub String of (ben ten): ".substr($n,0,6)."</h4>";
        echo "<h4> Position of csertain string: ".strpos($n,'n')."</h4>";
        echo "<h4> String length of (ben ten): ".strlen($n)."</h4>";
        echo "<h4> char in string, 'e' in (ben ten): ".strchr($n,'e')."</h4>";
        echo "<h4> Without trim: " . 'A' . ' B C D ' . 'E' ."</h4>";
        echo "<h4> With trim: " . 'A' . trim(' B C D ') . 'E' ."</h4>";
        echo "<h4> With left trim: " . 'A' . ltrim(' B C D ') . 'E' ."</h4>";
        echo "<h4> With right trim: " . 'A' . rtrim(' B C D ') . 'E' ."</h4>";
        echo "<h4> String replace in 'a lot of - less': " .str_replace('a lot of', 'less', $a). "</h4>";

    ?>
<?php require 'includes/footer.php' ?>