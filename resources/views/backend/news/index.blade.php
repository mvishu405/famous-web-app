<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">News List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('backend.news.create') }}"
                        class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Preview Image</th>
                            <th>News Date</th>
                            <th>Description</th>
                            <th>News Logo</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $news)
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td>
                                    <a href="{{ viewFile($news->preview_image) }}">View file</a>
                                    <img src="{{ viewFile($news->preview_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $news->news_date }}</td>
                                <td>{{ Str::limit($news->description, 50, '...') }}</td>
                                <td>
                                    <a href="{{ viewFile($news->news_logo) }}">View file</a>
                                    <img src="{{ viewFile($news->news_logo) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $news->order_column }}</td>
                                <td>{{ isset($news->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.news.edit', ['news' => $news->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('backend.news.destroy', ['news' => $news->id]) }}"
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
