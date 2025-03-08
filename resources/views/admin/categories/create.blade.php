@extends('admin.layouts.app')
@section('title', 'Add Category')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30 ">
            <h3>Add Category : </h3>
        </div>
        <div class="conta p30">
            <form class="form w100 pt20 w430" method="POST" action="{{ route('admin.categories.store') }}">
                @csrf
                <div class="input">
                    <span>Category Title :</span>
                    <input type="text" placeholder="Category Title" name="name" value="{{ old('name') }}">
                </div>
                <button type="sLubmit" class="saveBtn mra">Save</button>
            </form>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
