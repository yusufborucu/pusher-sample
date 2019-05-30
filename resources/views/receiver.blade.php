<!DOCTYPE html>
<html>
<head>
    <title>Pusher Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('6cb615521933d9f977fc', {
        cluster: 'eu',
        forceTLS: true
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('form-submitted', function(data) {
        var node = document.createElement('li');
        var textNode = document.createTextNode(JSON.stringify(data.text));
        node.appendChild(textNode);
        document.getElementById('messages').appendChild(node);
      });
    </script>
</head>
<body>
<h1>Mesajlar</h1>
<ul id="messages"></ul>
</body>
</html>