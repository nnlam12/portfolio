const express = require('express');
const path = require('path');
const app = express();

// Set the view engine to EJS
app.set('view engine', 'ejs');

// Serve static files (CSS, images, etc.)
app.use(express.static(path.join(__dirname, 'public')));

// Routes
app.get('/', (req, res) => {
    res.redirect('/fr');
});

app.get('/en', (req, res) => {
    const currentYear = new Date().getFullYear();
    res.render('index-en', { year: currentYear });
});

app.get('/fr', (req, res) => {
    const currentYear = new Date().getFullYear();
    res.render('index-fr', { year: currentYear });
});

// Start the server
const PORT = process.env.PORT || 3000; // Use Azure's port or default to 3000
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});