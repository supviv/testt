<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>
<body>
	@if($session_id)
				
		<div class="col-md-12" id="admin_msg">
			@foreach($message_list as $mssg)
				@if($mssg->admin === 1)
					<div class="chat admin">
						<p class="chat-bubble"> {{$mssg->message}}</p>
					</div>
				@else
					<div class="chat guest">
						<p class="chat-bubble"> {{$mssg->message}}</p>
					</div>
				@endif
			@endforeach
		</div>	
	@endif
</body>
</html>