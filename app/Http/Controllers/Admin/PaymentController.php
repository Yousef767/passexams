<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::paginate(10);
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate name
        $request->validate([
            'name' => 'required|string|max:255|unique:payments,name',
        ]);

        // create payment
        Payment::create($request->all());

        return redirect()->route('admin.payments.index')->withSuccess('Payment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('admin.payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        // validate name
        $request->validate([
            'name' => 'required|string|max:255|unique:payments,name,' . $payment->id,
        ]);
        // update payment
        $payment->update($request->all());

        return redirect()->route('admin.payments.index')->withSuccess('Payment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        // delete payment
        $payment->delete();
        return redirect()->route('admin.payments.index')->withSuccess('Payment deleted successfully.');
    }
}
