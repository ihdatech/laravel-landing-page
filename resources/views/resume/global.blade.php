<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.3rdwavemedia.com/sphere/bs4/4.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 08:20:11 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $profiles['Name'] }} - Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

    <!-- Meta -->
    <meta name="description" content="Resume">
    <meta name="author" content="{{ $profiles['Name'] }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/resume.css') }}">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/academicons@1.9.2/css/academicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="nav-wrapper">
        <div class="container">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero/Intro -->
    <section id="about" class="intro">
        <div class="container">
            <div class="profile-wrapper">
                <img class="profile-image" src="{{ $image }}" alt="{{ $profiles['Name'] }}">
                @php
                    $latestPosition = '';
                    if (!empty($experiences)) {
                        $latestPosition = $experiences[0]['Position'];
                    }
                @endphp
                <h3 class="profile-name">{{ $profiles['Name'] }}</h3>
                <div class="profile-title">{{ $latestPosition }}</div>
                <!-- Social Links -->
                <div class="social-links">
                    <a href="https://linkedin.com/in/ihda-mukhoyar-2a7a7a133" class="btn-link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/ihdatech" class="btn-link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="mailto:{{ $email }}" class="btn-link">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
                <a href="{{ url('/download') }}" class="download-cv" target="_blank">
                    <i class="fas fa-file-download"></i>
                    Download My Resume
                </a>
            </div>
            <div class="content">
                <div class="profile">
                    <h3>About Me</h3>
                    <p>{{ $about }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main">
        <!-- Experience Section -->
        <section id="experience" class="section">
            <div class="container">
                <h2 class="section-title">Experience</h2>
                <div class="timeline">
                    @foreach($experiences as $experience)
                    <div class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div class="timeline-date">
                                @php
                                    $dates = explode(' - ', $experience['Date']);
                                    $startDate = $dates[0] ?? '';
                                    $endDate = $dates[1] ?? 'Present';
                                    echo $startDate . ' - ' . $endDate;
                                @endphp
                            </div>
                            <h3 class="timeline-title">{{ $experience['Position'] }}</h3>
                            <div class="timeline-company">
                                <i class="fas fa-building"></i>
                                {{ $experience['Company'] }}
                                @if(isset($experience['Location']))
                                <span class="timeline-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $experience['Location'] }}
                                </span>
                                @endif
                            </div>
                            <div class="timeline-description">
                                {!! nl2br(e($experience['Description'])) !!}
                            </div>
                            @if(isset($experience['Technologies']))
                            <div class="timeline-tech">
                                @foreach(explode(',', $experience['Technologies']) as $tech)
                                <span class="tech-badge">
                                    <i class="fas fa-code"></i>
                                    {{ trim($tech) }}
                                </span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="section">
            <div class="container">
                <h2 class="section-title">Education</h2>
                <div class="row">
                    @yield('content.education')
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="section">
            <div class="container">
                <h2 class="section-title">Skills</h2>
                <div class="skills-content">
                    @foreach($top as $skill)
                    <div class="skill-item">
                        <div class="skill-header">
                            <div class="skill-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="skill-info">
                                <h3 class="skill-title">{{ $skill['skill'] }}</h3>
                                <div class="skill-level">{{ $skill['level'] }}</div>
                            </div>
                        </div>
                        <div class="skill-progress">
                            <div class="skill-progress-bar" style="width: {{ $skill['percent'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="other-skills">
                    <h3 class="section-title">Other Skills</h3>
                    <div class="other-skills-grid">
                        @foreach($checklist as $item)
                        <div class="skill-tag">
                            <i class="fas fa-check-circle"></i>
                            {{ $item }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="section">
            <div class="container">
                <h2 class="section-title">Projects</h2>
                <div class="projects-grid">
                    @foreach($portfolio as $project)
                    <div class="project-item">
                        <div class="project-header">
                            <h3 class="project-title">{{ $project->Application }}</h3>
                            <p class="project-company">{{ $project->Company }}</p>
                        </div>
                        <div class="project-content">
                            <div class="project-description">{{ $project->Description }}</div>
                            <div class="project-tech">
                                <span class="tech-tag">
                                    <i class="fas fa-laptop-code"></i>
                                    {{ $project->Platform }}
                                </span>
                                <span class="tech-tag">
                                    <i class="fas fa-code"></i>
                                    {{ $project->Languages }}
                                </span>
                                <span class="tech-tag">
                                    <i class="fas fa-layer-group"></i>
                                    {{ $project->Framework }}
                                </span>
                            </div>
                            @if($project->Link)
                            <div class="project-links">
                                <a href="{{ $project->Link }}" class="project-link" target="_blank">
                                    <i class="fas fa-external-link-alt"></i>
                                    View Project
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section">
            <div class="container">
                <h2 class="section-title">Contact</h2>
                <div class="contact-content">
                    <div class="contact-intro">
                        <h3>Let's Connect!</h3>
                        <p>Feel free to reach out for collaborations or just a friendly chat.</p>
                    </div>
                    <div class="contact-grid">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>Email</h4>
                            <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                        </div>
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4>Phone</h4>
                            <p><a href="tel:{{ $phone }}">{{ $phone }}</a></p>
                        </div>
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <h4>LinkedIn</h4>
                            <p><a href="https://linkedin.com/in/ihda-mukhoyar-2a7a7a133" target="_blank">Connect with me</a></p>
                        </div>
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="fab fa-github"></i>
                            </div>
                            <h4>GitHub</h4>
                            <p><a href="https://github.com/ihdatech" target="_blank">View my projects</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} {{ $profiles['Name'] }}. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Smooth scrolling
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.hash);
                $('html, body').animate({
                    scrollTop: target.offset().top - 60
                }, 500);
            });

            // Active nav link
            $(window).on('scroll', function() {
                var scrollPosition = $(window).scrollTop();
                
                $('section').each(function() {
                    var currentSection = $(this);
                    var sectionTop = currentSection.offset().top - 100;
                    var sectionBottom = sectionTop + currentSection.height();
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                        var id = currentSection.attr('id');
                        $('.nav-link').removeClass('active');
                        $('.nav-link[href="#' + id + '"]').addClass('active');
                    }
                });
            });
        });
    </script>
</body>

<!-- Mirrored from themes.3rdwavemedia.com/sphere/bs4/4.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 08:20:11 GMT -->

</html>