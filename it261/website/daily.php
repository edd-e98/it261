<!-- PHP -->
<?php
    if (isset($_GET['day'])) {
        $day = $_GET['day'];
    }
    else {
        $day = date('l'); 
    }

    switch ($day) {
        case 'Sunday':
            $princess = 'Rapunzel';
            $pic = 'rapunzel.jpg';
            $alt = 'Princess Rapunzel from the movie Tangled';
            $content = 'Sunday is Princess Rapunzel day! Princess Rapunzel is the 10th disney princess; her movie Tangled came out in 2010. She is voiced by Mandy Moore.<br>
            One fun fact about Rapunzel is that an etnirely new graphics engine had to be devloped to animate her hair! Tangled was the first computer-animated Disney Princess movie, in part because computer animation is well-suited to the challenged of animating Rapunzel\'s hair.';
            $bgColor = '#c488cc';
            $pColor = '#f4f49b';
            break;
        case 'Monday':
            $princess = 'Moana';
            $pic = 'moana.jpg';
            $alt = 'Princess Moana from the movie Moana';
            $content = 'Sunday is Princess Moana day! Princess Moana is the 12th disney princess; her movie Moana came out in 2016. She is voiced by Auli\'i Cravelho.<br>
            Although Moana says herself in the movie that she is NOT a princess, she is still featured in many official disney princess merchandise lineups, and she was featured as a member of the Disney Princesses in \'Ralph Breaks the Internet\' in 2018, earning her a spot on my unofficial Disney Princess list.';
            $bgColor = '#c7371d';
            $pColor = '#240d0d';
            break;
        case 'Tuesday':
            $princess = 'Cinderella';
            $pic = 'cinderella.jpg';
            $alt = 'Princess Cinderella from the movie Cinderella';
            $content = 'Sunday is Princess Cinderella day! Princess Cinderella is the 2nd disney princess; her movie Cinderella came out in 1950. She is voiced by Ilene Woods.<br>
            While you probably remember Cinderella losing her shoe as she runs away from her Prince at the ball, she actually loses her shoe two other times in the movie; once as she is delivering breakfast trays to her evil stepsisters, and once during her wedding.';
            $bgColor = '#c3eeff';
            $pColor = '#00afd0';
            break;
        case 'Wednesday':
            $princess = 'Mulan';
            $pic = 'mulan.jpg';
            $alt = 'Princess Mulan from the movie Mulan';
            $content = 'Sunday is Princess Mulan day! Princess Mulan is the 8th disney princess; her movie Mulan came out in 1998. She is voiced by Ming-Na Wen, but her singing voice is Filipino broadway actress Lea Selonga.<br>
            When Mulan dresses as man to join the army in her father\'s place, she introduces herself as "Hua Ping." This translates to "Flower Vase," and in China this is a slang term for an effeminate or gay man.';
            $bgColor = '#77ee8f';
            $pColor = '#3c9056';
            break;
        case 'Thursday':
            $princess = 'Aurora';
            $pic = 'aurora.jpg';
            $alt = 'Princess Aurora from the movie Sleeping Beauty';
            $content = 'Sunday is Princess Aurora day! Princess Aurora is the 3rd disney princess; her movie Sleeping Beauty came out in 1959. She is voiced by Mary Costa.<br>
            Although her dress is pictured as pink in most promotional materials, Aurora\'s gown switches back and forth between pink and blue throughout the film as her fairy godmothers fight over which color she looks best in. The decision to make her dress pink in advertisements is likely to avoid confusion with Cinderella\'s dress, which is, ironically, silver in her movie, not blue.';
            $bgColor = '#5169bd';
            $pColor = '#fd93ee';
            break;
        case 'Friday':
            $princess = 'Ariel';
            $pic = 'ariel.jpg';
            $alt = 'Princess Ariel from the movie The Little Mermaid';
            $content = 'Sunday is Princess Ariel day! Princess Ariel is the 4th Disney princess; her movie The Little Mermaid came out in 1989. She is voiced by Jodi Benson.<br>
            The Little Mermaid was the first Disney Animated film to hire actors to use as references for animatiion since Alice in Wonderland. Sheri Stoner, an improv comedian, was hired to play Ariel; every shot in the film was recorded live on a set first, and then referenced by animators later. Ariel is also my favorite disney princess.';
            $bgColor = '#93d4ae';
            $pColor = '#b38bdd';
            break;
        case 'Saturday':
            $princess = 'Tiana';
            $pic = 'tiana.jpg';
            $alt = 'Princess Tiana from the movie The Princess and the Frog';
            $content = 'Sunday is Princess Tiana day! Princess Tiana is the 9th Disney Princess; her movie The Princess and the Frog came out in 2009.<br>
            In order to capture the correct feel for the musical sequence "Almost There," the animation team decided to use totally different animation software. The scene is meant to feel like an Aaron Douglas painting come to life, so hand-drawn paintings were scanned into Photoshop.';
            $bgColor = '#e3f2ac';
            $pColor = '#94d893';
            break;
    }
?>
<?php
    include ('./includes/header.php');
?>
<body>
    <div id ="hero">
        <img src="./images/<?php echo($pic);?>" alt ="<?php echo($alt);?>">
    </div>
    <main style="background-color:<?php echo($bgColor);?>">
    <h2 style="color:<?php echo($pColor);?>"><?php echo $day; ?> is Princess <?php echo $princess; ?> Day!</h2>
    <p style="color:<?php echo($pColor);?>"><?php echo $content; ?></p>
    </main>
        <aside style="background-color:<?php echo($bgColor);?>">
            <wrapper>
                <h2 style="color:<?php echo($pColor);?>"> Click a button below to travel through time! </h2>
                <ul>
                    <li><a href="daily.php?day=Sunday" >Sunday</a></li>
                    <li><a href="daily.php?day=Monday" >Monday</a></li>
                    <li><a href="daily.php?day=Tuesday" >Tuesday</a></li>
                    <li><a href="daily.php?day=Wednesday" >Wednesday</a></li>
                    <li><a href="daily.php?day=Thursday" >Thursday</a></li>
                    <li><a href="daily.php?day=Friday" >Friday</a></li>
                    <li><a href="daily.php?day=Saturday" >Saturday</a></li>
                </ul>
            </wrapper>
        </aside>
    <?php
        include ('./includes/footer.php');
    ?>
</body>
</html>