@extends('admin.layouts.app')
@section('title', 'All Categories')
@section('content')
    <!-- Start Main Content -->
    <div class="pageCont">
        <div class="conta p30">
            <h3> Categories : </h3>
        </div>
        <div class="conta p30">
            <div class="wbtns">
                <a class="btn" href="{{ route('admin.categories.create') }}">Add Category + </a>
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
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="tools">
                                        <a href="{{ route('admin.categories.edit', $category) }}">
                                            <img src="{{ asset('assets/back/media/icons/edit.png') }}" alt="">
                                        </a>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('delete-category-form-{{ $category->id }}').submit();">
                                            <img src="{{ asset('assets/back/media/icons/delete.png') }}" alt="Delete">
                                        </a>
                                        <form id="delete-category-form-{{ $category->id }}"
                                            action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $categories->links() }}
        </div>
    </div>
    <!-- End Main Content -->
@endsection
