<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\User;
use App\Models\PortfolioModel;
use App\Models\ContactModel;

class HomeController extends Controller
{
    public function index(){

        $data['getrecord'] = HomeModel::all();

        $data['meta_title'] = 'Home';
        $data['className'] = 'home';
        return view("index",$data);
    }

    public function about(){

        $data['getrecord'] = AboutModel::all();

        $data['meta_title'] = 'About';
        $data['className'] = 'about';
        return view("about", $data);
    }

    public function portfolio(){
        $data['getrecord'] = PortfolioModel::get(); 

        $data['meta_title'] = 'Portfolio';
        $data['className'] = 'portfolio';
        return view("portfolio", $data);
    } 

    public function contact(){
        $data['meta_title'] = 'Contact';
        $data['className'] = 'contact';
        return view("contact", $data);
    }

    public function contact_post(Request $require){
        //dd(request()->all());

        $insertRecord = new ContactModel;
        $insertRecord->name = trim($require->name);
        $insertRecord->email = trim($require->email);
        $insertRecord->subject = trim($require->subject);
        $insertRecord->message = trim($require->message);

        $insertRecord->save();

        return redirect()->back()->with('success','Your Message submitted successfully');
    }

    public function admin_contact_delete(Request $require, $id){
        $removeDelete = ContactModel::findOrFail( $id );
        $removeDelete->delete();

        return redirect()->back()->with('error','Contact Record Successfully Deleted');
    }

    public function blog(){
        
        $data['getrecord'] = BlogModel::get();
        $data['meta_title'] = 'Blog';
        $data['className'] = 'blog';
        return view("blog", $data);
    }

    public function blog_post(Request $request, $id){

        $data['getrecord'] = BlogModel::findOrFail( $id );
        $data['meta_title'] = 'Blog-Post';
        $data['className'] = 'blog-post';
        return view("blog-post", $data);
    }

}
