<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\http\Requests\CategoryFormRequest;
use Illuminate\Auth\Events\Validated;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
    return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request){
        $validatedData = $request->validated();
        $category = new Category;
        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['name']);
        $category->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fliename = time().'.'.$ext;
            $file->move('uploads/category/',$fliename);
            $category->image = $validatedData['image'];
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status == true ? '1':'0';
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }
}
