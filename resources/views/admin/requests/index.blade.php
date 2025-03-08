@extends('admin.layouts.app')
@section('title', 'All Requests')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30">
            <h3> Requests : </h3>
        </div>
        <div class="conta p30">
                <table class="tg">
                    <thead>
                        <tr>
                            <th>Order Number </th>
                            <th>Name </th>
                            <th>Email </th>
                            <th> Phone </th>
                            <th>Service</th>
                            <th>Date & Time</th>
                            <th>Price</th>
                            <th>Payment Method</th>
                            <th style="display: none;">Whatsapp</th>
                            <th style="display: none;">Telegram</th>
                            <th>Read</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requests as $request)
                            <tr>
                                <td>
                                    <i
                                        class="fa-solid fa-circle {{ $request->read ? 'activeStatus' : 'notActiveStatus' }}"></i>
                                    {{ $request->order_number }}
                                </td>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->email }}</td>
                                <td>{{ $request->phone }}</td>
                                <td>{{ $request->service->name }}</td>
                                <td>{{ $request->date }}</td>
                                <td>{{ $request->purchase_price }}LE</td>
                                <td> {{ $request->payment->name }} </td>
                                <td style="display: none;">{{ $request->whatsapp }}</td>
                                <td style="display: none;">{{ $request->telegram }}</td>
                                <td>
                                    <a href="{{ route('admin.requests.read', $request->id) }}">
                                        <div class="btn">
                                            Read
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <div class="tools">
                                        <a href="{{ route('admin.requests.show', $request) }}">
                                            <img src="{{ asset('assets/back/media/icons/eye.png') }}" alt=""
                                                id="show-popUp">
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('delete-request-form-{{ $request->id }}').submit();">
                                            <img src="{{ asset('assets/back/media/icons/delete.png') }}" alt="Delete">
                                        </a>
                                        <form id="delete-request-form-{{ $request->id }}"
                                            action="{{ route('admin.requests.destroy', $request->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            {{ $requests->links() }}
        </div>
    </div>
    <!-- End Main Content -->
@endsection
