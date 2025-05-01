function handleStatusChange(select) {
    const value = select.value;
  
    if (value === 'role') {
      window.location.href = '/AdminManager/manager';
    } else if (value === 'admin-manager') {
      window.location.href = '/AdminManager/manager';
    } else if (value === 'admin-loker') {
      window.location.href = '/AdminManager/loker'; // route tambahan ke-3
    } else if (value === 'admin-kursus') {
      window.location.href = '/AdminManager/kursus'; // route tambahan ke-4
    }
} 