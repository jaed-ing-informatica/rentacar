var MarcasYmodelos = {

    "marcas": [{
            "NombreMarca": "CHEVROLET",
            "modelos": ["PRISMA"]
        },
        {
            "NombreMarca": "FIAT",
            "modelos": ["AUTOMATICO"]
        },
        {
            "NombreMarca": "KIA",
            "modelos": ["RIO4"]
        },
        {
            "NombreMarca": "NISSAN",
            "modelos": ["NP300"]
        },
        {
            "NombreMarca": "MITSUBISHI",
            "modelos": ["L200 KATANA", "NEW L200"]
        },
        {
            "NombreMarca": "RENAULT",
            "modelos": ["SYMBOL"]
        },
        {
            "NombreMarca": "SSANGYONG",
            "modelos": ["NEW ACTYON SPORT", "ACTYON SPORT"]
        },
        {
            "NombreMarca": "VOLKSWAGEN",
            "modelos": ["VOYAGE"]
        }
    ]
}


jQuery(document).ready(function() {

    var iMarca = 0;
    var htmlMarca = '<option name="marca" class="btn btn-block btn-primary" value="sin-marca">Seleccione Marca</option>';
    var htmlmodelos = '<option name="modelo" value="sin-marca">Seleccione Modelo</option>';

    jQuery.each(MarcasYmodelos.marcas, function() {
        htmlMarca = htmlMarca + '<option value="' + MarcasYmodelos.marcas[iMarca].NombreMarca + '">' + MarcasYmodelos.marcas[iMarca].NombreMarca + '</option>';
        iMarca++;
    });

    jQuery('#marcas').html(htmlMarca);
    jQuery('#modelos').html(htmlmodelos);

    jQuery('#marcas').change(function() {
        var iMarcas = 0;
        var valorMarca = jQuery(this).val();
        var htmlModelo = '<option value="sin-modelo">Seleccione Modelo</option><option value="sin-modelo">--</option>';
        jQuery.each(MarcasYmodelos.marcas, function() {
            if (MarcasYmodelos.marcas[iMarcas].NombreMarca == valorMarca) {
                var imodelos = 0;
                jQuery.each(MarcasYmodelos.marcas[iMarcas].modelos, function() {
                    htmlModelo = htmlModelo + '<option value="' + MarcasYmodelos.marcas[iMarcas].modelos[imodelos] + '">' + MarcasYmodelos.marcas[iMarcas].modelos[imodelos] + '</option>';
                    imodelos++;
                });
            }
            iMarcas++;
        });
        jQuery('#modelos').html(htmlModelo);
    });
    jQuery('#modelos').change(function() {
        if (jQuery(this).val() == 'sin-marca') {
            Alert('Debe seleccionar una Marca');
        } else if (jQuery(this).val() == 'sin-comuna') {
            Alert('Debe Seleccionar un Modelo');
        }
    });
    jQuery('#marcas').change(function() {
        if (jQuery(this).val() == 'sin-marca') {
            //sweetAlert('Debes seleccionar una Marca', 'Algo ocurrió mal.', 'Error 909');
            Alert('Debe seleccionar una Marca');
        }
    });

});