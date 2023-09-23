<?php

namespace App\Http\Controllers;

class dashboardController extends Controller
{
    // Dashboard
    public function dashboard_peternak()
    {
        return view('peternak.Dashboard');
    }

    public function dashboard_pabrik()
    {
        return view('Pabrik.Dashboard');
    }

}
