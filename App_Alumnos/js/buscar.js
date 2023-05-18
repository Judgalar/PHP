async function enviarSolicitud(query, listaUsuarios) {
  try {
    const response = await fetch('buscar.php', {
      method: 'POST',
      headers: {
        'Content-type': 'application/x-www-form-urlencoded'
      },
      body: 'query=' + encodeURIComponent(query)
    });

    if (response.ok) {
      const data = await response.text();
      listaUsuarios.innerHTML = data;
    } else {
      throw new Error('Error en la solicitud');
    }
  } catch (error) {
    console.log(error);
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('search');
  const listaUsuarios = document.getElementById('user-list');
  const clearBtn = document.getElementById('clearBtn');

  clearBtn.addEventListener('click', function() {
    searchInput.value = '';
    searchInput.focus();
    const query = searchInput.value;
    enviarSolicitud(query, listaUsuarios);
  });

  searchInput.addEventListener('keyup', function() {
    const query = searchInput.value;
    enviarSolicitud(query, listaUsuarios);
  });
});