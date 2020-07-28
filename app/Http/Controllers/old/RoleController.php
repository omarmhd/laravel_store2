<?php

// namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (Gate::denies('access_to_role')) {

            abort(403, 'unauthorized access  ');
        }
        $roles = Role::all();

        return view('admin.roles.roles', compact('roles'));
    }


    public function create()
    {

        return view('admin.roles.createRole');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles'
        ])->validate();

        try {
            Role::create([
                'name' => $request->name

            ]);

            return redirect()->route('role.index')->with('success', 'a new role  has been added successfully');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error adding a new role');
        }
    }

    public function edit($id)
    {
        if (Gate::denies('access_to_role')) {
            abort(403, 'unauthorized access  ');
        }
        $role = Role::find($id);
        return view('admin.roles.editRole', compact('role'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ])->validate();

        try {
            $roles = Role::where('id', $id)->update(['name' => $request->name]);
            return redirect()->route('role.index')->with('success', 'roles successfully updated');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error not found or role update failed ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $role = Role::where('id', $id)->delete();
            return redirect()->route('role.index')->with('success', 'roles successfully deleted');
        } catch (ModelNotFoundException $exception) {

            return back()->with('error', 'error not found or role delete failed ');
        }
    }
}
