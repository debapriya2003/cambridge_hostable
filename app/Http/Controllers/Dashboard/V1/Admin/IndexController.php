<?php

namespace App\Http\Controllers\Dashboard\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('dashboard.admins.pages.index');
    }
}
