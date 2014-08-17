<!DOCTYPE html>

<html>

    <?php
    
    $thisPage = "Future";
    require_once("Parts/head.php");

    ?>

    <body>

        <?php

        require_once("Parts/navbar.php");

        ?>

        <div class = "container">

        <div class = 'main'>

            <h1> Upcoming Cafes </h1>

            <?php
            
            require_once("upcoming.php");

            upcomingmakedivs("Upcoming");

            ?>            

        </div>

        <div class = 'sidebar'>

            <h1> Previous Cafes </h1>

        </div>

        </div>

        <?php

        require_once("Parts/footer.php");

        ?>

    </body>

</html>


