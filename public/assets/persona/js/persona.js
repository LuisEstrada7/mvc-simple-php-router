import { cargador__, fetch_, fetch__, tbody_sinRegistros } from "/public/assets/js/app.js";
document.addEventListener("DOMContentLoaded", async function(event){
    const tbPersona = document.getElementById('tabla-personas'),
        btnNew = document.getElementById('btn-new'),
        modalInserUpdate = document.getElementById('modal-insertUpdate'),
        mdInsertUpdate = new bootstrap.Modal(modalInserUpdate, {backdrop: 'static', keyboard: false}),
        btnEditPersona = 'btn-edit-persona',
        btnDeletePersona = 'btn-delete-persona',
        btnSave = document.getElementById('btnSave'),
        txtid = document.getElementById('id'),
        txtDni = document.getElementById('dni'),
        txtPaterno = document.getElementById('apePaterno'),
        txtMaterno = document.getElementById('apeMaterno'),
        txtNombres = document.getElementById('nombres'),
        txtEmail = document.getElementById('email'),
        txtLenguaje = document.getElementById('lenguaje'),
        cboFase = document.getElementById('cboFase'),
        nEdad = document.getElementById('edad'),
        checkComprendido = document.getElementById('comprendido');

    const fc_btnEditPersona = async(e) => {
        mdInsertUpdate._element.querySelector('.modal-title').innerHTML = 'Editar persona';
        document.getElementById(cargador__).setAttribute('style', 'display:flex');
        const id = e.getAttribute('data-id');
        const resultado = await fetch_(`persona/${id}`, "GET");
        resultado.forEach(val => {
            txtid.value = val.id;
            txtDni.value = val.dni;
            txtPaterno.value = val.apePaterno;
            txtMaterno.value = val.apeMaterno;
            txtNombres.value = val.nombres;
            txtEmail.value = val.correo;
            txtLenguaje.value = val.lenguaje;
            cboFase.value = val.fase;
            nEdad.value = val.edad;
            val.comprendido == 1 ? checkComprendido.checked = true : checkComprendido.checked = false;
        });
        document.getElementById(cargador__).setAttribute('style', 'display:none');
        mdInsertUpdate.show();
    };

    const fc_btnDeletePersona = async (e) => {
        document.getElementById(cargador__).setAttribute('style', 'display:flex');
        const id = e.getAttribute('data-id');
        const resultado = await fetch_(`persona/${id}`, "DELETE");
        alert(resultado[0]);
        listarPersonas(resultado[1]);
        document.getElementById(cargador__).setAttribute('style', 'display:none');
    };

    const listarPersonas = (datos) =>{
        let contador = 1;
        let contenido = datos.length > 0 ? '' : tbody_sinRegistros;
        datos.forEach(val => {
            contenido += `<tr>
                <td>${ contador++ }</td>
                <td>${ val.dni }</td>
                <td>${ val.apePaterno } ${ val.apeMaterno }, ${ val.nombres }</td>
                <td>${ val.correo }</td>
                <td>${ val.lenguaje }</td>
                <td>${ val.fase }</td>
                <td>${ val.edad }</td>
                <td>${ val.comprendido == 1 ? 'Si' : 'No' }</td>
                <td>
                    <button class="btn btn-info ${btnEditPersona}" data-id="${val.id}">Editar</button>&nbsp;
                    <button class="btn btn-danger ${btnDeletePersona}" data-id="${val.id}">Eliminar</button>
                </td>
            </tr>`;
        });
        tbPersona.children[1].innerHTML = contenido;
        tbPersona.querySelectorAll(`.${btnEditPersona}`).forEach(el => el.addEventListener('click', () => fc_btnEditPersona(el) ));
        tbPersona.querySelectorAll(`.${btnDeletePersona}`).forEach(el => el.addEventListener('click', () => fc_btnDeletePersona(el) ));
    }

    btnNew.addEventListener('click', () => {
        document.getElementById("form-insertUpdate").reset();
        txtid.value = '';
        mdInsertUpdate._element.querySelector('.modal-title').innerHTML = 'Registrar persona';
        mdInsertUpdate.show();
    });

    btnSave.addEventListener('click', async () => {
        document.getElementById(cargador__).setAttribute('style', 'display:flex');
        const datos = {
            id: isNaN(parseInt(txtid.value.trim())) ? null : parseInt(txtid.value.trim()),
            dni: txtDni.value.trim(),
            paterno: txtPaterno.value.trim(),
            materno: txtMaterno.value.trim(),
            nombres: txtNombres.value.trim(),
            email: txtEmail.value.trim(),
            lenguaje: txtLenguaje.value.trim(),
            fase: cboFase.value == "" ? null : cboFase.value,
            edad: nEdad.value < 18 ? 18 : nEdad.value,
            comprendido: checkComprendido.checked ? 1 : 0,
        };
        const resultado = await fetch__('/persona/insertUpdate', 'POST', datos);
        mdInsertUpdate.hide();
        alert(resultado[0]);
        listarPersonas(resultado[1]);
        document.getElementById(cargador__).setAttribute('style', 'display:none');
    });

    const resultado = await fetch_('/persona/getAll');
    listarPersonas(resultado);
    document.getElementById(cargador__).setAttribute('style', 'display:none');
});