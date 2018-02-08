<!doctype html>

    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="/css/admin.css">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <script>
        

        $(document).ready(function(){
            setInterval(function(){
               
                var url = "<?php  echo '/ok' ?>"
               
                
                $('#chat_msg').load(url)
            
            }, 100);
        });

     </script>
    

    </head>

    <p> Ziņas: </p>

    <div style="
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0; 
">
<div id="chat_msg">
    
</div>
         
    </div>
    <br>

    <form action =""  method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<input type="string" name="message" id="message_id">
    	<input type= "submit" value="Sūtīt" name=submit>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    

    </body>
</html>
