<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view("categories.index", ["categories" => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = Category::create($request->validated());
        if ($category) {
            return redirect()->route("admin.index");
        }
        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->view("categories.show", [
            "category" => Category::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->view("categories.edit", [
            "category" => Category::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $c = Category::findOrFail($id);
        if($c->update($request->validated())) {
            return redirect()->route("admin.index");
        }
        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, bool $admin = false)
    {
        $c = Category::findOrFail($id);
        $products = Product::where("category_id", $c->id)->get();
        foreach($products as $product) {
            $product->delete();
        }
        if($c->delete()) {
            return redirect()->route("category.index");
        }
        return abort(500);
    }
}
