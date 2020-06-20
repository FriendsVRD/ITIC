$.fn.editable.defaults.mode = 'inline';
$.fn.editable.defaults.ajaxOptions = { type: 'PUT' };



$(document).ready(function() {
    $(".set-guide-number").editable();
    $(".set-abonado").editable();

    $(".select-status").editable({
        source: [
            { value: "creado", text: "Creado" },
            { value: "enviado", text: "Enviado" },
            { value: "recibido", text: "Recibido" },
            { value: "cancelado", text: "Cancelado" }
        ]
    });
});