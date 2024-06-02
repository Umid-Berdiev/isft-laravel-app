<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Lang;

class SettingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('backend.setting.index', compact('user'));
    }

    public function post()
    {
    	$user = auth()->user();

    	$data = request()->only('email', 'password', 'password_confirmation');

        $rules = [
            'email' => 'required|email',
            'password' => 'same:password_confirmation'
        ];  

        $validator = validator()->make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {            
            
            if (!empty($data['password'])) {
                $data['password'] = bcrypt($data['password']);
                $data['email'] = $data['email'];
            } else {
                unset($data['password']);
            }

            $user->update($data);
        }
        
        session()->flash('success', Lang::get('alert.success.update'));

        return redirect()->action('Backend\PageController@dashboard');
    }
}
