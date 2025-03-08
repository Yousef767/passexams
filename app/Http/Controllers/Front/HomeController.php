<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Request as ModelsRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function instructions()
    {
        return view('front.instructions');
    }

    public function store()
    {
        $categories = Category::with('services')->get();
        $payments = Payment::all();
        return view('front.store', compact('categories', 'payments'));
    }

    public function storeData(Request $request)
    {
        // Validate the request data
        $request->validate([
            'service_id' => ['required', 'integer', 'exists:services,id'],
            'date' => ['required', 'date'],
            'time' => ['required', 'string', 'max:5'],
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:15'],
            'paymentMethod' => ['required', 'integer'],
            'whatsapp' => ['required', 'string', 'max:255'],
            'telegram' => ['required', 'string', 'max:255'],
        ]);
        $dateTime = $request->date . ' ' . $request->time . ':00';
        $request->merge(['date' => $dateTime]);

        $service = Service::find($request->service_id);
        $orderNumber = rand(1000, 9999);
        // Create a new service request
        $serviceRequest = ModelsRequest::create([
            'order_number' => $orderNumber,
            'name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phoneNumber,
            'service_id' => $request->service_id,
            'pay_method_id' => $request->paymentMethod,
            'purchase_price' => $service->price,
            'date' => $request->date,
            'whatsapp' => $request->whatsapp,
            'telegram' => $request->telegram,
            'requested_at' => now(),
            'read' => false
        ]);

        // Redirect the user to a success page
        return redirect()->route('front.store.index')->with('successResponse', [
            'success' => 'تم تأكيد طلبك بنجاح',
            'orderNumber' => $orderNumber,
        ]);
    }

    public function whyUs()
    {
        return view('front.why-us');
    }
}
