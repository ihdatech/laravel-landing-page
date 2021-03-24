@extends('resume.global')
@section('content.experiences')
        @if(is_array($experiences))
            @foreach(array_reverse($experiences) as $array)
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">{{ $array['place'] }}</h3>
                        <div class="location"><i class="fas fa-map-marker-alt mr-1"></i> {{ $array['location'] }}</div>
                    </div>
                    <div class="job-meta">
                        <!-- <div class="title">Senior Software Engineer</div> -->
                        <div class="title">{{ $array['title'] }}</div>
                        <div class="time">{{ $array['time'] }}</div>
                    </div>
                    <!--//job-meta-->
                    <div class="job-desc">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p> -->
                        <!-- <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Donec pede justo ante</li>
                            <li>Maecenas tempus tellus eget </li>
                        </ul> -->
                    </div>
                    <!--//job-desc-->
                </div>
                <!--//item-->
            @endforeach
        @endif
            @foreach($experiences as $array)
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">{{ $array['Place'] }}</h3>
                        <div class="location">
                            <!-- material -->
                            <i class="material-icons mdc-button__icon" aria-hidden="true">location_on</i>
                            {{ $array['Location'] }}
                        </div>
                    </div>
                    <div class="job-meta">
                        <!-- <div class="title">Senior Software Engineer</div> -->
                        <div class="title">{{ $array['Position'] }}</div>
                        <div class="time">{{ $array['Date'] }}</div>
                    </div>
                    <!--//job-meta-->
                    <div class="job-desc">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p> -->
                        <!-- <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Donec pede justo ante</li>
                            <li>Maecenas tempus tellus eget </li>
                        </ul> -->
                    </div>
                    <!--//job-desc-->
                </div>
                <!--//item-->
            @endforeach
@endsection
@section('content.education')
            @foreach($educations as $array)
                <div class="item col-12 col-md-4">
                    <div class="item-inner">
                        <h3 class="degree">{{ $array['Degree'] }}</h3>
                        <div class="education-body">{{ $array['Education'] }}</div>
                        <!--//education-body-->
                        <div class="time">{{ $array['Time'] }}</div>
                        <!-- <div class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</div> -->
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
            @endforeach
@endsection
@section('content.top-skills')
            @if(is_array($top))
                @foreach($top as $array)
                    <div class="item col-12 col-md-4">
                        <div class="item-inner">
                            <div class="chart-easy-pie text-center">
                                <div class="chart-theme-1 chart" data-percent="{{ $array['percent'] }}"><span>{{ $array['percent'] }}</span>%</div>
                            </div>
                            <h4 class="skill-name">{{ $array['skill'] }}</h4>
                            <div class="level">{{ $array['level'] }}</div>
                            <!-- <div class="desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</div> -->
                        </div>
                        <!--//item-inner-->
                    </div>
                    <!--//item-->
                @endforeach
            @endif
@endsection
@section('content.other-skills')
                @foreach($languages as $array)
                    <span class="skill-tag">{{ $array['Name'] }}</span>
                @endforeach
                    <br>
                @foreach($frameworks as $array)
                    <span class="skill-tag">{{ $array['Name'] }}</span>
                @endforeach
                    <br>
                @foreach($softwares as $array)
                    <span class="skill-tag">{{ $array['Name'] }}</span>
                @endforeach
@endsection
@section('content.portfolio')
            @foreach($portfolio as $array)
                <div class="item {{ $array['Platform'] }} col-lg-3 col-6">
                    <div class="item-inner">
                        <figure class="figure">
                            <!-- <img class="img-fluid" src="assets/images/portfolio/portfolio-2.png" alt="" /> -->
                        </figure>
                        <div class="content text-left">
                            <h3 class="sub-title"><a href="#">{{ $array['Application'] }}</a></h3>
                            <div class="meta">{{ $array['Place'] }}</div>
                            <div class="meta">{{ $array['Languages'] }} {{ $array['Framework'] }}</div>
                            <div class="action"><a href="#">{{ $array['Platform'] }}</a></div>
                        </div>
                        <!--//content-->
                        <a class="link-mask" href="#"></a>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->
            @endforeach
@endsection
@section('content.checklist')
                @if(is_array($checklist))
                    @foreach($checklist as $array)
                        <li><i class="fas fa-check" aria-hidden="true"></i> {{ $array }}</li>
                    @endforeach
                @endif
@endsection