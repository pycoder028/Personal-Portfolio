<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    public function admin_blog_add(Request $request){

        return view('backend.blog.add');
    }

    public function admin_blog_add_post(Request $request){
        //dd(request()->all());

        $insertRecord = new BlogModel;

        $insertRecord->title = trim($request->title);
        $insertRecord->description = trim($request->description);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr .'.'. $file->getClientOriginalExtension();

            $file->move('public/blog/', $filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->save();

        return redirect('admin/blog')->with('success','Blog Page Successfully Saved');
    }

    public function admin_blog_edit(Request $request, $id){

        $data['getrecord'] = BlogModel::findOrFail( $id );
        return view('backend.blog.edit', $data);
    }

    public function admin_blog_edit_update(Request $request, $id){

        $updateRecord = BlogModel::findOrFail( $id );
        $updateRecord->title = trim($request->title);

        if(!empty($request->file('image'))){

            if(!empty($updateRecord->image) && file_exists('public/blog/'.$updateRecord->image)){
                unlink('public/blog/'.$updateRecord->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr .'.'. $file->getClientOriginalExtension();

            $file->move('public/blog/', $filename);
            $updateRecord->image = $filename;
        }

        $updateRecord->description = trim($request->description);
        $updateRecord->save();

        return redirect('admin/blog')->with('success','Blog Page Successfully Updated');
    }

    public function admin_blog_delete(Request $request, $id){
        $deleteRecord = BlogModel::findOrFail( $id );

        if(!empty($deleteRecord->image) && file_exists('public/blog/'.$deleteRecord->image)){
            unlink('public/blog/'.$deleteRecord->image);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error','Record Successfully Deleted');
    }


}
