<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Post;

class WebsiteController extends Controller
{
    
    public function index(){
        $services = Service::all();
        $jobs = Job::latest()->take(5)->get();  // récupère les 5 dernières offres d’emploi
        return view('website.index', compact('services', 'jobs'));
    }

    public function about(){
        return view('website.about');
    }
    public function contact(){
        return view('website.contact');
    }

     public function jobindex(){
        $services = Service::all();
        $jobs = Job::latest()->take(5)->get();  
        return view('website.jobs.index', compact('services', 'jobs'));
    }

     public function serviceindex(){
        $services = Service::all();
        return view('website.services.index', compact('services'));
    }

    public function actualiteindex()
{
    $vedette = Actualite::latest()->first();
    $actualites = Actualite::where('id', '!=', $vedette?->id)->latest()->paginate(6);
    return view('website.actualites.index', compact('actualites', 'vedette'));
}

    public function postindex()
{
    $vedette = Post::latest()->first();
    $posts = Post::where('id', '!=', $vedette?->id)->latest()->paginate(6);
    return view('website.blogs.index', compact('posts', 'vedette'));
}


    public function show(Post $post)
{
    return view('website.blogs.show', compact('post'));
}
}
