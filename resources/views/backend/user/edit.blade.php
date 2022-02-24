<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.users.update', ['user'=> $user->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Users Edit</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter name.." name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Enter email..." name="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter password..." name="password">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm password..." name="confirm_password">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </div>
        </form>
    </div>

</x-backend.backend-layout>
