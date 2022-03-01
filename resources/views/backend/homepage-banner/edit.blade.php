<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.homepage-banners.update', ['homepage_banner' => $homepageBanner->id]) }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Edit Homepage Banner</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Desktop Banner</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="desktop_banner">
                                    <label class="custom-file-label" for="desktop_banner">Choose file</label>
                                </div>
                                @if ($errors->has('desktop_banner'))
                                    <div class="text-danger">{{ $errors->first('desktop_banner') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($homepageBanner->desktop_banner) }}"
                                    style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Mobile Banner</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mobile_banner">
                                    <label class="custom-file-label" for="mobile_banner">Choose file</label>
                                </div>
                                @if ($errors->has('mobile_banner'))
                                    <div class="text-danger">{{ $errors->first('mobile_banner') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($homepageBanner->mobile_banner) }}"
                                    style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title"
                                    value="{{ $homepageBanner->title }}">
                                @if ($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" cols="30"
                                    rows="10">{{ $homepageBanner->description }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Banner Url</label>
                                <input type="text" class="form-control" name="banner_url"
                                    value="{{ $homepageBanner->banner_url }}">
                                @if ($errors->has('banner_url'))
                                    <div class="text-danger">{{ $errors->first('banner_url') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="order_column">Order</label>
                                <input type="number" class="form-control" placeholder="Enter order positioning"
                                    name="order_column" value="{{ $homepageBanner->order_column }}">
                                @if ($errors->has('order_column'))
                                    <div class="text-danger">{{ $errors->first('order_column') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="published_at" id="published_at" class="form-check-input"
                                        type="checkbox" {{ isset($homepageBanner->published_at) ? 'checked' : '' }}>
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
