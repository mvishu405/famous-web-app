<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.blogs.update', ['blog' => $blog->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Edit Blog</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
                                @if ($errors->has('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Featured Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="featured_image">
                                    <label class="custom-file-label" for="featured_image">Choose file</label>
                                </div>
                                @if ($errors->has('featured_image'))
                                    <div class="text-danger">{{ $errors->first('featured_image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($blog->featured_image) }}" style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Cover Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="cover_image">
                                    <label class="custom-file-label" for="cover_image">Choose file</label>
                                </div>
                                @if ($errors->has('cover_image'))
                                    <div class="text-danger">{{ $errors->first('cover_image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($blog->cover_image) }}" style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Blog Date</label>
                                <input type="date" class="form-control" name="blog_date"
                                    value="{{ $blog->blog_date }}">
                                @if ($errors->has('blog_date'))
                                    <div class="text-danger">{{ $errors->first('blog_date') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Read Time</label>
                                <input type="text" class="form-control" name="read_time"
                                    value="{{ $blog->read_time }}">
                                @if ($errors->has('read_time'))
                                    <div class="text-danger">{{ $errors->first('read_time') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" class="form-control" name="meta_title"
                                    value="{{ $blog->meta_title }}">
                                @if ($errors->has('meta_title'))
                                    <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input type="text" class="form-control" name="meta_keywords"
                                    value="{{ $blog->meta_keywords }}">
                                @if ($errors->has('meta_keywords'))
                                    <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="meta_image">
                                    <label class="custom-file-label" for="meta_image">Choose file</label>
                                </div>
                                @if ($errors->has('meta_image'))
                                    <div class="text-danger">{{ $errors->first('meta_image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($blog->meta_image) }}" style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control tmce" name="meta_description" cols="30"
                                    rows="10">{{ $blog->meta_description }}</textarea>
                                @if ($errors->has('meta_description'))
                                    <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Title</label>
                                <input type="text" class="form-control" name="og_title"
                                    value="{{ $blog->og_title }}">
                                @if ($errors->has('og_title'))
                                    <div class="text-danger">{{ $errors->first('og_title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Type</label>
                                <input type="text" class="form-control" name="og_type"
                                    value="{{ $blog->og_type }}">
                                @if ($errors->has('og_type'))
                                    <div class="text-danger">{{ $errors->first('og_type') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Url</label>
                                <input type="text" class="form-control" name="og_url" value="{{ $blog->og_url }}">
                                @if ($errors->has('og_url'))
                                    <div class="text-danger">{{ $errors->first('og_url') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Site Name</label>
                                <input type="text" class="form-control" name="og_site_name"
                                    value="{{ $blog->og_site_name }}">
                                @if ($errors->has('og_site_name'))
                                    <div class="text-danger">{{ $errors->first('og_site_name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="og_image">
                                    <label class="custom-file-label" for="og_image">Choose file</label>
                                </div>
                                @if ($errors->has('og_image'))
                                    <div class="text-danger">{{ $errors->first('og_image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($blog->og_image) }}" style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Og Description</label>
                                <textarea class="form-control tmce" name="og_description" cols="30"
                                    rows="10">{{ $blog->og_description }}</textarea>
                                @if ($errors->has('og_description'))
                                    <div class="text-danger">{{ $errors->first('og_description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Twitter Title</label>
                                <input type="text" class="form-control" name="twitter_title"
                                    value="{{ $blog->twitter_title }}">
                                @if ($errors->has('twitter_title'))
                                    <div class="text-danger">{{ $errors->first('twitter_title') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Twitter Card</label>
                                <input type="text" class="form-control" name="twitter_card"
                                    value="{{ $blog->twitter_card }}">
                                @if ($errors->has('twitter_card'))
                                    <div class="text-danger">{{ $errors->first('twitter_card') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Twitter Site</label>
                                <input type="text" class="form-control" name="twitter_site"
                                    value="{{ $blog->twitter_site }}">
                                @if ($errors->has('twitter_site'))
                                    <div class="text-danger">{{ $errors->first('twitter_site') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Twitter Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="twitter_image">
                                    <label class="custom-file-label" for="twitter_image">Choose file</label>
                                </div>
                                @if ($errors->has('twitter_image'))
                                    <div class="text-danger">{{ $errors->first('twitter_image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($blog->twitter_image) }}" style="width: 50px; height: 50px;" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Twitter Description</label>
                                <textarea class="form-control tmce" name="twitter_description" cols="30"
                                    rows="10">{{ $blog->twitter_description }}</textarea>
                                @if ($errors->has('twitter_description'))
                                    <div class="text-danger">{{ $errors->first('twitter_description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="order_column">Order</label>
                                <input type="number" class="form-control" placeholder="Enter order positioning"
                                    name="order_column" value="{{ $blog->order_column }}">
                                @if ($errors->has('order_column'))
                                    <div class="text-danger">{{ $errors->first('order_column') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="published_at" id="published_at" class="form-check-input"
                                        type="checkbox" {{ isset($blog->published_at) ? 'checked' : '' }}>
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
