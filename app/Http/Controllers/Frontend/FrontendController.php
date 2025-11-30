<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Helper;
use App\Models\User;
use App\Models\Slider;
use App\Models\Company;
use App\Models\Partner;
use App\Models\Portfolio;
use Yajra\DataTables\DataTables;
use App\Models\Blog;
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
    public function about()
    {
        $about = About::where('id', 1)->first();
        $partners = Partner::where('status', 1)
            ->orderBy('serial', 'asc')
            ->get()
            ->chunk(6);
        return view('frontend.pages.about', compact('about', 'partners'));
    }

    public function singleCompany($slug)
    {

        $company = Company::where('slug', $slug)->first();
        $portfolios = Portfolio::where('status', 1)->orderBy('serial', 'asc')->where('slier_for', $company->id)->get();
        $projects = Project::where('status', 1)->orderBy('serial', 'asc')->where('slier_for', $company->id)->get();
        $slider = Slider::where('slier_for', $company->id)->first();
        return view('frontend.pages.companySingle', compact('slider', 'company', 'portfolios', 'projects'));
    }

    public function news()
    {
        $news = Blog::where('status', 1)->orderBy('serial', 'asc')->get();
        foreach ($news as $new) {
            $user = User::where('id', $new->created_by)->first();
            $new->created_by = $user?->username;
        }

        return view('frontend.pages.blog', compact('news'));
    }

    public function singleNews($slug)
    {
        $news = Blog::where('status', 1)->orderBy('updated_at', 'desc')->limit(4)->get();

        $single = Blog::where('slug', $slug)->first();
        $user = User::where('id', $single->created_by)->first();
        $single->created_by = $user?->username;

        return view('frontend.pages.blogSingle', compact('news', 'single'));
    }
}
