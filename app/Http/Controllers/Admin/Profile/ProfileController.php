<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    public function update(ProfileUpdateRequest $request)
    {
    	$data = $request->all();
    	if(is_null($data['password']))$data = array_except($data, ['password']);
    	$user = Auth::user();
    	$user->fill($data);
    	$user->save();
    	return redirect()->route('admin.profile.index');
    }
}
