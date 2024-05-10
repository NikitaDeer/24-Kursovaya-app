<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use App\Models\Advantage;
use App\Models\Build;
use App\Models\Component;

class MainController extends Controller
{
  public function index()
  {
    // $page = Page::latest()->first();
    $page = Page::where('is_published', 1)->latest()->first();
    $advantages = Advantage::where('is_published', 1)->get();
    $services = Service::where('is_published', 1)->get();

    $builds = Build::where('is_published', 1)->get();
    $components = Component::where('is_published', 1)->get();
    // $services = Service::all();
    // $advantages = [];

    return view('main', compact('page', 'advantages', 'services', 'builds', 'components'));
  }
}
