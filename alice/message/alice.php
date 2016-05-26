<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alice - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#bobs_message {
  width:230px;
}
#bobs_iframe {
  width:230px;
  height:160px;  
}
.bottom {
  position:absolute;
  bottom:0;
}
</style>
</head>
<body>
<p>Hi, I'm Alice. I want to get a message from Bob. </p>
<p>This time we use iframe for our communication: <a href="https://alice.ruslanbes.com/message/bob.php">https://alice.ruslanbes.com/message/bob.php</a>. Let's get the message!</p>
<button type="button" name="get_bobs_message" id="get_bobs_message">Get Bob's message</button><br/>
<div class="bottom">
  <label for="bobs_message">Bob:</label><br/>
  <input type="text" id="bobs_message" placeholder="No message received"/><br/>
  <iframe src="https://alice.ruslanbes.com/message/bob.php" id="bobs_iframe"></iframe>
</div>
</body>
</html>
<script type="text/javascript">
$("#get_bobs_message").click(function() {
  var message_to_alice = $("#message_to_alice", $("#bobs_iframe").contents()).text()
  if (message_to_alice != '') {
    $("#bobs_message").val(message_to_alice)
  } else {
    $("#bobs_message").val("<Failed:Cross-domain request>")
  }
})
</script>
