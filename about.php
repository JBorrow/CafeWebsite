<!DOCTYPE html>

<html>

    <?php

    require_once("Parts/head.php");

    ?>

    <body>

        <?php

        $thisPage = "About";
        require_once("Parts/navbar.php");

        ?>

        <div class = "container">

        <div class = 'main'>

            <h1>About</h1>

            <p>Cafe Scientifique Durham City is a nonprofit organisation
            dedicated to science outreach in Durham. We run weekly cafes with 
            speakers from Durham University (and others!), who are always happy
            to chat about their research or science in general afterwards.</p>

            <p>We meet at 3:45pm each Saturday during term time at Empty Shop.
            </p>

            <p>The cafe is ran by Josh Borrow and John D'Silva, who are Physics
            and Natural Sciences students respectively. They have recently taken
            the cafe over from Jamal Kinsella and Tim Wiles, who ran it for a
            number of years.</p>

            <p>The cafe is hosted in Empty Shop Durham, who have been providing
            us with space and help since around May 2014. Empty Shop is a
            reasonably large venue, meaning our capacity is about 50 people.
            There is a bar, which you can order drinks and snacks from to graze
            on during the talk - it wouldn't be much of a cafe otherwise! You
            can find out more about Empty Shop on <a
            href = "http://www.emptyshop.org">their website</a>.</p>
            
            <p>The cafe is funded by the Natural Sciences Society of Durham
            University, which we are wholefully grateful for. We use the money
            that they give us to promote future cafes and to buy equipment that
            we need.</p>

            <h1> Contact </h1>

            <p>You can e-mail us at: <a href='&#109;ai&#108;to&#58;&#106;%6&#70;sh&#37;4&#48;ca&#102;esci&#100;ur&#104;a&#109;&#46;c&#111;&#37;2&#69;u%&#54;B'>josh&#64;ca&#102;es&#99;idur&#104;a&#109;&#46;co&#46;uk</a></p>

        </div>

        <div class = 'sidebar'>

            <h1> Upcoming Cafes </h1>

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

