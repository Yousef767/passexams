@extends('admin.layouts.app')
@section('title', 'Add Payment Method')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30 ">
            <h3>Add Payment Method : </h3>
        </div>
        <div class="conta p30">
            <form class="form w100 pt20 w430" action="{{ route('admin.payments.store') }}" method="POST">
                @csrf
                <div class="input">
                    <span>Title :</span>
                    <input type="text" placeholder="Title" name="name" value="{{ old('name') }}">
                </div>
                <button type="sLubmit" class="saveBtn mra">Save</button>
            </form>
        </div>
    </div>
    <!-- End Main Content -->

@endsection
