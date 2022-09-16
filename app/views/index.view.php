<?php require('partials/head.php');?>
    
    <p>Hi!</p>

    <?php if (isset($_SESSION["login"])){
        echo "<h2> Welcome, " . $_SESSION["login"] . "!</h2>";
    }?>

<?php require('partials/footer.php');?>
