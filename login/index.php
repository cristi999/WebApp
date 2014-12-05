<!-- LOGIN PAGE [login/index.php]
   - Displays a login form to the user, requires an administrator login id and password
        > FIELDS REQUIRED <
            > Login ID (text field)
            > Password (password field)
            > Login Button (submit)
   - The data in the form fields will need to be validated both client side and server side (Javascript & PHP)
        > Client side, check for empty fields
        > Server side, check that the login id exists (is valid) and check the password is correct
-->

<?php require_once("../include/header.php"); ?>

    <section>
        <form>
            Login ID:
            <p>
            <input type="text" name="login">
            </p>
            <br>
            Password:
            <p>
            <input type="password" name="password">
            </p>
            <br>
            <input type="submit" value="Submit">
        </form>
    </section>
        
<?php require_once("../include/footer.php"); ?>
