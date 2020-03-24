<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInputRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    protected $roles;

    public function __construct()
    {
        //Xử lý lại
        $roleAll = Role::all();
        $roleA = array();

        foreach ($roleAll as $role) {
            $roleA[$role->id] = $role->name;
        }

        $this->roles = $roleA;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUser = User::all();

//        return  $categories;
        return view('admin.user.index')->with('users', $allUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create')->with('roles', $this->roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInputRequest $request)
    {
        $user = $request->all();

        if ($file = $request->file('image')) {

            $filename = $file->store('images');

            $file->move('images', $filename);

            $user['image'] = $filename;
        }

        $user['password'] = bcrypt($request->password);

        User::create($user);
//
        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rolesAll = $this->roles;
        $user = User::find($id);

        return view('admin.user.update')->with(['roles' => $rolesAll, 'user' => $user]);
//        return view('admin.user.update')->with(['roles' => $rolesAll, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserInputRequest $request, $id)
    {
        User::find($id)->update($request->all());

        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect('admin/user');
    }
}
