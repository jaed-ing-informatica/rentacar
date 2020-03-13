/*const app = new Vue({
    el: '#app',
    data: {
        selected_marca: '',
        selected_modelo: '',
        modelos: [],
    },
    mounted() {
        document.getElementById("modelo").disabled = true;

        this.selected_marca = this.getOldData('marca');
        if (this.selected_marca != '') {
            this.cargarModelos();
        }

        this.selected_modelo = this.getOldData('modelo');
    },
    methods: {
        cargarModelos() {
            this.selected_modelo = '';
            document.getElementById("modelo").disabled = true;

            if (this.selected_faculty != '') {
                axios.get('modelos', { params: { id_marca: this.selected_marca } }).then((response) => {
                    this.modelos = response.data;
                    document.getElementById("modelo").disabled = false;
                });
            }
        },
        getOldData(type) {
            return document.getElementById(type).getAttribute('data-old');
        }
    }
});


$(document).ready(function(){
 function cargarModelo(){
    var  id_marca = $('#marca').val();
    if($.trim(id_marca)!= ''){

        $.get('modelos',{id_marca: id_marca}, function(modelos){
            var old= $('#modelo').data('old')!= '' ? $('modelo').data('old') : '';

            $('#modelo').empty();
            $('#modelo').append("<option value=''>Selecciona un modelo</option>");

            $.each(modelos, function(index, value){
                $('#modelo').append("<option value='"+ index +"'" + (old == index ? 'selected'))
            })


        });
    }

 };


});*/