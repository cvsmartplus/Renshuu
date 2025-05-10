function handleStatusChange(select) {
    const value = select.value;

    if (value === 'tidak-lolos') {
      window.location.href = '/AdminManager/TidakLolos'; // Ganti dengan route yang kamu mau
    } else if (value === 'lolos') {
      window.location.href = '/AdminManager/LolosTahapSelanjutnya'; // Ganti sesuai kebutuhan
    }
};

function handleStatusChange(select) {
    const value = select.value;

    if (value === 'status') {
      window.location.href = '/AdminManager/KelolaAkunAdmin'; // Ganti dengan route yang kamu mau
    } else if (value === 'belum-dicek') {
      window.location.href = '/AdminManager/BelumDicek'; // Ganti sesuai kebutuhan
    } else if (value === 'sudah-dicek') {
      window.location.href = '/AdminManager/SudahDicek'; // Ganti sesuai kebutuhan
    }
};
