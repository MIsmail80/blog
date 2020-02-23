<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Image;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('website.users.register');
    }

    public function postRegister()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'birth_at' => 'required',
            'gender' => 'required',
            'photo' => 'required|max:1024',
        ]);

        // Upload photo
        if (request()->hasFile('photo')) {
            $photoFile = request()->file('photo');

            $ext = $photoFile->extension();

            $fileName = Str::random(5) . '.' . $ext;

            $folder = "uploads/";

            $path = $folder . $fileName;

            // $photoFile->move($folder, $fileName);

            // Save photo by intervention package
            Image::make($photoFile)->resize(300, 200)->save($path);
        }

        // Create new user
        $newUser = new User();
        $newUser->name = request('name');
        $newUser->email = request('email');
        $newUser->password = Hash::make(request('password'));
        $newUser->birth_at = request('birth_at');
        $newUser->gender = request('gender');
        $newUser->image = $path;
        $newUser->role_id = 2;
        $newUser->save();

        return redirect('login');
    }

    public function getLogin()
    {
        return view('website.users.login');
    }

    public function postLogin()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = request()->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function getProfile()
    {
        $user = Auth::user();

        return view('website.users.profile', compact('user'));
    }

    public function saveProfile()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'birth_at' => 'required',
            'gender' => 'required',
            'photo' => 'max:1024',
        ]);

        // Upload photo
        if (request()->hasFile('photo')) {
            $photoFile = request()->file('photo');

            $ext = $photoFile->extension();

            $fileName = Str::random(5) . '.' . $ext;

            $folder = "uploads/";

            $path = $folder . $fileName;

            $photoFile->move($folder, $fileName);
        }

        // Create new user
        $user = Auth::user();
        $user->name = request('name');
        $user->email = request('email');
        $user->birth_at = request('birth_at');
        $user->gender = request('gender');
        if (isset($path)) {
            File::delete(public_path($user->image));
            $user->image = $path;
        }
        $user->save();

        return redirect('profile');
    }
}
