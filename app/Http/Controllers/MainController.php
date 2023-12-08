<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function AccueilController()
   {
    return view('accueil');
}

public function CoursController()
   {
    return view('Cours');
}

public function TarifsController()
    {
    return view('Tarifs');
}

public function ContactController()
    {
    return view('Contact');
}

public function MentionsLegalesController()
    {
    return view('mentions-legales');
}
}
