<?php

namespace App\Http\Controllers\Admin\Statistics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
   public function index(Request $request)
	{


		
		return view('admin.statistics.index');
	}

	
}
