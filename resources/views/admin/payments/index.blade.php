@extends('admin.layouts.app')
@section('title', 'All Payments')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30">
            <h3> Payment Methods : </h3>
        </div>
        <div class="conta p30">
            <div class="wbtns">
                <a class="btn" href="{{ route('admin.payments.create') }}">Add Method + </a>
            </div>
            <table class="tg">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title </th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->name }}</td>
                            <td>
                                <div class="tools">
                                    <a href="{{ route('admin.payments.edit', $payment) }}">
                                        <img src="{{ asset('assets/back/media/icons/edit.png') }}" alt="">
                                    </a>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('delete-payment-form-{{ $payment->id }}').submit();">
                                        <img src="{{ asset('assets/back/media/icons/delete.png') }}" alt="Delete">
                                    </a>
                                    <form id="delete-payment-form-{{ $payment->id }}"
                                        action="{{ route('admin.payments.destroy', $payment->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No payments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $payments->links() }}
        </div>
    </div>
    <!-- End Main Content -->
@endsection
