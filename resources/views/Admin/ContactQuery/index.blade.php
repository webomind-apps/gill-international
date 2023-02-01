@extends('Admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add contact page content</h1>
    </div>
    <div class="row">
        <div class="table-detail">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($enquiries as $index => $enquiry)
                        <tr>
                            <th scope="row">{{ $enquiries->firstItem() + $index }}</th>
                            <td>{{ $enquiry->name }}</td>
                            <td>{{ $enquiry->phone_number }}</td>
                            <td>{{ $enquiry->email }}</td>

                            <td>
                                <a href="{{ route('admin.contact-us-query.show', $enquiry->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="deleteRecord" data-id="form-submit-{{ $enquiry->id }}"
                                    data-route="{{ route('admin.contact-us-query.destroy', $enquiry->id) }}">
                                    <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                                </a>
                                <form method="POST" id="form-submit-{{ $enquiry->id }}"
                                    action="{{ route('admin.contact-us-query.destroy', $enquiry->id) }}" hidden>
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
            {{ $enquiries->links('pagination::bootstrap-4') }}
        </div>
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
