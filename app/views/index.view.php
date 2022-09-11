<?php require('partials/head.php');?>
    
    <p>Hi!</p>

    <div class="container">
        <form action="/signup" method="post" class="signUpForm">
            <label for="login">Login</label>
            <input type="text" class="text_input" name="login" placeholder="Enter here your login">
            <label for="password">Password</label>
            <input type="password" class="text_input" name="password" placeholder="Enter here your password">
            <label for="password_check">Confirm you password</label>
            <input type="password" class="text_input" name="password_check" placeholder="Please confirm your password">
            <input type="submit" class="submit_input" value="register!">
        </form>
    </div>

<?php require('partials/footer.php');?>
