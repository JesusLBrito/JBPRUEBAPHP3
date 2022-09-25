const form = document.querySelector('form');
$(document).ready(function () {
    var contadorT = 0;

    var tablaDatos = $('#tablaDatos').DataTable({ retrieve: true, paging: false });
    tablaDatos.destroy();
    var tablaDatos = window.$('#tablaDatos').DataTable({

        "ajax": {
            "url": "app/controller/Controlador.php",
            "method": 'POST',
            "data": { opcion: "ListarPersona" },
            "dataSrc": ""
        },
        "columns": [

            {
                data: null,
                render: function (data, type, row) {
                contadorT = contadorT + 1;
                return "<b>" + contadorT + "</b>";
                }
            },
            { "data": "motivo" },
            { "data": "descripcion" },
            { "data": "notificacion" },
            {
                data: null,
                render: function (data, type, row) {

                    return '<button type="button" class="btn btn-primary btnEditar"  data-bs-toggle="modal" data-bs-target="#ModalEditar"  data-id="' + data.id + '"><i class="bi bi-pencil-square"></i></button>';
                }
            },
            {
                data: null,
                render: function (data, type, row) {

                    return '<button type="button" class="btn btn-danger btnEliminar" data-id="' + data.id + '" ><i class="bi bi-trash"></i></button>';
                }
            }
        ]

    });

    $('#form-add').submit(function (e) {
        console.log('Hola')
        e.preventDefault();
        opcion = "GuardarPersona";
        motivo = $("#motivo").val();
        descripcion = $("#descripcion").val();
        notificacion = "No Leido"
        $.ajax({
            url: "app/controller/Controlador.php",
            type: 'post',
            data: { opcion: opcion, motivo: motivo, descripcion: descripcion, notificacion: notificacion }
        }).done(function (data) {
            if (data) {
                Swal.fire({
                    icon: 'success',
                    title: '¡Datos Guardados!'
                })
                form.reset()
                contadorT = 0;
                tablaDatos.ajax.reload(null, false);
            }
            else {
                swal("", "error", "error");
            }
        });
    });

    // $(document).on("click", ".btnEditar", function () {
    //     opcion = "ConsultarPersona";
    //     id = $(this).data("id");
    //     $.ajax({
    //         url: "app/controlador/PersonaControlador.php",
    //         type: "post",
    //         data: { opcion: opcion, id: id }
    //     }).done(function (data) {
    //         datos = JSON.parse(data);
    //         $("#nombreE").val(datos.nombre);
    //         $("#edadE").val(datos.edad);
    //         $("#telefonoE").val(datos.telefono);
    //         $("#id_P").val(id);
    //     });
    // });
});