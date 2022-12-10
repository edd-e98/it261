<?php
// This will be out people-view, which of course begins with our include
include('config.php');
//is our ID set? if so, life is good.
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}
else { //if our ID isn't set, use the header to re-direct us back to people.php.
    header ('Location:people.php');
}

// we will now select from the table
$sql = 'SELECT * FROM people WHERE people_id = '.$id.'';
// we will now connect to the database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
// we will now begin our if statement: if rows > 0, life is good
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $email = stripcslashes($row['email']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    }
} // end numrows > 0 if statement
else { //produce an error if there arent more than 0 rows
    $feedback = 'There is a problem!';
}
include('./includes/header.php'); //include our header, then the HTML starts
?>
<div id= wrapper>
    <main>
        <h1>Welcome to our People View Page!</h1>
        <h2>Introducing you to <?php echo $first_name; ?>'s page!</h2>
        <ul>
            <?php
            echo ('
                <li><b>First Name:</b>'.$first_name.'</li>
                <li><b>Last Name:</b>'.$last_name.'</li>
                <li><b>Email:</b>'.$email.'</li>
                <li><b>Birthdate:</b>'.$birthdate.'</li>
                <li><b>Occupation:</b>'.$occupation.'</li>
                <li><p>'.$details.'<p></li>
            ');
            ?>
        </ul>
        <p><a href="people.php">Return to the people page!</a></p>
    </main>
    <aside>
        <h3>This is my aside</h3>
        <figure>
            <img src="./images/people<?php echo($id); ?>.jpg" alt="<?php echo($first_name); ?>">
            <figcaption>
                <?php echo(''.$first_name.' '.$last_name.', '.$occupation.'.');?>
            </figcaption>
        </figure>
        <p><?php echo($blurb); ?></p>
    </aside>
    <?php
        //We are going to releases the server
        @mysqli_free_result($result);
        //Now, close the connection
        @mysqli_close($iConn);
    ?>
</div> <!-- End wrapper -->
<?php
include('./includes/footer.php');
?>