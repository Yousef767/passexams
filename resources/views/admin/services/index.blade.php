@extends('admin.layouts.app')
@section('title', 'All Services')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30">
            <h3> Services : </h3>
        </div>
        <div class="conta p30">
            <div class="wbtns">
                <a href="{{ route('admin.services.create') }}" class="btn">Add Service + </a>
            </div>
                <table class="tg">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title </th>
                            <th>Price </th>
                            <th>Time</th>
                            <th>Description </th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $service)
                            <tr>
                                <td><img src="{{ asset('uploads/services/' . $service->image) }}" alt=""></td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->duration }}</td>
                                <td class="mw200">{{ $service->description }}</td>
                                <td>
                                    <div class="tools">
                                        <a href="{{ route('admin.services.edit', $service->id) }}">
                                            <img src="{{ asset('assets/back/media/icons/edit.png') }}" alt="">
                                        </a>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('delete-service-form-{{ $service->id }}').submit();">
                                            <img src="{{ asset('assets/back/media/icons/delete.png') }}" alt="Delete">
                                        </a>
                                        <form id="delete-service-form-{{ $service->id }}"
                                            action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No services found.</td>
                            </tr>
                        @endforelse
                    </tbody>
            </form>
            {{ $services->links() }}
        </div>
    </div>
    <!-- End Main Content -->
@endsection
