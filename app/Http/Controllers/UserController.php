<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    /**
     * 增加一次登入次數
     *
     * @param mixed $id 使用者id
     *
     * @return void
     */
    public function addLoginTimes ($id) {
        //透過 id搜尋資料
        $user = User::find($id);

        //增加登入次數
        $user->times += 1;

        //更新資料
        $user->save();

        return;
    }

    /**
     * 取得使用者清單
     *
     * @return [type]
     */
    public function getIndex () {
        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * 取得註冊頁面
     *
     * @return void
     */
    public function getSignup (){
        return view('user.signup');
    }

    /**
     * 紀錄註冊資料
     *
     * @param Request $request
     *
     * @return void
     */
    public function postSignup (Request $request) {
        //檢查輸入資料
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:20',
            'confirmPassword' => 'required|same:password'
        ]);

        //建立User Model
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        //儲存User資料至資料庫
        $user->save();

        //登入系統
        Auth::login($user);

        //增加登入次數
        $this->addLoginTimes(Auth::user()->id);

        //重導回home頁面
        return redirect()->route('home');
    }

    /**
     * 取得登入頁面
     *
     * @return void
     */
    public function getSignin () {
        //若已為登入狀態則導回home頁面
        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('user.signin');
    }

    /**
     * 嘗試登入
     *
     * @param Request $request
     *
     * @return void
     */
    public function postSignin (Request $request) {
        //檢查輸入資料
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

        //取出輸入的email, password
        $credential = $request->only('email', 'password');
        //嘗試登入
        if(Auth::attempt($credential)){
            //增加登入次數
            $this->addLoginTimes(Auth::user()->id);

            //重導至home頁面
            return redirect()->route('home');
        }

        //返回前一個頁面，附帶error
        return back()->withErrors(['error' => 'Invalid email or password!']);
    }

    /**
     * 使用者登出
     *
     * @return [type]
     */
    public function getSignout () {
        //登出
        Auth::logout();

        //重導回home頁面
        return redirect()->route('home');
    }
}
