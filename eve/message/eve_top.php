<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Eve - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#freds_message {
  width:230px;
}
#freds_iframe {
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
<p>Hi, I'm Eve. I want to get a message from Fred. </p>
We use iframe for our communication too, and Fred is on <a href="https://fred.ruslanbes.com/message/fred_top.php">https://fred.ruslanbes.com/message/fred_top.php</a>. Hovewer we use top.postMessage() for communication.</p>
<button type="button" name="get_freds_message" id="get_freds_message">Get Fred's message</button><br/>
<div class="bottom">
  <label for="freds_message">Fred:</label><br/>
  <input type="text" id="freds_message" placeholder="No message received" /><br/>
  <iframe src="https://fred.ruslanbes.com/message/fred_top.php" id="freds_iframe"></iframe>
</div>
</body>
</html>
<script type="text/javascript">
$(top).on("message", function( event ){
  console.log("Eve: I got message from someone")
  event = event.originalEvent
  if (event.origin !== "https://fred.ruslanbes.com") return;
  console.log("Eve: It's from Fred!")
  $("#freds_message").val(event.data)
})

$("#get_freds_message").click(function() {
  console.log("Eve: Sending message to Fred")
  top.postMessage("How about a lunch?", 'https://fred.ruslanbes.com')
})
</script>
