@extends('backend.app')

@section('title')
    Authors
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Authors</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <td>
                                <form action="{{ route('author.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{--    <script>--}}
    {{--        $(document).ready(function (){--}}
    {{--            $(document).on('click','#change',function (e){--}}
    {{--                e.preventDefault();--}}
    {{--                let id=$(this).data('id');--}}

    {{--                if (confirm('Are you sure?')){--}}
    {{--                    $.ajax({--}}
    {{--                        url:"{{route('admin.editNewsletterAction')}}",--}}
    {{--                        method:"POST",--}}
    {{--                        data:{--}}
    {{--                            id:id,--}}
    {{--                            _token: "{{ csrf_token() }}"--}}
    {{--                        },--}}
    {{--                        success: function (res) {--}}
    {{--                            toastr.success('Updated successfully!');--}}
    {{--                            $('.table').load(location.href + ' .table');--}}
    {{--                        },--}}
    {{--                        error: function (xhr) {--}}
    {{--                            toastr.error('Something went wrong!');--}}
    {{--                        }--}}
    {{--                    });--}}

    {{--                }--}}

    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function (){--}}
    {{--            $(document).on('click','#delete',function (e){--}}
    {{--                e.preventDefault();--}}
    {{--                let id=$(this).data('id');--}}
    {{--                if (confirm('Are you sure?')){--}}
    {{--                    $.ajax({--}}
    {{--                        url:"{{route('admin.deleteNewsletter')}}",--}}
    {{--                        method:"POST",--}}
    {{--                        data:{--}}
    {{--                            id:id,--}}
    {{--                            _token: "{{ csrf_token() }}"--}}
    {{--                        },--}}
    {{--                        success: function (res) {--}}
    {{--                            toastr.success('Deleted successfully!');--}}
    {{--                            $('.table').load(location.href + ' .table'); // Refresh table content--}}
    {{--                        },--}}
    {{--                        error: function (xhr) {--}}
    {{--                            toastr.error('Something went wrong.');--}}
    {{--                            console.log(xhr.responseText);--}}
    {{--                        }--}}
    {{--                    });--}}
    {{--                }--}}

    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}

    {{--    <style>--}}
    {{--        .toast-success {--}}
    {{--            background-color: #28a745 !important; /* Green */--}}
    {{--            color: #fff !important;--}}
    {{--        }--}}

    {{--        .toast-error {--}}
    {{--            background-color: #dc3545 !important; /* Red */--}}
    {{--            color: #fff !important;--}}
    {{--        }--}}

    {{--        .toast-info {--}}
    {{--            background-color: #17a2b8 !important;--}}
    {{--            color: #fff !important;--}}
    {{--        }--}}

    {{--        .toast-warning {--}}
    {{--            background-color: #ffc107 !important;--}}
    {{--            color: #000 !important;--}}
    {{--        }--}}
    {{--    </style>--}}

@endsection
