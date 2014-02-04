$(document).ready(function() {

    $.ajax({
        dataType: 'json',
        url: 'phps/IndexProducto.php',
        type: 'GET',
        success: function(data) {
            var datos = '<h4 align="center">Ofertas</h4>';
            $.each(data, function(index) {
                datos += '<div class="listaproducto" align="center">' + data[index].nombre + '<br><img src=Img/productos/' + data[index].id + '.jpg' + ' height=50% width=50%><br>' + data[index].precio + ' &euro;' + '<br>' + data[index].descripcion + '<br>' + '</div>';
            });
            datos += '</div>';
            $('#listaproducto').html(datos);
        }
    });
});
$(document).ready(function() {

    $.ajax({
        dataType: 'json',
        url: 'phps/IndexCategorias.php',
        type: 'GET',
        success: function(data) {
            var datos = '<ul>';
            $.each(data, function(index) {
                datos += '<li>' + data[index].nombre + '</li>';
            });
            datos += '</ul>'
            $('#menu').html(datos);
        }
    });
});

