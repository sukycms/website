<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Newsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function newsletter(NewsletterRequest $request): RedirectResponse
    {
        $newsletter = new Newsletter();
        $newsletter->email = $request->get('email');
        $newsletter->save();

        flash(__('page.newsletter.success'));
        return redirect()->route('home');
    }
}
