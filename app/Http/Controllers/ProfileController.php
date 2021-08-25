<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // 追加
use App\Profile; // 追加

class ProfileController extends Controller
{
    public function myprofile($id)
    {
        $profile = Profile::findOrFail($id);
        if (\Auth::id() === $profile->user_id) {
        return view('myprofile', [
            //'user' => $user,
            'profile' => $profile,
        ]);
        }
        return redirect('profileedit');
    }
    
    
    
    
    public function edit()
    {
        
        if (\Auth::check()) {
            $user = \Auth::user();
            $profile = new Profile;
            return view('profileedit', [
                'user' => $user,
                'profile' => $profile,
            ]);
        }
    }
    
    public function store(Request $request)
    {
        
        $plofiletext= $request->input('plofiletext');
        $user =  $request->user;
        
        $profile = new Profile;   // 追加
        $profile->profiletext = $request->profiletext;
        $profile->user_id = $request->user()->id;
        $profile->save();
         
        // トップページへリダイレクトさせる
        return redirect('profileedit');
    }
    
    public function create()
    {
       if (\Auth::check()) {
        $plofiletext= $request->input('plofiletext');
        
        $user = \Auth::user();
        $profile = new Profile;
        return view('profileedit', [
            'user' => $user,
            'profile' => $profile,
        ]);
        }
        
        return redirect('/');
    }
    
}
