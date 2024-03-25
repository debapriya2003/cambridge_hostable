@extends('dashboard.admins.layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admins</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Admins Details</li>
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
            <a href="{{route('dashboard.admins.admin.create')}}" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Add New</a>
        </div>
    </div>
    <div class="card-body" style="background:white;">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th style="width: 14%;">Action</th>
                </tr>

            </thead>

            <tbody>
                <?php $i = 1; ?>
                @foreach ($admins as $admin)

                <tr>
                    <td style="text-align:left;">{{ $i}}</td>
                    <td style="text-align:left;">
                        {{ $admin->name}}
                    </td>
                    <td style="text-align:left;">
                        {{ $admin->email}}
                    </td>
                    <td style="text-align:left;">{{ $admin->mobile}}</td>


                    <td style="width: 10%;">

                        <a href="{{ route('dashboard.admins.admin.edit', $admin->id) }}" class="btn btn-xs btn-default"
                            title="Edit Admin Details">
                            <i class="fa fa-edit"> Edit</i>
                        </a>

                        <form role="form" method="POST" style="float:right;"
                            action="{{ route('dashboard.admins.admin.destroy', $admin) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" onclick="return confirm('Are You Sure you want to delete?')"
                                class="btn btn-xs btn-danger" title="Delete admin">
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