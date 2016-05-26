<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eve - CORS</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#freds_message {
  width:230px;
}
.code {
  font-family: monospace;
  background-color: #E0E0E0;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Eve. I want to get a message from Fred.</p>
<p>I'm sitting on the domain <strong>eve</strong>.ruslanbes.com and Fred is on the domain <strong>fred</strong>.ruslanbes.com. I will do the same what Cindy did and get the message from <a href="https://fred.ruslanbes.com/cors/fred.php">https://fred.ruslanbes.com/cors/fred.php</a>, but Fred have set <span class="code">Access-Control-Allow-Origin</span> header for me</p>
<button type="button" name="get_freds_message" id="get_freds_message">Get Fred's message</button><br/>
<div class="bottom"><label for="freds_message">Fred:</label>
<input type="text" id="freds_message" placeholder="No message received"/></div>
</body>
</html>
<script type="text/javascript">
$("#get_freds_message").click(function() {
  $.get("https://fred.ruslanbes.com/cors/fred.php").done( function(data){
    $('#freds_message').val( $('#message_to_eve', data).text() )  
  }).fail( function(data) {
    $('#freds_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
