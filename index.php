<!--- timeline, which is the home -->
<html>
    <head>
        <title>Chirprr</title>
        <meta charset="utf-8">
        <?php include('connect.php'); include('myUser.php'); 
        ?>
    </head>
    <body>
        <nav>
            <!-- logo and "Chirprr" -->
            <ul> 
                <li> <a href="index.php">Home</a></li>
                <li> <a href="post.php">Post a Cheep</a></li>
			</ul>
        </nav>
        <div id = "user">
            <?php
                echo '<h2> $my_name </h2><h3> @ $my_username </h3>';
            ?>
        </div>
        <div id="posts">
            <?php
                
            ?>
        </div>
    </body>
</html>