<!DOCTYPE html> <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cindy - Message</title>
<link rel="stylesheet" href="">
<script src="//ruslanbes.com/crossdomain/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//ruslanbes.com/crossdomain/bootstrap-3.2.0-dist/css/bootstrap.min.css">
<style type="text/css">
#douglass_message {
  width:230px;
}
#douglass_iframe {
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
<p>Hi, I'm Cindy. I want to get a message from Douglas. </p>
<p>We use iframe for our communication and MessageChannel to deliver a message. <a href="https://cindy.ruslanbes.com/messagechannel/cindy.php">Open me</a> in IE 10+, Chrome or Safari. Let's get the message!</p>
<button type="button" name="get_douglass_message" id="get_douglass_message">Establish channel with Douglas</button><br/>
<div class="bottom">
  <label for="douglass_message">Douglas:</label><br/>
  <input type="text" id="douglass_message" placeholder="No message received" /><br/>
  <iframe src="https://douglas.ruslanbes.com/messagechannel/douglas.php" id="douglass_iframe"></iframe>
</div>
</body>
</html>
<script type="text/javascript">

$("#get_douglass_message").click(function() {
  if (window.MessageChannel) {
    if (typeof window.myMessageChannel == 'undefined') {
      console.log("Cindy: Establishing channel with Douglas")
      window.myMessageChannel = new MessageChannel();
      window.myMessageChannel.port1.onmessage = function( event ) {
        console.log("Cindy: I got message from Douglas through the port")
        $("#douglass_message").val(event.data)    
      }
      var w = $("#douglass_iframe").get(0).contentWindow
      w.postMessage("Hi Douglas", 'https://douglas.ruslanbes.com', [window.myMessageChannel.port2])    
      $( '#get_douglass_message' ).text( "Say 'Hi again' to Douglas" )
    } else {
      console.log("Cindy: Sending message through the port")
      window.myMessageChannel.port1.postMessage("Hi again")
    }
    
  } else {
    $("#douglass_message").val("<Failed: MessageChannel unsupported>")
  }
})
</script>
