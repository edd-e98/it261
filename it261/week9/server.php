<?php 
// our server.php file-- this is where our session will start
    session_start();
    include('config.php');
    // this is where, eventually, you will have the header include
    // include('./includes/header.php');

    //this server.php will be communicating to our database!
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    //We want to register the user, using if isset reg_user
    if(isset($_POST['reg_user'])) {
        $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
        $email = mysqli_real_escape_string($iConn, $_POST['email']);
        $username = mysqli_real_escape_string($iConn, $_POST['username']);
        $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);
        
        //We want to be sure that all the input fields have been filled out.
        //If empty, use a new function called array_push();
        if(empty($first_name)) {
            array_push($errors, 'First name is required.');
        }
        if(empty($last_name)) {
            array_push($errors, 'Last name is required.');
        }
        if(empty($email)) {
            array_push($errors, 'Email is required.');
        }
        if(empty($username)) {
            array_push($errors, 'Username is required.');
        }
        if(empty($password1)) {
            array_push($errors, 'Password is required.');
        }
        if($password1 !== $password2) {
            array_push($errors, 'Passwords do not match');
        }
        // we are checking the username and password, AND selecting it from the table in our database
        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1 ";
        // We are assigning the username and password we selected to a result
        $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
        //Assigns the result of our query to an associative array called rows
        $rows = mysqli_fetch_assoc($result);

        //We cannot have duplicate usernames or emails, so we will check for that
        if($rows) {
            if($rows['username'] == $username) {
                array_push($errors, 'Username already exists, please choose another.');
            }
            if($rows['email'] == $email) {
                array_push($errors, 'Email already exists, please use another.');
            }
        } //close if(rows)

        // do we have any errors?? Ideally, we have none.
        if (count($errors) == 0 ) {
            // This will create a more complicated version of our password to store in the database
            $password = md5(password1);
            // Now we get to insert information in our table!
            $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
            mysqli_query($iConn, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            //if we are successful in creating an account, this should take us to our login page
            header('Location:login.php');

        } //close if(count(errors))
    } //end if isset reg_user
?>