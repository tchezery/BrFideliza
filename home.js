const button_qrcode1 = document.getElementById('button_qrcode1');
const qrcode1 = document.getElementById('qrcode1');

button_qrcode1.addEventListener('click', () => {
    qrcode1.style.display = 'flex';
});

const button_quit_qrcode1 = document.getElementById('button_quit_qrcode1');

button_quit_qrcode1.addEventListener('click', () => {
    qrcode1.style.display = 'none';
});