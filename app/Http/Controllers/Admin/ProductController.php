<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{

    public function db($db_name)
    {
        Config::set("database.connections.$db_name", [
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
        $this->db(Auth::user()->db_name);
        $products = Product::on(Auth::user()->db_name)->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->db(Auth::user()->db_name);
        $categories = Category::on(Auth::user()->db_name)->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->db(Auth::user()->db_name);
        $provider = Product::on(Auth::user()->db_name)->create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('admin.product.index'))->with('status', 'Product added success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $this->db(Auth::user()->db_name);
        $product = Product::on(Auth::user()->db_name)->find($id);
        if ($product)
            return view('admin.product.edit', compact('product'));
        return redirect()->back()->with('status', 'something want wrong');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $this->db(Auth::user()->db_name);
        $provider = Product::on(Auth::user()->db_name)->find($id);
        if ($provider) {
            $provider->update([
                'name' => $request->name,
            ]);
        }
        return redirect(route('admin.index'))->with('status', 'Product update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->db(Auth::user()->db_name);
        $provider = Product::on(Auth::user()->db_name)->find($id);
        if ($provider) {
            $provider->delete();
            return redirect()->back()->with('status', 'provider deleted');
        }
        return redirect()->back()->with('status', 'something want wrong');
    }
}
