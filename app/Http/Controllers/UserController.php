<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\roleRepository;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;
use File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {  
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();
        // dd($users);
        return view('backend.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create(roleRepository $roleRepo)
    {
        $roles = $roleRepo->all();
        return view('backend.users.create',compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        // dd($input);
        if (request()->hasfile('image')) {
            $name = request('image')->getClientOriginalName();
            $name = time() .uniqid(). '_' . $name;
            request('image')->move(public_path() . '/profile/', $name);
            $input['image'] = $name;
        }

        $input['password'] =  Hash::make($input['password']);
        $user = $this->userRepository->create($input);
        
        if($user){
            RoleUser::create([
                'name' => $user->name ?? "",
                'user_id' => $user->id,
                'role_id' => $request->role
            ]);
            //  dd($user);
        }


        Flash::success('تم اضافة مستخدم جديد بنجاح');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);
        
        if (empty($user)) {
            Flash::error('المستخدم غير متوفر');

            return redirect(route('users.index'));
        }

        return view('backend.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(roleRepository $roleRepo,$id)
    {
        $user = $this->userRepository->find($id);
        $roles =  $roleRepo->all();
        if (empty($user)) {
            Flash::error('المستخدم غير متوفر');

            return redirect(route('users.index'));
        }

        return view('backend.users.edit')->with(['user'=> $user,'roles'=>$roles ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $input = $request->all();
        $user = $this->userRepository->find($id);
        
        if (empty($user)) {
            Flash::error('المستخدم غير متوفر');

            return redirect(route('users.index'));
        }
        if (request()->hasfile('image')) {
           if($user->image != 'avatar.png'){
               File::delete("profile/$user->image");
           }
            $name = request('image')->getClientOriginalName();
            $name = time() .uniqid(). '_' . $name;
            request('image')->move(public_path() . '/profile/', $name);
            $input['image'] = $name;
        }else{
            unset($input['image']);
        }

        if($input['password'] == null){
            unset($input['password']);
        }else{
            $input['password'] =  Hash::make($input['password']);
        }
        
        $user = $this->userRepository->update($input, $id);
  
        RoleUser::where('user_id', $id)->update([
                    'name' => $request->name ?? "",
                    'user_id' => $id,
                    'role_id' => $request->role
                ]);
        Flash::success('تم تعديل بيانات المستخدم بنجاح');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('المستخدم غير متوفر');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('تم حذف المستخدم');

        return redirect(route('users.index'));
    }
}
