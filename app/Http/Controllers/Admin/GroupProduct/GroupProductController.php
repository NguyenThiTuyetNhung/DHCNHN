<?php

namespace App\Http\Controllers\Admin\GroupProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GroupProduct;
class GroupProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g_p = GroupProduct::all();
        return view('admin.group_products.index',compact('g_p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group_products.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'content' => 'required',
            'image' => 'required',
            'status' => 'required'
        ],[
            'name.required' => 'Vui lòng không để trống',
            'content.required' => 'Vui lòng không để trống',
            'image.required' => 'Ảnh không được để trống',
            'status.required' => 'Trạng thái không được để trống',
        ]);

        $data = $request->except(['image']);
        $allow_type = ["jpg","jpeg","png","svg","png","gif"];

        if($request->hasFile('image')){
            $image = $request->image;
            $file_ext = $image->getClientOriginalExtension();
            if(in_array($file_ext, $allow_type)){
                $name = rand_string(5) . '_' . $image->getClientOriginalName();
                $image->move('uploads', $name);
                $data['image'] = $name;
            }
            $request->image = $name;
        }
        
        $g_p = GroupProduct::create($data);
        return redirect()->route('admin.group_products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g_p = GroupProduct::find($id);
        return view('admin.group_products.edit',compact('g_p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'content' => 'required',
            'status' => 'required'
        ],[
            'name.required' => 'Vui lòng không để trống',
            'content.required' => 'Vui lòng không để trống',
            'status.required' => 'Trạng thái không được để trống',
        ]);

        $g_p = GroupProduct::find($id);
        $data = $request->except(['image']);
        $allow_type = ["jpg","jpeg","png","svg","png","gif"];

        if($request->hasFile('image')){
            $image = $request->image;
            $file_ext = $image->getClientOriginalExtension();
            if(in_array($file_ext, $allow_type)){
                $name = rand_string(5) . '_' . $image->getClientOriginalName();
                $image->move('uploads', $name);
                $data['image'] = $name;
            }
            $request->image = $name;
        }
        
        $g_p->update($data);
        return redirect()->route('admin.group_products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $g_p = GroupProduct::find($id);
        $g_p->delete();
        session()->flash('destroy_success');
        return redirect()->route('admin.group_products.index');
    }
}
