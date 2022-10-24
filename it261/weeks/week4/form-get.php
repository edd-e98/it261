<?php 
if(isset($_GET['name'], //Asking if GET name and GET email have been set
         $_GET['email'])) {
        $name = $_GET['name']; //Then assign the appropriate variables
        $email = $_GET['email'];
        }
else { //Otherwise, echo a form to get a name and email. Use an echo to output HTML to the page!
    echo ('
        <form action = "" method= "get">
        <label>NAME</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="email" name="email">
        <input type="submit" value="confirm">
        </form>
    ');
}

?>