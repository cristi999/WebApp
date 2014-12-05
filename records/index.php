<!-- VIEW RECORDINGS PAGE [records/index.php]
   - Displays a table containing all of the recordings stored in the database.
   - Database Table Name: recordings
   - Database Table Column Names:
     | rec_id | rec_session_id | users_name | users_phone | users_email | time | species | location | abundance | add_info | scene_photo | specimen_photo |
   - Recordings must be displaced in alphabetical order of latin name
   - Must include a drop down menu to select a reserve, table will then only contain recordings from the specified reserve
   - Must include an option to sort by date (Oldest - Newest & Newest - Oldest)
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
                    <a href="records.html">
                        <span style="color:white">Recordings</span>
                    </a>
                </li>
                <li>
                    <a href="reserves.html">Reserves</a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
            </ul>
        </nav>
        <section>
            <p>Select a Reserve</p>
            <select>
                <option value="aberystwyth">Aberystwyth</option>
                <option value="borth">Borth</option>
                <option value="slough">Slough</option>
                <option value="abermad">Abermad</option>
            </select>
            <br>
            <br>
            <table id="recording">
                <tr>
                    <th>ID</th>
                    <th>Recording ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Time</th>
                    <th>Species</th>
                    <th>Location</th>
                    <th>Abundance</th>
                    <th>Additional Info</th>
                    <th>Scene Photo</th>
                    <th>Specimen Photo</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>11</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>13</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>14</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
        <footer>
            2014 - Group Project - Group 10
            
        </footer>
    </body>
</html>
