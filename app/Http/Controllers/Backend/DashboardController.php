<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\HomeModel;
use Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request){

        return view("backend.dashboard.list");
    }

    public function admin_home(Request $request){

        $data['getrecord'] = HomeModel::all();

        return view("backend.home.list", $data);
    }

    public function admin_home_post(Request $request){
        // dd($request->all());
        if($request->add_to_update == "Add"){
            $insertRecord = request()->validate([
                'profile' => 'required'
            ]);

            $insertRecord = new HomeModel;
        }else{
            $insertRecord = HomeModel::findOrFail($request->id);
        }

        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        if(!empty($request->file('profile'))){

            if(!empty($insertRecord->profile) && file_exists('public/img'. $insertRecord->profile)) {
                unlink('public/img'. $insertRecord->profile);
            }

            $file = $request->file('profile');
            $randomStr = Str::random(30);
            $filename = $randomStr .'.'. $file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();

        return redirect()->back()->with('success','Home Page Successfully Save');
    }

    public function admin_about(Request $request){

        return view("backend.about.list");
    }

    public function admin_portfolio(Request $request){

        return view("backend.portfolio.list");
    }

    public function admin_contact(Request $request){

        return view("backend.contact.list");
    }

    public function admin_blog(Request $request){

        return view("backend.blog.list");
    }
    

}
