<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav>
            <a href="#home" class="font-normal">Home</a>
            <a href="#about" class="font-normal">About</a>
            <a href="#challenges" class="font-normal">Challenges</a>
            <a href="#skills" class="font-normal">Skills</a>
            <a href="#contact" class="font-normal">Contact</a>
        </nav>
    </header>
    <section id="home">
        <div class="profile-picture">
            <!-- Placeholder image -->
            <img src="./Cat03.jpg" alt="Profile Picture">
        </div>
        <h1 class="font-bold">Hello!</h1>
        <p class="font-normal">My name is <span class="font-bold">Nguyen Nhat Lam</span>. I'm an engineering student in 3rd year at INSA Centre Val-de-Loire. Currently, I'm aiming to ...</p>
        <div class="text-box">
            <p class="font-bold">Sign an apprenticeship contract starting September 2025 with a focus on Cybersecurity/Pentesting</p>
        </div>
    </section>
    <section id="about">
        <div>
            <p class="font-large">About Me</p>
            <p class="font-normal">
                This is the About section.
            </p>
        </div>
    </section>
    <section id="challenges">
        <div>
            <h1 class="font-large">Challenges</h1>
            <p class="font-normal">
                This is the Challenges section.
            </p>
        </div>
    </section>
    <section id="skills">
        <div> 
            <h1 class="font-large">Skills</h1>
            <p class="font-normal">
                This is the Skills section.
            </p>
        </div>
    </section>
    <section id="contact">
        <div>
            <h1 class="font-large">Contact</h1>
            <p class="font-normal">
                This is the Contact section.
            </p>
        </div>
    </section>
    <footer>
        <p class="font-small"> <?php echo date("Y"); ?> My Portfolio</p>
    </footer>
</body>
</html>