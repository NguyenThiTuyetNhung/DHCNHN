<?php

namespace App\Http\Controllers\Admin\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Http\Requests\Admin\StoreMemberRequest;
use App\Http\Requests\Admin\UpdateMemberRequest;

class AdminsController extends Controller
{
	public function index(Request $request){
		$name = $request->get('name', NULL);
		$members = Admin::query();
		if ($name != NULL) {
			$members = $members->where('name', 'LIKE', '%'.$name.'%');
		}
		$members = $members->where('rule', 1)->latest()->paginate(1);
		return view('admin.member.index', compact('members'));

	}
	public function create(){
		return view("admin.member.create");
	}
	public function store(StoreMemberRequest $request)
	{
		$data = $request->all();
		
		Admin::create($data);

		return redirect()->route('admin.members.index');
	}

	public function destroy($id)
	{
		Admin::findOrFail($id)->delete();
		return redirect()->route('admin.members.index');
	}
	public function edit(Admin $member)
	{
		return view('admin.member.edit', compact('member'));
	}

	public function update(Admin $member, UpdateMemberRequest $request)
	{
		$data = $request->all();
		$member->update($data);

		return redirect()->route('admin.members.index');
	}
}
