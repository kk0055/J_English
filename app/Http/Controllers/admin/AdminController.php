<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function showLoginForm(){
		return view("admin.admin_login");
	}

	
	function login(Request $request){
		//入力内容をチェックする
		$user_id = $request->input("user_id");
		$password = $request->input("password");

		//ログイン成功
		if($user_id == "admin" && $password == "adminad"){
			$request->session()->put("admin_auth", true);
			return redirect("admin/show");
		}

		//ログイン失敗
		return redirect("admin/login")->withErrors([
			"login" => "ユーザーIDまたはパスワードが違います"
		]);
	}

    function logout(Request $request){
		$request->session()->forget("admin_auth");
		return redirect("admin");
	}

	
    function show(){
		return view("admin.admin_top");
	}

    function showUserList(){
		$user_list = User::orderBy("id", "desc")->paginate(10);
		return view("admin.user_list", [
			"user_list" => $user_list
		]);
	}
	function showUserDetail($id){
		$user = User::find($id);
		return view("admin.user_detail", [
			"user" => $user
		]);
	}
}
