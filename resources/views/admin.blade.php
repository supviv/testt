<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="/css/admin.css">

	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			

			<div class="open-chats">
				<h1>Incoming messages</h1>
				@foreach($session_list as $row)
					
					<a class="btn btn-block btn-primary @if($session_id == $row->session_id ) active @endif" href="/admin/{{$row->session_id}}">{{ $row->session_id }}</a>
				@endforeach
			</div>
		</div>

		<div class="col-md-6" >
			<div class="chat-log">
				<h1>Chat</h1>
			</div>
			<div class="chat-composer">
				@if($session_id)
				<form method="post" action="" >
					{{ csrf_field() }}
				<input type="text" name="message" placeholder="Start typing your message.. ">
				<input type="submit" name="submit" value="submit" class="btn btn-primary">
				</form>
				@endif
			</div>

		</div>
	</div>
</div>
<script src="{{ ('js/app.js') }}"></script>	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>