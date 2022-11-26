<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Role;

class PictureGalleryInvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::where('name','investor')->first();

        $pictures = Picture::where('role_id',$role->id)->paginate(10);
        return view('admin.picture-gallery.investor.index',compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.picture-gallery.investor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = [
            'picture.*' => 'required|mimes:jpeg,jpg,png,gif,svg,pdf|max:204800'
        ];

        $this->validate($request, $validation);

        $role = Role::where('name','investor')->first();

        if($request->hasfile('picture')){
            foreach($request->file('picture') as $pic){
                $name = $pic->store('investor-gallery', 'public');
                Picture::updateOrCreate(['name'=>$name,'role_id'=>$role->id]);
            }
        }

        return redirect()->route('investor-picture-gallery.index')->withSuccess('Pictures uploaded successfully!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pic = Picture::find($id);
        if(!$pic){
            return redirect()->route('investor-picture-gallery.index')->withErrors('Picture not found');
        }
        if (File::exists($pic->name)) {
            // File::delete($pic->name);
            unlink($pic->name);
        }
        $pic->delete();

        return redirect()->route('investor-picture-gallery.index')->withSuccess('Picture deleted successfully!');
    }
}
