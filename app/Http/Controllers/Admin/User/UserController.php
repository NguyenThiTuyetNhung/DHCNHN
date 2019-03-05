<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;

class UserController extends Controller
{     public function index(Request $request)
	{
		$name = $request->get('name', NULL);
		$users = User::query();
		if ($name != NULL) {
			$users = $users->where('name', 'LIKE', '%'.$name.'%');
		}
		$users = $users->latest()->paginate(10);
		return view('admin.users.index', compact('users'));
	}
	public function create(){
		return view("admin.users.create");
	}
	public function store(StoreUserRequest $request)
	{
		$data = $request->all();
		
		User::create($data);

		return redirect()->route('admin.users.index');
	}
	public function destroy($id)
	{
		User::findOrFail($id)->delete();
		return redirect()->route('admin.users.index');
	}
	public function edit(User $user)
	{
		return view('admin.users.edit', compact('user'));
	}

	public function update(User $user, UpdateUserRequest $request)
	{
		$data = $request->all();
		$user->update($data);

		return redirect()->route('admin.users.index');
	}

}
