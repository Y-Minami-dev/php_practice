<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminTopController extends Controller
{
   function show(){
		return view("admin.admin_top");
	}
}