<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class ManageUserController extends Controller
{
	function showUserList(){
		$user_list = User::orderBy("id", "desc")->paginate(10);
		return view("admin.member_list", [
			"user_list" => $user_list
		]);
	}
	function showUserDetail($id){
		$user = User::find($id);
		return view("admin.member_detail", [
			"user" => $user
		]);
	}
}