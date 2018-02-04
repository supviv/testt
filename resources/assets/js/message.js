
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', '/admin-messages/{session_id}');

ourRequest.onload = function() {

	console.log(ourRequest.responseText);
};

ourRequest.send();
