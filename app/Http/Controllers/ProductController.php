<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : Response | RedirectResponse
    {
        if($request->has("categoryId")) {
            $categoryId = $_GET["categoryId"];
        }
        else {
            return response()->view("products.index", ["products" => Product::all(), "category" => null]);
        }

        $category = Category::where("id", $categoryId)->first();
        if(!$category) {
            return Redirect::route("category.index");
        }
        return response()->view("products.index", ["products" => Product::where("category_id", $categoryId)->get(), "category" => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : Response
    {
        return response()->view("products.create", ["categories" => Category::all()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request) : RedirectResponse
    {
        $p = Product::create($request->validated());
        if($p) {
            return redirect()->route("admin.index");
        }
        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : Response
    {
        return response()->view("products.show", [
            "product" => Product::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : Response
    {
        return response()->view("products.edit", [
            "product" => Product::findOrFail($id),
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id) : RedirectResponse
    {
        $p = Product::findOrFail($id);
        if($p->update($request->validated())) {
            return redirect()->route("admin.index");
        }
        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id,) : RedirectResponse
    {
        $p = Product::findOrFail($id);
        
        if($p->delete()) {
            return redirect()->route("admin.index");
        }
        return abort(500);
    }
}
