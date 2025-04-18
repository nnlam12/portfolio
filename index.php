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
            <a href="#contact" class="font-normal">Contact</a>
        </nav>
    </header>
    <section id="home">
        <div class="profile-picture">
            <!-- Placeholder image -->
            <img src="./images/Cat03.jpg" alt="Profile Picture">
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
                My name is <span class="font-bold">Nhat Lam NGUYEN</span>. Having come a long way from Vietnam, I'm now a 3rd-year engineering student at INSA Centre Val de Loire, France.
            </p>
            <p class="font-normal">
                Driven by a desire to learn and dive deep into the world of computers, I am following the path of <span class="font-bold">ethical hacking</span> and <span class="font-bold">cybersecurity</span>.
            </p>
            <p class="font-normal">
                Most of the time, I practice <span class="font-bold">CTF (Capture The Flag)</span> challenges, where I can apply my knowledge and skills in a practical way. I also enjoy learning about <span class="font-bold">web hacking</span> and <span class="font-bold">network security</span>.
            </p>
            <p class="font-normal">
                Nevertheless, I am not limited to these areas. As long as I can challenge myself and learn something new, I am open to exploring other fields.
            </p>
            <p class="font-normal">
                My goal is to become a <span class="font-bold">cybersecurity expert</span>, whether as a <span class="font-bold">pentester</span>, <span class="font-bold">security analyst</span>, or even a <span class="font-bold">researcher</span>—any role that allows me to partake in the fight against cybercrime and contribute to the security of our digital world.
            </p>
            <p class="font-normal">
                If by any chance you are looking for a new member for your team, I would be delighted to discuss my skills and how I can contribute to your company.
            </p>
            <p class="font-normal">
                Recruiting or not, you are more than welcome to check out my <a href="#" class="font-bold">CV</a> or <a href="#contact" class="font-bold">contact me directly</a>.
            </p>
            <p class="font-normal">
                Until then, I wish you a fascinating trip through my ever-expanding <span class="font-bold">cyber ocean</span>.
            </p>
        </div>
    </section>
    <section id="challenges">
        <div>
            <h1 class="font-large">Challenges</h1>
            <div class="challenge-item">
                <img src="./images/CaTF.png" alt="Challenge Icon" class="challenge-icon">
                <span class="challenge-title-hover">Hack The Box - Machine Profile</span>
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