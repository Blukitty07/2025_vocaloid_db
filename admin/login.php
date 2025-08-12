<div class = "admin-form">
	<h2>Login</h2>

<form action="index.php?page=../admin/adminlogin" method="post">
    <p><input class="rounded" name="username" /></p>
    <p><input class="rounded" name="password" type="password"/></p>

    <?php
    
    if (isset($_GET['error'])) {
        ?>
        <span class="error">
            <?php echo $_GET['error']?>
    </span>

    <?php
    }
    ?>

    <p><input class="rounded form-submit" type="submit" name="login" value="Log in" /></p>

</form>

</div>