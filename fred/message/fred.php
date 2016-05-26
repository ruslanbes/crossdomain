<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Fred - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#message_to_eve {
  font-weight: bold;
}
</style>
</head>
<body>
<p>Hi, I'm Fred. I have a message to Eve.</p>
<p>This time I'm inside an iframe from Eve.</p>
<p>My message is: <span id="message_to_eve">Let's go for lunch!</span></p>
</body>
</html>
<script type="text/javascript">
$(window).on("message", function( event ){
  console.log("Fred: I got message from someone")
  event = event.originalEvent
  if (event.origin !== "https://eve.ruslanbes.com") return;
  console.log("Fred: It's from Eve, she asks me about a lunch")
  console.log("Fred: Sending message to Eve")
  parent.postMessage( $("#message_to_eve").text(), "https://eve.ruslanbes.com" );
})

</script>
