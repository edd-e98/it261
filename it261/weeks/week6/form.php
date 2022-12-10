<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6 Form 1</title>
    <link href= "./css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- action: submitting form to this very file using the post method, which protects sensitive data -->
    <form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method="post">
    <fieldset>
        <legend>Contact Eddie</legend>

        <label>First Name</label>
        <input type="text" name="first_name" 
        value="<?php if(isset($_POST['first_name'])) {echo (htmlspecialchars($_POST['first_name']));} ?>">
        <!-- In the PHP in "value" above, we are asking the form to please remember any previous values
        we have posted to the variable 'first_name' and auto-fill that inot this field if it's available -->
        
        <label>Last Name</label>
        <input type="text" name="last_name"
        value="<?php if(isset($_POST['last_name'])) {echo (htmlspecialchars($_POST['last_name']));} ?>">

        <label>Email</label>
        <input type="email" name="email"
        value="<?php if(isset($_POST['email'])) {echo (htmlspecialchars($_POST['email']));} ?>">

        <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender" value="female"
             <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') {echo ('checked = "checked"');} ?>>Female</li>
            <li><input type="radio" name="gender" value="male"
             <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') {echo ('checked = "checked"');} ?>>Male</li>
            <li><input type="radio" name="gender" value="other"
             <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') {echo ('checked = "checked"');} ?>>Other</li>
            <!--In the PHP above, we have to insert our PHP outside of the value, and ask two questions
            1) has gender been sent? 2) is gender marked as the corresponding radio item? -->
            </ul>

        <label>Phone</label>
        <input type="tel" name="phone"
        value="<?php if(isset($_POST['phone'])) {echo (htmlspecialchars($_POST['phone']));} ?>">

        <label>Favorite Wines</label>
        <ul>
            <!-- New input type, checkbox! Check as many fit your situation, and it will return an array. -->
            <li><input type="checkbox" name="wines[]" value="cab" 
             <?php if(isset($_POST['wines']) && in_array('cab', $wines)) {} ?>>Cabernet</li>
             <li><input type="checkbox" name="wines[]" value="merlot" 
             <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) {} ?>>Merlot</li>
             <li><input type="checkbox" name="wines[]" value="syrah" 
             <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) {} ?>>Syrah</li>
             <li><input type="checkbox" name="wines[]" value="red" 
             <?php if(isset($_POST['wines']) && in_array('red', $wines)) {} ?>>Red Blend</li>
             <li><input type="checkbox" name="wines[]" value="malbec" 
             <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) {} ?>>Malbec</li>
        </ul>

        <label>Regions</label>
        <select name="regions">
            <option value="" NULL 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) {echo('selected ="unselected"');} ?>>Select One!</option>
             <option value="nw" 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') {echo('selected ="selected"');} ?>>Northwest</option>
             <option value="sw" 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') {echo('selected ="selected"');} ?>>Southwest</option>
             <option value="mw" 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') {echo('selected ="selected"');} ?>>Midwest</option>
             <option value="ec" 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ec') {echo('selected ="selected"');} ?>>East Coast</option>
             <option value="ne" 
             <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') {echo('selected ="selected"');} ?>>Northeast</option>

        <label>Comments</label>
        <textarea name="comments"><?php if(isset($_POST['comments'])) {echo (htmlspecialchars($_POST['comments']));} ?></textarea>
        <!-- The PHP in the textarea is asking-- have we posted anything to comment? If so, echo it here.-->

        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes"
            <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') {echo ('checked = "checked"');} ?>>Privacy</li>
        </ul>

        <input type="submit" value="Send it!">
        <a href="">Reset</a>
    </form>
</body>
</html>