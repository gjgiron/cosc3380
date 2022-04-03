<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en" dir= "ltr>
<head>
    <title> ZOO Group 6 </title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <ul> 
                <li><a href ="index.php">Home</a><li>
                <li><a href ="discover.php">Discover</a><li>
                <?php
                    if (isset($_SESSION["useruid"]))
                    {
                        echo '<li><a href ="profile.php">Profile Page</a><li>';
                        echo '<li><a href ="includes/logout.inc.php">Log Out</a><li>';

                    }
                    else
                    {
                        echo '<li><a href ="signup.php">Sign Up</a><li>';
                        echo '<li><a href ="login.php">Log In</a><li>';
                    

                    }


                ?>

                
            <ul>
        </div>
    </nav>

    <div class="wrapper">


        <section class ="index-intro">
        <?php
                    if (isset($_SESSION["useruid"]))
                    {
                        echo "<p> Hello there " . $_SESSION['useruid'] . "</p>";
                        
                    }



        ?>

        

            <h1> This is An Introduction</h1>
            <p> Here is some importnat information </p>
        </section>

        <section class="index-catergories">
            <h2> Some Basic Catergories</h2>
            <div class = "index-categories-list">
                <div>
                    <h3> Things to Do </h3>
                </div>
                <div>
                    <h3> Stats </h3>
                </div>
                <div>
                    <h3> Animal Fun Facts </h3>
                </div>
            </div>
        </section>
      </div>
</body>
</html>

<script src="js/script.js"></script>
