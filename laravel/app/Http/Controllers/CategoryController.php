<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.category.categories',['categories'=>$categories]);
    }

    public function saveCategory(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:5|max:255'
            //'categoryImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ,'parentId' => 'required',
            'order' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->storeLocator = $request->storeLocator;
        $category->parent_id = $request->parentId;
        $category->order = $request->orderId;
        if($category->save()){
            $productImage = $request->file('categoryImage');
            if(is_file($productImage)){
                $imageUrl = $this->categoryImageUpload($productImage,$category->id);
                $category->image = $imageUrl;
                $category->save();
            }
        };
        return redirect('/all-categories')->with('alert-success','Category Created Successfully');
    }

    public function editCategory($id){
        $categories = Category::where('id', '!=', $id)->get();
        //dd($categories);
        $category = Category::find($id);
        //dd($category);
        return view('admin.category.edit-category',['category'=>$category,'categories'=>$categories]);
    }

    public function updateCategory(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:5|max:255',
            'categoryImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'parentId' => 'required',
            'order' => 'required'
        ]);
        $productImage = $request->file('categoryImage');
        $category = Category::find($request->category_id);
        if(is_file($productImage)){
            $this->removeImage($category->image);
            $imageUrl        = $this->categoryImageUpload($productImage,$category->id);
            $category->image = $imageUrl;
        }
        $category->name         = $request->name;
        $category->description  = $request->description; 
        $category->storeLocator = $request->storeLocator;
        $category->parent_id    = $request->parentId;
        $category->publication_status = $request->publicationStatus;
        $category->order        = $request->order;
        $category->save();
        return redirect('/all-categories')->with('alert-info','Category Updated successfully');
    }
    
    public function deleteCategory($id){
        $category = Category::find($id);
        $category_image = $category->image;
        if($category->delete()){
            $this->removeImage($category_image);
        }
        return redirect('/all-categories')->with('alert-danger','Category Deleted successfully');
    }

    protected function removeImage($image){
        if(is_file($image)){
            unlink($image);
        }
    }

    protected function categoryImageUpload($productImage,$category_id){
        $imageName = $productImage->getClientOriginalName();
        $directory = 'attached_images/categories/'.$category_id.'/';
        $imageUrl = $directory . $imageName;
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }
}
