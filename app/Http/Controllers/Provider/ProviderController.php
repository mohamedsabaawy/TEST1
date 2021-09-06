<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Location;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::with('provider')->withCount('provider')->get();
       return view('provider.index',compact('locations'));
    }

    public function form(){
        return view('provider.login');
    }

    public function login(Request $request){
        $a = $request->only('email','password');
        if(Auth::guard('provider')->attempt($a))
            return redirect()->route('providers.index');
        return redirect()->back()->with('status','please try');

    }
}
