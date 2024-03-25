@extends('dashboard.admins.layouts.dashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Contact</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact Details</li>
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

    <div class="card-body" style="background:white;">
        <table id="datatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Class</th>
                    <th>Course</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                    <th style="width: 10%;">Action</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($contacts as $key => $contact)

                <tr>
                    <td style="text-align:left;">{{ $key + 1}}</td>
                    <td style="text-align:left;">
                        {{ $contact->class}}
                    </td>
                    <td style="text-align:left;">
                        {{ $contact->course}}
                    </td>
                    <td style="text-align:left;">
                        {{ $contact->name}}
                    </td>
                    <td style="text-align:left;">
                        {{ $contact->email }}
                    </td>
                    <td style="text-align:left;">
                        {{ $contact->phone }}
                    </td>
                    <td>
                        {{ $contact->message }}
                    </td>

                    <td>
                        {{ $contact->created_at->format('d/m/y, H:m:s') }}
                    </td>

                    <td style="width: 10%;">
                        <form role="form" method="POST" style="float:right;"
                            action="{{ route('dashboard.admins.contact.destroy', $contact) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" onclick="return confirm('Are You Sure you want to delete?')"
                                class="btn btn-xs btn-danger" title="Delete contact">
                                <i class="fa fa-trash"> Delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>
@endsection