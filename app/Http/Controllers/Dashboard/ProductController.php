<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('active',1)->get();

        $products = Courses::when($request->search, function ($q) use ($request) {

            return $q->where('name', '%' . $request->search . '%');
        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);
        })->latest()->paginate(8);



        return view('dashboard.products.index', compact('categories', 'products'));
    } //end of index

    public function create()
    {
        $categories = Category::where('active',1)->get();
        return view('dashboard.products.create', compact('categories','ingots','coins'));
    } //end of create

    public function store(Request $request)
    {


        $rules = [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'rate' => 'required|numeric',
            'views' => 'required|numeric',
            'level' => 'required',
            'hours' => 'required|numeric',

        ];




        $request->validate($rules);

        $request_data = $request->all();


        Courses::create($request_data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of store

    public function edit($id)
    {

        $categories = Category::all();
         $courses=Courses::where('id',$id)->first();
   //   dd($product);
        return view('dashboard.products.edit', compact('categories', 'courses'));
    } //end of edit

    public function update(Request $request, $id)
    {
        $rules = [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'rate' => 'required|numeric',
            'views' => 'required|numeric',
            'level' => 'required',
            'hours' => 'required|numeric',

        ];




        $request->validate($rules);

        $request_data = $request->all();


$data['category_id']=  $request_data['category_id'];
$data['name']=  $request_data['name'];
$data['description']=  $request_data['description'];
$data['rate']=  $request_data['rate'];
$data['views']=  $request_data['views'];
$data['level']=  $request_data['level'];
$data['hours']=  $request_data['hours'];
        Courses::where('id',$id)->update($data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of update

    public function destroy($id)
    {


    
        Courses::where('id',$id)->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.products.index');
    } //end of destroy

    public function active( $id)
    {

        $data['active']=1;

        Courses::where('id',$id)->update($data);

        return redirect()->route('dashboard.products.index');
    }

    public function notactive( $id)
    {
        $data['active']=0;
        Courses::where('id',$id)->update($data);

        return redirect()->route('dashboard.products.index');
    }
}//end of controller
