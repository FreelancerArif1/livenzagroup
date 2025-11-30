<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Helper;
use App\Models\User;
use App\Models\Slider;
use App\Models\Company;
use App\Models\Portfolio;
use Yajra\DataTables\DataTables;
use App\Models\LeadingAndGovernor;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home()
    {
        $companies = Company::where('status', 1)->orderBy('serial', 'asc')->get();
        return view('frontend.pages.home', compact('companies'));
    }
    public function singleCompany($slug)
    {

        $company = Company::where('slug', $slug)->first();
        $portfolios = Portfolio::where('status', 1)->orderBy('serial', 'asc')->get();
        $projects = Project::where('status', 1)->orderBy('serial', 'asc')->get();
        $slider = Slider::where('status', 1)->first();
        return view('frontend.pages.companySingle', compact('slider', 'company', 'portfolios', 'projects'));
    }
}
