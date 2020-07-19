<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateroleRequest;
use App\Http\Requests\UpdateroleRequest;
use App\Repositories\roleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RoleController extends AppBaseController
{
    /** @var  roleRepository */
    private $roleRepository;

    public function __construct(roleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the role.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
  
        $roles = $this->roleRepository->all();

        return view('backend.roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new role.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.roles.create');
    }


    /**
     * Store a newly created role in storage.
     *
     * @param CreateroleRequest $request
     *
     * @return Response
     */
    public function store(CreateroleRequest $request)
    {
        $input = $request->all();

        $role = $this->roleRepository->create($input);

        Flash::success('تم اضافة الصلاحية بنجاح');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified role.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('هذه الصلاحية غير متوفرة');

            return redirect(route('roles.index'));
        }

        return view('backend.roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('هذه الصلاحية غير متوفرة');

            return redirect(route('roles.index'));
        }

        return view('backend.roles.edit')->with('role', $role);
    }

    /**
     * Update the specified role in storage.
     *
     * @param int $id
     * @param UpdateroleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateroleRequest $request)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('هذه الصلاحية غير متوفرة');

            return redirect(route('roles.index'));
        }

        $role = $this->roleRepository->update($request->all(), $id);

        Flash::success('تم تحديث الصلاحية بنجاح');

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified role from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('هذه الصلاحية غير متوفرة');

            return redirect(route('roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success('تم حذف الصلاحية بنجاح');

        return redirect(route('roles.index'));
    }
}
