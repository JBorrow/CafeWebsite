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

            <h1> Upcoming Cafes </h1>

            <?php
            
            require_once("upcoming.php");

            upcomingmakedivs("Upcoming");

            ?>            

        </div>

        <?php

        require_once("Parts/footer.php");

        ?>

    </body>

</html>


