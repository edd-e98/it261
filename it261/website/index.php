<!-- This is the code for my WEBSITE HOMEPAGE. For portal page, see IT261 -> index.php. -->
    <?php
        function random_images($photos) {
            $my_return='';
            $i = rand(0, 6);
            $selected_image = ''.$photos[$i].'.jpg';
            $my_return = '<img src="images/'.$selected_image.'" alt="$selected_image">';
            return $my_return; 
        }
        $photos[0] = 'ariel';
        $photos[1] = 'aurora';
        $photos[2] = 'cinderella';
        $photos[3] = 'moana';
        $photos[4] = 'mulan';
        $photos[5] = 'rapunzel';
        $photos[6] = 'tiana';
        include ('./includes/header.php');
    ?>
    <div id="wrapper">
        <div id="hero">
            <?php
                echo random_images($photos);
             ?>
        </div>
        <!-- end hero -->
        <main>
            <h1>Welcome to our Web App Programming Class!</h1>
            <h2>We are going to learn PHP!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper nulla ex, vel ullamcorper nulla malesuada non. Suspendisse potenti. Curabitur a ligula eget erat venenatis auctor. Suspendisse fermentum quam eget rhoncus cursus. Morbi sed faucibus magna. Curabitur sapien dui, sodales eu facilisis rhoncus, pulvinar vel diam. Aenean arcu quam, tempor ut justo a, viverra varius neque. Cras quis sem aliquam, elementum magna quis, efficitur dui. In hac habitasse platea dictumst. Nullam sollicitudin molestie lectus, aliquam aliquam lorem vestibulum et. Vivamus interdum tristique mi sit amet ornare. Curabitur at quam vitae est pellentesque finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur non sem lorem. </p>
            <h2>Another headline 2!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper nulla ex, vel ullamcorper nulla malesuada non. Suspendisse potenti. Curabitur a ligula eget erat venenatis auctor. Suspendisse fermentum quam eget rhoncus cursus. Morbi sed faucibus magna. Curabitur sapien dui, sodales eu facilisis rhoncus, pulvinar vel diam. Aenean arcu quam, tempor ut justo a, viverra varius neque. Cras quis sem aliquam, elementum magna quis, efficitur dui. In hac habitasse platea dictumst. Nullam sollicitudin molestie lectus, aliquam aliquam lorem vestibulum et. Vivamus interdum tristique mi sit amet ornare. Curabitur at quam vitae est pellentesque finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur non sem lorem. </p>
        </main>
        <!-- end main -->
        <aside>
            <h3>This is our headline 3 in our beautiful aside</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper nulla ex, vel ullamcorper nulla malesuada non. Suspendisse potenti. Curabitur a ligula eget erat venenatis auctor. Suspendisse fermentum quam eget rhoncus cursus. Morbi sed faucibus magna. Curabitur sapien dui, sodales eu facilisis rhoncus, pulvinar vel diam. Aenean arcu quam, tempor ut justo a, viverra varius neque. Cras quis sem aliquam, elementum magna quis, efficitur dui. In hac habitasse platea dictumst. Nullam sollicitudin molestie lectus, aliquam aliquam lorem vestibulum et. Vivamus interdum tristique mi sit amet ornare. Curabitur at quam vitae est pellentesque finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur non sem lorem. </p>
        </aside>
        <!-- end aside -->
    </div>
    <!-- end wrapper -->
    <?php
    include ('./includes/footer.php');
    ?>