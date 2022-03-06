<x-backend.backend-layout>

    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Homepage Slider List</h3>
                <div class="card-tools">
                    <a type="button" class="btn btn-sm btn-primary"
                        href="{{ route('backend.homepage-sliders.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover admin-data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Order</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homepageSliders as $homepageSlider)
                            <tr>
                                <td>{{ $homepageSlider->id }}</td>
                                <td>{{ $homepageSlider->name }}</td>
                                <td>{{ $homepageSlider->designation }}</td>
                                <td>{{ Str::limit($homepageSlider->description, 50, '...') }}</td>
                                <td>
                                    <a href="{{ viewFile($homepageSlider->image) }}">View file</a>
                                    <img src="{{ viewFile($homepageSlider->image) }}" alt=""
                                        style="width:50px; height: 50px;">
                                </td>
                                <td>{{ $homepageSlider->order_column }}</td>
                                <td>{{ isset($homepageSlider->published_at) ? 'enabled' : 'disabled' }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm action"
                                        href="{{ route('backend.homepage-sliders.edit', ['homepage_slider' => $homepageSlider->id]) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('backend.homepage-sliders.destroy', ['homepage_slider' => $homepageSlider->id]) }}"
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
