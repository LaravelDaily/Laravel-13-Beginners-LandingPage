<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'headline' => 'Build faster with Launchpad',
            'subheadline' => 'The simplest way to ship your next idea. No complexity, no bloat — just results.',
            'features' => [
                ['title' => 'Lightning Fast', 'description' => 'Deploy in seconds, not hours.'],
                ['title' => 'Dead Simple', 'description' => 'No configuration needed to get started.'],
                ['title' => 'Scales Easily', 'description' => 'From prototype to production without changes.'],
            ],
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'teamMembers' => [
                ['name' => 'Alice Carter', 'role' => 'CEO & Founder'],
                ['name' => 'Bob Lin', 'role' => 'CTO'],
                ['name' => 'Clara Ruiz', 'role' => 'Head of Design'],
            ],
        ]);
    }

    public function contact(): View
    {
        return view('contact', [
            'email' => 'hello@launchpad.test',
            'address' => '123 Startup Ave, San Francisco, CA',
        ]);
    }
}
