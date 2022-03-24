<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Blog List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary" href="{{ route('backend.blogs.create') }}"
                        class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Featured Image</th>
                            <th>Cover Image</th>
                            <th>Blog Date</th>
                            <th>Read Time</th>
                            <th>Description</th>
                            <th>Meta Title</th>
                            <th>Meta Keywords</th>
                            <th>Meta Image</th>
                            <th>Meta Description</th>
                            <th>Og Title</th>
                            <th>Og Type</th>
                            <th>Og Url</th>
                            <th>Og Site Name</th>
                            <th>Og Image</th>
                            <th>Og Description</th>
                            <th>Twitter Title</th>
                            <th>Twitter Card</th>
                            <th>Twitter Site</th>
                            <th>Twitter Image</th>
                            <th>Twitter Description</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    <a href="{{ viewFile($blog->featured_image) }}">View file</a>
                                    <img src="{{ viewFile($blog->featured_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="{{ viewFile($blog->cover_image) }}">View file</a>
                                    <img src="{{ viewFile($blog->cover_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $blog->blog_date }}</td>
                                <td>{{ $blog->read_time }}</td>
                                <td>{{ Str::limit($blog->description, 50, '...') }}</td>
                                <td>{{ $blog->meta_title }}</td>
                                <td>{{ $blog->meta_keywords }}</td>
                                <td>
                                    <a href="{{ viewFile($blog->meta_image) }}">View file</a>
                                    <img src="{{ viewFile($blog->meta_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ Str::limit($blog->meta_description, 50, '...') }}</td>
                                <td>{{ $blog->og_title }}</td>
                                <td>{{ $blog->og_type }}</td>
                                <td>{{ $blog->og_url }}</td>
                                <td>{{ $blog->og_site_name }}</td>
                                <td>
                                    <a href="{{ viewFile($blog->og_image) }}">View file</a>
                                    <img src="{{ viewFile($blog->og_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ Str::limit($blog->og_description, 50, '...') }}</td>
                                <td>{{ $blog->twitter_title }}</td>
                                <td>{{ $blog->twitter_card }}</td>
                                <td>{{ $blog->twitter_site }}</td>
                                <td>
                                    <a href="{{ viewFile($blog->twitter_image) }}">View file</a>
                                    <img src="{{ viewFile($blog->twitter_image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ Str::limit($blog->twitter_description, 50, '...') }}</td>
                                <td>{{ $blog->order_column }}</td>
                                <td>{{ isset($blog->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.blogs.edit', ['blog' => $blog->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('backend.blogs.destroy', ['blog' => $blog->id]) }}"
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
