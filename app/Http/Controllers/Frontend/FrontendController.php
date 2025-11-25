<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Helper;
use App\Models\User;
use Yajra\DataTables\DataTables;
use App\Models\LeadingAndGovernor;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home()
    {

        return view('frontend.pages.home');
    }
}
