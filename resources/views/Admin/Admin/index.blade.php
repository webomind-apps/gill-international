@extends('Admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.admin.create') }}">
            Add
        </a>
    </div>
    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $index => $admin)
                    <tr>
                        <th scope="row">{{ $admins->firstItem() + $index }}</th>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            <a href="{{ route('admin.admin.edit', $admin->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="deleteRecord" data-id="form-submit-{{ $admin->id }}"
                                data-route="{{ route('admin.admin.destroy', $admin->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>
                            <form method="POST" id="form-submit-{{ $admin->id }}"
                                action="{{ route('admin.admin.destroy', $admin->id) }}" hidden>
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
        {{ $admins->links('pagination::bootstrap-4') }}
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
