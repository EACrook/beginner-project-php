<?php
    require "header.php";
?>

    <main>
        <div>
            <div class="status-notification">
                <h1>Signup</h1>
                <?php
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == "emptyfields") {
                            echo '<p>Fill in all fields!</p>';
                        } elseif($_GET['error'] == "invalidmail") {
                            echo '<p>Invalid email!</p>';
                        } elseif($_GET['error'] == "invaliduid") {
                            echo '<p>Invalid username!</p>';
                        } elseif($_GET['error'] == "pwdcheck") {
                            echo '<p>Your passwords do not match!</p>';
                        } elseif($_GET['error'] == "usrtaken") {
                            echo '<p>Username already taken!</p>';
                        }

                    } elseif($_GET['signup'] == "success") {
                        echo '<p>Signup successful!</p>';
                    }
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-confirm" placeholder="Confirm Password">
                    <button type="submit" name="signup-submit" class="btn  btn-dark">Signup</button>
                </form>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>