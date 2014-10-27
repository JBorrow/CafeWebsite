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

        <div class = "upcomingcontainer">

            <h1 class = "upcomingh1"> Upcoming Cafes </h1>

            <?php
            
            require_once("upcoming.php");

            upcomingmakedivs("Upcoming", "upcoming", 10000);

            ?>            

        </div>

        <?php

        require_once("Parts/footer.php");

        ?>

    </body>

</html>


