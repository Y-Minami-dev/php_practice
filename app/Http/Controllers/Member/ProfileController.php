<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('member.profile.create');
    }
    
    public function create(Request $request)
    {
        return redirect('member/profile/create');
    }
}
