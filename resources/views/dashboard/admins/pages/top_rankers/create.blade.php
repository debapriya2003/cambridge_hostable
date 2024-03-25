@extends('dashboard.admins.layouts.dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Top Ranker</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Top Ranker</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<hr style="margin-top: 0px;">

@include('dashboard.admins.includes.action_messages')

<div class="content">
    <div class="card-body" style="background:white;">
        <form role="form" method="POST" id="add-top-ranker-form" action="{{ route('dashboard.admins.topRanker.store') }}"
            style="width: 50%;" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="name" class="custom-label">Name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" placeholder="" id="name"
                                name="name" required>
                            @error('name') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="class" class="custom-label">Class</label>
                            <input type="text" class="form-control" value="{{old('class')}}" placeholder="" id="class"
                                name="class" required>
                            @error('class') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="section" class="custom-label">Section</label>
                            <input type="text" class="form-control" value="{{old('section')}}" placeholder="" id="section"
                                name="section" required>
                            @error('section') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="percentage" class="custom-label">Percentage</label>
                            <input type="text" class="form-control" value="{{old('percentage')}}" placeholder="" id="percentage"
                                name="percentage" required>
                            @error('percentage') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="year" class="custom-label">Year</label>
                            <input type="text" class="form-control" value="{{old('year')}}" placeholder="" id="year"
                                name="year" required>
                            @error('year') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="display" class="custom-label">Show in site</label>
                            <select name="display" id="display">
                                <option value="">Display?</option>
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                            </select>
                            @error('display') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="photo" class="custom-label">Photo</label>
                            <input type="file" class="form-control" value="{{old('photo')}}" placeholder="" id="photo"
                                name="photo">
                            <img src="#" id="photo_preview" width="200px" />
                            @error('photo') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="" style="margin: auto;">
                        <button type="submit" class="btn btn-success" id="save_payment_button" style="width: 100px;">
                            Save
                        </button>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>
@endsection

@section('script')

<script>
     // load image preview
     $("#photo").change(function(){
        bannerPreview( this );
    });
    function bannerPreview( uploader ) {
        if ( uploader.files && uploader.files[0] ){
          $('#photo_preview').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
        }
    }
</script>

@endsection