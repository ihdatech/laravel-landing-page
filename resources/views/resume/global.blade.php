<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.3rdwavemedia.com/sphere/bs4/4.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 08:20:11 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic" />

    <!-- Meta -->
    <meta name="description" content="Responsive Resume/CV／Portfolio Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js" integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-1.css') }}">
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'http://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1506230579705064');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1506230579705064&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24707561-38"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-24707561-38');
    </script>

    <style>
        .profile-image {
            border-radius: 50%;
            border-style: dashed;
        }
    </style>

    <!-- Material -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <style>
        .mdc-button {
            --mdc-theme-primary: #00e5ff;
            --mdc-theme-secondary: #00838f;
            --mdc-theme-on-primary: #000000;
            --mdc-theme-on-secondary: #ffffff;
        }
        .mdc-button--raised {
            --mdc-theme-primary: #00838f;
            --mdc-theme-secondary: #00e676;
            --mdc-theme-on-primary: #ffffff;
            --mdc-theme-on-secondary: #000000;
        }
    </style>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script>
        function onSendEmail() {
            location.href = "mailto:{{ $email }}";
        }
        function onCallPhone() {
            location.href = "tel:{{ $phone }}";
        }
        function onLinkedin() {
            window.open("https://linkedin.com/in/ihda-mukhoyar-2a7a7a133");
        }
        function onGithub() {
            window.open("https://github.com/ihdatech");
        }
        
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header class="header">
        <div class="top-bar container-fluid">
            <div class="actions">
                <button class="mdc-button mdc-button--raised" onclick="onSendEmail()">
                    <div class="mdc-button__ripple"></div>
                    <i class="material-icons mdc-button__icon" aria-hidden="true">send</i>
                    <span class="mdc-button__label">Hire Me</span>
                </button>
                <button class="mdc-button mdc-button--raised">
                    <div class="mdc-button__ripple"></div>
                    <i class="material-icons mdc-button__icon" aria-hidden="true">move_to_inbox</i>
                    <span class="mdc-button__label">Download My Resume</span>
                </button>
            </div>
            <!--//actions-->
            <ul class="social list-inline">
                <!-- <li class="list-inline-item"><a href="https://linkedin.com/in/ihda-mukhoyar-2a7a7a133"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li> -->
                <button class="mdc-fab mdc-fab--mini" aria-label="Linkedin" onclick="onLinkedin()">
                    <div class="mdc-fab__ripple"></div>
                    <!-- <span class="mdc-fab__icon material-icons">favorite</span> -->
                    <span class="fab fa-linkedin-in" aria-hidden="true"></span>
                </button>
                <button class="mdc-fab mdc-fab--mini" aria-label="Linkedin">
                    <div class="mdc-fab__ripple"></div>
                    <span class="fab fa-twitter" aria-hidden="true"></span>
                </button>
                <button class="mdc-fab mdc-fab--mini" aria-label="Linkedin">
                    <div class="mdc-fab__ripple"></div>
                    <span class="fab fa-google-plus-g" aria-hidden="true"></span>
                </button>
                <button class="mdc-fab mdc-fab--mini" aria-label="Linkedin" onclick="onGithub()">
                    <div class="mdc-fab__ripple"></div>
                    <span class="fab fa-github-alt" aria-hidden="true"></span>
                </button>
                <button class="mdc-fab mdc-fab--mini" aria-label="Linkedin">
                    <div class="mdc-fab__ripple"></div>
                    <span class="fab fa-skype" aria-hidden="true"></span>
                </button>
            </ul>
            <!--//social-->
        </div>
        <!--//top-bar-->

        <div class="intro">
            <div class="container text-center">
                <img class="profile-image" src="{{ $image }}" alt="">
                <h1 class="name">{{ $profiles['Name'] }}</h1>
                <div class="title">{{ $profiles['Position'] }}</div>
                <div class="profile"><p>{{ $profiles['Description'] }}</p></div>
                <!--//profile-->
            </div>
            <!--//container-->
        </div>
        <!--//intro-->

        <div class="contact-info">
            <div class="container text-center">
                <ul class="list-inline">
                    <!-- <li class="website list-inline-item"><i class="fas fa-globe"></i><a href="http://www.javaje.com/" target="_blank">javaje.com</a></li> -->
                    <button class="mdc-button" onclick="onSendEmail()">
                        <div class="mdc-button__ripple"></div>
                        <i class="material-icons mdc-button__icon" aria-hidden="true">email</i>
                        <span class="mdc-button__label">{{ $email }}</span>
                    </button>
                    <button class="mdc-button" onclick="onCallPhone()">
                        <div class="mdc-button__ripple"></div>
                        <i class="material-icons mdc-button__icon" aria-hidden="true">phone</i>
                        <span class="mdc-button__label">{{ $phone }}</span>
                    </button>
                </ul>
            </div>
            <!--//container-->
        </div>
        <!--//contact-info-->

        <div class="page-nav-space-holder d-none d-md-block">
            <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
                <div class="container">
                    <ul id="page-nav" class="nav page-nav list-inline">
                        <li class="nav-item"><a class="scrollto nav-link" href="#experiences-section">Experiences</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#education-section">Education</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#skills-section">Skills</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#portfolio-section">Portfolio</a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#contact-section">Contact</a></li>
                    </ul>
                    <!--//page-nav-->
                </div>
            </div>
            <!--//page-nav-wrapper-->
        </div>

    </header>
    <!--//header-->

    <div class="wrapper container">
        <section id="experiences-section" class="experiences-section section">
            <h2 class="section-title">Work Experiences</h2>
            <div class="timeline">
                @yield('content.experiences')
            </div>
            <!--//timeline-->
        </section>
        <!--//section-->

        <section id="education-section" class="education-section section">
            <h2 class="section-title">Education</h2>
            <div class="row">
                @yield('content.education')
            </div>
            <!--//row-->
        </section>
        <!--//section-->


        <section id="skills-section" class="skills-section section text-center">
            <h2 class="section-title">Professional Skills</h2>
            <div class="top-skills">
                <h3 class="subtitle">Top Skills</h3>
                <div class="row">
                    @yield('content.top-skills')
                </div>
                <!--//row-->
            </div>
            <!--//top-skills-->

            <div class="other-skills">
                <h3 class="subtitle">Other Skills</h3>
                <div class="misc-skills">
                    @yield('content.other-skills')
                </div>
            </div>
            <!--//other-skills-->

        </section>
        <!--//skills-section-->


        <section id="portfolio-section" class="portfolio-section section">
            <h2 class="section-title">Portfolio</h2>
            <ul id="filters" class="filters clearfix">
                <li class="type active" data-filter="*">All</li>
                <li class="type" data-filter=".Android">Android</li>
                <li class="type" data-filter=".Web">Web</li>
            </ul>
            <!--//filters-->
            <div class="items-wrapper isotope row">
                @yield('content.portfolio')
            </div>
            <!--//item-wrapper-->
        </section>
        <!--//section-->

        <section id="contact-section" class="contact-section section">
            <h2 class="section-title">Get in Touch</h2>
            <div class="intro">
                <img class="profile-image" src="{{ $image }}" alt="" width="160px" height="160px">
                <div class="dialog">
                    <!-- <p>I'm currently taking on freelance work. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                        parturient montes. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                        vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p> -->
                    <p><strong>I can help with the following:</strong></p>
                    <ul class="list-unstyled service-list">
                        <!-- <li><i class="fas fa-check" aria-hidden="true"></i> Front-end development with AngularJS</li> -->
                        <!-- <li><i class="fas fa-check" aria-hidden="true"></i> Back-end development with CodeIgniter/PHP</li> -->
                        <!-- <li><i class="fas fa-check" aria-hidden="true"></i> UI development</li> -->
                        <!-- <li><i class="fas fa-check" aria-hidden="true"></i> UX prototyping</li> -->
                        @yield('content.checklist')
                    </ul>
                    <p>Drop me a line at <a href="mailto:{{ $email }}">{{ $email }}</a> or call me at <a href="tel:{{ $phone }}">{{ $phone }}</a></p>
                    <ul class="social list-inline">
                        <li class="list-inline-item">
                            <a href="https://linkedin.com/in/ihda-mukhoyar-2a7a7a133">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/ihdatech">
                                <i class="fab fa-github-alt" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-skype" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!--//social-->
                </div>
                <!--//diaplog-->
            </div>
            <!--//intro-->

        </section>
        <!--//section-->

    </div>
    <!--//wrapper-->

    <!-- <footer class="footer text-center">
        <div class="container">
            <small class="copyright">Template Copyright @ <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
        </div>
    </footer> -->

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/isotope.pkgd.min.js') }}"></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{ asset('assets/js/demo/style-switcher.js') }}"></script>
</body>

<!-- Mirrored from themes.3rdwavemedia.com/sphere/bs4/4.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 08:20:11 GMT -->

</html>