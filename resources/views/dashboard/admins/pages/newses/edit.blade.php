@extends('dashboard.admins.layouts.dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit News</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit News</li>
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
        <form role="form" method="POST" id="update-news-form" action="{{ route('dashboard.admins.news.update', $news) }}"
            style="width: 50%;" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="row">
                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="title" class="custom-label">Title</label>
                            <input type="text" class="form-control" value="{{ $news->title}}" placeholder="" id="title"
                                name="title" required>
                            @error('title') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="description" class="custom-label">Description</label>

                            <textarea name="description" id="description" cols="60"
                                rows="10">{{$news->description}}</textarea>

                            @error('description') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="is_publish" class="custom-label">Publish Status</label>
                            <select name="is_published" id="is_published">
                                <option value="">Select Status</option>
                                <option value="1" @if ($news->is_published == 1)
                                    selected
                                    @endif>Publish</option>
                                <option value="0" @if ($news->is_published == 0)
                                    selected
                                    @endif>Draft</option>
                            </select>
                            @error('is_published') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="photo" class="custom-label">Photo</label>
                            <input type="file" class="form-control" value="{{$news->image}}" placeholder="" id="photo"
                                name="photo">
                            <img src="{{$news->photoUrl}}" id="photo_preview" width="200px" />
                            @error('photo') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="pdf" class="custom-label">Pdf</label>
                            <input type="file" class="form-control" value="{{$news->pdf}}" placeholder="" id="pdf"
                                name="pdf">

                            @if ($news->pdf != NULL)
                                <a href="{{$news->pdfUrl}}" target="__blank">View Existing Pdf</a>
                            @else
                                <b>No Pdf Uploaded</b>
                            @endif
                            @error('pdf') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="row" style="width: 100%">
                    <div class="" style="margin: auto;">
                        <button type="submit" class="btn btn-success" id="" style="width: 100px;">
                            Update
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