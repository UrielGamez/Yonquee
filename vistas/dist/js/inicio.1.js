let index = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;

function showImage(n) {
    images.forEach(img => img.classList.remove('active'));
    images[n].classList.add('active');
}

function nextImage() {
    index = (index + 1) % totalImages;
    showImage(index);
}

function prevImage() {
    index = (index - 1 + totalImages) % totalImages;
    showImage(index);
}

setInterval(nextImage, 2000);
