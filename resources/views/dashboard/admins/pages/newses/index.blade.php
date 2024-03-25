@extends('dashboard.admins.layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">News</h1>
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

<!-- Main content -->
<div class="content">
    <div class="row container">
        <div class="card">
            <a href="{{route('dashboard.admins.news.create')}}" class="btn btn-primary btn-lg"><i
                    class="fa fa-plus"></i> Add New</a>
        </div>
    </div>
    <div class="card-body" style="background:white;">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Publish Status</th>
                    <th>Photo</th>
                    <th>Pdf</th>
                    <th style="width: 20%;">Action</th>
                </tr>

            </thead>

            <tbody>
                <?php $i = 1; ?>
                @foreach ($newses as $news)

                <tr>
                    <td style="text-align:left;">{{ $i}}</td>
                    <td style="text-align:left;">
                        {{ $news->title}}
                    </td>
                    <td style="text-align:left;">
                        {{ \Illuminate\Support\Str::limit($news->description , 150) }}
                        {{-- {{ $news->description}} --}}
                    </td>
                    <td style="text-align:left;">
                        @if ($news->is_published == 1)
                        <span style="color: green;">Published</span>
                        @else
                        <span style="color: red;">Draft</span>
                        @endif
                    </td>

                    <td style="text-align:left;">
                        @if (!empty($news->image))
                        <img src="{{$news->photoUrl}}" id="photo_preview" width="200px" height="100px" />

                        @else
                        <b>No Photo Uploaded</b>
                        @endif
                    </td>
                    <td style="text-align:left;">
                        @if (!empty($news->pdf))
                        <a href="{{$news->pdfUrl}}" target="__blank">View Uploaded Pdf</a>
                        @else
                        <b>No Pdf Uploaded</b>
                        @endif
                    </td>

                    <td style="width: 10%;">

                        <a href="{{ route('dashboard.admins.news.show', $news->id) }}"
                            class="btn btn-xs btn-primary" title="View news Details">
                            <i class="fa fa-eye"> View</i>
                        </a>

                        <a href="{{ route('dashboard.admins.news.edit', $news->id) }}"
                            class="btn btn-xs btn-default" title="Edit news Details">
                            <i class="fa fa-edit"> Edit</i>
                        </a>

                        <form role="form" method="POST" style="float:right;"
                            action="{{ route('dashboard.admins.news.destroy', $news) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" onclick="return confirm('Are You Sure you want to delete?')"
                                class="btn btn-xs btn-danger" title="Delete news">
                                <i class="fa fa-trash"> Delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $i = $i + 1; ?>
                @endforeach
            </tbody>


        </table>

    </div>
</div>
@endsection