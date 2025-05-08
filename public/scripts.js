document.addEventListener('DOMContentLoaded', () => {
    const fallingContainer = document.createElement('div');
    fallingContainer.classList.add('falling-container');
    document.body.appendChild(fallingContainer);

    const chars = "01";
    const minFont = 1.1, maxFont = 2.2; // rem
    const minDuration = 3, maxDuration = 7; // seconds

    function createFallingChar() {
        const char = document.createElement('div');
        char.classList.add('falling-char');
        char.textContent = chars[Math.floor(Math.random() * chars.length)];
        char.style.left = `${Math.random() * 100}vw`;
        char.style.fontSize = `${(Math.random() * (maxFont - minFont) + minFont).toFixed(2)}rem`;
        char.style.animationDuration = `${(Math.random() * (maxDuration - minDuration) + minDuration).toFixed(2)}s`;
        char.style.opacity = (Math.random() * 0.5 + 0.15).toFixed(2);

        fallingContainer.appendChild(char);

        char.addEventListener('animationend', () => {
            char.remove();
        });
    }

    setInterval(createFallingChar, 10); // Lower interval for more density
});