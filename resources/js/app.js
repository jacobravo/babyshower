require('./bootstrap');
require('sweetalert2');
window.Vue = require('vue');

new Vue({
    el: '#app',
    data: {
       mail: "",
       nombreBebe: "",
       nombreMama: "",
       nombrePapa: "",
       fechaNacimiento: "",
       fechaBabyshower: ""
    },
    methods: {
        getRetorno: function(event){

            var mail = document.getElementById("mail").value;
            var nombreBebe = document.getElementById("nombreBebe").value;
            var nombreMama = document.getElementById("nombreMama").value;
            var nombrePapa = document.getElementById("nombrePapa").value;
            var fechaNacimiento = document.getElementById("fechaNacimiento").value;
            var fechaBabyshower = document.getElementById("fechaBabyshower").value;

            if(mail == ""){alert('Por favor ingrese un email'); return false;}
            if(nombreBebe == ""){alert('Por favor ingrese el nombre del bebé'); return false;}
            if(nombreMama == ""){alert('Por favor ingrese el nombre de la mamá'); return false;}
            if(nombrePapa == ""){alert('Por favor ingrese el nombre del papá'); return false;}
            if(fechaNacimiento == ""){alert('Por favor ingrese la fecha de nacimiento de su bebé'); return false;}
            if(fechaBabyshower == ""){alert('Por favor ingrese la fecha programada para el babyshower'); return false;}

            $.post('crearBabyshower',
            {
                _token:document.getElementById("token").value,
                mail: mail,
                nombreBebe: nombreBebe,
                nombreMama: nombreMama,
                nombrePapa: nombrePapa,
                fechaNacimiento: fechaNacimiento,
                fechaBabyshower: fechaBabyshower
            }, function(data){
                document.open();
                document.write(data);
                document.close();
            });
        },
        agregar: function(event, id_producto){

            $.post('agregarArticulo',
            {
                _token:document.getElementById("token").value,
                art : id_producto,
                babysh: document.getElementById("link").value
            }, function(data){
                location.reload();
            });
        },
        quitar: function(event, id_producto){

            $.post('quitarArticulo',
            {
                _token:document.getElementById("token").value,
                art : id_producto,
                babysh: document.getElementById("link").value
            }, function(data){
                location.reload();
            });
        },
        comprar: function(event, id_producto){

            $.post('comprarArticulo',
            {
                _token:document.getElementById("token").value,
                art : id_producto,
                babysh: document.getElementById("link").value
            }, function(data){
                location.reload();
            });
        }
    }
});