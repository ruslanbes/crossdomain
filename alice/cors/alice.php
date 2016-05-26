<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alice - CORS</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#bobs_message {
  width:230px;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Alice. I want to get a message from Bob. </p>
<p>Bob and I are on the same domain <strong>alice</strong>.ruslanbes.com, so I can do a simple ajax request to the URL <a href="https://alice.ruslanbes.com/cors/bob.php">https://alice.ruslanbes.com/cors/bob.php</a> and parse the response.</p>
<button type="button" name="get_bobs_message" id="get_bobs_message">Get Bob's message</button><br/>
<div class="bottom"><label for="bobs_message">Bob:</label>
<input type="text" id="bobs_message" placeholder="No message received"/></div>
</body>
</html>
<script type="text/javascript">
$("#get_bobs_message").click(function() {
  $.get("https://alice.ruslanbes.com/cors/bob.php").done( function(data){
    $('#bobs_message').val( $('#message_to_alice', data).text() )  
  })
})
</script>
