<!-- This is the code for my PORTAL PAGE. For website homepage, see website -> index.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <title>Eddie's Portal Page for IT 261</title>
    </head>
    <body>
        <header>
        <!-- Navigation to Weekly Assignments -->
            <img class="heart" src="images/floating-green-hearts.gif" alt="Four green pixel hearts floating up and down">
            <nav>
                <a href="./website/daily.php">Week 3: Switch | </a>
                <a href="./website/troubleshooting.php">Week 4: Troubleshooting | </a>
                <a href=" ">Week 5: Calculator | </a>
                <a href=" ">Week 6: Email | </a>
                <a href=" ">Week 7: Gallery | </a>
                <a href=" ">Week 8: Database | </a>
            </nav>
            <img class="heart" src="images/floating-green-hearts.gif" alt="Four green pixel hearts floating up and down">
        </header>
        <div class="wrapper">
            <main>
                <!-- Photo of Me (Eddie), a short About Me, and MAMP pages-->
                <img id="myPhoto" src="images/me.jpg" alt="Picture of Eddie">
                <p id="aboutMe">My name is Eddie! I'm a 24 year old aspiring web dev from Seattle, WA. I currently work at a paint-your-own pottery studio, Paint the Town, which I also designed and maintain the website for. In my free time, I enjoy making costumes, playing DnD, and caring for my fish, a Betta named Bones.</p>
            </main>
            <aside>
            <!-- List of Weekly Exercises -->
                <h3>Week 2</h3>
                    <nav>
                        <ul>
                            <li><a href="weeks/week2/var.php">var.php</a></li>
                            <li><a href="weeks/week2/vars2.php">var2.php</a></li>
                            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                            <li><a href="weeks/week2/currency.php">currency.php</a></li>
                        </ul>
                    </nav>
                <h3>Week 3</h3>
                    <nav>
                        <ul>
                            <li><a href="weeks/week3/if.php">if.php</a></li>
                            <li><a href="weeks/week3/date.php">date.php</a></li>
                            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
                            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                            <li><a href="weeks/week3/index.php">index.php</a></li>
                            <li><a href="weeks/week3/switch.php">switch.php</a></li>
                        </ul>
                    </nav>
                <h3>Week 4</h3>
                    <nav>
                    <ul>
                            <li><a href="weeks/week4/arithmetic-form">arithmetic-form.php</a></li>
                            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
                            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                            <li><a href="weeks/week4/form1.php">form1.php</a></li>
                            <li><a href="weeks/week4/form2.php">form2.php</a></li>
                            <li><a href="weeks/week4/form3.php">form3.php</a></li>
                        </ul>
                    </nav>
                <h3>Week 5</h3>
                    <nav>
                        <p>Coming soon!</p>
                    </nav>
                <h3>Week 6</h3>
                    <nav>
                        <p>Coming soon!</p>
                    </nav>
                <h3>Week 7</h3>
                    <nav>
                         <p>Coming soon!</p>
                    </nav>
                <h3>Week 8</h3>
                    <nav>
                        <p>Coming soon!</p>
                    </nav>
            </aside>
        </div>
        <!-- This is where my MAMP photos will go, once I figure that shit out
        <img class="mampPhoto" src="" alt="" />-->
        <div class="wrapper">
            <img class="mampPhoto" src="images/mamp-screenshot-one.png" alt="A screenshot of a browser displaying a locally-hosted webpage">
            <img class="mampPhoto" src="images/mamp-screenshot-two.png" alt="A screenshot of a browser displaying an error message"> 
        </div>
        <footer>
        <!-- CSS + HTML validation links -->
        <ul>
            <li>Copyright &copy; 2022</li>
            <li>All Rights Reserved</li>
            <li><a href="../index.php">Web Design by edd-e</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        </footer>
        <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
    </body>
</html>