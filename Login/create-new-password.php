<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_GET["selector"]) && isset($_GET["validator"])) {
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            ?>
                    <form action="./reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator ?>">
                        <input type="password" name="pwd" placeholder="Enter a new password...">
                        <input type="password" name="pwd" placeholder="Repeat new password...">
                        <button type="submit" name="reset-password-submit"> Reset password </button>

                    </form>
            <?php
                } else {
                    echo "Could not validate your request!";
                }
            } else {
                echo "Could not validate your request!";
            }
            ?>
        </section>
    </div>
</main>
