<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Users List</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></button>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Email verified status</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                {!! isset($user->email_verified_at) ? '<span class="badge bg-success">Email Verfied</span>' : '<span class="badge bg-danger">Not Verified</span>' !!}
                            </td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a class="btn btn-warning btn-sm action" href="{{ route('backend.users.edit', ['user' => $user->id]) }}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm action"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
        </div>
    </div>

</x-backend.backend-layout>
