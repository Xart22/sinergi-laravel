<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class CompanyProfileController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.index');
    }

    public function service()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.service');
    }


    public function about()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.about');
    }


    public function contact()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.contact');
    }

    public function skk()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.services.skk');
    }

    public function k3()
    {
        SEOTools::setTitle('Sinergi Sertifikasi');
        SEOTools::setDescription('This is my page description');

        return view('app.company.services.k3');
    }
}
