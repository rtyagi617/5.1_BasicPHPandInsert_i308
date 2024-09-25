<?php
        $con=mysqli_connect("db.luddy.indiana.edu", 
        "i308s24_rohtyagi", 
        "my+sql=i308s24_rohtyagi",                      "i308s24_rohtyagi");
        // Check Connection
        if (!$con) {
                    die("failed to connect to MySql: " .
                            my_sqli_connect_error());
        } 

        // Assign input to variables
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $instrument = $_POST['instrument'];
        $gender = $_POST['gender'];

        // Run Query
        $sql = "INSERT INTO p_artist(fname,lname,dob,instrument,gender) VALUES ('$fname','$lname','$dob','$instrument','$gender')";
        if (mysqli_query($con, $sql)) {
                echo "1 record added";
        } else {
                die('SQL Error: '.mysqli_error($con));
        }

        //Close the Connection
        mysqli_close($con)
?>
