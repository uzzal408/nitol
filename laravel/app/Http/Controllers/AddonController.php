<?php

namespace App\Http\Controllers;

use App\Addon;
use Illuminate\Http\Request;

class AddonController extends Controller
{
    public function index(){
        $addons = Addon::all();
        return view('admin.addon.addons',['addons'=>$addons]);
    }

    public function saveAddon(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:30'
//            ,'addonImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $addon = new Addon();
        $addon->name = $request->name;
        $addon->price_medium = $request->price_medium;
        $addon->price_personal = $request->price_personal;
        $addon->price_family = $request->price_family;
        $addon->description = $request->description;
        if($addon->save()){
            $productImage = $request->file('addonImage');
            if(is_file($productImage)) {
                $imageUrl = $this->addonImageUpload($productImage, $addon->id);
                $addon->image = $imageUrl;
                $addon->save();
            }
        };
        return redirect('/all-addons')->with('alert-success','Addon Created Successfully');
    }

    public function editAddon($id){
        $addons = Addon::where('id', '!=', $id)->get();
        $addon = Addon::find($id);
        return view('admin.addon.edit-addon',['addon'=>$addon,'addons'=>$addons]);
    }
    public function updateAddon(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:30'
        ]);
        $productImage = $request->file('addonImage');
        $addon = Addon::find($request->addon_id);
        if(is_file($productImage)){
            $this->removeImage($addon->image);
            $imageUrl = $this->addonImageUpload($productImage,$addon->id);
            $addon->image = $imageUrl;
        }
        $addon->name = $request->name;
        $addon->price_medium = $request->price_medium;
        $addon->price_personal = $request->price_personal;
        $addon->price_family = $request->price_family;
        $addon->description = $request->description;
        $addon->save();
        return redirect('/all-addons')->with('alert-info','Addon Updated successfully');
    }
    public function deleteAddon($id,$is_active){
        $addon = Addon::find($id);
        if($addon){
            $addon->is_deleted = $is_active;
            $addon->save();
        }
        return redirect('/all-addons')->with('alert-warning','Activation Changed successfully');
    }

    protected function removeImage($image){
        if(is_file($image)){
            unlink($image);
        }
    }

    protected function addonImageUpload($productImage,$addon_id){
        $imageName = $productImage->getClientOriginalName();
        $directory = 'attached_images/addons/'.$addon_id.'/';
        $imageUrl = $directory . $imageName;
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }
}
