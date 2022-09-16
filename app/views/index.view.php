<?php require('partials/head.php');?>
    
    <p>Hi!</p>

    <?php if (isset($_SESSION["user_id"])){
        echo "<h2> Welcome, " . $_SESSION["user_id"] . "!</h2>";
    }?>

<?php require('partials/footer.php');?>
