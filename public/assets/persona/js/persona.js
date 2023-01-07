import { cargador__, fetch_get, fetch_ } from "/public/assets/js/app.js";
document.addEventListener("DOMContentLoaded", async function(event){
    const tbPersona = document.getElementById('tabla-personas'),
        btnNew = document.getElementById('btn-new'),
        modalInserUpdate = document.getElementById('modal-insertUpdate'),
        mdInsertUpdate = new bootstrap.Modal(modalInserUpdate, {backdrop: 'static', keyboard: false}),
        btnEditPersona = 'btn-edit-persona',
        btnSave = document.getElementById('btnSave'),
        id = document.getElementById('id'),
        txtDni = document.getElementById('dni'),
        txtPaterno = document.getElementById('apePaterno'),
        txtMaterno = document.getElementById('apeMaterno'),
        txtNombres = document.getElementById('nombres'),
        txtEmail = document.getElementById('email'),
        txtLenguaje = document.getElementById('lenguaje'),
        cboFase = document.getElementById('cboFase'),
        txtEdad = document.getElementById('edad'),
        txtComprendido = document.getElementById('comprendido');

    const fc_btnEditPersona = (e) => {
        mdInsertUpdate._element.querySelector('.modal-title').innerHTML = 'Editar persona';
        mdInsertUpdate.show();
    };

    const resultado = await fetch_get('/persona/getAll');
    let contador = 1;
    let contenido = '';
    resultado.forEach(val => {
        contenido += `<tr>
            <td>${ contador++ }</td>
            <td>${ val.dni }</td>
            <td>${ val.apePaterno } ${ val.apeMaterno }, ${ val.nombres }</td>
            <td>${ val.edad }</td>
            <td>
                <button class="btn btn-info btn-edit-persona">Editar</button>&nbsp;
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>`;
    });
    tbPersona.children[1].innerHTML = contenido;
    tbPersona.querySelectorAll(`.${btnEditPersona}`).forEach(el => el.addEventListener('click', () => fc_btnEditPersona(el) ));

    document.getElementById(cargador__).setAttribute('style', 'display:none');

    btnNew.addEventListener('click', () => {
        id.value = '';
        mdInsertUpdate._element.querySelector('.modal-title').innerHTML = 'Registrar persona';
        mdInsertUpdate.show();
    });

    btnSave.addEventListener('click', async () => {
        document.getElementById(cargador__).setAttribute('style', 'display:flex');
        const datos = {
            id: isNaN(parseInt(id.value.trim())) ? null : parseInt(id.value.trim()),
            dni: txtDni.value,
            paterno: txtPaterno.value,
            materno: txtMaterno.value,
            nombres: txtNombres.value,
            email: txtEmail.value,
            lenguaje: txtLenguaje.value,
            fase: cboFase.value,
            edad: txtEdad.value,
            comprendido: txtComprendido.value,
        };
        console.log(datos);
        const resultado = await fetch_('/persona/insertUpdate', 'POST', datos);
        console.log(resultado);
        document.getElementById(cargador__).setAttribute('style', 'display:none');
    });
});