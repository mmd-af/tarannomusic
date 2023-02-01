<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Repositories\Site\HomeRepository;

class HomeController extends Controller
{
    protected $homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function index()
    {
        $teachers = $this->homeRepository->getTeachers();
        $instruments = $this->homeRepository->getInstruments();
        $posts = $this->homeRepository->getPosts();
        return view('site.home.index', compact('teachers', 'instruments', 'posts'));
    }
}
