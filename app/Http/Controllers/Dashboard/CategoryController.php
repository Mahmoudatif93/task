<?php

namespace App\Http\Controllers\Dashboard;
use App\Courses;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::when($request->search, function ($q) use ($request) {

            return $q->where('name', '%' . $request->search . '%');
        })->latest()->paginate(8);
        return view('dashboard.categories.index', compact('categories'));
    } //end of index

    public function create()
    {
        return view('dashboard.categories.create');
    } //end of create

    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);

        Category::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.categories.index');
    } //end of store

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    } //end of edit

    public function update(Request $request, Category $category)
    {
        $rules = [];


        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);

        $category->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.categories.index');
    } //end of update

    public function destroy(Category $category)
    {
        $category->delete();
        Courses::where('category_id',$category->id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.categories.index');
    } //end of destroy


    public function active( $id)
    {

        $data['active']=1;

        Category::where('id',$id)->update($data);

        return redirect()->route('dashboard.categories.index');
    }

    public function notactive( $id)
    {
        $data['active']=0;
        Category::where('id',$id)->update($data);

        return redirect()->route('dashboard.categories.index');
    }



}//end of controller
