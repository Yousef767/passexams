@extends('admin.layouts.app')
@section('title', 'Edit Service')
@section('content')

    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30 ">
            <h3>Edit Service : </h3>
        </div>
        <div class="conta p30">
            <form class="form w100 pt20" method="POST" action="{{ route('admin.services.update', $service) }}" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                <div class="input">
                    <span>Title :</span>
                    <input type="text" placeholder="Title" name="name" value="{{ old('name', $service->name) }}">
                </div>
                <div class="input">
                    <span>Price :</span>
                    <input type="number" placeholder="Price" name="price" value="{{ old('price', $service->price) }}">
                </div>
                <div class="input">
                    <span>Time :</span>
                    <div class="select" >
                        <select name="duration">
                            <option disabled>Select Time</option>
                            <option value="30m" @selected(old('duration', $service->duration) == "30m")>30m</option>
                            <option value="1h" @selected(old('duration', $service->duration) == "1h")>1h</option>
                            <option value="1.5h" @selected(old('duration', $service->duration) == "1.5h")>1.5h</option>
                            <option value="2h" @selected(old('duration', $service->duration) == "2h")>2h</option>
                            <option value="2.5h" @selected(old('duration', $service->duration) == "2.5h")>2.5h</option>
                            <option value="3h" @selected(old('duration', $service->duration) == "3h")>3h</option>
                            <option value="3.5h" @selected(old('duration', $service->duration) == "3.5h")>3.5h</option>
                            <option value="4h" @selected(old('duration', $service->duration) == "4h")>4h</option>
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>
                </div>
                <div class="input">
                    <span>Category :</span>
                    <div class="select">
                        <select name="category_id">
                            <option disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id }}" @selected($service->category_id == $category->id)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>
                </div>
                <div class="input">
                    <span>Description :</span>
                    <textarea placeholder="Description.." name="description">{{ old('description', $service->description) }}</textarea>
                </div>
                <div class="input">
                    <label for="file3">Icon : </label>
                    <div class="customInput w430">
                        <input type="file" accept="image/*" hidden id="file3" name="image">
                        <label for="file3">Upload <i class="fa-regular fa-arrow-up-from-bracket"></i></label>
                    </div>
                    <div class="pImages pt20" id="imgcont">
                        <div class="pImage">
                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="">
                            <i class="fa-light fa-trash-can" data-name="{{$service->image}}"></i>
                          </div>
                    </div>

                </div>
                <div class="input">
                    <button type="sLubmit" class="saveBtn mra">Save</button>

                </div>
            </form>
        </div>
    </div>
    <!-- End Main Content -->
@endsection

@push('js')
<script src="{{ asset('assets/back/js/edit-project.js') }}"></script>
@endpush

