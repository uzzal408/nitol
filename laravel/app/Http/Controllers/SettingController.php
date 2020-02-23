<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit($name){
        $data = Setting::where('name',$name)->first();
        return view('admin.settings.edit',compact('data'));
    }

    public function upload(Request $request){
        if($request->type==3){
            $request->validate([
                'name' => 'required',
                'value' => 'required|max:10000|mimes:doc,docx,pdf,jpg,jpeg,png',
                'type'  => 'required',
            ]);
        }else{
            $request->validate([
                'name' => 'required',
                'value' => 'required',
                'type'  => 'required',
            ]);
        }
        $setting = Setting::find($request->id);
        if($request->type==3){
            $file = $request->file('value');
            if(is_file($file)){
                $this->removeImage($setting->value);
                $imageUrl        = $this->ImageUpload($file,$setting->id);
                $setting->value = $imageUrl;
            }

            $setting->name = $request->name;
            $setting->type = $request->type;
            $setting->save();

        }else{
            $setting->name = $request->name;
            $setting->value = $request->value;
            $setting->type = $request->type;
            $setting->save();
        }
        return back()->with('alert-info','Updated successfully');
    }

    protected function removeImage($image){
        if(is_file($image)){
            unlink($image);
        }
    }

    protected function ImageUpload($image,$id){
        $imageName = $image->getClientOriginalName();
        $directory = 'attached_images/settings/'.$id.'/';
        $imageUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imageUrl;
    }
}
