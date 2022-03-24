<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Homepage Banner List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary"
                        href="{{ route('backend.homepage-banners.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Desktop Banner</th>
                            <th>Mobile Banner</th>
                            <th>Video Mp4</th>
                            <th>Video Webm</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Banner Url</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homepageBanners as $homepageBanner)
                            <tr>
                                <td>{{ $homepageBanner->id }}</td>
                                <td>
                                    <img src="{{ viewFile($homepageBanner->desktop_banner) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <img src="{{ viewFile($homepageBanner->mobile_banner) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>
                                    <a href="{{ viewFile($homepageBanner->video_mp4) }}" target="_blank">View file</a>

                                </td>
                                <td>
                                    <a href="{{ viewFile($homepageBanner->video_webm) }}" target="_blank">View
                                        file</a>

                                </td>

                                <td>{{ $homepageBanner->title }}</td>
                                <td>{{ Str::limit($homepageBanner->description, 50, '...') }}</td>
                                <td>{{ $homepageBanner->banner_url }}</td>
                                <td>{{ $homepageBanner->order_column }}</td>
                                <td>{{ isset($homepageBanner->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.homepage-banners.edit', ['homepage_banner' => $homepageBanner->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('backend.homepage-banners.destroy', ['homepage_banner' => $homepageBanner->id]) }}"
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
