@extends('default')
@section('content')
    <h1>REGISTER</h1>
    <form id="RegisterForm" type="hidden" name="register_type">
        <div class="col-md-5">
            <input id="mobile" type="mobile" class="form-control" name="mobile" value="" placeholder="please input mobile number..." required autofocus>
            <label id="mobile-send-code-error" class="error hide"></label>
        </div>
    </form>
@stop