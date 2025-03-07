<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resume - {{ $profiles->Name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #333;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .title {
            font-size: 18px;
            color: #666;
            margin-bottom: 15px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #ddd;
        }
        .experience-item, .education-item {
            margin-bottom: 15px;
        }
        .experience-title, .education-title {
            font-weight: bold;
            font-size: 16px;
        }
        .company, .school {
            color: #666;
            font-size: 14px;
        }
        .date {
            color: #999;
            font-size: 14px;
        }
        .description {
            margin-top: 5px;
            font-size: 14px;
        }
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }
        .portfolio-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }
        .portfolio-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .portfolio-tech {
            color: #666;
            font-size: 12px;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-item {
            display: inline-block;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('assets/images/profile-image.png') }}" class="profile-image" alt="Profile Image">
        <div class="name">{{ $profiles->Name }}</div>
        <div class="title">{{ $experiences->first()->Position }}</div>
        <div class="contact-info">
            <div class="contact-item">{{ $profiles->Email }}</div>
            <div class="contact-item">{{ $profiles->Phone }}</div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">About Me</div>
        <div class="description">
            @php
                $firstExperience = new DateTime('2017-06-01');
                $now = new DateTime();
                $experience = $now->diff($firstExperience)->y;
                $description = str_replace(
                    'over 7 years',
                    'over ' . $experience . ' years',
                    $profiles->Description
                );
            @endphp
            {{ $description }}
        </div>
    </div>

    <div class="section">
        <div class="section-title">Work Experience</div>
        @foreach($experiences as $experience)
            <div class="experience-item">
                <div class="experience-title">{{ $experience->Position }}</div>
                <div class="company">{{ $experience->Company }}</div>
                <div class="date">{{ $experience->Date }}</div>
                <div class="description">{{ $experience->Description }}</div>
            </div>
        @endforeach
    </div>

    <div class="section">
        <div class="section-title">Education</div>
        @foreach($educations as $education)
            <div class="education-item">
                <div class="education-title">{{ $education->Degree }}</div>
                <div class="school">{{ $education->School }}</div>
                <div class="date">{{ $education->Time }}</div>
                <div class="description">{{ $education->Education }}</div>
            </div>
        @endforeach
    </div>

    <div class="section">
        <div class="section-title">Portfolio</div>
        <div class="portfolio-grid">
            @foreach($portfolios as $portfolio)
                <div class="portfolio-item">
                    <div class="portfolio-title">{{ $portfolio->Application }}</div>
                    <div class="portfolio-tech">
                        <span class="badge">{{ $portfolio->Platform }}</span>
                        <span class="badge">{{ $portfolio->Languages }}</span>
                        <span class="badge">{{ $portfolio->Framework }}</span>
                    </div>
                    <div class="description">{{ $portfolio->Company }}</div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html> 