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
<script>
window.addEventListener("hashchange", getMessageFromCindy, false)
function getMessageFromCindy() {
  var hash = window.location.hash.replace(/^#/,'')
  console.log("Cindy says:" + hash)
  parent.location = "http://cindy.ruslanbes.com/fragment/cindy.php" + "#" + $("#message_to_cindy").text()
}
</script>