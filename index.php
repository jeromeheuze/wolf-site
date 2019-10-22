<?php
$fileType = "jpg";
if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
    // webp is supported!
    $fileType = "webp";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All About Wolves!</title>
    <meta name="description" content="Everything you wanted to know about Wolves and you were too scared to ask.">
    <link href="/portfolio/wolf-site/css/flexboxgrid.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,400,700&display=swap" rel="stylesheet">
    <link href="/portfolio/wolf-site/css/main.min.css" rel="stylesheet">
    <!--<link href="styles/main.css" rel="stylesheet">-->
    <link rel="icon" type="image/png" href="/portfolio/wolf-site/img/icons8-wolf-100.png">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div class="box">
                    <nav class="menu">
                    <ul>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Menu</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="box"><img src="/portfolio/wolf-site/img/icons8-wolf-64.png" class="logo" alt="Wolf"></div>
            </div>
            <div class="col-xs-5">
                <div class="box">
                    <nav class="menu">
                        <ul>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Menu</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="banner format-<?=$fileType;?>">
    <div class="overlay"></div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="shield"></div>
            <div class="title"><h1><span>Welcome to</span> Wolf Pack App</h1></div>
            <div class="subtitle"><p>Don't get lost in the wild without our app - You will thanks us later!</p></div>
        </div>
    </div>
    </div>
</div>
<main>
    <section class="m1">
        <div class="container-fluid no-padding">
        <div class="row start-xs">
            <div class="col-xs-12 col-sm-6 no-padding m1detail">
                <div class="content">
                    <div class="phone format-<?=$fileType;?>"></div>
                    <h2>Wolf Pack App</h2>
                    <p>Everything you wanted to know about Wolves and you were too scared to ask.</p>
                    <p>Discover the nearest wolf pack from your house, order online wolf scent, read the latest news about making a wolf pet and survive.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding grid2x2">
                <div class="quad imgm1 format-<?=$fileType;?>"></div>
                <div class="quad imgm2 format-<?=$fileType;?>"></div>
                <div class="quad imgm3 format-<?=$fileType;?>"></div>
                <div class="quad imgm4 format-<?=$fileType;?>"></div>
            </div>
        </div>
        </div>
    </section>
    <section class="m2">
        <div class="container-fluid no-padding">
            <div class="row start-xs">
                <div class="col-xs-12 col-sm-6 no-padding m2pic">
                    <div class="single simgm1 format-<?=$fileType;?>"></div>
                </div>
                <div class="col-xs-12 col-sm-6 no-padding m2detail">
                    <div class="content">
                        <h2>Wolf Fake Fur</h2>
                        <p>We all know the pros of fake fur but do you know the cons. You might attract more alpha wolves! This is going to be an epic journey - Buy now!</p>
                        <p class="disclaimer">Disclaimer: Wear at your own risk - No returns if we see canine rips or blood.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="m3">
        <div class="container-fluid no-padding">
            <div class="row start-xs">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding m3detail">
                    <div class="content">
                        <h2>Wolf Universe available in <abbr title="Augmented Reality">AR</abbr>/<abbr title="Virtual Reality">VR</abbr>/<abbr title="Wolf Reality">WR</abbr></h2>
                        <p>Our Augmented Reality (<abbr title="Augmented Reality">AR</abbr>) glasses will let you see where the wolf droppings are. Entropia Universe would be proud!</p>
                        <p>Our Virtual Reality (<abbr title="Virtual Reality">VR</abbr>) headset is the top of the line with portability in mind. Comes with a mule to carry the equipment! (Food for mule not included)</p>
                        <p>Our Wolf Reality (<abbr title="Wolf Reality">WR</abbr>) brain implants are the latest trend. So far we had no complaints from users. Become a wolf, feel like a wolf and hunt the rabbits with so much ease. (We have a support group for rabbit lovers.)</p>
                        <p class="disclaimer">Disclaimer: Please do not feed the animals. Beside that - you should be fine.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding m3pic">
                    <div class="single simgm1 format-<?=$fileType;?>"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="m4">
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-xs-12 no-padding m4detail">
                    <div class="content">
                        <h2>Send us a message via Wolf Express&trade;</h2>
                        <form>
                            <div class="row">
                                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
                                    <div class="fields">
                                        <label for="inputName">Name</label>
                                        <input id="inputName" type="text" placeholder="Enter Name" aria-label="Name">
                                    </div>
                                    <div class="fields">
                                        <label for="inputEmail">Email</label>
                                        <input id="inputEmail" type="email" placeholder="Enter Email" aria-label="Email">
                                    </div>
                                    <div class="fields">
                                        <label for="inputMessage">Message</label>
                                        <textarea id="inputMessage" rows="10"></textarea>
                                    </div>
                                    <div class="action">
                                        <button type="button" title="Send via Wolf Express">Send via Wolf Express&trade;</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-2 no-padding">
                    <div class="shield"></div>
                </div>
                <div class="col-xs-12 col-md-offset-1 col-md-3 no-padding">
                    <div class="contact-cont">
                    <h3>Contact Us</h3>
                    <address>
                        Wolf Pack Unlimited<br>
                        810000 Gray wolf Street<br>
                        Canis Lupus, LC 17408<br>
                        United States
                    </address>
                    <p><a href="https://nywolf.org/adopt-a-wolf/" target="_blank" rel="noopener">Adopt a Wolf</a></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 no-padding">
                    <div class="howls-cont">
                    <h3>Recent Howls</h3>
                    <div class="howls">
                        <img src="/portfolio/wolf-site/img/icons8-wolf-64.png" class="howls-icon" alt="Howls">
                        <div class="howls-content">
                            <p><span class="author">Lone Wolf</span> said <span class="quotes">Don't lower your expectations to fit into the world, you were born to stand out.</span></p>
                            <small>September 29th, 2019</small>
                        </div>
                    </div>
                    <div class="howls">
                        <img src="/portfolio/wolf-site/img/icons8-wolf-64.png" class="howls-icon" alt="Howls">
                        <div class="howls-content">
                            <p><span class="author">Wolf Quotes</span> said <span class="quotes">Let go of your FEARS and chase after your DREAMS.</span></p>
                            <small>September 28th, 2019</small>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row madeby">
                <div class="col-xs-12 no-padding">
                    <div class="primary"><a href="https://heuzeproductions.com/" target="_blank" rel="noopener">Made By Heuze Productions</a></div>
                    <div class="secondary">
                        <a href="https://icons8.com/" target="_blank" rel="noopener">Icons credit</a>&nbsp;-&nbsp;<a href="https://unsplash.com/" target="_blank" rel="noopener">Photographs credit</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $(function() {
        console.log( "ready!" );
    });
</script>
</body>
</html>