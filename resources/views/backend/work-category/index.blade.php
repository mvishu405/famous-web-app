<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Work Category List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary"
                        href="{{ route('backend.work-categories.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workCategories as $workCategory)
                            <tr>
                                <td>{{ $workCategory->id }}</td>
                                <td>{{ $workCategory->name }}</td>
                                <td>{{ $workCategory->order_column }}</td>
                                <td>{{ isset($workCategory->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.work-categories.edit', ['work_category' => $workCategory->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('backend.work-categories.destroy', ['work_category' => $workCategory->id]) }}"
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
