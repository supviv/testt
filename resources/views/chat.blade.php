<!doctype html>

    <head>
    </head>
    <body>
    <p> Ziņas: </p>

    <div style="
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0; 
"> 
    <p> </p>	

    </div>
    <br>

    <form action =""  method="post" enctype="multipart/form-data">
    	{{ csrf_field() }}
    	<input type="string" name="message" id="message_id">
    	<input type= "submit" value="Sūtīt" name=submit>

    </body>
</html>
