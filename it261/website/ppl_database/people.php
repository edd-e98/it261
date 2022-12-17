<?php
include('config.php');
include('./includes/header.php');
include('./includes/random-image-function.php');
?>
<div id="wrapper"> <!-- Start of wrapper -->
    <main> <!-- Start of main -->
    <h1>Welcome to our People Database Class Exercise</h1>
    <?php
    $sql = 'SELECT * FROM people';
    // now, we have to connect to our database :)

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // We are asking if the number of rows is greater than 0
    // If so, life is good!
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo ('
                <h2>Information about: '.$row['first_name'].'</h2>
                <ul>
                    <li><b>First Name:</b> '.$row['first_name'].'</li>
                    <li><b>Last Name:</b> '.$row['last_name'].'</li>
                    <li><b>Birthdate:</b> '.$row['birthdate'].'</li>
                </ul>
                <p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a>.</p>
            ');
        } //end while
    } //end if numrows > 0
    else {
        echo('Noone is home!');
    }

    //We are going to releases the server
    @mysqli_free_result($result);
    //Now, close the connection
    @mysqli_close($iConn);
    ?>
    </main> <!-- End of main -->
    <aside>
        <h3>Random Images will be displayed here!</h3>
        <?php echo random_images(1,5); ?>
    </aside>
</div> <!-- End of wrapper -->
<?php
include('./includes/footer.php')
?>