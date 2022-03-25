<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Team List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('backend.teams.create') }}"
                        class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>
                                    <a href="{{ viewFile($team->image) }}">View file</a>
                                    <img src="{{ viewFile($team->image) }}" alt="" style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $team->designation }}</td>
                                <td>{{ Str::limit($team->description, 50, '...') }}</td>
                                <td>{{ $team->link }}</td>
                                <td>{{ $team->order_column }}</td>
                                <td>{{ isset($team->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.teams.edit', ['team' => $team->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('backend.teams.destroy', ['team' => $team->id]) }}"
                                        method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="btn btn-danger btn-sm action"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-backend.backend-layout>
