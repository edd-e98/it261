<?php 
// our server.php file-- this is where our session will start
    session_start();
    include('config.php');
    // this is where, eventually, you will have the header include
    // include('./includes/header.php');

    //this server.php will be communicating to our database!
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    //FIRST we communicate with the registration page
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
        $errors = [];
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
        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";
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
            $password = md5($password1);
            // Now we get to insert information in our table!
            $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
            mysqli_query($iConn, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = $success;

            //if we are successful in creating an account, this should take us to our login page
            header('Location:login.php');

        } //close if(count(errors))
    } //end if isset reg_user



    // NOW, we must communicate with the login page-- although we are asking (basically) the same question!
    if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($iConn, $_POST['username']);
        $password = mysqli_real_escape_string($iConn, $_POST['password']);

        $errors = [];
        if(empty($username)) { //If empty, then error
            array_push($errors, 'Username is required.');
        }

        if(empty($password)) {
            array_push($errors, 'Password is required.');
        } // End if(empty) then error

        //We will be counting our errors and hoping for none!
        if (count($errors) == 0 ) {
            $password = md5($password);
            $query = " SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            //$RESULTS, NOOOT $RESULT
            $results = mysqli_query($iConn, $query);
            
            if (mysqli_num_rows($results) == 1) { //if our query returns 1 result...
                $_SESSION['username'] = $username; //successfully login
                $_SESSION['success'] = $success;
                header('Location:index.php');
            } else { //else, display error
                array_push($errors, 'Invalid username and/or password.');
            } //close if num rows == 1
        }// End if errors == 0
    } //Close isset(login_user)

?>