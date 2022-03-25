<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.works.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Create Work</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Work Categories</label>
                                <select name="work_category_id" class="form-control select2">
                                    @foreach ($work_categories as $workCategory)
                                        <option value="{{ $workCategory->id }}">{{ $workCategory->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Sub Title</label>
                                <input type="text" class="form-control" name="sub_title"
                                    value="{{ old('sub_title') }}">
                                @if ($errors->has('sub_title'))
                                    <div class="text-danger">{{ $errors->first('sub_title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Preview Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label" for="preview_image">Choose file</label>
                                </div>
                                @if ($errors->has('preview_image'))
                                    <div class="text-danger">{{ $errors->first('preview_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Homepage Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="homepage_image">
                                    <label class="custom-file-label" for="homepage_image">Choose file</label>
                                </div>
                                @if ($errors->has('homepage_image'))
                                    <div class="text-danger">{{ $errors->first('homepage_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Inside Video Link</label>
                                <input type="text" class="form-control" name="inside_video_link"
                                    value="{{ old('inside_video_link') }}">
                                @if ($errors->has('inside_video_link'))
                                    <div class="text-danger">{{ $errors->first('inside_video_link') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Inside Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="inside_image">
                                    <label class="custom-file-label" for="inside_image">Choose file</label>
                                </div>
                                @if ($errors->has('inside_image'))
                                    <div class="text-danger">{{ $errors->first('inside_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control tmce" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
                                @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Before Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="before_image">
                                    <label class="custom-file-label" for="before_image">Choose file</label>
                                </div>
                                @if ($errors->has('before_image'))
                                    <div class="text-danger">{{ $errors->first('before_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>After Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="after_image">
                                    <label class="custom-file-label" for="after_image">Choose file</label>
                                </div>
                                @if ($errors->has('after_image'))
                                    <div class="text-danger">{{ $errors->first('after_image') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="show_on_homepage" id="show_on_homepage" class="form-check-input"
                                        type="checkbox">
                                    <label class="form-check-label" for="show_on_homepage">Show On Homepage</label>
                                </div>
                                @if ($errors->has('show_on_homepage'))
                                    <div class="text-danger">{{ $errors->first('show_on_homepage') }}</div>
                                @endif
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Gallery Images</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gallery_images[]" multiple>
                                    <label class="custom-file-label" for="gallery_images">Choose file</label>
                                </div>
                                @if ($errors->has('gallery_images'))
                                    <div class="text-danger">{{ $errors->first('gallery_images') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="order_column">Order</label>
                                <input type="number" class="form-control" placeholder="Enter order positioning"
                                    name="order_column" value="{{ old('order_column') }}">
                                @if ($errors->has('order_column'))
                                    <div class="text-danger">{{ $errors->first('order_column') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="published_at" id="published_at" class="form-check-input"
                                        type="checkbox" checked>
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
