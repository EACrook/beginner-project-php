<?php
    require "header.php";
?>

    <main>
        <div>
            <div class="status-notification">
                <?php
                    if(isset($_SESSION['userId'])) {
                        echo '<p>You are logged in!</p>';
                    } else {
                        echo '<p>You are logged out!</p>';
                    }
                ?>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>