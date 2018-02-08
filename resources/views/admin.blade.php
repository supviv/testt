<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="/css/admin.css">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

     <script>
     	

     	$(document).ready(function(){
     		setInterval(function(){
     			var session = "<?php echo $session_id; ?>";
     			var url = "<?php echo '../admin/' ?>"
     			var url1 = "<?php echo '/messages' ?>"
     			
     			$('#admin_msg').load(url + session + url1)
     		
     		}, 100);
     	});


     	function boxfocus() {
     		document.getElementById("message").focus();
     	}

     </script>
	
</head>
<body onload="boxfocus();">
<div id="background">
	<div class="sidebar_menu" id="sidebar_menu">
			<ul class="navigation_section">
				<li class="navigation_item" id="profile">
					
					@foreach($session_list as $row)
						
					<li class="navigation_item">
						<a data-target="data" @if($session_id == $row->session_id ) class="active" @endif"
						href="/admin/{{$row->session_id}}"> New chat</a>
					</li>
					
					@endforeach	
			</ul>
		<center>
			<a href="{{url('admin')}}"><h1 class="boxed_item boxed_item_smaller">BACK</h1></a>
		</center>
	</div>
	

	<!-- End of sidebar -->

	<div class="main">
		<div class="chat-body" id="chat-body">
			@if(!$session_id)
				<center>
					<h1 class="boxed_item">Chat box</h1>
				</center>	
			@endif
			<div class="gen" id="gen">
				<div class="col-md-12" id="admin_msg"></div>
			</div>	
		</div>
			
			<div class="chat-composer"></div> <!-- If deleted the send box moves up -->
				
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