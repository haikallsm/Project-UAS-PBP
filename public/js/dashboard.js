const toggleBtn = document.getElementById('toggleSidebar');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('content');

let isOpen = true;

toggleBtn.addEventListener('click', () => {
    if (isOpen) {
        sidebar.style.marginLeft = '-260px';
        content.style.marginLeft = '0';
    } else {
        sidebar.style.marginLeft = '0';
        content.style.marginLeft = '16rem';
    }
    isOpen = !isOpen;
});
