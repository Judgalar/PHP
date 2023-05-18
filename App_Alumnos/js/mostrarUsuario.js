document.addEventListener('DOMContentLoaded', () => {
    const userCards = document.querySelectorAll('.user-card');

    // Evento de clic en una tarjeta de usuario
    userCards.forEach(card => {
        card.addEventListener('click', async () => {
            const nickName = card.getAttribute('data-nickName');

            try {
                // Realizar una solicitud fetch para obtener los detalles del usuario
                const response = await fetch('mostrarUsuario.php?nickName=' + nickName);
                const user = await response.json();

                // Mostrar los detalles del usuario
                const userInfo = card.querySelector('#user-info');

                if (!card.classList.contains('expanded')) {
                    userInfo.innerHTML = `
                        <h3>${user.nickName}</h3>
                        <p>Nombre: ${user.nombre}</p>
                        <p>Apellido: ${user.apellido}</p>
                        <p>Email: <a target="_blank" href="mailto:${user.correo}">${user.correo}</a></p>
                        <p>Teléfono: ${user.telefono}</p>
                        <p>Dirección: ${user.direccion}</p>
                        <p>Currículum: <a target="_blank" href="${user.curriculum}">${user.curriculum}</a></p>
                        <p>Situación: ${user.situacion_laboral}</p>
                    `;
                    card.classList.add('expanded');
                } else {
                    userInfo.innerHTML = `
                        <h3>${user.nickName}</h3>
                        <p>${user.nombre} ${user.apellido}</p>
                    `;
                    card.classList.remove('expanded');
                }

            } catch (error) {
                console.log('Error:', error);
            }
        });
    });

    // Crear un nuevo MutationObserver
    const observer = new MutationObserver((mutationsList, observer) => {
        // Recorrer las mutaciones
        for (let mutation of mutationsList) {
            // Verificar si se han agregado nuevos nodos
            if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                // Aplicar los listeners a los nuevos elementos agregados al DOM
                mutation.addedNodes.forEach(node => {
                    if (node.classList && node.classList.contains('user-card')) {
                        if (!node.onclick) {
                            node.addEventListener('click', async () => {
                                const nickName = node.getAttribute('data-nickName');

                                try {
                                    // Realizar una solicitud fetch para obtener los detalles del usuario
                                    const response = await fetch('mostrarUsuario.php?nickName=' + nickName);
                                    const user = await response.json();

                                    // Mostrar los detalles del usuario
                                    const userInfo = node.querySelector('#user-info');

                                    if (!node.classList.contains('expanded')) {
                                        userInfo.innerHTML = `
                                            <h3>${user.nickName}</h3>
                                            <p><strong>Nombre:</strong> ${user.nombre}</p>
                                            <p><strong>Apellido:</strong> ${user.apellido}</p>
                                            <p><strong>Email:</strong> <a target="_blank" href="mailto:${user.correo}">${user.correo}</a></p>
                                            <p><strong>Teléfono:</strong> ${user.telefono}</p>
                                            <p><strong>Dirección:</strong> ${user.direccion}</p>
                                            <p><strong>Currículum:</strong> <a target="_blank" href="${user.curriculum}">${user.curriculum}</a></p>
                                            <p><strong>Situación:</strong> ${user.situacion_laboral}</p>
                                        `;
                                        node.classList.add('expanded');
                                    } else {
                                        userInfo.innerHTML = `
                                            <h3>${user.nickName}</h3>
                                            <p>${user.nombre} ${user.apellido}</p>
                                        `;
                                        node.classList.remove('expanded');
                                    }

                                } catch (error) {
                                    console.log('Error:', error);
                                }
                            });
                        }
                    }
                });
            }
        }
    });

    // Observar los cambios en el documento y en sus subárboles
    observer.observe(document, { subtree: true, childList: true });
});
