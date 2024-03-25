<div class="container">
    @if (session('success-message'))
    <div class="alert alert-success alert-dismissible" id="action_message_div">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{-- <h5><i class="icon fas fa-check"></i> Alert!</h5> --}}
        {{session('success-message')}}
    </div>
    @elseif(session('danger-message'))
    <div class="alert alert-danger alert-dismissible" id="action_message_div">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{-- <h5><i class="icon fas fa-ban"></i> Alert!</h5> --}}
        {{session('danger-message')}}
    </div>
    @elseif(session('info-message'))
    <div class="alert alert-info alert-dismissible" id="action_message_div">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{-- <h5><i class="icon fas fa-info"></i> Alert!</h5> --}}
        {{session('info-message')}}
    </div>
    @endif
</div>