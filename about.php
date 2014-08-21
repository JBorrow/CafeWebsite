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

		    <iframe class = 'map' src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2301.214632279565!2d-1.57873!3d54.776194000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e7d8a92cf05b7%3A0x176fd4e7767df039!2sEmpty+Shop+HQ!5e0!3m2!1sen!2suk!4v1408647720365" width="600" height="450" frameborder="0" style="border:0"></iframe>

            <p>The cafe is funded by the Natural Sciences Society of Durham
            University, which we are wholefully grateful for. We use the money
            that they give us to promote future cafes and to buy equipment that
            we need.</p>

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

