<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta name="description" content="Cleiver Carvalhal Carneiro personal webpage and maybe a blog" />
    <meta name="keywords" content="cleiver, homepage, site, blog" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/transition-animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
        <!-- Header -->
        <header id="site_header" class="header mobile-menu-hide">
            <div class="my-photo">
                <img src="{{  asset('images/cleiver.png') }}" alt="image">
                <div class="mask"></div>
            </div>

            <div class="site-title-block">
                <h1 class="site-title">Cleiver Carvalhal Carneiro</h1>
            </div>

            <!-- Navigation & Social buttons -->
            <div class="site-nav">
                <!-- Main menu -->
                <ul id="nav" class="site-main-menu">
                    <li>
                        <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#resume" data-animation="58" data-goto="2">Resume</a>
                    </li>
                    <li>
                        <a class="pt-trigger" href="#contact" data-animation="58" data-goto="3">Contact</a>
                    </li>
                </ul>
                <!-- /Main menu -->

                <!-- Social buttons -->
                <ul class="social-links">
                    <li><a target="_blank" class="tip social-button" href="https://github.com/cleiver" title="Github"><i class="fa fa-github"></i></a></li>
                    <li><a target="_blank" class="tip social-button" href="https://www.linkedin.com/in/cleiver/" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a target="_blank" class="tip social-button" href="https://twitter.com/cleiverrr" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
                <!-- /Social buttons -->
            </div>
            <!-- Navigation & Social buttons -->
        </header>
        <!-- /Header -->

        <!-- Mobile Header -->
        <div class="mobile-header mobile-visible">
            <div class="mobile-logo-container">
                <div class="mobile-site-title">cleiver dot me</div>
            </div>

            <a class="menu-toggle mobile-visible">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <!-- /Mobile Header -->

        <!-- Main Content -->
        <div id="main" class="site-main">
            <!-- Page changer wrapper -->
            <div class="pt-wrapper">
                <!-- Subpages -->
                <div class="subpages">

                    <!-- About Me Subpage -->
                    <section class="pt-page pt-page-1" data-id="about_me">
                        <div class="section-title-block">
                            <h2 class="section-title">About Me</h2>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 subpage-block">
                                <div class="general-info">
                                    <p>I have a bachelor's degree and a specialization certificate on Systems Information. I'm a software developer with over 10 years of experience who enjoys working on those strange problems that weren't supposed to happen.</p>
                                    <p>Having worked for the Government for the past few years, I have had the opportunity to work in several different areas, from human resources to financial management, passing through legal proceedings and now on general administrative routines. My main experience is with back-end programming in PHP, but I have some knowledge in front-end technology such as HTML5, CSS3 and JavaScript as well.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Fun facts block -->
                        <div class="block-title">
                            <h3>Fun Facts</h3>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-3 subpage-block">
                                <div class="fun-fact-block">
                                    <i class="pe-7s-icon pe-7s-monitor"></i>
                                    <h4>Best TV Series</h4>
                                    <span class="fun-value" data-toggle="tooltip" data-placement="bottom" title="I'm serious! =D">LOST</span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 subpage-block">
                                <div class="fun-fact-block">
                                    <i class="pe-7s-icon pe-7s-plane"></i>
                                    <h4>Countries Visited</h4>
                                    <span class="fun-value" data-toggle="tooltip" data-placement="bottom" title="Portugal, Chile, Argentina, Australia, Mexico, Peru and United States">7</span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 subpage-block">
                                <div class="fun-fact-block">
                                    <i class="pe-7s-icon pe-7s-joy"></i>
                                    <h4>Favorite Game</h4>
                                    <span class="fun-value" data-toggle="tooltip" data-placement="bottom" title="Even the first one!">Assassin's Creed</span>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3 subpage-block">
                                <div class="fun-fact-block">
                                    <i class="pe-7s-icon pe-7s-coffee"></i>
                                    <h4>Coffee Consumed</h4>
                                    <span class="fun-value">Over 9,000</span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Fun fucts block -->
                    </section>
                    <!-- End of About Me Subpage -->

                    <!-- Resume Subpage -->
                    <section class="pt-page pt-page-2" data-id="resume">
                        <div class="section-title-block">
                            <h2 class="section-title">Resume</h2>
                            <h5 class="section-description">10+ Years of Experience</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="block-title">
                                    <h3>Education</h3>
                                </div>
                                <div class="timeline">
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">2008</h5>
                                        <h4 class="event-name">Specialization in Information Systems</h4>
                                        <span class="event-description">PUC-Rio</span>
                                        <p></p>
                                    </div>
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">2005</h5>
                                        <h4 class="event-name">B.Sc. in Information Systems</h4>
                                        <span class="event-description">Universidade do Grande Rio Professor José de Souza Herdy</span>
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="block-title">
                                    <h3>Experience</h3>
                                </div>
                                <div class="timeline">
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">Jul 2012 - Current</h5>
                                        <h4 class="event-name">Software Engineer</h4>
                                        <span class="event-description">Tribunal de Justiça do Estado do Rio de Janeiro</span>
                                        <p></p>
                                    </div>
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">Jun 2009 - Jul 2012</h5>
                                        <h4 class="event-name">Software Engineer</h4>
                                        <span class="event-description">Instituto Estadual do Ambiente</span>
                                        <p></p>
                                    </div>
                                    <!-- Single event -->
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">Oct 2008 - May 2009</h5>
                                        <h4 class="event-name">PHP Programmer</h4>
                                        <span class="event-description">CTIS</span>
                                        <p></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="block-title">
                                    <h3>Coding Skills</h3>
                                </div>
                                <div class="skills-info">
                                    <h4>PHP</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 90%;"></div>
                                    </div>

                                    <h4>Python</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 40%;"></div>
                                    </div>

                                    <h4>HML5</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 90%;"></div>
                                    </div>

                                    <h4>CSS3</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 80%;"></div>
                                    </div>

                                    <h4>Javascript</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 50%;"></div>
                                    </div>

                                    <h4>C#</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 20%;"></div>
                                    </div>

                                    <h4>Java</h4>
                                    <div class="skill-container">
                                        <div class="skill-percentage" style="width: 10%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="download-cv-block">
                                    <a class="button" target="_blank" href="https://www.linkedin.com/in/cleiver/">View full resume @ Linkedin</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Resume Subpage -->

                    <!-- Contact Subpage -->
                    <section class="pt-page pt-page-6" data-id="contact">
                        <div class="section-title-block">
                            <h2 class="section-title">Contact</h2>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 subpage-block">
                                <div class="block-title">
                                    <h3>Get in Touch</h3>
                                </div>
                                <p>We can have an awesome coffee at <a href="https://www.facebook.com/curtocafe/">Curto Café</a> if you're in Rio de Janeiro or at <a href="https://www.facebook.com/dicenroll/">Dice n Roll</a> if you live in Niterói. <i class="fa fa-smile-o"></i><i class="fa fa-coffee"></i></p>
                                <p>Feel free to use the form to send me an email or contact me through twitter or linkedin.
                                <div class="contact-info-block">
                                    <div class="ci-icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <div class="ci-text">
                                        <h5>Rio de Janeiro, Brazil</h5>
                                    </div>
                                </div>
                                <div class="contact-info-block">
                                    <div class="ci-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="ci-text">
                                        <h5>Niterói, RJ</h5>
                                    </div>
                                </div>
                                <div class="contact-info-block">
                                    <div class="ci-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="ci-text">
                                        <h5><a href="https://twitter.com/cleiverrr">@cleiverrr</a></h5>
                                    </div>
                                </div>
                                <div class="contact-info-block">
                                    <div class="ci-icon">
                                        <i class="fa fa-linkedin-square"></i>
                                    </div>
                                    <div class="ci-text">
                                        <h5><a href="https://www.linkedin.com/in/cleiver/">/cleiver</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 subpage-block">
                                <div class="block-title">
                                    <h3>Contact Form</h3>
                                </div>
                                <form id="contact-form" method="post" action="{{ route('send-contact-form') }}">
                                    {{ csrf_field() }}

                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-user"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-envelope"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required"
                                                data-error="Please, leave me a message."></textarea>
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-comment"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                        <input type="submit" class="button btn-send" value="Send message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- End Contact Subpage -->

                </div>
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @unless (config('app.env') != 'production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96730573-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-96730573-1');
    @endunless
    </script>
</body>

</html>