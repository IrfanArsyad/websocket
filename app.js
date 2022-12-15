const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

app.get('/', (req, res) => {
  res.send('Hello Socket.io')
});

io.on('connection', (socket) => {

  socket.on('newuser', (data) => {
      console.log(data)
      io.emit('new', data)
      // socket.send('user', data)
  })

});

server.listen(3000, () => {
  console.log('listening on *:3000');
});