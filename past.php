<!DOCTYPE html>

<html>

    <?php

    $thisPage = "Past";
    require_once("Parts/head.php");

    ?>

    <body>

        <?php

        require_once("Parts/navbar.php");

        ?>

        <div class = "container">

        <div class = "main">
            
            <h1>Previous Cafes</h1>

            <?php

            require_once("previous.php");

            $id = $_GET['id'];

            if (strlen($id) > 1) {
                makedivs($id);
            } else {
                makedivs("Previous");
            }

            ?>

        </div>

        <div class = 'sidebar'>

            <h1>Upcoming Cafes</h1>
            
            <?php
             
            require_once("upcoming.php");

            upcomingmakedivs("Upcoming");
            
            ?>

        </div>

        </div>
        
        <?php

        require_once("Parts/footer.php");

        ?>

    </body>

</html>
