@extends('admin.layout.app')
@section('title', 'Edit Header Content')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <a class="btn btn-primary mb-3" href="{{ route('main-title') }}">Back</a>
                <form action="{{ route('main-titleUpdate', $HomeSection->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <h4 class="text-center my-4">Edit Satisfaction Guarantee</h4>
                                <div class="row mx-0 px-4">
                                    {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Text Content</label>
                                            <label>Main Title</label>
                                            <input type="text" placeholder="Enter Main Title" name="main_title"
                                            id="main_title" value="{{ old('main_title', $HomeSection->main_title) }}" class="form-control">
                                        @error('main_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div> --}}

                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Text Content</label>
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Enter Title" name="title"
                                            id="title" value="{{ old('title', $HomeSection->title) }}" class="form-control">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Background Colour</label>
                                            <select name="colour" id="colour" class="form-control">
                                                <option value="">Select Colour</option>
                                                <option value="bg-blue" {{ old('colour', $HomeSection->colour) == 'bg-blue' ? 'selected' : '' }}>Blue</option>
                                                <option value="bg-orange" {{ old('colour', $HomeSection->colour) == 'bg-orange' ? 'selected' : '' }}>Orange</option>
                                                <option value="bg-green" {{ old('colour', $HomeSection->colour) == 'bg-green' ? 'selected' : '' }}>Green</option>
                                            </select>
                                            @error('colour')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}


                                    <div class="col-sm-5 d-flex align-items-center">
                                        <!-- Input to Upload New Image -->
                                        <div class="flex-grow-1">
                                            <div class="form-group mb-2">
                                                <label>Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                                @error('image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Display Existing Image -->
                                        @if($HomeSection->image)
                                            <div class="ms-3">
                                                <img src="{{ asset($HomeSection->image) }}"
                                                     alt="image"
                                                     style="width: 80px; height: 80px; margin-left:20px;border: 1px solid #ddd;">
                                            </div>
                                        @endif
                                    </div>


                                    <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                        <div class="form-group mb-2">
                                            <label>Description <span class="text-danger">*</span></label>
                                            <textarea placeholder="Enter Description" name="description" id="description" class="form-control">{{ old('description', $HomeSection->description) }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
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
