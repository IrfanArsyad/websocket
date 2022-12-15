<!DOCTYPE html>
<html>
<head>
    <title>Index 2</title>
    <style></style>
</head>
<body>
<div id="app">0</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.4/socket.io.js"
        integrity="sha512-YeeA/Qxn5hYdkukScTCNNOhTrv1C2RubAGButJ1rmgQwZf/HdRaCGl+JAVkqsqaNRaYNHdheiuKKuPf9mDcqKg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="assets/js/jquery.min.js"></script>-->
<!--  <script src="assets/js/socket.io.min.js"></script>-->
<script>
    const socket = io();

    socket.on('new', (data) => {
        console.log(data)
        // $('#app').html(data)
    })
</script>
</body>
</html>