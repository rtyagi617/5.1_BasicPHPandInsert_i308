https://cgi.luddy.indiana.edu/~rohtyagi/animals.html


# 5.1_BasicPHPandInsert_i308
The purpose of this assignment is to practice creating web-based front ends in PHP to safely expose data from our bands database.

# Part One (20 points)

Step 1: Create a web page animals.html that has the following input elements:

A text box for a user name.

A set of radio buttons for "the animal you are most afraid of" with four suitable choices.

A dropdown for "your favorite animal" that offers four suitable choices. (Use w3schools to figure out how to set up this input type.)

A "Proceed" button. When it is clicked the animals.php script should run.

Step 2: Create a PHP script animals.php that gives the inputs back to the user on a new page in a suitable format.

4 of the 20 points available will be based on making your web page(s) look "nice".

# Part Two (30 points)

Your task is to create a web-based front end for an INSERT query for the Artist table in the artist/band database in your individual account. If necessary, re-run the script provided for Assignment 8 to make sure your tables are correctly set up.

Refer to EXAMPLE | Creating the Bands HTML and PHP Pages as a model for this process.

Step 0: Download this script and run it in your individual database (0 points)  Assignment51.sqlDownload Assignment51.sql

Step 1: Create the artist.html file (10 points)

The artist.html page should contain a form that will allow the user to add new data to the artist table.

Make sure you correctly set the action attribute on your form to insertartist.php

Step 2: Create the insertartist.php file (15 points)

Create the insertartist.php file that takes the data from the artist.html form, connects to the database, and successfully inserts the data into the artist table. A message should be displayed to confirm that the record has been added.

Step 3: Confirm Results in MySQL (5) points)

Log into your MySql account and write a simple select query that proves that your new record has been added to the artist table. Take a screenshot of the output.
