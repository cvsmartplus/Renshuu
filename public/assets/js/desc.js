function showTab(tabId, el) {
    // Sembunyikan semua tab
    document.getElementById('konten-deskripsi').style.display = 'none';
    document.getElementById('konten-pemateri').style.display = 'none';

    // Tampilkan tab yang dipilih
    document.getElementById('konten-' + tabId).style.display = 'block';

    // Animasi masuk
    setTimeout(() => {
      document.getElementById('konten-' + tabId).classList.add('fade-in');
    }, 10);

    // Update tombol aktif
    const buttons = document.querySelectorAll('.btn-group .btn');
    buttons.forEach(btn => btn.classList.remove('active-tab'));
    el.classList.add('active-tab');
}
