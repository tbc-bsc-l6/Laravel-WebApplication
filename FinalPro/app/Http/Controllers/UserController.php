<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        if(auth()->user()->name!='Avantika Nepal'){
            return redirect('/');
        }
        $users = User::latest()->paginate(20);
    
        return view('users.users',compact('users'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $users = new User;
        $users->id = $request->input('id');
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
      
        $users->save();
        return redirect('/users')
        //->route('/lipstick/index')
            ->with('success', 'User Added successfully!');
    }

    public function edit(int $id)
    {
     
        $users = DB::table('users')->get()->where('id', $id)->first();

        return view('users.editusers',compact('users'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id, User $users)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);
        DB::table('users')->where('id', $id)
        ->update([
        'id' => $request->input('id'),
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);
        return redirect('/users')
        //->route('/lipstick/index')
            ->with('success', 'users Updated successfully!');
    }


    public function destroy(int $id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/users')
        //->route('/lipstick/index')
            ->with('success', 'User Deleted successfully!');
    }
}
