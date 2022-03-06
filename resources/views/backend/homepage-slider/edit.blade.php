<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.homepage-sliders.update', ['homepage_slider' => $homepageSlider->id]) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Edit Homepage Slider</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ $homepageSlider->name }}">
                                @if ($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation"
                                    value="{{ $homepageSlider->designation }}">
                                @if ($errors->has('designation'))
                                    <div class="text-danger">{{ $errors->first('designation') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control tmce" name="description" cols="30"
                                    rows="10">{{ $homepageSlider->description }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                @if ($errors->has('image'))
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($homepageSlider->image) }}"
                                    style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="order_column">Order</label>
                                <input type="number" class="form-control" placeholder="Enter order positioning"
                                    name="order_column" value="{{ $homepageSlider->order_column }}">
                                @if ($errors->has('order_column'))
                                    <div class="text-danger">{{ $errors->first('order_column') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="published_at" id="published_at" class="form-check-input"
                                        type="checkbox" {{ isset($homepageSlider->published_at) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="published_at">Published</label>
                                </div>
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
