<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class CategoryController extends Controller
{

    public function db($db_name){
        Config::set("database.connections.$db_name" ,[
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'database' => $db_name,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->db(Auth::user()->db_name);
        $provider = Category::on(Auth::user()->db_name)->create([
            'name' => $request->name,
        ]);
        return redirect(route('admin.index'))->with('status','Category added success');
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
        $this->db(Auth::user()->db_name);
        $category = Category::on(Auth::user()->db_name)->find($id);
        if ($category)
            return view('admin.category.edit' ,compact('category'));
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
        $this->db(Auth::user()->db_name);
        $provider = Category::on(Auth::user()->db_name)->find($id);
        if ($provider){
            $provider->update([
                'name' => $request->name,
            ]);
        }
        return redirect(route('admin.index'))->with('status','Category update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->db(Auth::user()->db_name);
        $provider = Category::on(Auth::user()->db_name)->find($id);
        if($provider) {
            $provider->delete();
            return redirect()->back()->with('status','provider deleted');
        }
        return redirect()->back()->with('status','something want wrong');
    }
}
