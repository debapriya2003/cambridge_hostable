@extends('dashboard.admins.layouts.dashboard')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Admin</li>
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
        <form role="form" method="POST" id="add-event-form" action="{{ route('dashboard.admins.admin.store') }}"
            style="width: 50%;">
            {{ csrf_field() }}
            <div class="row">
                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="name" class="custom-label">Name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" placeholder="" id="name" name="name"
                                required>
                            @error('name') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="email" class="custom-label">Email</label>
                            <input type="text" class="form-control" value="{{old('email')}}" placeholder="" id="email" name="email"
                                required>
                            @error('email') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="password" class="custom-label">Password</label>
                            <input type="password" class="form-control" value="{{old('password')}}" placeholder="" id="password"
                                name="password" required>
                            @error('password') <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-group">
                            <label for="password_confirmation" class="custom-label">Confirm Password</label>
                            <input type="password" class="form-control" value="" placeholder="" id="password_confirmation"
                                name="password_confirmation" required>
                            @error('password_confirmation') <span class="error text-danger">{{ $message }}</span>
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