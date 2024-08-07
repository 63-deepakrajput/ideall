<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\bannerList;


class HomeController extends Controller
{
    public function bannerSlider() {
        $banners = bannerList::get();

        return view('slider',[
            'banners' => $banners
        ]);
    }

    public function addSlider() {

        return view('add_slider');
    }

    public function addsliderProcess(Request $request) {

        $rules = [
            'title' => 'required|string|max:255',
            'status' => 'required|string',
            'image' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('account.addSlider')->withInput()->withErrors($validator);
        }

        $banner = new BannerList;
        $banner->title = $request->title;
        $banner->status = $request->status;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $image->move(public_path('uploads/banner'), $imageName); 
            $banner->image = $imageName; 
        }
    
        $banner->save();

    
        return redirect()->route('account.slider')->with('success', 'Banner added successfully!');
       
    }

}
