@extends('Admin.layout.master')

@section('page-contents')
<div>
    <a class="btn btn-danger btn-sm" href="{{ route('admin.useful-links.create') }}">
        Add
    </a>
</div>
<div class="table-detail">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Banner</th>
                <th scope="col">Position</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $index => $link)
                <tr>
                    <th scope="row">{{ $links->firstItem() + $index }}</th>
                    <td>{{ $link->title }}</td>
                    <td><img src="{{ asset("storage/$link->banner")}}" ></td>
                    <td>{{ $link->position }}</td>
                    <td>
                        <a href="{{ route('admin.useful-links.edit', $link->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="deleteRecord" data-id="form-submit-{{ $link->id }}"
                            data-route="{{ route('admin.useful-links.destroy', $link->id) }}">
                            <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                        </a>
                        <form method="POST" id="form-submit-{{ $link->id }}"
                            action="{{ route('admin.useful-links.destroy', $link->id) }}" hidden>
                            @method('DELETE')
                            @csrf
                            <button type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </tbody>
    </table>
    {{ $links->links('pagination::bootstrap-4')}}
</div>
@endsection

@push('scripts')
    <script>
        $('.deleteRecord').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $('#' + id + '').submit();
            }
        })
    </script>
@endpush
