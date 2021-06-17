<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Project;
use App\Models\ProjectEmployee;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'role_id' => 'max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Auth::login($user = User::create([
        //     'name' => $request->name,
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'role_id' => $request->role_id,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]));

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        if($request->role_id == "user"):
            if($request->company_id):
                Employee::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'company_id' => $request->company_id,
                    'email' => $request->email,
                    'role_id' => $request->role_id,
                    'password' => Hash::make($request->password),
                    'project_id' => $request->project_id,
                    'status' => $request->status,
                ]);
                
                foreach($request->project_id as $value):
                    ProjectEmployee::create([
                        'project_id' => $value,
                        'employee_email' => $request->email,
                    ]);
                endforeach;
            endif;

        endif;

        if($request->company_id == null):
            Auth::login($user);
        endif;
        

        $user->attachRole($request->role_id); 
        event(new Registered($user));

        if($request->company_id == null) {
            return redirect(RouteServiceProvider::HOME);
        } else return redirect('dashboard/employees');
        
    }
}
