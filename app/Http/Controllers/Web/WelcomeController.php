<?php

namespace App\Http\Controllers\Web;

use App\Category;

use App\Courses;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;

use Cookie;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {


///////////////////////


        $title = 'الصفحه الرئيسيه';

        $categories = Category::where('active',1)->get();

        $courses = Courses::where('active',1)->when($request->search, function ($q) use ($request) {

            return $q->where('name', '%' . $request->search . '%');
        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);
        })->latest()->paginate(8);



        return view('web.welcome', compact('courses', 'categories'));
    }


    public function search(Request $request)
    {



        $title = 'الصفحه الرئيسيه';

        $categories = Category::where('active',1)->get();

        $courses = Courses::where('active',1)->when($request->search, function ($q) use ($request) {

            return $q->where('name', $request->search);
        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);
        })->latest()->paginate(8);



        return view('web.search', compact('courses', 'categories'));
    }







}//end of controller
