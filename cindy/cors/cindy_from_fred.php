<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - CORS. Second try</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#freds_message {
  width:230px;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, It's Eve. </p>
<p>Alright, alright, it's Cindy</p>
<p>I know that Eve had somehow got the message from Fred, located on <a href="http://fred.ruslanbes.com/cors/fred.php">http://fred.ruslanbes.com/cors/fred.php</a>. I want to get it too</p>
<button type="button" name="get_freds_message" id="get_freds_message">Get Fred's message</button><br/>
<div class="bottom"><label for="freds_message">Fred:</label>
<input type="text" id="freds_message" placeholder="No message received"/></div>
</body>
</html>
<script type="text/javascript">
$("#get_freds_message").click(function() {
  $.get("http://fred.ruslanbes.com/cors/fred.php").done( function(data){
    $('#freds_message').val( $('#message_to_eve', data).text() )  
  }).fail( function(data) {
    $('#freds_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
