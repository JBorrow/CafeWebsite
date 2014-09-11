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
			
			<h2>What is Cafe Scientifique?</h2>

			<p>Cafe Scientifique Durham City is a platform for talks and
			discussion about science in a relaxed, informal setting. We
			regularly host academics who are leaders in their field to talk
			about their research and related interests.</p>

			<p>Anyone is welcome to come along to our free events, be they a
			student, a member of university staff or a member of the public who
			has an interest in science! We aim to pitch the talks towards an
			interested member of the public so even if the talk isn't something
			you've ever seen before you'll be okay!</p>

			<h2>When is Cafe Scienitifique?</h2>

			<p>We currently run cafes each week at 3:45 pm on a Saturday during
			term time. If you would like to find out more about upcoming events,
			please head over to our <a href = "./upcoming.php">upcoming page</a>
			</p>

			<h2>Where is Cafe Scientifique?</h2>

			<p>We are grateful to <a href = "http://www.emptyshop.org">The Empty
			Shop</a> for providing us with space to put on our events. You can
			find The Empty Shop just outside The Gates Shopping Center.</p>

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

