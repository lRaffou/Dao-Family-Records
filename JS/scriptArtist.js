document.addEventListener('DOMContentLoaded', function () {
    const artisteBeforeClick = document.querySelector('.artisteBeforeClick');
    const artistAfterClick = document.querySelector('.artistAfterClick');

    // Initially hide the artistAfterClick element
    artistAfterClick.style.display = 'none';
    artistAfterClick.style.maxHeight = '0';
    artistAfterClick.style.overflow = 'hidden';
    artistAfterClick.style.transition = 'max-height 0.5s ease-in-out';

    artisteBeforeClick.addEventListener('click', function () {
        if (artistAfterClick.style.display === 'none') {
            // Show and expand
            artistAfterClick.style.display = 'block';
            // Use setTimeout to ensure the display change has taken effect
            setTimeout(() => {
                artistAfterClick.style.maxHeight = artistAfterClick.scrollHeight + 'px';
            }, 10);
        } else {
            // Collapse and hide
            artistAfterClick.style.maxHeight = '0';
            // Wait for the animation to finish before hiding
            setTimeout(() => {
                artistAfterClick.style.display = 'none';
            }, 500); // This should match the transition duration
        }
    });
});