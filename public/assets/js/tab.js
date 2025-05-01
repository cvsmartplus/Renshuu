function switchTab(tabName) {
    // Ganti isi konten
    document.getElementById('akun').style.display = tabName === 'akun' ? 'block' : 'none';
    document.getElementById('kontak').style.display = tabName === 'kontak' ? 'block' : 'none';
  
    // Ganti style tombol aktif
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach((tab) => tab.classList.remove('active'));
  
    const clickedTab = [...tabs].find(tab => tab.textContent.toLowerCase() === tabName);
    clickedTab.classList.add('active');
  
    // Gerakkan garis biru
    const underline = document.querySelector('.tab-underline');
    underline.style.width = `${clickedTab.offsetWidth}px`;
    underline.style.left = `${clickedTab.offsetLeft}px`;
  }
  
  // Inisialisasi posisi awal underline
  window.onload = () => {
    const activeTab = document.querySelector('.tab.active');
    const underline = document.querySelector('.tab-underline');
    underline.style.width = `${activeTab.offsetWidth}px`;
    underline.style.left = `${activeTab.offsetLeft}px`;
  };