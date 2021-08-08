<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // 追加
use Auth;

class UsersController extends Controller
{
    public function index($user)
    {
        if (\Auth::check()) {
            $user = Auth::user();
            
        }
        return view('index', [
            'user' => $user,
            //'contents' => $contents,
        ]);
        /* if (\Auth::check()) {
        $user = Auth::user();
        // idの値でユーザを検索して取得
        //$user = User::findOrFail($user);
        }
        // ユーザ詳細ビューでそれらを表示
        return view('index', [
            'user' => $user,
            //'contents' => $contents,
        ]);*/
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //if (\Auth::check()) {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        
        //$data = [
        //    'user' => $user,
        //];
       // }
        //return view('index');
        // ユーザ詳細ビューでそれらを表示
        return view('index', [
            'user' => $user,
            //'contents' => $contents,
        ]);
    //}
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
