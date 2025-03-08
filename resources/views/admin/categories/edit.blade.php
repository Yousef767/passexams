@extends('admin.layouts.app')
@section('title', 'Edit Category')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30 ">
            <h3>Edit Category : </h3>
        </div>
        <div class="conta p30">
            <form class="form w100 pt20 w430" method="POST" action="{{ route('admin.categories.update', $category) }}">
                @csrf
                @method('PUT')
                <div class="input">
                    <span>Category Title :</span>
                    <input type="text" placeholder="Category Title" name="name" value="{{ old('name', $category->name) }}">
                </div>
                <button type="sLubmit" class="saveBtn mra">Save</button>
            </form>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
