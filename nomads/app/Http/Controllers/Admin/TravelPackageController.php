<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TravelPackageRequest as AdminTravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Http\Request\Admin\TravelPackageRequest;
use Illuminate\Support\Str;


class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TravelPackage::all();

        return view('pages.admin.travel-package.index', [
            'items' => $items
        ]);
        // return 'ini halaman paket travel';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminTravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = TravelPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminTravelPackageRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = TravelPackage::findOrFail($id);

        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
