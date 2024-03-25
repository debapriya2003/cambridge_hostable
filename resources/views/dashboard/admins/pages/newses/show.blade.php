@extends('dashboard.admins.layouts.dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">News Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">News Details</li>
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

        <div class="row">

            <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-group">
                        <label for="title" class="custom-label">Title</label>
                        <p>
                            {{$news->title}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-group">
                        <label for="description" class="custom-label">Description</label>
                        <p>
                            {{$news->description}}
                        </p>

                    </div>
                </div>
            </div>

            <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-group">
                        <label for="points" class="custom-label">Publish Status</label>
                        @if ($news->is_published == 1)
                        <span style="color: green;">Published</span>
                        @else
                        <span style="color: red;">Draft</span>
                        @endif

                    </div>
                </div>
            </div>

            <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-group">
                        <label for="photo" class="custom-label">Photo</label>

                        @if (!empty($news->image))
                        <img src="{{$news->photoUrl}}" id="photo_preview" width="400px" />

                        @else
                        <b>No Photo Uploaded</b>
                        @endif

                    </div>
                </div>
            </div>

            <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-group">
                        <label for="pdf" class="custom-label">Pdf</label>

                        @if (!empty($news->pdf))
                        <a href="{{$news->pdfUrl}}" target="__blank">View Uploaded Pdf</a>
                        @else
                        <b>No Pdf Uploaded</b>
                        @endif

                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
@endsection