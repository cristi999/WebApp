<!-- VIEW RESERVES PAGE [reserves/index.php]
   - Displays a table containing a list of all the reserves and information about them
   - Database Table Name: reserves
   - Database Table Column Names: 
        | rsv_id | rsv_name | rsv_loc | rsv_desc |
   - Reserves will probably be displayed in alphabetical order [A-Z]
   - Must include an option to add (create) a new reserve
   - Must include options to update or delete a reserve (probably at the end of each table row)
-->

<html>
    
    <head>
        <title>Group Projext</title>
        <link rel="stylesheet" type="text/css" href="style.css">
            </head>
    
    <body>
        <header> <h1>Plant Database</h1>
        </header>
        <nav>
            <ul id="navigation">
                <li><a href="index.html">Home</a></li>
                <li><a href="records.html">Recordings</a></li>
                <li><a href="reserves.html"><span style="color:white">Reserves</span></a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
        <section>
            
            <table id="reserve">
                <tr>
                    <th>ID</th>
                    <th>Reserve Name</th>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>123</td>
                    <td>Aberystwyth Reserve</td>
                    <td>53.66,1.01</td>
                    <td>Wet, Green</td>
                </tr>
                <tr>
                    <td>124</td>
                    <td>Borth Reserve</td>
                    <td>40.21, 2.33</td>
                    <td>Lots of leaves</td>
                </tr>
                <tr>
                    <td>125</td>
                    <td>Slough Reserve</td>
                    <td>35.34, -7.25</td>
                    <td>Vibrant colours</td>
                </tr>
                <tr>
                    <td>126</td>
                    <td>Abermad Reserve</td>
                    <td>52.30, -4.20</td>
                    <td>Sloppy ground</td>
                </tr>
            </table>
            <br>
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
        <footer>
            2014 - Group Project - Group 10
        </footer>
    </body>

</html>
