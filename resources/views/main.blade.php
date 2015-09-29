<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pulse - Fresh New Band In The Niagara Region</title>
        <meta name="description" content="Pulse is a fresh new band in the Niagara region looking to bring the Motown/Funk/Soul genres back in style.">
        <meta name="keywords" content="Pulse, Band, Niagara, Motown, New">
        <meta name="author" content="Pulse Niagara">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Flexslider -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}" >

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" >
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>


    </head>

    <body>

    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Pulse</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#media">Media</a></li>
                        <li><a href="#bios">Bios</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <div class="email">contact@pulseband.ca</div>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <div class="big-image">
        <div class="show-hanger">
            <div class="container widget upcoming">
                <div class="left-contain">
                    <span class="left-arrow"> < </span>
                </div>

                <div class="shows">
                    <div class="shows-strip">
                        <div class="show">
                            <div class="date">Saturday, September 26th</div>
                            <div class="time">10pm - 2am</div>
                            <div class="location">Cats Caboose - St. Catharines</div>
                        </div>

                        <div class="show">
                            <div class="date">Sunday, September 27th</div>
                            <div class="time">2pm - 6pm</div>
                            <div class="location">Donellys Pub - Thorold</div>
                        </div>

                        <div class="show">
                            <div class="date">Friday, October 2nd</div>
                            <div class="time">7pm - 11pm</div>
                            <div class="location">Air Canada Centre - Toronto</div>
                        </div>

                        <div class="show">
                            <div class="date">Saturday, January 15th</div>
                            <div class="time">7pm - 11pm</div>
                            <div class="location">Cats Caboose - St. Catharines</div>
                        </div>
                    </div>

                    <h2 class="upcoming-heading">Upcoming Shows</h2>
                </div>

                <div class="right-contain">
                    <span class="right-arrow"> > </span>
                </div>

                <div class="clear"></div>
            </div>

        </div>
    </div>

    <section class="social-wrapper">
        <div id="media" class="anchor"></div>

        <div class="container">
            <div class="col-lg-12">
                <div class="social-container">
                    <h2 class="sub-heading">Social Media</h2>

                    <div class="col-lg-6 widget facebook">
                        <h3>Facebook</h3>
                        <div class="facebook-posts">
                        <?php
                            $page_id = '1433601266925408';
                            $access_token = '1599822940260368|L6prZhxUoUQR4ldALq5HoLCoKbU';
                            $posts = '';

                            $json_object = file_get_contents('https://graph.facebook.com/'.$page_id.'/posts?access_token='.$access_token);

                            $fb_data = json_decode($json_object);

                            for($i = 0; $i < 3; $i++){
                                $dateCreated = new DateTime($fb_data->data[$i]->created_time);
                                $date = date_format($dateCreated, 'F d, Y');

                                $likes = count($fb_data->data[$i]->likes->data);


                                $posts .= '<div class="feed-content fb">';
                                $posts .= '<div class="date">'.$date.'</div>';
                                $posts .= '<div class="fb-msg">'.$fb_data->data[$i]->message.'</div>';
                                $posts .= '<div class="fb-likes"><span>Likes: </span>'.$likes.'</div>';
                                $posts .= "</div><br><br>";
                            }

                            echo $posts;
                        ?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h3>YouTube Widget</h3>
                    </div>

                    <div class="col-lg-12">
                        <div class="song-player">
                            <h3>Song Player</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bios-wrapper">
        <div id="bios" class="anchor"></div>
        <div class="container">
            <div class="col-lg-12">
                <div class="bios-container">

                    <!-- Place somewhere in the <body> of your page -->
                    <div class="bios-gallery">
                        <ul class="slides">
                            <li>
                                <div class="bio">
                                    <div class="left">
                                        <div class="content">
                                            <h2>Patrick Shea</h2>
                                            <h3>Vocals/Guitar</h3>

                                            <p>
                                                Pat started playing on a beat-up old classical guitar with steel strings just before he started high school and it wasn't long before he discovered he had an inherent love for playing instruments. He has played guitar and bass in both cover bands and originals but he always found himself singing for the projects he was in.

                                                With the birth of Pulse, it was decided that the only way to make the music truly sound right was to integrate a keyboard and Pat is always up for learning a new instrument. Having never learned to play, he started with the songs on Pulse's set and took to it right away. He may be new to the keyboard but his real contribution is in the way of vocals that can cut through with piercing high notes or slide along a low, slow groove. Pat is one part of four that make Pulse such a unique and power sound.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="photo-container">
                                            <div class="photo pat">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div class="bio">
                                    <div class="left">
                                        <div class="content">
                                            <h2>Marcus Gazzellone</h2>
                                            <h3>Drums</h3>

                                            <p>
                                                Marcus started playing the drums at a young age but it really began during high school that he was very serious about music and drums.He also has a passion with recording and mixing songs in his own studio. He was always practising after school and than realize he should join bands.He and max played in a couple of bands and realizing they had a good chemistry together.

                                                Marcus explores genres such as to Funk, fusion, motown to progressive rock, reggae and experimental rock. Having played for quite sometime, he has develop a ear how to approach music in certain ways. Either its his musical drum parts or improvising the whole time while playing or practising. For Pulse marcus is responsible for keeping the groove and the pocket going in a timely manner. He gives energy, chemistry, and unique personality to the band and his chops that you would know its marcus Gazzellone.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="photo-container">
                                            <div class="photo marc">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div class="bio">
                                    <div class="left">
                                        <div class="content">
                                            <h2>Max Saglimbeni</h2>
                                            <h3>Bass/Back-up Vocals</h3>

                                            <p>
                                                Max was introduced to the bass guitar from his father, who had played bass throughout most of his life. Max began to play when he was old enough to grasp the instrument, and has been playing ever since. Max grew up playing a lot of progressive music. He was introduced to bands like Pink Floyd and Rush at a very young age and found the songs challenging, which allowed him to spend a lot of time on the instrument learning how to play.

                                                When he was old enough to start getting out to the bar scene, Max began to expand his musical interests. Watching bands perform Funk and Motown music was a big inspiration and motivated him to start playing music that got the crowd to move.

                                                Max has been playing with band members Marcus and Trevor throughout his entire life, and formed great chemistry with vocalist Patrick Shea shortly after being introduced.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="photo-container">
                                            <div class="photo max">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div class="bio">
                                    <div class="left">
                                        <div class="content">
                                            <h2>Trevor Hebert</h2>
                                            <h3>Guitar</h3>

                                            <p>
                                                Trevor began to play Guitar when he was 14. Listening to popular rock groups like Blink 182 and Sum 41, Trevor's interest in guitar rapidly grew and has stuck with him ever since. Over time his interests shifted to Progressive and Classic Rock.

                                                Listening to groups like The Beatles, Led Zeppelin and Pink Floyd, Trevor developed his musical talents further and has been on a steady incline ever since. During his college experience Trevor expanded his musical horizons and crossed over into the Motown scene.

                                                Trevor has been playing with band mates Max and Marcus since he began to play guitar, and has formed great chemistry with vocalist Patrick Shea.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <div class="photo-container">
                                            <div class="photo trev">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="gallery-wrapper">
        <div id="gallery" class="anchor"></div>
        <div class="gallery">
            <div class="image1 image">

            </div>
            <div class="image2 image">

            </div>
            <div class="image3 image">

            </div>
            <div class="image4 image">

            </div>

            <div class="clear"></div>
        </div>
    </section>

    <section class="contact-wrapper">
        <div id="contact" class="anchor"></div>
        <div class="container">
            <h2 class="sub-heading">Contact Us</h2>


                <div class="alerts">
                    <ul>

                    </ul>
                </div>


            <form class="contact-form" method="post" action="/">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="email-input">Email address</label>
                    <input type="email" class="form-control email" id="email-input" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone-input">Phone </label>
                    <input type="text" class="form-control phone" id="phone-input" name="phone" placeholder="Phone (Optional)">
                </div>
                <div class="form-group">
                    <label for="message-input">Message</label>
                    <textarea class="form-control message" id="message-input" name="message" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </section>

    <footer>

        <div class="container">
            <div class="copyright">Copyright &copy <?php echo date('Y'); ?></div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Custom JS file -->
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/jquery.flexslider.js')}}"></script>
    </footer>

    </body>
</html>
