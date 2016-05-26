<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - Proxy</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#douglass_message {
  width:230px;
}
</style>
</head>
<body>
<p>Hi, I'm Cindy. I want to get a message from Douglas.</p>
I will try to get the message from <a href="https://douglas.ruslanbes.com/cors/douglas.php">https://douglas.ruslanbes.com/cors/douglas.php</a> but this time I will use a proxy https://cindy.ruslanbes.com/proxy/proxytodouglas.php</p>
<button type="button" name="get_douglass_message" id="get_douglass_message">Get Douglas's message</button><br/>
<label for="douglass_message">Douglas:</label>
<input type="text" id="douglass_message" placeholder="No message received"/><br/>
</body>
</html>
<script type="text/javascript">
$("#get_douglass_message").click(function() {
  $.get("https://cindy.ruslanbes.com/proxy/proxytodouglas.php?url="+ encodeURI("https://douglas.ruslanbes.com/cors/douglas.php")).done( function(data){
    $('#douglass_message').val( $('#message_to_cindy', data).text() )  
  }).fail( function(data) {
    $('#douglass_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
