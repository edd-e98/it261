<?php
$first_name = '';
$first_name_err ='';
$last_name = '';
$last_name_err ='';
$email = '';
$email_err = '';
$phone = '';
$phone_err ='';
$langs = '';
$langs_err ='';
$fav_lang = '';
$fav_lang_err ='';
$comments = '';
$comments_err ='';
$privacy ='';
$privacy_err ='';
ob_start(); // this just ensures our entire form will be read

if($_SERVER['REQUEST_METHOD'] =='POST'){

    if (empty(($_POST)['first_name'])){
        $first_name_err = 'Please fill out your first name.';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty(($_POST)['last_name'])){
        $last_name_err = 'Please fill out your last name.';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty(($_POST)['email'])){
        $email_err = 'Please fill out your email.';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) { // if empty, type in your number
            $phone_err = 'Please fill out your phone number.';
        } 
        elseif(array_key_exists('phone', $_POST)) {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { 
            // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
                $phone_err = 'Invalid format!';
            }
            else {
                $phone = $_POST['phone'];
            } // end else
        } // end main if

    if (empty(($_POST)['langs'])){
        $langs_err = 'Please select your languages.';
    } else {
        $langs = $_POST['langs'];
    }

    if ($_POST['fav_lang'] == NULL){
        $fav_lang_err = 'Please select the language you speak best.';
    } else {
        $fav_lang = $_POST['fav_lang'];
    }

    if (empty(($_POST)['comments'])){
        $comments_err = 'Please share your thoughts with us.';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty(($_POST)['privacy'])){
        $privacy_err = 'Please agree to our privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }

    // Wines function
    function my_langs ($langs) {
        $my_return = '';
        if(!empty($_POST['langs'])) {
            $my_return = implode(', ', $_POST['langs']);
        } // end if statement
        else {
            $langs_error = 'Please fill out your languages';
        } // end else statement
        return $my_return;
    } // end langs function

    if (isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['langs'],
    $_POST['fav_lang'],
    $_POST['comments'],
    $_POST['privacy'])) {
        // $to = 'emelyn.melton@gmail.com';
        $to = 'szemeo@mystudentswa.com';
        $subject ='Test Email ' .date('m/d/y, h i A');
        $body = '
                First name: '.$first_name.' '.PHP_EOL.'
                Last name: '.$last_name.' '.PHP_EOL.'
                Email: '.$email.' '.PHP_EOL.'
                Phone Number: '.$phone.' '.PHP_EOL.'
                Languages Spoken: '.my_langs($langs).' '.PHP_EOL.'
                Preferred Language: '.$fav_lang.' '.PHP_EOL.'
                Comments: '.$comments.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@mystudentswa.com'
        );

        if(!empty($first_name && $last_name && $email && $phone && $langs && $fav_lang && $comments 
            && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))) {
            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }
} //end server request method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href= "css/style.css" type="text/css" rel="stylesheet">
    <link href= "css/form.css" type="text/css" rel="stylesheet">
    
</head>
<body>
    <?php include ('./includes/header.php'); ?>
    <!-- action: submitting form to this very file using the post method, which protects sensitive data -->
    <form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method="post">
    <fieldset>
        <legend>Contact Eddie</legend>

        <label style="display: block;">First Name</label>
        <input type="text" name="first_name" 
        value="<?php if(isset($_POST['first_name'])) {echo (htmlspecialchars($_POST['first_name']));} ?>">
        <span class="error"><?php echo $first_name_err; ?></span>
        <!-- In the PHP in "value" above, we are asking the form to please remember any previous values
        we have posted to the variable 'first_name' and auto-fill that inot this field if it's available -->
        
        <label>Last Name</label>
        <input type="text" name="last_name"
        value="<?php if(isset($_POST['last_name'])) {echo (htmlspecialchars($_POST['last_name']));} ?>">
        <span class="error"><?php echo $last_name_err; ?></span>

        <label>Email</label>
        <input type="email" name="email"
        value="<?php if(isset($_POST['email'])) {echo (htmlspecialchars($_POST['email']));} ?>">
        <span class="error"><?php echo $email_err; ?></span>


        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx"
        value="<?php if(isset($_POST['phone'])) {echo (htmlspecialchars($_POST['phone']));} ?>">
        <span class="error"><?php echo $phone_err; ?></span>

        <label>Which language(s) do you speak?</label>
        <ul>
            <!-- New input type, checkbox! Check as many fit your situation, and it will return an array. -->
            <li><input type="checkbox" name="langs[]" value="eng" 
             <?php if(isset($_POST['langs']) && in_array('eng', $langs)) {echo 'checked = "checked"';} ?>>English</li>
             <li><input type="checkbox" name="langs[]" value="esp" 
             <?php if(isset($_POST['langs']) && in_array('esp', $langs)) {echo 'checked = "checked"';} ?>>Spanish</li>
             <li><input type="checkbox" name="langs[]" value="deu" 
             <?php if(isset($_POST['langs']) && in_array('deu', $langs)) {echo 'checked = "checked"';} ?>>German</li>
             <li><input type="checkbox" name="langs[]" value="fra" 
             <?php if(isset($_POST['langs']) && in_array('fra', $langs)) {echo 'checked = "checked"';} ?>>French</li>
        </ul>
        <span class="error"><?php echo $langs_err; ?></span>

        <label>Which language do you speak best?</label>
        <select name="fav_lang">
            <option value="" NULL
             <?php if(isset($_POST['fav_lang']) && $_POST['fav_lang'] == NULL) {echo('selected ="unselected"');} ?>>Select One!</option>
             <option value="eng" 
             <?php if(isset($_POST['fav_lang']) && $_POST['fav_lang'] == 'eng') {echo('selected ="selected"');} ?>>English</option>
             <option value="esp" 
             <?php if(isset($_POST['fav_lang']) && $_POST['fav_lang'] == 'esp') {echo('selected ="selected"');} ?>>Spanish</option>
             <option value="deu" 
             <?php if(isset($_POST['fav_lang']) && $_POST['fav_lang'] == 'deu') {echo('selected ="selected"');} ?>>German</option>
             <option value="fra" 
             <?php if(isset($_POST['fav_lang']) && $_POST['fav_lang'] == 'fra') {echo('selected ="selected"');} ?>>French</option>
        </select>
        <span class="error"><?php echo $fav_lang_err; ?></span>

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) {echo (htmlspecialchars($_POST['comments']));} ?></textarea>
        <span class="error"><?php echo $comments_err; ?></span>
        <!-- The PHP in the textarea is asking-- have we posted anything to comment? If so, echo it here.-->

        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes"
            <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') {echo ('checked = "checked"');} ?>>Privacy</li>
        </ul>
        <span class="error"><?php echo $privacy_err; ?></span>

        <input type="submit" value="Send it!">
        <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>'" value="Reset">
    </form>
</fieldset>
<?php include ('./includes/footer.php'); ?>
</body>
</html>