@extends('resume.global')

@section('content.experiences')
    @foreach($experiences as $experience)
        <div class="item">
            <div class="job-meta">
                <div class="col-left">
                    <div class="title">{{ $experience['Position'] }}</div>
                </div>
                <div class="col-right">
                    <div class="time">{{ $experience['Date'] }}</div>
                </div>
            </div>
            <div class="work-place">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="place">{{ $experience['Company'] }}</h3>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <div class="location">
                            <i class="fas fa-map-marker-alt mr-1"></i>{{ $experience['Location'] }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-desc">
                @if($experience['Description'])
                    @foreach(explode("\n", $experience['Description']) as $line)
                        <p>{{ $line }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach
@endsection

@section('content.education')
    @foreach($educations as $education)
        <div class="item col-12 col-md-4">
            <div class="item-inner">
                <h3 class="degree">{{ $education['Degree'] }}</h3>
                <div class="education-body">
                    {{ $education['School'] ?? $education['Education'] }}
                </div>
                <div class="time">{{ $education['Time'] }}</div>
            </div>
        </div>
    @endforeach
@endsection

@section('content.top-skills')
    @foreach($languages as $language)
        @if(in_array($language['Name'], ['Java & Android', 'Kotlin & Android', 'Dart & Flutter']))
            <div class="item col-12 col-md-4">
                <div class="item-inner">
                    <div class="chart-easy-pie text-center">
                        @php
                            $skillData = [
                                'Java & Android' => ['percent' => 90, 'level' => 'Expert'],
                                'Kotlin & Android' => ['percent' => 90, 'level' => 'Expert'],
                                'Dart & Flutter' => ['percent' => 80, 'level' => 'Advanced']
                            ];
                            $percent = $skillData[$language['Name']]['percent'];
                            $level = $skillData[$language['Name']]['level'];
                            $startDate = new DateTime($language['StartDate']);
                            $now = new DateTime();
                            $interval = $startDate->diff($now);
                            $years = $interval->y;
                        @endphp
                        <div class="chart-theme-1 chart" data-percent="{{ $percent }}"><span>{{ $percent }}</span>%</div>
                    </div>
                    <h4 class="skill-name">{{ $language['Name'] }}</h4>
                    <div class="level">{{ $level }}, {{ $years }} years</div>
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('content.other-skills')
    <h4>Languages</h4>
    @foreach($languages as $language)
        @php
            $displayName = explode(' & ', $language['Name'])[0];
        @endphp
        <span class="skill-tag">{{ $displayName }}</span>
    @endforeach

    <h4 class="mt-4">Frameworks</h4>
    @foreach($frameworks as $framework)
        <span class="skill-tag">{{ $framework['Name'] }}</span>
    @endforeach

    <h4 class="mt-4">Architectures & Design Patterns</h4>
    @foreach($architectures as $architecture)
        <span class="skill-tag">{{ $architecture['Name'] }}</span>
    @endforeach
    @foreach($designPatterns as $pattern)
        <span class="skill-tag">{{ $pattern['Name'] }}</span>
    @endforeach

    <h4 class="mt-4">Tools & Software</h4>
    @foreach($softwares as $software)
        <span class="skill-tag">{{ $software['Name'] }}</span>
    @endforeach
@endsection

@section('content.portfolio')
    <div class="section-inner">
        <div class="portfolio-grid">
            <div class="row">
                @foreach($portfolio as $project)
                    @php
                        $platformClass = $project['Platform'];
                    @endphp
                    <div class="item {{ $platformClass }} col-lg-3 col-md-6 col-12 mb-4">
                        <div class="item-inner rounded shadow-sm">
                            <div class="content text-left p-3">
                                <h3 class="sub-title mb-2">
                                    <a class="text-light" href="#">{{ $project['Application'] }}</a>
                                </h3>
                                <div class="meta-info">
                                    <div class="company text-light mb-1">{{ $project['Company'] }}</div>
                                    <div class="tech text-lights">
                                        {{ $project['Languages'] }}
                                        @if($project['Framework'])
                                            & {{ $project['Framework'] }}
                                        @endif
                                    </div>
                                    <div class="platform mt-2">
                                        <span class="badge badge-secondary">{{ $project['Platform'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('content.profile')
    <div class="profile">
        @php
            $firstExperience = new DateTime('2017-06-01');
            $now = new DateTime();
            $experience = $now->diff($firstExperience)->y;
            $description = str_replace(
                'over 7 years',
                'over ' . $experience . ' years',
                $profiles['Description']
            );
        @endphp
        <p>{{ $description }}</p>
    </div>
@endsection

@section('content.checklist')
    <li><span class="material-symbols-outlined">check_circle</span> Android App development with Java</li>
    <li><span class="material-symbols-outlined">check_circle</span> Android App development with Kotlin</li>
    <li><span class="material-symbols-outlined">check_circle</span> Android/iOS App development with Flutter</li>
    <li><span class="material-symbols-outlined">check_circle</span> Back-end development with CodeIgniter/PHP</li>
    <li><span class="material-symbols-outlined">check_circle</span> Back-end development with Flask/Python</li>
    <li><span class="material-symbols-outlined">check_circle</span> RESTful API development with Slim Framework</li>
    <li><span class="material-symbols-outlined">check_circle</span> RESTful API development with Lumen</li>
@endsection