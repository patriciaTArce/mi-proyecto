// Cargar espacios disponibles
fetch('php/disponibilidad.php')
  .then(res => res.json())
  .then(data => {
    const select = document.getElementById('selectEspacio');
    data.forEach(esp => {
      let opt = document.createElement('option');
      opt.value = esp.id;
      opt.text = `${esp.nombre} - ${esp.tipo}`;
      select.appendChild(opt);
    });
  });

// Enviar reserva
document.getElementById('formReserva')?.addEventListener('submit', function (e) {
  e.preventDefault();
  const datos = new FormData(this);
  fetch('php/reservar.php', {
    method: 'POST',
    body: datos
  })
  .then(res => res.text())
  .then(data => alert(data));
});
