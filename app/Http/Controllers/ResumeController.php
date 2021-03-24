<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Frameworks;
use App\Models\Languages;
use App\Models\Portfolio;
use App\Models\Profiles;
use App\Models\Softwares;
use App\Models\Architectures;
use App\Models\DesignPatterns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function index()
    {
        $data = [
            'image' => 'assets/images/profile-image.png',
            'email' => 'ihdatech@gmail.com',
            'phone' => ' 085727116115',
            'about' => Profiles::all()[0]['Description'],
            'experiences' => Experiences::all(),
            'frameworks' => Frameworks::all(),
            'languages' => Languages::all(),
            'portfolio' => Portfolio::all(),
            'profiles' => Profiles::first(),
            'softwares' => Softwares::all(),
            'educations' => Educations::all(),
            'architectures' => Architectures::all(),
            'designPatterns' => DesignPatterns::all(),
            'top' => [
                [
                    'percent' => '90',
                    'skill' => 'Java & Android',
                    'level' => 'Expert, 3 years',
                ],
                [
                    'percent' => '90',
                    'skill' => 'Kotlin & Android',
                    'level' => 'Expert, 2 years',
                ],
                [
                    'percent' => '80',
                    'skill' => 'Dart & Flutter',
                    'level' => 'Advanced, 2 years',
                ],
            ],
            'checklist' => [
                'Application development with Android/Java',
                'Application development with Android/Kotlin',
                'Application development with Flutter/Dart',
                'Back-end development with CodeIgniter/PHP',
                'Back-end development with Flask/Python',
                'RESTful API development with Slim Framework/PHP',
                'RESTful API development with Lumen/PHP',
            ],
        ];
        return view('resume.index', $data);
    }
}
