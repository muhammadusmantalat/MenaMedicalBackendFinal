@extends('admin.layout.app')
@section('title', 'Edit Header Content')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <a class="btn btn-primary mb-3" href="{{ route('headerContentOne') }}">Back</a>
                <form action="{{ route('headerContentOneUpdate', $headerContent->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <h4 class="text-center my-4">Edit Header Content One</h4>
                                <div class="row mx-0 px-4">
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Text Content <span class="text-danger">*</span></label>
                                            <input type="text" name="text"
                                                value="{{ old('text', $headerContent->text) }}" class="form-control">
                                            @error('text')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>URL <span class="text-danger">*</span></label>
                                            <input type="url" name="url"
                                                value="{{ old('url', $headerContent->url) }}" class="form-control">
                                            @error('url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <div class="form-group mb-2">
                                                <label>Icon <span class="text-danger">*</span></label>
                                                <input type="file" name="icon" id="icon" value="{{ old('url', $headerContent->icon) }}" class="form-control">
                                                @error('icon')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            @if($headerContent->icon)
                                            <div class="ms-3">
                                                <img src="{{ asset($headerContent->icon) }}"
                                                     alt="image"
                                                     style="width: 100px; height: auto; margin-top:20px; border: 1px solid #ddd;">
                                            </div>
                                        @endif

                                            @error('icon')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="0" {{ $headerContent->status == 0 ? 'selected' : '' }}>
                                                    Activate</option>
                                                <option value="1" {{ $headerContent->status == 1 ? 'selected' : '' }}>
                                                    Deactivate</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection
