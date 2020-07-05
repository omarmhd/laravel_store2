<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use App\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('access_to_controll_panel')) {
            abort(403, 'unauthorized access');
        }
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }


    public function edit($id)
    {
        if (Gate::denies('edit-user')) {
            abort(403, 'unauthorized access to edit user');
        }
        try {
            $user = User::find($id);
            $roles = Role::all();
            return view('admin.users.editUser', compact('user', 'roles'));
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', ' not found user ' . $id);
        }
    }


    public function update(Request $request, $id)
    {
      try {
            $role_id = $request->role_id;
    RoleUser::where('user_id', $id)->updateOrCreate([
                'name' => $request->name ?? "",
                'user_id' => $id,
                'role_id' => $role_id
            ]);

            return redirect()->route('user.index')->with('success', 'user successfully updated');
        } catch (Exception $exception) {

            return back()->with('error', 'error not found or role update failed ');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Gate::denies('delete-user')) {
            abort(403, 'unauthorized access to delete user');
        }
        try {
            $user = User::where('id', $id)->delete();
            return redirect()->route('user.index')->with('success', 'roles successfully deleted');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error not found or role delete failed ');
        }
    }
}
