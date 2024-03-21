const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Parse incoming request bodies in JSON format
app.use(bodyParser.json());

// POST route to handle registration data
app.post('/register', (req, res) => {
    // Retrieve registration data from the request body
    const { username, password } = req.body;

    // Log the received data
    console.log('Received registration data:', { username, password });

    // Do something with the registration data (e.g., store it in a database)

    // Send a response indicating success along with received data
    res.status(200).json({ message: 'Registration successful', data: { username, password } });
});

// GET route to handle requests to the root path
app.get('/', (req, res) => {
    res.send('Welcome to the registration server!');
});

// Start the server
app.listen(port, () => {
    console.log(`Server is listening at http://localhost:${port}`);
});