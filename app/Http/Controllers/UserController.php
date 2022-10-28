<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
Use Image;
use Intervention\Image\Exception\NotReadableException;

use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('master-user.user', compact('user'));
    }


    public function store(Request $request)
    {
     $request->validate([
        'name' => 'required',
        'username' => 'required',
        'password' => 'required',
        'gander' => 'required',
        'level' => 'required',
    ]);

     $insert = new User;

     $insert->name = $request['name'];
     $insert->username = $request['username'];
     $insert->password = Hash::make($request->password);
     $insert->gander = $request['gander'];
     $insert->level = $request['level'];





     if ($request->hasfile('avatar')) 
     {
       $destination = '/images/'.$insert->avatar;

       if (File::exists($destination)) 
       {
           File::delete($destination);
       }

       $file = $request->file('avatar');
       $extention = $file->getClientOriginalExtension();
       $filename = time().'.'.$extention;
       $file->move('images', $filename);
       $insert->avatar = $filename;
   }
   alert()->success('Success','Tambah User');
   $insert->save();
   return back();

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('user'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        return view('master-user.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       $request->validate([
        'name' => 'required',
        'avatar' => 'required',
        'username' => 'required',
        'password' => 'required',
        'gander' => 'required',
        'level' => 'required',
    ]);

       $ubah = User::find($id);

       $ubah->name = $request['name'];
       $ubah->username = $request['username'];
       $ubah->password = Hash::make($request->password);
       $ubah->gander = $request['gander'];
       $ubah->level = $request['level'];





       if ($request->hasfile('avatar')) 
       {
           $destination = '/images/'.$ubah->avatar;

           if (File::exists($destination)) 
           {
               File::delete($destination);
           }

           $file = $request->file('avatar');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('images', $filename);
           $ubah->avatar = $filename;
       }
       alert()->success('Success','Update Data');
       $ubah->update();
       return redirect('user');
   }

   public function profil()
   {
       return view('master-user.profil');
   }

   public function reset()
   {
    $reset = User::find(Auth::user()->id);
    return view('master-user.reset',compact('reset'));
}

public function password_update(Request $request)
{
        //dd('success');

    $request->validate([
        'current_password' => ['required'],
        'password' => ['required', 'confirmed'],

    ]);

    if (Hash::check($request->current_password, auth()->user()->password)) {
        auth()->user()->update(['password' => Hash::make($request->password)]);
        alert()->success('Update Password Berhasil');
        return back();



    }else{
        alert()->warning('Warning','Password Lama Anda Tidak Sesuai');
        return redirect('reset-password');
    }
    
}


public function update_profil(Request $request)
{


    $request->user()->update(
        $request->all()
    );


    alert()->success('Update Profil Berhasil');
    return redirect('profil');
}

public function update_image(Request $request)
{
 $validatedData = $request->validate([
     'avatar' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
 ]);
 if ($request->hasfile('avatar')) {
   $avatar = $request->file('avatar');
   $filename = time() .','. $avatar->getClientOriginalExtension();
   Image::make($avatar)->resize(300, 300)->save( public_path('/images/' . $filename));

   $user = Auth::user();
   $user->avatar = $filename;

   $user->update();
   alert()->success('Update Avatar Berhasil');
   return back();
}
}

}
