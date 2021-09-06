<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Location;
use App\Models\Provider;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkLocation')->only(['create','store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('providers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = Location::create([
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'provider_id' => $request->user()->id,
        ]);
        return redirect(route('providers.index'))->with('status','Location added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $provider = Location::find($id);
        if ($provider)
            return view('provider.location.edit' ,compact('provider'));
        return redirect()->back()->with('status','something want wrong');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $provider = Location::find($id);
        if ($provider){
            $provider->update([
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'provider_id' => $request->user()->id,
            ]);
        }
        return redirect(route('providers.index'))->with('status','Location update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $provider = Location::find($id);
        if($provider) {
            $provider->delete();
            return redirect()->back()->with('status','Location deleted');
        }
        return redirect()->back()->with('status','something want wrong');
    }
}
