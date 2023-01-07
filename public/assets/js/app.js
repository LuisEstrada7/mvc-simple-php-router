export const cargando_tbody =  `<tr>
                            <td colspan="100%">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="spinner m-auto">
                                        <div class="spinner__half-circle--left"></div>
                                        <div class="spinner__half-circle--right"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>`;
export const tbody_sinRegistros = `<tr><td colspan='100%' style='text-align: center;'>No se encontraron registros</td></tr>`;
export const cargador__ = 'before-page';
export const fetch_get = (_url) => {
    return fetch(_url, {
        headers:{ 'Content-Type': 'application/json' }
    }).then(res => res.json())
    .then(response => response);
};
export const fetch_ = (_url,_type,_data) => {
    return fetch(_url, {
        method: _type,
        body: JSON.stringify(_data),
        headers:{ 'Content-Type': 'application/json' }
    }).then(res => res.json())
    .then(response => response);
};