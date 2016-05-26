<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alice - JSONP</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#bobs_message {
  width:230px;
  height:80px;
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Alice. I want to get a message from Bob. </p>
This time Bob has written his message in JSON and left it on my domain: <a href="https://alice.ruslanbes.com/jsonp/bob.php">https://alice.ruslanbes.com/jsonp/bob.php</a>. Let's get it!</p>
<button type="button" name="get_bobs_message" id="get_bobs_message">Get Bob's message</button><br/>
<div class="bottom">
  <label for="bobs_message">Bob:</label><br/>
  <textarea id="bobs_message" placeholder="No message received"></textarea>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_bobs_message").click(function() {
  $.getJSON("https://alice.ruslanbes.com/jsonp/bob.php").done( function(data){
    $('#bobs_message').val( data.message_to_alice )  
  }).fail( function(data) {
    $('#bobs_message').val( "<Failed:Cross-domain request>" )  
  })
})
</script>
