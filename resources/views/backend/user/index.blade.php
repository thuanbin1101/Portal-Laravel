@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Page</h4>
                <div class="template-demo">
                    <a href="{{ route('add.user') }}">
                        <button type="button" class="btn btn-primary btn-fw" style="float: right;margin-bottom: 15px">
                            Add
                            User
                        </button>
                    </a>
                </div>
                <form action="" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name...">
                    </div>
                    <button type="submit" class="btn btn-dark">Search</button>
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> 1</td>
                                <td> {{ $user->name }}</td>
                                <td> {{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $roleuser)
                                        {{$roleuser->name}},
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('edit.user', $user->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('destroy.user', $user->id) }}" method="POST"
                                          style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure to delete?')"
                                                data-url="{{ route('destroy.user', $user->id) }}"
                                                class="btn btn-danger btn--delete">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="margin-top: 10px">
                        {!! $users->appends(request()->all())->links('pagination::bootstrap-4') !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('backend/admins/user/index/list.js') }}"></script>
@endsection
