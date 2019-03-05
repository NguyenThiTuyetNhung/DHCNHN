<?php

namespace App\Http\Controllers\Admin\Distribution;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Distribution;
use App\Http\Requests\Admin\StoreDistributionRequest;
use App\Http\Requests\Admin\UpdateDistributionRequest;

class DistributionController extends Controller
{
   public function index(Request $request)
	{
		$name = $request->get('name', NULL);
		$distributions = Distribution::query();
		if ($name != NULL) {
			$distributions = $distributions->where('name', 'LIKE', '%'.$name.'%');
		}
		$distributions = $distributions->latest()->paginate();
		return view('admin.distributions.index', compact('distributions'));
		
	}public function create(){
		return view("admin.distributions.create");
	}

	
	public function store(StoreDistributionRequest $request)
	{
		$data = $request->all();
		Distribution::create($data);

		return redirect()->route('admin.distributions.index');
	}

	public function destroy($id)
	{
		Distribution::findOrFail($id)->delete();
		return redirect()->route('admin.distributions.index');
	}
	public function edit(Distribution $distribution)
	{
		return view('admin.distributions.edit', compact('distribution'));
	}

	public function update(Distribution $distribution, UpdateDistributionRequest $request)
	{
		$data = $request->all();
		$distribution->update($data);

		return redirect()->route('admin.distributions.index');
	}

}
