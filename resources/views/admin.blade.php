<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<meta http-equiv="refresh" content="15">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="/css/admin.css">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<!--<script>
		
		var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET', '/admin/{session_id}/json');

		ourRequest.onload = function() {
			
			var ourData = JSON.parse(ourRequest.responseText);
			console.log(ourData[0]);
		};

		ourRequest.send();
	
	</script> -->

	
</head>
<body>
<div id="background">
	<div class="sidebar_menu">
		<i class="fa fa-times"></i>
		<ul class="navigation_section">
			<li class="navigation_item" id="profile">
				
				@foreach($session_list as $row)
					
				<li class="navigation_item">
					<a class="@if($session_id == $row->session_id ) active @endif" href="/admin/{{$row->session_id}}">
					{{ $row->session_id }} </a>
				</li>
				
				@endforeach	
		</ul>

	</div>

	<!-- End of sidebar -->

	<div class="main">
		<div class="chat-body">
			<div class="chat-log" id="chat-log">
				@if($session_id)
				
				<div class="col-md-12" id="admin_msg">
					@foreach($message_list as $mssg)
						@if($mssg->admin === 1)
							<p><b>Admin:</b> {{$mssg->message}}</p>
						@else
							<p><b>Guest:</b> {{$mssg->message}}</p>
						@endif
					@endforeach
				</div>
					@else 
					<center>
						<h1 class="boxed_item">Chat box</h1>
					</center>	
				@endif
			</div>
		</div>
			
			<div class="chat-composer">
				
					
				</div>
				
				@if($session_id)
				<form method="post" action="" >
					{{ csrf_field() }}
					<div class="chat-style">
						<input type="text" name="message" id="message" placeholder="">
						<button type="submit" name="submit" class="btn btn-ye">SEND</button>
					</div>
				</form>
				@endif
				
			</div>
		
	</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>