<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Douglas - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">

<style type="text/css">
#message_to_cindy {
  font-weight: bold;
}
</style>
</head>
<body>
<p>Hi, I'm Douglas. I have a message to Cindy.</p>
<p>This time I'm inside an iframe from Cindy.</p>
<p>My message is: <span id="message_to_cindy">Let's go for lunch!</span></p>
</body>
</html>
<script type="text/javascript">
$( window ).on("message", function( event ){
  console.log("Douglas: I got message from someone")
  event = event.originalEvent
  if (event.origin !== "http://cindy.ruslanbes.com") return;
  console.log("Douglas: It's from Cindy, she says: " + event.data)
  console.log("Douglas: Attaching message handler to port from Cindy")
  var portToCindy = event.ports[0];
  portToCindy.onmessage = function( event ) {
        console.log("Douglas: Cindy says through the port: " + event.data)
        console.log("Douglas: Sending message to Cindy through the port")
        this.postMessage( $( "#message_to_cindy" ).text() )        
  }
  portToCindy.postMessage("Hi, Cindy. Channel established")
})
</script>