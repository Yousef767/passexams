@extends('admin.layouts.app')
@section('title', 'Request Details')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30">
            <h3> Request Details </h3>
        </div>
        <div class="conta p30">
            <div class="requestDetails">
                <table class="tg">
                    <tr>
                        <th>Order Number:</th>
                        <td>{{ $request->order_number }}</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $request->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $request->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{ $request->phone }}</td>
                    </tr>
                    <tr>
                        <th>Service:</th>
                        <td>{{ $request->service->name }}</td>
                    </tr>
                    <tr>
                        <th>Date & Time:</th>
                        <td>{{ $request->date }} - {{ $request->time }}</td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td>{{ $request->purchase_price }} LE</td>
                    </tr>
                    <tr>
                        <th>Payment Method:</th>
                        <td>{{ $request->payment->name }}</td>
                    </tr>
                    <tr>
                        <th>Whatsapp:</th>
                        <td>{{ $request->whatsapp ?? 'Not Provided' }}</td>
                    </tr>
                    <tr>
                        <th>Telegram:</th>
                        <td>{{ $request->telegram ?? 'Not Provided' }}</td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td>{{ $request->read ? 'Read' : 'Unread' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="conta p30">
            <a href="{{ route('admin.requests.index') }}" class="btn btn-secondary">Back to Requests</a>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
