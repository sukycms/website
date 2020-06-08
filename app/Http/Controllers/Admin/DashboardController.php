<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.dashboard', [
            'subscribers' => Newsletter::count(),
        ]);
    }

    public function newsletter(): View
    {
        return view('admin.newsletter', [
            'subscribers' => Newsletter::paginate(),
        ]);
    }
}
