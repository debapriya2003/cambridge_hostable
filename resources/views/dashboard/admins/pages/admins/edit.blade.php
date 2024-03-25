@extends('dashboard.admins.layouts.dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Admin</li>
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
        <form role="form" method="POST" id="update-admin-form" action="{{ route('dashboard.admins.admin.update', $admin) }}"
            style="width: 50%;">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="row">
                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="name" class="custom-label">Name</label>
                            <input type="text" class="form-control" value="{{ $admin->name}}" placeholder="" id="name"
                                name="name" required>
                            @if ($errors->has('name'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="email" class="custom-label">Email</label>
                            <input type="text" class="form-control" value="{{ $admin->email}}" placeholder="" id="email"
                                name="email" required>
                            @if ($errors->has('email'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="password" class="custom-label">Password</label>
                            <input type="text" class="form-control" value="" placeholder="" id="password"
                                name="password">
                            @if ($errors->has('password'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="password_confirmation" class="custom-label">Confirm Password</label>
                            <input type="password" class="form-control" value="" placeholder=""
                                id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation') <span class="error text-danger">{{ $message }}</span>
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
    $('#datetime_picker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d/m/Y',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.1970', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
</script>
@endsection