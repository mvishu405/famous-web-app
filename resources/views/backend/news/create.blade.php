<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Create News</h3>
                </div>
                <div class="card-body">
                    <div class="row">

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
                                <label>News Date</label>
                                <input type="text" class="form-control pikadatepicker" name="news_date"
                                    value="{{ old('news_date') }}">
                                @if ($errors->has('news_date'))
                                    <div class="text-danger">{{ $errors->first('news_date') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control tmce" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>News Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="news_logo">
                                    <label class="custom-file-label" for="news_logo">Choose file</label>
                                </div>
                                @if ($errors->has('news_logo'))
                                    <div class="text-danger">{{ $errors->first('news_logo') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>News Link</label>
                                <input type="text" class="form-control" name="news_link"
                                    value="{{ old('news_link') }}">
                                @if ($errors->has('news_link'))
                                    <div class="text-danger">{{ $errors->first('news_link') }}</div>
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
