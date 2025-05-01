function toggleBookmark(button) {
    const icon = button.querySelector('i');
    const isActive = button.classList.contains('active');
  
    if (isActive) {
      // Kembalikan ke default
      button.classList.remove('active', 'btn-primary');
      button.classList.add('btn-light');
      icon.classList.remove('ri-bookmark-fill');
      icon.classList.add('ri-bookmark-line');
      button.setAttribute('aria-pressed', 'false');
    } else {
      // Aktifkan tombol
      button.classList.add('active', 'btn-primary');
      button.classList.remove('btn-light');
      icon.classList.remove('ri-bookmark-line');
      icon.classList.add('ri-bookmark-fill');
      button.setAttribute('aria-pressed', 'true');
    }
  }
  