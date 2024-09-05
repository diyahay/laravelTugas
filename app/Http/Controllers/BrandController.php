<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('brands.index', [
            'brands' => Brand::latest()->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request) : RedirectResponse
    {
        Brand::create($request->validated());

        return redirect()->route('brands.index')
                ->withSuccess('New brand is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand) : View
    {
        return view('brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand) : View
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand) : RedirectResponse
    {
        $brand->update($request->validated());

        return redirect()->back()
                ->withSuccess('Brand is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand) : RedirectResponse
    {
        $brand->delete();

        return redirect()->route('brands.index')
                ->withSuccess('Brand is deleted successfully.');
    }
}
