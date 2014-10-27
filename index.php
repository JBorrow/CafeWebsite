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

			<h2>When?</h2>

			<p>We currently run cafes each week at 3:45 pm on a Saturday during
			term time. If you would like to find out more about upcoming events,
			please head over to our <a href = "./future.php">upcoming page</a>.
			</p>

			<h2>Where?</h2>

			<p>We are grateful to <a href = "http://www.emptyshop.org">The Empty
			Shop</a> for providing us with space to put on our events. You can
			find The Empty Shop just outside The Gates Shopping Center.</p>

			<div class = 'map'>
		    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2301.214632279565!2d-1.57873!3d54.776194000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e7d8a92cf05b7%3A0x176fd4e7767df039!2sEmpty+Shop+HQ!5e0!3m2!1sen!2suk!4v1408647720365" width='500' height='450' frameborder="0" style="border:0"></iframe>
            </div>

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

