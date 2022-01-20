<?php
    require "header.php";
?>

    <main>
        <div>
            <div class="status-notification">
                <h1>Signup</h1>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-confirm" placeholder="Confirm Password">
                    <button type="submit" class="btn  btn-dark">Signup</button>
                </form>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>