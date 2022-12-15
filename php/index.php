<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <style></style>
</head>
<body>
<div id="app">0</div>

<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.4/socket.io.min.js"></script>
<script>

    const socket = io('http://localhost:3000',
        {
            secure: true,
            transports: ['websocket', 'polling']
        });

    socket.on('new', function (msg) {
        console.log(msg)
        $('#app').html(msg.message)
    });
</script>
</body>
</html>