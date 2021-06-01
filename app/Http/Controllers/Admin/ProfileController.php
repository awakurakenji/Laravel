<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class ProfileController extends Controller
{
        public function add()
    {
        return view('admin.profile.create');
    }
     public function create(Request $request)
    {

       //以下を追記
        //varidationを行う 
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();

  //　フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
  if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }

  //　フォームから送信されてきた_tokenwを削除する
  unset($form['_token']);
  //　フォームから送信されてきたimageを削除する
  unset($form['image']);
  
        return redirect('admin/profile/create');
    }
}
