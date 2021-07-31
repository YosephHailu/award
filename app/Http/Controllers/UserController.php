<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {
        //
        $users = User::all();
        return view('auth.users')->with('users', $users);
    }
    
    public function updateStatus(Request $request, User $user)
    {
        //
        $user->status = !$user->status;
        $user->save();

        return back()->with('success', "Successfully updated");
    }

    public function updateAllUserStatus(Request $request)
    {
        //
        User::query()->where('role', 'voter')->update(['status' => $request->status == 'true']);

        return back()->with('success', "Successfully updated");
    }
}
