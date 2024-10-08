<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $mangas = Manga::orderBy('created_at', 'desc')->get();
        return Inertia::render('Home', [
            'mangas' => $mangas
        ]);
    }
}
