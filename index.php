<?php 

include('inc/functions.inc.php'); 

$questions = array(
  'iq' => array(
    "The greatest number of Mondays that can occur during the first 45 days of the year is what?",
    "7",
    "iq",
    "Trivia"
    )
);

$q = $questions;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <title>Gaggle Game {The Game for All Kinds of Smart}</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <header id="home" class="gaggle_bkg">
        <div class="container">
            <div class="row">
              <h1 class="title span4"><img src="img/main_title.png" alt="Gaggle"></h1>
              <div class="span8">
                <div class="social">
                  <a class="shareBtn facebook" href="#">Facebook</a>
                  <a class="shareBtn twitter" href="#">Twitter</a>
                  <a class="shareBtn google" href="#">Google+</a>
                  <a class="shareBtn reddit" href="#">Reddit</a>
                </div>
                <div class="tweet">
                  <div class="arrow"></div>
                  <p>We are having a party, you should join</p>
                  <div class="twitterCtrl">
                    <a class="tweetBtn retweet" href="#">Retweet</a>
                    <a class="tweetBtn reply" href="#">Reply</a>
                    <a class="tweetBtn fav" href="#">Favorite</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </header>

    <div id="navWrapper">
      <div class="navbar navbar-static-top navbar-inverse" data-spy="affix" data-offset-top="138">
          <div class="navbar-inner">
              <div class="container">

                   
                  <!-- Be sure to leave the brand out there if you want it shown -->
                  <a class="brand" href="./"><img src="img/gaggle_g_40px.png" alt="G"></a>

                  <ul class="nav pull-right">
                      <li><a href="#"><i class="icon-shopping-cart icon-white"></i> Buy the Game</a></li>
                  </ul>
                  
                  <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                  <a class="btn btn-navbar menuBtn" data-toggle="collapse" data-target=".nav-collapse">Menu <i class="icon-chevron-down icon-white"></i></a>
                   
                  <!-- Everything you want hidden at 940px or less, place within here -->
                  <div class="nav-collapse">
                    <ul class="nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#game">The Game</a></li>
                        <li><a href="#connect">Connect</a></li>
                        <li><a href="#about">About us</a></li>
                    </ul>
                  </div>
              </div>
          </div>
      </div>
    </div>


    <div id="hero" class="hero-unit">
        <div class="container">
          <div class="span8">
            <h1>Introducing Gaggle<br><small>The Game for All Kinds of Smart</small></h1>
            
            <p>How do YOU Gaggle? Are you a <i class="g_icon i-color i-b2s" rel="tooltip" title="Book"></i> worm? Are you a <i class="g_icon i-color i-iq" rel="tooltip" title="brainiac"></i>? Whatever your niche, Gaggle is the game for you! Play Gaggle at a party, or at Family game night, Its always time to Gaggle!</p>
            <p>
              <a class="btn btn-large btn-primary" href="#game">
                Learn more
              </a>
            </p>
          </div>
          <div class="span3"><a href="#buy" class="buyNowBtn"><img src="img/gaggle_buy_now.png" alt="Buy Now!"></a></div>
        </div>
    </div>

    <div id="game" class="section">

        <div class="container">
          <div class="page-header">
            <h1>Trivia for the rest of us</h1>
            <p>Gaggle is a new kind of <strong>trivia game</strong> for all kinds of smart.</p>
          </div>
          
          <div class="row">
  
            <div id="aboutGame" class="span1">
              <div><a class="g_icon g_iconBlock i-iq " href="#iq" data-toggle="pill">IQ</a></div>
              <div><a class="g_icon g_iconBlock i-socul" href="#socul" data-toggle="pill">Society and Culture</a></div>
              <div><a class="g_icon g_iconBlock i-ent" href="#ent" data-toggle="pill">Entertainment</a></div>
              <div><a class="g_icon g_iconBlock i-b2s" href="#b2s" data-toggle="pill">Back 2 School</a></div>
              <div><a class="g_icon g_iconBlock i-bonus" href="#bonus" data-toggle="pill">Bonus!</a></div>
            </div>

            <div class=" span11 tab-content">
              <div class="tab-pane active" id="basic">
                <h3>Select a Category above to learn more...</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div class="tab-pane" id="iq">
                <h3>This is IQ</h3>
                <p>You think you have the brains to tackle these problems, don't think too fast! The answer might be a little more involved than your first guess.</p>

                <?php echo questionCard($q['iq'][0],$q['iq'][1],$q['iq'][2],$q['iq'][3]); ?>
              </div>
              <div class="tab-pane" id="socul">
                <h3>Society &amp; Culture</h3>
                <p>You'll need a few stamps in your passport to excel here.</p>
              </div>
              <div class="tab-pane" id="ent">
                <h3>Entertainment</h3>
                <p>You live on the red carpet, spend an unhealthy amount of time at the big screen, and have seen all the best directors college films</p>
              </div>
              <div class="tab-pane" id="b2s">
                <h3>Back 2 School</h3>
                <p>Where you always top of your class? Good, because even though these questions are asked of 5th graders, you'll need to be on top of your game.</p>
              </div>
              <div class="tab-pane" id="bonus">
                <h3>Bonus</h3>
                <p>Ready to risk it all? Bonus questions rely on luck and skill. What will you wager</p>
              </div>
            </div>

          </div> <!-- .row -->
        </div> <!-- /container -->
    </div> <!-- #game -->
<hr class="divider" style="background-position:center 0;">
    <div id="connect" class="section">
        <div class="container">
            <h2>Play with us!</h2>
            <div class="row">
              <div class="span6">
                  <div class="well">
                    <iframe id="facebook" src="http://www.facebook.com/plugins/likebox.php?id=114806888558913&amp;connections=60&amp;stream=true&amp;header=true&amp;height=600" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </div>
              </div>
              <div class="span6">
                <h3>Join us on <a href="#facebook">Facebook</a></h3>
                <p>We love coming up with questions and sharing them with you, join us on Facebook to get fun Gaggle questions in your news feed or share your own questions on our wall.</p>
                <h3>In New York City? <small>Come to our events!</small></h3>
                <p>We like to play board games in the city, if you do too why not join us at one of our meet-ups or start your own!</p>
              </div>
            </div>
        </div>
    </div>
<hr class="divider" style="background-position:center 40px;">
    <div id="cards" class="section">
        <div class="container">
          
          <div class="row">
            <div class="card card-socul span2">
              <div class="g_icon i-socul"></div>
              <div class="cardDetails">
                <h3 class="title">Trivia</h3>
                <p>description</p>
              </div>
              <div class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip
              <div class="cardBtn aligncenter">
                <a class="btn" href="#question1" role="button" class="btn" data-toggle="modal"><i class="icon-share-alt"></i> Answer</a>
              </div>
              </div>
              <div class="category">
                <h4 class="aligncenter">Society and Culture</h4>
              </div>
            </div>

            <div class="card card-iq span2">
              <div class="g_icon i-iq"></div>
              <div class="cardDetails">
                <h3 class="title">Trivia</h3>
                <p>description</p>
              </div>
              <div class="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip
              <div class="cardBtn aligncenter">
                <a class="btn" href="#question2" role="button" class="btn" data-toggle="modal"><i class="icon-share-alt"></i> Answer</a>
              </div>
              </div>
              <div class="category">
                <h4 class="aligncenter">Society and Culture</h4>
              </div>
            </div>
          </div> <!-- /row -->
                 
            <!-- Modals -->
            <div class="modal hide" id="question1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header socul_bkg">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="myModalLabel">Trivia</h3>
              </div>
              <div class="modal-body">
                <p><strong>Question:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                <p><strong>Answer:</strong> Labore et dolore</p>
              </div>
              <div class="modal-footer">
                <a class="btn btn-primary" href=""><img src="https://dev.twitter.com/sites/default/files/images_documentation/bird_blue_16.png" alt=""> Twitter</a> <a class="btn btn-primary" href="">Facebook</a> <a class="btn btn-primary" href="">Google+</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              </div>
            </div>

            <div class="modal hide" id="question2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header iq_bkg">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 id="myModalLabel">Trivia</h3>
              </div>
              <div class="modal-body">
                <p><strong>Question:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                <p><strong>Answer:</strong> Labore et dolore</p>
              </div>
              <div class="modal-footer">
                <a class="btn btn-primary" href=""><img src="https://dev.twitter.com/sites/default/files/images_documentation/bird_blue_16.png" alt=""> Twitter</a> <a class="btn btn-primary" href="">Facebook</a> <a class="btn btn-primary" href="">Google+</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              </div>
            </div>
          </div> <!-- /container -->

    </div>
<hr class="divider" style="background-position:center 80px;">
    <div id="about" class="section">
        <div class="container">
            <div class="page-header">
                <div class="row">
                  <div class="span2">
                      <h1>Who we are</h1>
                  </div>
                  <div class="span7">
                      <p>Gaggle was founded by 2 brothers (David &amp; Sean) who wanted to create a game that was a little bit trivia and a little bit party game. The concept eventually grew to a crazy talented team that includes Drew, Lisa, Jake &amp; Nicole. We aim to redefine the traditional trivia game.</p>
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="span2 offset1">
                  <img src="http://placehold.it/170x200" alt="">
                  <h3>David</h3>
                  <p>Is the founder and chief question maker-upper. When not
working on Gaggle, he can be seen jogging the streets of NYC or
spending time with friends and family. How does David Gaggle... Trivia.</p>
              </div>
              <div class="span2">
                  <img src="http://placehold.it/170x200" alt="">
                  <h3>Sean</h3>
                  <p>Is the co-founder and marketing guru. When not working on
Gaggle, you can find him on the golf course practicing his swing. How
does Sean Gaggle... Entertainment.</p>
              </div>
              <div class="span2">
                  <img src="http://placehold.it/170x200" alt="">
                  <h3>Lisa</h3>
                  <p>is the one who likes the words... and the phrasing... and the
punctuation. She usually can be found messing about in Hoboken, NJ.
How does Lisa Gaggle ... Nogically.</p>
              </div>
              <div class="span2">
                  <img src="http://placehold.it/170x200" alt="">
                  <h3>Drew</h3>
                  <p>Is a designer and child of the web generation. When he isn't
setting type on Gaggle cards or coding HTML he is being mysterious.
How does Drew Gaggle... Logic.</p>
              </div>
              <div class="span2">
                  <img src="http://placehold.it/170x200" alt="">
                  <h3>Nicole</h3>
                  <p>Is the art director/designer/constructor of all things tangible in
the world of Gaggle. When she's not gaggling, Nicole can usually be
found making books, or at the beach....though never far from the
internet. How does Nicole Gaggle? Bonus of course!</p>
              </div>
            </div>
        </div> <!-- #main -->
    </div> <!-- #about -->
<hr class="divider" style="background-position:center 120px;">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

    <script src="js/bootstrap.min.js"></script>

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>