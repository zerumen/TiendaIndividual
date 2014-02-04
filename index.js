$(document).ready(function() {

    $.ajax({
        dataType: 'json',
        url: 'phps/IndexProducto.php',
        type: 'GET',
        success: function(data) {
            var datos = '<h4 align="center">Ofertas</h4>';
            $.each(data, function(index) {
                datos += '<div class="listaproducto" align="center">' + data[index].nombre + '<br><img src=Img/productos/' + data[index].id + '.jpg' + ' height=50% width=50%><br>' + data[index].precio + ' &euro;' + '<br>' + data[index].descripcion + '<br>' + '<a  ><div class="carrito" onclick="descripcion(' + data[index].idProducto + ')" data-toggle="modal" data-target="#myModalDescripcion"><img src="Img/carro1.png" width=40px heigth=40px></div></a></div>';
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

function validar() {
                datosInicioSesion = $('#inicioForm').serialize();
				
				
                $.ajax({
                    url: 'phps/validacion.php',
                    type: 'POST',
                    data: datosInicioSesion,
                    success: function(url) {
					
			window.location=url;
					}
                });


            }
            ;

