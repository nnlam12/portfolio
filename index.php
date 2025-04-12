<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 0%, 0% 0%;
            }
            50% {
                background-position: 0% 100%, 5% 0%;
            }
        }

        html {
            scroll-behavior: smooth; /* Enables smooth scrolling */
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(to bottom, #00c6ff, #0072ff, #001f3f); /* Initial gradient */
            color: #fff; /* Ensures text is readable on the dark background */
            background-image: 
                linear-gradient(to bottom, #00c6ff, #0072ff, #001f3f), /* Updated sea-like gradient */
                url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill-opacity="0.1"><text x="0" y="20" font-size="20" fill="lime">010101</text><text x="0" y="40" font-size="20" fill="lime">101010</text><text x="0" y="60" font-size="20" fill="lime">010101</text></svg>'); /* Cybersecurity pattern */
            background-size: 100% 200%, 200px 200px; /* Gradient is twice as tall for smooth animation */
            background-blend-mode: overlay; /* Blends the pattern with the gradient */
            animation: gradientShift 20s infinite linear; /* Continuous animation */
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            z-index: 1000;
        }
        header nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
        }
        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }
        #home {
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent overlay */
        }
        #about {
            background: rgba(255, 255, 255, 0.1);
        }
        #challenges {
            background: rgba(255, 255, 255, 0.1);
        }
        #skills {
            background: rgba(255, 255, 255, 0.1);
        }
        #contact {
            background: rgba(255, 255, 255, 0.1);
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background: #333;
            color: #fff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header nav {
                flex-direction: column; /* Stack navigation links vertically */
                gap: 0.5rem;
            }
            header nav a {
                font-size: 0.9rem; /* Reduce font size for smaller screens */
            }
            section {
                padding: 1rem; /* Reduce padding for smaller screens */
            }
        }

        @media (max-width: 480px) {
            header nav a {
                font-size: 0.8rem; /* Further reduce font size for very small screens */
            }
            section h1 {
                font-size: 1.5rem; /* Adjust heading size */
            }
            section p {
                font-size: 1rem; /* Adjust paragraph size */
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#challenges">Challenges</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section id="home">
        <h1>Welcome to My Portfolio</h1>
        <p>This is the Home section.</p>
    </section>
    <section id="about">
        <h1>About Me</h1>
        <p>This is the About section.</p>
    </section>
    <section id="challenges">
        <h1>Challenges</h1>
        <p>This is the Challenges section.</p>
    </section>
    <section id="skills">
        <h1>Skills</h1>
        <p>This is the Skills section.</p>
    </section>
    <section id="contact">
        <h1>Contact</h1>
        <p>This is the Contact section.</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Portfolio</p>
    </footer>
</body>
</html>