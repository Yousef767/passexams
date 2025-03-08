<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = RequestModel::latest()->paginate(5);
        return view('admin.requests.index', compact('requests'));
    }

    public function markAsRead($id){
        $request = RequestModel::find($id);
        $request->read = true;
        $request->save();
        return back()->with('success', 'Request marked as read');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RequestModel $request)
    {
        return view('admin.requests.show', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestModel $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RequestModel $requestModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestModel $request)
    {
        $request->delete();
        return redirect()->route('admin.requests.index')->with('success', 'Request deleted successfully');
    }
}
