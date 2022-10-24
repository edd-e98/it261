
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="./css/style.css" type= "text/css" rel="stylesheet">
</head>
<body>
    <h1>My form3.php!</h1>
    <form action="" method="post"> 
        <fieldset>
            <label>First Name</label>
            <input type="text" name="first_name">

            <label>Last Name</label>
            <input type="text" name="last_name">

            <label>Email</label>
            <input type="email" name="email">

            <label>Comments</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Pull the Lever, Kronk!">
        
            <p><a href="">Reset!</a></p>
        </fieldset>

    </form>
    <?php 
    // LOGIC-- if isset first_name, last_name... That's what we want!
    // Our second if statement... If I have empty fields, that's NOT what we want! Make them fill it out!
    // Now, if the fields are not empty, then my else will display the fields!
    if (isset ($_POST['first_name'],
               $_POST['last_name'],
               $_POST['email'],
               $_POST['comments'])) { //IF all these variables have been collected in the form above...
        $first_name = $_POST['first_name']; //THEN assign them appropriately...
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        if(empty($_POST['first_name'] &&
                 $_POST['last_name'] &&
                 $_POST['email'] &&
                 $_POST['comments'])) {
            echo ('<p class="error"> Please fill out all of the fields!</p>');
        }
        else {
            echo ('
                <div class="box">
                <h2> Hello there, '.$first_name.' '.$last_name.'.</h2>
                <p>We have received your <strong>email as</strong>: '.$email.', and will be reviewing the following <strong>comment(s):</strong> '.$comments.'</p>
                </div>
                ');
        }
        }

    ?>
</body>
</html>