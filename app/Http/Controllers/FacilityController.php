<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;
use App\binditem;
use App\DataAccess\itemsDAO;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $facility = new Facility;
        $facility->floor_id = $request->floor_id;
        $facility->facilityNo = 0;
        $facility->xCoordinate = $request->xcoordinate;
        $facility->yCoordinate = $request->ycoordinate;
        $facility->facilityName = $request->facility_name;
        $facility->facilityType = $request->facility_type;

        $facility->save();
        return redirect()->route('floor.show', $request->floor_id);
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
        $facility = \App\Facility::find($id);
        $itemsDAO = new itemsDAO;
        $items = $itemsDAO->getItemName($id);
        return view('facility.show', compact('facility','items'));
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
        $facility = \App\Facility::find($id);
        return view('facility.edit', compact('facility'));
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
        if($request->action === 'back') {
            return redirect()->route('item.index');
        }

        $facility = \App\Facility::find($id);
        $facility->x_coordinate = $request->xCoordinate;
        $facility->y_coordinate = $request->yCoordinate;
        $facility->facility_name = $request->facilityName;
        $facility->facility_type = $request->facilityType;
        $facility->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $facility = \App\Facility::find($id);
        $facility->delete();
        return redirect()->route('facility.add');
    }

    /**
     * add a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $input = $request->all();

        return view('facility.add', compact('request'));
    }
}
