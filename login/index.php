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

<html>
    <head>
        <title>Group Projext</title>
        <link rel="stylesheet" type="text/css" href="style.css">
            </head>
    <body>
        <header>
            <h1>Plant Database</h1>
        </header>
        <nav>
            <ul id="navigation">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="records.html">Recordings</a>
                </li>
                <li>
                    <a href="reserves.html">Reserves</a>
                </li>
                <li>
                    <a href="login.html">
                        <span style="color:white">Login</span>
                    </a>
                </li>
            </ul>
        </nav>
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
        <footer>
            2014 - Group Project - Group 10
            
        </footer>
    </body>
</html>
