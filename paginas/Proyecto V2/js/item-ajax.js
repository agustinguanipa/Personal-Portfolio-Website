$( document ).ready(function() {

var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* Manage Data List */

function manageData() {
    $.ajax({
        dataType: 'json',
        url: url+'api/datos.php',
        data: {page:page}
    }).done(function(data){
    total_page = Math.ceil(data.total/10);
    current_page = page;

    $('#pagination').twbsPagination({
        totalPages: total_page,
        visiblePages: current_page,
        onPageClick: function (event, pageL) {
        page = pageL;
                if(is_ajax_fire != 0){
          getPageData();
                }
        }
    });

    manageRow(data.data);
        is_ajax_fire = 1;

    });

}

/* Get Page Data */

function getPageData() {
$.ajax({
    dataType: 'json',
    url: url+'api/datos.php',
    data: {page:page}
}).done(function(data){
manageRow(data.data);
});
}

/* Add New Item Table Row */

function manageRow(data) {
var rows = '';
$.each( data, function( key, value ) {
    rows = rows + '<tr>';
    rows = rows + '<td>'+value.cedula+'</td>';
    rows = rows + '<td>'+value.nombres+'</td>';
    rows = rows + '<td>'+value.apellidos+'</td>';
    rows = rows + '<td>'+value.fecha+'</td>';
    rows = rows + '<td>'+value.matricula+'</td>';
    rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Editar</button> ';
        rows = rows + '</td>';
    rows = rows + '<td data-id="'+value.id+'">';   
        rows = rows + '<button class="btn btn-danger remove-item">Borrar</button>';
        rows = rows + '</td>';
    rows = rows + '</tr>';
});

$("tbody").html(rows);
}

/* Crear Estudiante */

$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var cedula = $("#create-item").find("input[name='cedula']").val();
    var nombres = $("#create-item").find("input[name='nombres']").val();
    var apellidos = $("#create-item").find("input[name='apellidos']").val();
    var fecha = $("#create-item").find("input[name='fecha']").val();
    var matricula = $("#create-item").find("input[name='matricula']").val();
    var user = $("#create-item").find("input[name='user']").val();
    var passwd = $("#create-item").find("input[name='passwd']").val();

    if(cedula != '' && nombres != '' && apellidos != '' && fecha != '' && matricula != '' && user != '' && passwd != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{cedula:cedula, nombres:nombres, apellidos:apellidos, fecha:fecha, matricula:matricula, user:user, passwd:passwd}
        }).done(function(data){
            $("#create-item").find("input[name='cedula']").val('');
            $("#create-item").find("input[name='nombres']").val('');
            $("#create-item").find("input[name='apellidos']").val('');
            $("#create-item").find("input[name='fecha']").val('');
            $("#create-item").find("input[name='matricula']").val('');
            $("#create-item").find("input[name='user']").val('');
            $("#create-item").find("input[name='passwd']").val('');
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Estudiante Creado.', 'Exito al Crear', {timeOut: 5000});
        });
    }else{
        alert('Te Faltan llenar algunos Campos')
    }


});

/* Borrar Estudiante */

$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: url + 'api/borrar.php',
        data:{id:id}
    }).done(function(data){
        c_obj.remove();
        toastr.success('Estudiante Borrado.', 'Exito al Borrar', {timeOut: 5000});
        getPageData();
    });

});

/* Editar Estudiante */

$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');
    var cedula = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
    var nombres = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
    var apellidos = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var fecha = $(this).parent("td").prev("td").prev("td").text();
    var matricula = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='cedula']").val(cedula);
    $("#edit-item").find("input[name='nombres']").val(nombres);
    $("#edit-item").find("input[name='apellidos']").val(apellidos);
    $("#edit-item").find("input[name='fecha']").val(fecha);
    $("#edit-item").find("input[name='matricula']").val(matricula);
    $("#edit-item").find(".edit-id").val(id);

});

/* Actualizar Estudiante */

$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var cedula = $("#edit-item").find("input[name='cedula']").val();
    var nombres = $("#edit-item").find("input[name='nombres']").val();
    var apellidos = $("#edit-item").find("input[name='apellidos']").val();
    var fecha = $("#edit-item").find("input[name='fecha']").val();
    var matricula = $("#edit-item").find("input[name='matricula']").val();
    var id = $("#edit-item").find(".edit-id").val();

    if(cedula != '' && nombres != '' && apellidos != '' && fecha != '' && matricula != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{cedula:cedula, nombres:nombres, apellidos:apellidos, fecha:fecha, matricula:matricula, id:id}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Estudiante Actualizado.', 'Exito al Actualizar', {timeOut: 5000});
        });
    }else{
        alert('Te Faltan llenar algunos Campos.')
    }

});
});