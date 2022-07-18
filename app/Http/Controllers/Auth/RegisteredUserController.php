<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\pic;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if(request('role')==2){
        $request->validate([
            'name' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender'=>['required'],
            'role'=>['required'],
            'contact'=>['required', 'min:13','max:13'],
            'image' => ['required'],

        ]);}else{
            $request->validate([
                'name' => ['required', 'string','min:3', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'gender'=>['required'],
                'role'=>['required'],



            ]);}


         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'gender' => $request->gender,
             'contact' => $request->contact,
             'role' => $request->role,
             'password' => Hash::make($request->password),
         ]);

         event(new Registered($user));

         Auth::login($user);



         if(request('image')!=null){
            $file= $request->file('image');

            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);


        $pic = pic::create([
            'link' => $filename,
            'linker_id'=>$user->id,
        ]);

        $pic->save();
        }



        if($user->role == 2){
            return redirect('addp');
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
