<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SocialIconModel;
use Illuminate\Http\Request;

class SocialIconController extends Controller
{
    
    public function admin_social_icon(Request $request){
        $data['getrecord'] = SocialIconModel::findOrFail(1);

        return view("backend.social_icon.update", $data);
    }

    public function admin_social_icon_update(Request $request, $id){
        
        $updaterecord = SocialIconModel::findOrFail($id);
        $updaterecord->name = trim($request->name);
        $updaterecord->email = trim($request->email);
        $updaterecord->mobile = trim($request->mobile);
        $updaterecord->facebook = trim($request->facebook);
        $updaterecord->twitter = trim($request->twitter);
        $updaterecord->youtube = trim($request->youtube);
        $updaterecord->dribbble = trim($request->dribbble);

        $updaterecord->save();

        return redirect()->back()->with('success',"Record Successfully Updated");
    }

}
