<?php

namespace App\Http\Controllers;

use App\Http\RealEstateFilter;
use App\RealEstate;
use App\User;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
            if($category == 'MyAkars')
            {
                 $RealEstates = auth()->user()->RealEstates()->latest()->paginate(12);
                return view('RealEstate.index',compact('category','RealEstates'));
            }
            else {
                $RealEstates = RealEstate::where('akar_type',$category)->paginate(12);
                return view('RealEstate.index', compact('category','RealEstates'));
            }
    }
    public function search(Request $filters)
    {
        $RealEstates = (new RealEstateFilter )->ApplyFilters($filters);
        return view('home',compact('RealEstates'));
    }

    public function create()
    {
            return view('RealEstate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main_photo =  $request['main_photo'] = request('main_photo')->store('main_photos');
        $RealEstate = RealEstate::create
        ([
            'user_id'=>auth()->id()
            ,'title'=>$request->title
            ,'description'=>$request->description
            ,'location'=>$request->location
            ,'akar_type'=>$request->akar_type
            ,'price'=>$request->price
            ,'main_photo'=>$main_photo
            ,'size'=>$request->size
        ]);


        return redirect(route('Akar.show',$RealEstate->id))->with('Added-Successfully', 'قد تم اضافة الأعلان بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $RealEstate = RealEstate::findOrFail($id);
        return view('RealEstate.show',compact('RealEstate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $RealEstate = RealEstate::findOrFail($id);
        abort_if($RealEstate->user_id != auth()->id() , 404);
        return view('RealEstate.edit',compact('RealEstate'));
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
        $RealEstate = RealEstate::findOrFail($id);
        //if there's no uploaded photo keep the old one
        if(!request()->file('main_photo')) $request['main_photo'] = $RealEstate->main_photo;
        //if there's delete the old one first then save the new one
        else {
            // checking if the last image was a real image or pravatar image , if it was real image and exists in file delete it
            // if its not real image , There's no need to delete any last image
            if(!file_exists(public_path().'/storage'.$RealEstate->main_photo)) {
                unlink('storage/' . $RealEstate->main_photo);

            }
            $request['main_photo'] = request('main_photo')->store('main_photos');

        }
        $RealEstate->update($request->all());
        return redirect(route('Akar.show',$RealEstate->id))
            ->with('Edited-Successfully', 'قد تم تعديل الأعلان بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RealEstate::findOrFail($id)->delete();

        return redirect(route('Akars',"MyAkars"));
    }
}
