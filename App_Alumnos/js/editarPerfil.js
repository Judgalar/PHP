const BTNEditar = document.getElementById('BTNEditar');
const ElPerfil = document.getElementById('perfil');

BTNEditar.addEventListener('click', () => {
    const info = document.getElementById('info');
    const ul = info.querySelector('ul');

    // Crear el formulario
    const form = document.createElement('form');
    form.className = ul.className; // Mantener las clases del ul
    form.action = 'editarPerfil.php'
    form.method = 'POST'

    // Recorrer los elementos de la lista y reemplazarlos por inputs
    for (const li of ul.children) {
        const strong = li.querySelector('strong');
        const label = document.createElement('label');
        label.textContent = strong.textContent;
        label.style.fontWeight = 'bold'; // Aplicar estilo al elemento label

        const input = document.createElement('input');
        // Copiar la id del li al name del input
        input.name = li.id;
        
        // Asignar el valor actual del elemento li al input
        if(input.name == 'cv') input.value = li.lastElementChild
        else input.value = li.textContent.split(': ')[1]; 

    
        form.appendChild(label);
        form.appendChild(input);
    }

    // Reemplazar el ul por el formulario
    info.replaceChild(form, ul);

    const BTNCancelar = document.createElement('button');
    BTNCancelar.onclick = () => location.reload();
    BTNCancelar.type = 'button'
    BTNCancelar.className = 'btn-cancelar'
    BTNCancelar.innerHTML = 'Cancelar'

    const BTNSubmit = document.createElement('input');
    BTNSubmit.type = 'submit'
    BTNSubmit.className = 'btn'

    form.appendChild(BTNSubmit)
    form.appendChild(BTNCancelar)

    BTNEditar.remove()
});
