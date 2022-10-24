<?php 
if(isset($_POST['name'],
         $_POST['email'],)) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name; //POST needs to be echoed in order to display the information, GET does not
    echo '<br>'; //Post is displayed in the browser window, GET is displayed in the address URL
    echo $email;
}
else {
    echo ('
        <form action = "" method= "post">
        <label>NAME</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="email" name="email">
        <input type="submit" value="Send It">
        </form>
    ');
}
?>