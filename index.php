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
            transition: margin-left 0.4s ease; /* Smooth transition for body margin */
            
        }
        header {
            position: fixed;
            top: 20px; /* Position the circle slightly below the top */
            left: 20px; /* Position the circle slightly from the left */
            width: 50px; /* Initial circle diameter */
            height: 50px; /* Initial circle diameter */
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            color: #fff;
            border-radius: 50%; /* Make it a circle */
            z-index: 1000;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Subtle shadow for depth */
            transition: width 0.4s ease, height 0.4s ease, border-radius 0.4s ease; /* Smooth transition for expansion */
            overflow: hidden; /* Hide overflowing content */
        }

        header:hover {
            width: 250px; /* Expand width on hover */
            height: 32%; /* Expand height to full screen */
            border-radius: 10%; /* Remove rounded corners to make it a rectangle */
        }

        header nav {
            display: flex;
            flex-direction: column; /* Stack links vertically */
            align-items: center; /* Center links horizontally */
            gap: 1rem; /* Space between links */
            margin-top: 2rem; /* Add space at the top */
            opacity: 0; /* Initially hide links */
            transform: translateY(-20px); /* Slide links up */
            transition: opacity 0.4s ease 0.2s, transform 0.4s ease 0.2s; /* Smooth transition with delay */
        }

        header:hover nav {
            opacity: 1; /* Show links on hover */
            transform: translateY(0); /* Reset slide effect */
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem; /* Adjust font size */
            padding: 0.5rem 1rem; /* Padding for clickable area */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth hover effect */
            white-space: nowrap; /* Prevent text wrapping */
        }

        header nav a:hover {
            background-color: #0072ff; /* Highlight color on hover */
            color: #fff; /* Ensure text remains readable */
        }

        header:hover ~ body {
            margin-left: 250px; /* Adjust margin for expanded sidebar */
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
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Stack elements vertically */
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
            text-align: center; /* Center-align text */
            padding: 2rem;
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

        /* Profile picture styling */
        header .profile-picture,
        #home .profile-picture {
            width: 200px; /* Increased size of the profile picture */
            height: 200px; /* Increased size of the profile picture */
            border-radius: 50%; /* Make it circular */
            background: rgba(255, 255, 255, 0.2); /* Light semi-transparent background */
            margin: 1rem auto; /* Center the picture and add spacing */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Ensure the image stays within the circle */
            border: 3px solid #fff; /* Add a thicker white border */
        }

        header .profile-picture img,
        #home .profile-picture img {
            width: 100%; /* Make the image fill the container */
            height: 100%; /* Make the image fill the container */
            object-fit: cover; /* Ensure the image scales properly */
            border-radius: 50%; /* Ensure the image is circular */
        }

        #home .profile-picture {
            margin-bottom: 1rem; /* Add spacing below the picture */
        }

        /* Hamburger menu styling */
        header .hamburger {
            display: flex;
            flex-direction: column; /* Stack the stripes vertically */
            justify-content: space-between; /* Evenly space the stripes */
            align-items: center;
            width: 30px; /* Width of the hamburger menu */
            height: 20px; /* Height of the hamburger menu */
            position: absolute;
            top: 15px; /* Position inside the header */
            left: 10px; /* Position inside the header */
            cursor: pointer; /* Change cursor to pointer */
        }

        header .hamburger div {
            width: 100%; /* Full width of the hamburger menu */
            height: 4px; /* Height of each stripe */
            background-color: #fff; /* White color for the stripes */
            border-radius: 2px; /* Slightly rounded edges */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        header:hover .hamburger div {
            background-color: #0072ff; /* Change color on hover */
        }

    </style>
</head>
<body>
    <header>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#challenges">Challenges</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section id="home">
        <div class="profile-picture">
            <!-- Placeholder image -->
            <img src="./Cat03.jpg" alt="Profile Picture">
        </div>
        <h1>Hello!</h1>
        <p style="font-size: 1.5rem;">My name is Nhat Lam NGUYEN, I'm an engineering student in 3rd year at INSA Centre Val-de-Loire. For now, I'm aiming to ...</p>
        <div style="background-color: rgba(255, 255, 255, 0.2); color: #fff; padding: 1rem; border-radius: 10px; max-width: 600px; text-align: center; font-weight: bold;">
            <p style="font-size: 1.5rem;">Sign an apprenticeship contract starting September 2025 with a focus on Cybersecurity/Pentesting</p>
        </div>
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