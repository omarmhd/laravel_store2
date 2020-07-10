<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;


class UserControllerFront extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     if (Gate::denies('access_to_controll_panel')) {
    //         abort(403, 'unauthorized access');
    //     }
    //     $users = User::all();
    //     return view('admin.users.users', compact('users'));
    // }


    // public function edit($id)
    // {
    //     if (Gate::denies('edit-user')) {
    //         abort(403, 'unauthorized access to edit user');
    //     }
    //     try {
    //         $user = User::find($id);
    //         $roles = Role::all();
    //         return view('admin.users.editUser', compact('user', 'roles'));
    //     } catch (ModelNotFoundException $exception) {
    //         return back()->with('error', ' not found user ' . $id);
    //     }
    // }


    // public function update(Request $request, $id)
    // {
    //   try {
    //         $role_id = $request->role_id;
    // RoleUser::where('user_id', $id)->updateOrCreate([
    //             'name' => $request->name ?? "",
    //             'user_id' => $id,
    //             'role_id' => $role_id
    //         ]);

    //         return redirect()->route('user.index')->with('success', 'user successfully updated');
    //     } catch (Exception $exception) {

    //         return back()->with('error', 'error not found or role update failed ');
    //     }
    // }

    public function updateUser()
    {
        $id = auth()->user()->id;
        
        $data = Validator::make(request()->all(), [
            'name'     => 'required|string|max:20|min:4',
            'email'    => 'required|email|unique:users,email,' . $id,
            'mobile'  =>  'sometimes|nullable|unique:users,mobile'.$id,
            'website'  => 'sometimes|nullable',
            'gender'   => 'required|integer',
        ]);

        $name = strip_tags(request("name"));
        if($name !== ''){
            User::where('id', $id)->update([
                'name'     => $name,
                'email'    => request("email"),
                'mobile'  => request("mobile"),
                'website'  => request("website"),
                'gender'   => request("gender"),

            ]);
            return redirect()->back()->with('success', 'Done');
        }else{

            return redirect()->back();
        }

        return null;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {

    //     if (Gate::denies('delete-user')) {
    //         abort(403, 'unauthorized access to delete user');
    //     }
    //     try {
    //         $user = User::where('id', $id)->delete();
    //         return redirect()->route('user.index')->with('success', 'roles successfully deleted');
    //     } catch (ModelNotFoundException $exception) {

    //         return back()->with('error', 'error not found or role delete failed ');
    //     }
    // }

    public function update_image()
    {

        $data = $this->validate(request(), [
            'photo' => 'required|image',
        ]);

        if (request()->hasfile('photo')) {
            $user = User::where(['id' => auth::user()->id])->first();
            File::delete("profile/$user->image");
            $name = request('photo')->getClientOriginalName();
            $name = time() .uniqid(). '_' . $name;

            request('photo')->move(public_path() . '/profile/', $name);
            User::where(['id' => auth::user()->id])->update(['image' => $name]);

        }

        return redirect()->back();

    }

}
