@extends('default')
@section('content')
    <div class="login">
     <header>
	    <h1>登录</h1>
	 </header>
	 <div class="sr">
	    <form method="POST" action" {{ route('register') }}">
		{{ csrf_field() }}
		    <div class="name">
				<input type="text"  placeholder="这里输入登录名" class="name_inp">
			</div>
			 <div class="name">
				<input type="text"  placeholder="这里输入登录密码" class="name_inp">
			</div>
			<button type="submit" class="btn btn-primary">登录</button>
		</form>
	 </div>
  </div>

@stop