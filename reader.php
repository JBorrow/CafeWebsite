<!DOCTYPE html>

<html>

    <?php

    require_once("Parts/head.php");

    ?>

    <body>

        <?php

        require_once("Parts/navbar.php");

        ?>

        <div class = "container">

        <div class = 'main'>

            <?php

            require_once("previous.php");

            $id = $_GET['id'];

            echo read($id);

            ?>

        </div>

        <div class = 'sidebar'>

            <h1>Upcoming Cafes</h1>

            <?php

            require_once("upcoming.php");

            upcomingmakedivs("Upcoming", "upcomingmini");

            ?>
            
        </div>

        </div>

        <?php

        require_once("Parts/footer.php");

        ?>

    </body>

</html>

