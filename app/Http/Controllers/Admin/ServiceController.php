<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * name
         * price
         * duration
         * category_id
         * description
         * image
         */
        $request->validate([
            'name' => ['required','string','max:255'],
            'price' => ['required', 'numeric'],
            'duration' => ['required', 'string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'description' => ['required','string'],
            'image' => ['required', 'image'],
        ]);

        $service = new Service;

        if($request->hasFile('image')){
            $imageName = time(). '.'. $request->image->getClientOriginalExtension();
            // check path if not existing
            if(!file_exists(public_path('uploads/services'))) {
                mkdir(public_path('uploads/services'), 0777, true);
            }
            $request->image->move(public_path('uploads/services'), $imageName);
        }
        $service->name = $request->name;
        $service->price = $request->price;
        $service->duration = $request->duration;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->image = $imageName;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $categories = Category::all();
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'price' => ['required', 'numeric'],
            'duration' => ['required','string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'description' => ['required','string'],
            'image' => ['image'],
        ]);
        if($request->hasFile('image')){
            $imageName = time(). '.'. $request->image->getClientOriginalExtension();
            // check path if not existing
            if(!file_exists(public_path('uploads/services'))) {
                mkdir(public_path('uploads/services'), 0777, true);
            }
            $request->image->move(public_path('uploads/services'), $imageName);
            // delete old image
            if($service->image && file_exists(public_path('uploads/services/'. $service->image))) {
                unlink(public_path('uploads/services/'. $service->image));
            }
        } else {
            $imageName = $service->image;
        }
        $service->name = $request->name;
        $service->price = $request->price;
        $service->duration = $request->duration;
        $service->category_id = $request->category_id;
        $service->description = $request->description;
        $service->image = $imageName;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
