@extends('dashboard.admins.layouts.dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Top Rankers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Top Ranker Details</li>
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
                <a href="{{ route('dashboard.admins.topRanker.create') }}" class="btn btn-primary btn-lg"><i
                        class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body" style="background:white;">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sl. No.</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Percentage</th>
                        <th>Year</th>
                        <th>Show in site?</th>
                        <th>Photo</th>
                        <th style="width: 20%;">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($topRankers as $topRanker)
                        <tr>
                            <td style="text-align:left;">{{ $i }}</td>
                            <td style="text-align:left;">
                                {{ $topRanker->name }}
                            </td>
                            <td style="text-align:left;">
                                {{ $topRanker->class }}
                            </td>
                            <td style="text-align:left;">
                                {{ $topRanker->section }}
                            </td>
                            <td style="text-align:left;">
                                {{ $topRanker->percentage }}
                            </td>
                            <td style="text-align:left;">
                                {{ $topRanker->year }}
                            </td>

                            <td style="text-align:left;">
                                @if ($topRanker->display == 1)
                                    <span style="color: green;">Yes</span>
                                @else
                                    <span style="color: red;">No</span>
                                @endif
                            </td>

                            <td style="text-align:left;">
                                @if (!empty($topRanker->image))
                                    <img src="{{ $topRanker->photoUrl }}" id="photo_preview" width="200px"
                                        height="100px" />
                                @else
                                    <b>No Photo Uploaded</b>
                                @endif
                            </td>


                            <td style="width: 10%;">
                                {{-- <a href="{{ route('dashboard.admins.topRanker.show', $topRanker->id) }}"
                                    class="btn btn-xs btn-primary" title="View Top Ranker Details">
                                    <i class="fa fa-eye"> View</i>
                                </a> --}}

                                <a href="{{ route('dashboard.admins.topRanker.edit', $topRanker->id) }}"
                                    class="btn btn-xs btn-default" title="Edit Top Ranker Details">
                                    <i class="fa fa-edit"> Edit</i>
                                </a>

                                <form role="form" method="POST" style="float:right;"
                                    action="{{ route('dashboard.admins.topRanker.destroy', $topRanker) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" onclick="return confirm('Are You Sure you want to delete?')"
                                        class="btn btn-xs btn-danger" title="Delete Top Ranker">
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
