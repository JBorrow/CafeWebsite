<!DOCTYPE html>

<html>

    <?php
    
    require_once("Parts/head.php");

    ?>

    <body>

        <?php
        
        $thisPage = "Home";
        require_once("Parts/navbar.php");

        ?>
        
        <div class = "container">

        <div class = 'main'>

            <h1>Welcome to Cafe Scientifique</h1>

            <p>Cafe Scientifique is a fun, science orientated organisation that
            aims to bring together scientists and non scientists from all
            backgrounds to share science with each other and the rest of the
            world.</p>
            
            <p>We meet each week in Empty Shop during term-time and sometimes
            out of term time too. We are very grateful to Empty Shop for
            allowing us to use their space and for their help with design work
            for promotion of the Cafe. To learn more about the Empty Shop, you
            can head over to their website <a href = "http://www.emptyshop.org">
            here.</a></p>

            <p>There is a lot of information about and recordings of previous
            cafes on the website, so if you want to jump straight in you can!
            </p>

            <p>Cafe Scientifique is funded by the Durham University Natural
            Sciences Society.</p>

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

