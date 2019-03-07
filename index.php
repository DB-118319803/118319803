<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--code sourced from w3 schools-->
        <style>
            ul {
            list-style-type: none;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;
            padding: 0;
            width: 300px;
            background-color: red;
            }

            li a {
            text-align: center;
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            }

            /* Change the link color on hover */
            li a:hover {
            background-color: black;
            color: white;
            }
</style>
    </head>
    <body>
        <?php
        echo '<h1>Home</h1>
        <ul>
            <li><a href="cv.html">Curriculum Vitae</a></li>
            <li><a href="tiltedpage_scroll_demo.html">Interests</a></li>
            <li><a href="consulting.html">Consulting Services</a></li>
            <li><a href="eBus1.php">E-Business</a></li>
        </ul>';
        ?>
        <br>
        <a href="https://phpproject30.herokuapp.com/">phpproject30.herokuapp.com</a>
           
    </body>
</html>
