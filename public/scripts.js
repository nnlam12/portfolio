    document.addEventListener('DOMContentLoaded', () => {
        const cards = document.querySelectorAll('.col.text-center, .card'); // Select all cards in both sections

        cards.forEach((card) => {
            // Check if the popup already exists for this card
            if (!card.dataset.popupInitialized) {
                const popup = document.createElement('div');
                popup.className = 'popup-card';
                popup.style.display = 'none';
                popup.style.position = 'absolute';
                popup.style.background = 'white';
                popup.style.border = '1px solid #ccc';
                popup.style.padding = '10px';
                popup.style.zIndex = '1000';
                popup.style.maxWidth = '300px';
                popup.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
                popup.style.borderRadius = '8px';

                // Add description dynamically based on the card's dataset
                const description = card.dataset.description || 'No description available';
                popup.innerHTML = `<p>${description}</p>`;
                document.body.appendChild(popup);

                const showPopup = () => {
                    popup.style.display = 'block';
                    const rect = card.getBoundingClientRect();
                    popup.style.top = `${rect.bottom + window.scrollY + 10}px`;
                    popup.style.left = `${rect.left + window.scrollX}px`;
                };

                const hidePopup = () => {
                    popup.style.display = 'none';
                };

                card.addEventListener('mouseover', showPopup);
                card.addEventListener('mouseout', hidePopup);
                card.addEventListener('click', () => {
                    popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
                });

                // Mark this card as initialized to prevent duplicate popups
                card.dataset.popupInitialized = true;
            }
        });
    });
    // Falling Characters Animation
    document.addEventListener('DOMContentLoaded', () => {
        // Create a container for falling characters
        const fallingContainer = document.createElement('div');
        fallingContainer.classList.add('falling-container');
        document.body.appendChild(fallingContainer);
    
        // Function to create a random character
        function createFallingChar() {
            const char = document.createElement('div');
            char.classList.add('falling-char');
            char.textContent = String.fromCharCode(33 + Math.random() * 94); // Random ASCII character
            char.style.left = `${Math.random() * 100}vw`; // Random horizontal position
    
            // Start the animation from the current viewport's top position
            const viewportTop = window.scrollY; // Get the current scroll position
            char.style.top = `${viewportTop - 10}px`; // Start slightly above the viewport
    
            char.style.animationDelay = `${Math.random() * 5}s`; // Random delay for animation
            char.style.fontSize = `${Math.random() * 1.5 + 1}rem`; // Random font size
            fallingContainer.appendChild(char);
    
            // Remove the character after the animation ends
            char.addEventListener('animationend', () => {
                char.remove();
            });
        }
    
        // Generate falling characters at intervals
        setInterval(createFallingChar, 200); // Adjust interval for density
    });