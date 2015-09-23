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
                        <li><a href="#shows">Shows</a></li>
                        <li><a href="#media">Media</a></li>
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
        <div class="container">
            <div class="col-lg-12">
                <div class="social-container">
                    <h2 class="sub-heading">Social Stuff & Media</h2>

                    <div class="col-lg-6">
                        <h3>Facebook Widget</h3>
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

    <section class="gallery-wrapper">
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
        <div class="container">
            <h2 class="sub-heading">Contact Us</h2>

            <form class="contact-form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage1">Message</label>
                    <textarea class="form-control" name="exampleInputMessage1" placeholder="Message"></textarea>
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
    </footer>

    </body>
</html>
