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

    public function admin_portfolio_edit(Request $request,$id){
        $data['getrecord'] = PortfolioModel::findOrFail( $id );

        return view('backend.portfolio.edit', $data);
    }

    public function admin_portfolio_edit_post(Request $request,$id){
        //dd($request->all());
        $updateRecord = PortfolioModel::findOrFail( $id );
        $updateRecord->title = trim($request->title);

        if(!empty($request->file('image'))){
            if(!empty($updateRecord->image) && file_exists('public/portfolio/'. $updateRecord->image)){
                unlink('public/portfolio/'. $updateRecord->image);
            }
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr .'.'. $file->getClientOriginalExtension();
            $file->move('public/portfolio/',$filename);
            $updateRecord->image = $filename;
        }
        $updateRecord->save();

        return redirect('admin/portfolio')->with('success','Portfolio Page Successfully Updated');

    }

    public function admin_portfolio_delete(Request $request,$id){

        $deleteRecord = PortfolioModel::findOrFail( $id );

        if(!empty($deleteRecord->image) && file_exists('public/portfolio/'.$deleteRecord->image)){
            unlink('public/portfolio/'.$deleteRecord->image);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error','Record Successfully Deleted');

    }


}
