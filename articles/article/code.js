window.addEventListener('DOMContentLoaded', () => {
    let background_img = document.getElementById('background');
    let image = document.getElementById('image');

    window.addEventListener('scroll', () => {
        let value = window.scrollY;
        background_img.style.marginTop = value * -1.0 + 'px';
        image.style.marginTop = value * -1.5 + 'px';
    });
});