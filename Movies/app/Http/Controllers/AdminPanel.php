<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

class AdminPanel extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin/overview');
    }

}
