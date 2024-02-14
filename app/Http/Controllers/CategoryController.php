<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\support\facades\Storage;
class CategoryController extends Controller
{
    public  function index() {
        $categories = Category::select('id' , 'name'  , 'img')
        -> orderBy('id' ,'desc')
        -> paginate(3);
        // dd($categories);

        return view('categories.index' , ['categories' => $categories]);
    }
    public function show($categoryId) {
        $category =Category::findOrFail($categoryId);
        return view('categories.show' , ['category' => $category]);
    }
    public function create()  {
        return view ("categories.create");
    }
    public function store(Request $request) {
        $request -> validate([
            'name' => 'required | string',
            'desc' => 'required',
            'img' => 'required | file ',
        ]);
        // move uploaded file to public
        $file = Storage::putFile("public/categories",$request['img'] );
        
        dd($file);
        Category::create([
            'name' =>$request->name,
            'desc' => $request->description
        ]);
        return redirect(url('/categories'));
    }
    public function edit($categoryId){
        $category =Category::findOrFail($categoryId);
        return view('categories.edit' , ['category' => $category]);
    }
    public function update($categoryId , Request $request) {
        $data= $request -> validate([
            'name' => 'required | string',
            'desc' => 'required',
        ]);
        Category::findOrFail($categoryId)->update([
         $data
        ]);
    }
    public function destroy($categoryId) {
        Category::findOrFail($categoryId)->delete();
        return redirect (url('/categories'));
    }
}
