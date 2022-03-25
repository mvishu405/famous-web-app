<x-backend.backend-layout>

    <div class="container-fluid">
        <form action="{{ route('backend.teams.update', ['team' => $team->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Edit Team</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $team->name }}">
                                @if($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
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
                                @if($errors->has('image'))
                                    <div class="text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{ viewFile($team->image) }}" style="width: 50px; height: 50px;"/>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{ $team->designation }}">
                                @if($errors->has('designation'))
                                    <div class="text-danger">{{ $errors->first('designation') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control tmce" name="description" cols="30" rows="10">{{ $team->description }}</textarea>
                                @if($errors->has('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" class="form-control" name="link" value="{{ $team->link }}">
                                @if($errors->has('link'))
                                    <div class="text-danger">{{ $errors->first('link') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="order_column">Order</label>
                                <input type="number" class="form-control" placeholder="Enter order positioning" name="order_column" value="{{ $team->order_column }}">
                                @if($errors->has('order_column'))
                                    <div class="text-danger">{{ $errors->first('order_column') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input name="published_at" id="published_at" class="form-check-input" type="checkbox" {{ isset($team->published_at) ? 'checked' : '' }}>
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
