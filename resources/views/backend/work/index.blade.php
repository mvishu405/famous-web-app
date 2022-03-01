<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Work List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('backend.works.create') }}"
                        class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Work Category</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Preview Image</th>
                            <th>Homepage Image</th>
                            <th>Inside Video Link</th>
                            <th>Inside Image</th>
                            <th>Before Image</th>
                            <th>After Image</th>
                            <th>Show On Homepage</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($works as $work)
                            <tr>
                                <td>{{ $work->id }}</td>
                                <td>{{ $work->workCategory->name }}</td>
                                <td>{{ $work->title }}</td>
                                <td>{{ $work->sub_title }}</td>
                                <td>
                                    <a href="{{ viewFile($work->preview_image) }}">View file</a>
                                    <img src="{{ viewFile($work->preview_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="{{ viewFile($work->homepage_image) }}">View file</a>
                                    <img src="{{ viewFile($work->homepage_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $work->inside_video_link }}</td>
                                <td>
                                    <a href="{{ viewFile($work->inside_image) }}">View file</a>
                                    <img src="{{ viewFile($work->inside_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="{{ viewFile($work->before_image) }}">View file</a>
                                    <img src="{{ viewFile($work->before_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="{{ viewFile($work->after_image) }}">View file</a>
                                    <img src="{{ viewFile($work->after_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ isset($work->show_on_homepage) ? 'True' : 'False' }}</td>
                                <td>{{ $work->order_column }}</td>
                                <td>{{ isset($work->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.works.edit', ['work' => $work->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('backend.works.destroy', ['work' => $work->id]) }}"
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
