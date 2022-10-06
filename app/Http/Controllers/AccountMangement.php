<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AccountMangement extends Controller
{
    public function CreateAccount($request){
        $validatedData = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' => 'required'
        ]);
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
    public function login($request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required'=>'nis tidak boleh kosong',
            'password.required'=>'kelas tidak boleh kosong',
        ]);
        if (Auth::attempt($validated)){
            return redirect()->intended('/roleChecker');
        }
        Session::flash('gagal','login gagal');
            return back();
    }
    //
    public function index(){
        $accounts = User::all();
        return view('pages.accountManager',['accounts'=>$accounts]);
    }
    public function FindAccount($id){
        $data = User::FindOrFail($id);
        return view('pages.AccountEdit',['data'=> $data]);
    }
    public function EditAccount($request, $id){
        
    }
    
}
