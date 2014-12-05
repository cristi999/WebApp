<!-- EDIT RESERVES PAGE [reserves/edit.php]
   - Displays a list of form fields which have been pre-populated by data of the reserve that the user has selected to update
        > FIELDS REQUIRED <
            > Reserve Name (text field)
            > Location (text field)
            > Description (text area)
            > Update Button (submit)
   - The data in the form fields will need to be validated both client side and server side (Javascript & PHP)
     before being sent to the database
-->

<?php require_once("../include/header.php"); ?>

    <section>
        <form>
            <p>This will be the form the admin sees when the login to edit, add, update or delete the reserves.</p>
            Reserve Name
            <p>
            <input type="text" name="reserveName">
            </p>
            <br>
            Location
            <p>
            <input type="text" name="location">
            </p>
            <br>
            Description
            <p>
            <input type="textarea" name="description">
            </p>
            <br>
            <input type="submit" value="Update">
        </form>
    </section>

<?php require_once("../include/footer.php"); ?>