<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;
use Str;

class PortfolioController extends Controller
{
    public function portfolio_add(Request $request){
        
        return view('backend.portfolio.add');
    }

    public function portfolio_add_post(Request $request){
        
        //dd($request->all());

        $insertRecord = new PortfolioModel;

        $insertRecord->title = trim($request->title);

        if(!empty($request->file('image'))){

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr .'.'. $file->getClientOriginalExtension();
            $file->move('public/portfolio/',$filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->save();

        return redirect('admin/portfolio')->with('success','Portfolio Page Successfully Save');

    }


}
