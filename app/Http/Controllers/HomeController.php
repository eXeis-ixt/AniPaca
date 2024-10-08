<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Foundation\Console\KeyGenerateCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $mangas = Manga::orderBy('created_at', 'desc')->get();
        return Inertia::render('Home', [
            'mangas' => $mangas
        ]);
    }
    public function key(){
        Artisan::call(KeyGenerateCommand::class, ['--show' => 'true']);
        return Inertia::render('Key', [
            'keygen' => Artisan::output(),
        ]);
    }
}
