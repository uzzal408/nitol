<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('admin.ingredient.ingredients',['ingredients'=>$ingredients]);
    }

    public function saveIngredient(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:30'
//            ,'ingredientImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->price = $request->price;
        $ingredient->description = $request->description;
        if($ingredient->save()){
            $productImage = $request->file('ingredientImage');
            if(is_file($productImage)) {
                $imageUrl = $this->ingredientImageUpload($productImage, $ingredient->id);
                $ingredient->image = $imageUrl;
                $ingredient->save();
            }
        };
        return redirect('/all-ingredients')->with('alert-success','Ingredient Created Successfully');
    }

    public function editIngredient($id){
        $ingredients = Ingredient::where('id', '!=', $id)->get();
        $ingredient = Ingredient::find($id);
        return view('admin.ingredient.edit-ingredient',['ingredient'=>$ingredient,'ingredients'=>$ingredients]);
    }
    public function updateIngredient(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:30',
            'ingredientImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $productImage = $request->file('ingredientImage');
        $ingredient = Ingredient::find($request->ingredient_id);
        if(is_file($productImage)){
            $this->removeImage($ingredient->image);
            $imageUrl = $this->ingredientImageUpload($productImage,$ingredient->id);
            $ingredient->image = $imageUrl;
        }
        $ingredient->name = $request->name;
        $ingredient->price = $request->price;
        $ingredient->description = $request->description;
        $ingredient->save();
        return redirect('/all-ingredients')->with('alert-info','Ingredient Updated successfully');
    }
    public function deleteIngredient($id,$is_active){
        $addon = Ingredient::find($id);
        if($addon){
            $addon->is_deleted = $is_active;
            $addon->save();
        }
        return redirect('/all-ingredients')->with('alert-warning','Activation Changed successfully');
    }

    protected function removeImage($image){
        if(is_file($image)){
            unlink($image);
        }
    }

    protected function ingredientImageUpload($productImage,$ingredient_id){
        $imageName = $productImage->getClientOriginalName();
        $directory = 'attached_images/ingredients/'.$ingredient_id.'/';
        $imageUrl = $directory . $imageName;
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }
}
