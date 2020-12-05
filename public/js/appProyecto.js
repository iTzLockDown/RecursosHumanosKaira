var distrito =null;
var link =null;
var state =null;
$(document).ready(function(){
    $("#principal-one").css({"height":$(window).height() + "px"});
    var flag = false;
    var scroll;
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 70){
            if(!flag){
                $("#main-header").css({"background-color": "#000",
                    "height":"7.4rem",
                    "transition": "0.2s"});
                $("#main-header").css({"height": ""});
                $("#main-header-h").css({"display": "none"});
                $("#main-menu").css({"transition": "0.6s",
                    "margin-top": "-2.2rem"});
                $("#main-header-first").css({"display": "none"});
                $("#line-first").css({"display": "none"});
                // $("#img-div").css({"transition": "0.6s",
                //     "margin-top": "-1.6rem"});
                //
                // $("#mobile-menu-button").css({"float": "rigth",
                //     "margin-top": "-.8rem",
                //     "font-size":"1.2rem"});
                flag = true;
            }
        }else{
            if(flag){
                $("#main-header").css({"background-color": "#000",
                    "background-size": "cover",
                    "transition": "0.1s"});
                $("#main-header-h").css({"display": "block"});

                $("#main-menu").css({"transition": "0.6s",
                    "padding-top": "1.6rem",
                    "margin-top": "0"  });
                $("#main-header-first").css({"display": "block"});
                $("#line-first").css({"display": "block"});
                // $("#img-div").css({"margin-top": "0"});
                //
                // $("#mobile-menu-button").css({"float": "rigth",
                //     "margin-top": "-4.4rem",
                //     "font-size":"1.2rem"});
                flag = false;
            }
        }
    });
});

$("#departamento").change(event => {
    $.get(`provincias/${event.target.value}`, function(res, sta){
        $("#provincia").empty();
        $("#distrito").empty();
        $state = 'dep';
        $distrito = null;
        $distrito = `${event.target.value}`;
        $("#distrito").append(`<option> Seleccione una opcion </option>`);

        $("#provincia").append(`<option> Seleccione una opcion </option>`);

        $("#emisora").empty();
        $("#emisora").append(`<option> Seleccione una opcion </option>`);
        $("#emisora").append(`<option value=RADIO> Radio </option>`);
        $("#emisora").append(`<option value=TELEVISION> Television </option>`);

        res.forEach(element => {
            $("#provincia").append(`<option value=${element.id}> ${element.name} </option>`);
        });
    });

    $.get(`emisorabusprov/${event.target.value}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);
        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });
});


$("#provincia").change(event => {
    $.get(`distritos/${event.target.value}`, function(res, sta){
        $state  = 'prov';
        $distrito = null;

        $distrito = `${event.target.value}`;
        $("#distrito").empty();
        $("#distrito").append(`<option> Seleccione una opcion </option>`);

        $("#emisora").empty();
        $("#emisora").append(`<option> Seleccione una opcion </option>`);
        $("#emisora").append(`<option value=RADIO> Radio </option>`);
        $("#emisora").append(`<option value=TELEVISION> Television </option>`);
        res.forEach(element => {
            $("#distrito").append(`<option value=${element.id}> ${element.name} </option>`);
        });
    });

    $.get(`emisorabusprovincia/${event.target.value}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);
        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });

});

$("#distrito").change(event => {

        $distrito = null;

        $distrito = `${event.target.value}`;
        $state  = 'dist';
        $("#emisora").empty();
        $("#emisora").append(`<option> Seleccione una opcion </option>`);
        $("#emisora").append(`<option value=RADIO> Radio </option>`);
        $("#emisora").append(`<option value=TELEVISION> Television </option>`);

    $.get(`emisorabusdistrito/${event.target.value}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);
        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });
});

$("#distritoPobl").change(event => {

    $("#emisoraPobl").empty();
    $distrito = null;
    $distrito = `${event.target.value}`;
    $state  = 'dist';

    $("#emisoraPobl").append(`<option> Seleccione una opcion </option>`);
    $("#emisoraPobl").append(`<option value=RADIO> Radio </option>`);
    $("#emisoraPobl").append(`<option value=TELEVISION> Television </option>`);

    $.get(`emisorabus/${event.target.value}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);

        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });

});




$("#emisora").change(event => {
    console.log(`${event.target.value}`);
    $.get(`emisorasbus/${event.target.value}/${$distrito}/${$state}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);
        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });
});

$("#emisoraPobl").change(event => {
    console.log($state);
    console.log($distrito);
    $.get(`emisorasbus/${event.target.value}/${$distrito}/${$state}`, function(res, sta){
        $("#myTable").empty();
        $("#myTable").append(`<thead><tr><th>Nombre Cadena</th>` +
            `                     <th>Frecuencia</th>` +
            `                     <th>Email</th>` +
            `                     <th>Telefono</th><th></th></tr></thead>`);
        res.forEach(element => {
            $("#myTable").append(`<tr id="info"><td>${element.nombrecadena}</td>` +
                `                     <td>${element.numeroRadio} ${element.frecuencia}</td>` +
                `                     <td>${element.email}</td>` +
                `                     <td>${element.telefono}</td>` +
                `                     <td><button  data-toggle="modal" data-target="#myModal" onClick="alert(${element.id})">Ver</button></td></tr>`);
        });
    });
});
function alert($id)
{
    console.log('estamos aqui'+ $id);
    var tabladatos = $("#datos")
    var nombre = $("#nombreCadena")
    var respLegal=$("#respLegal");
    var repComercial=$("#repComercial");
    var ruc=$("#ruc");
    var direccion=$("#direccion");
    var frencuencia=$("#frencuencia");
    var numeroRad=$("#numeroRad");
    var email=$("#email");
    var telefono=$("#telefono");
    var autorizacion=$("#autorizacion");
    var periodista1=$("#periodista1");
    var telfper1=$("#telfper1");
    var periodista2=$("#periodista2");
    var telfper2=$("#telfper2");
    var estacion = $("#estacion");
    var website = $("#website");
    var websiteref = $("#websiteref");
    var href = document.getElementById('websiteref');
    $.get(`emisorabusquedaSu/${$id}`, function(res){
        nombre.empty();
        respLegal.empty();
        repComercial.empty();
        ruc.empty();
        direccion.empty();
        frencuencia.empty();
        numeroRad.empty();
        email.empty();
        estacion.empty();
        telefono.empty();
        autorizacion.empty();
        periodista1.empty();
        telfper1.empty();
        periodista2.empty();
        telfper2.empty();
        website.empty();
        websiteref.empty();
        link =null;
        nombre.append(res.nombrecadena);
        respLegal.append(res.representanteLegal);
        repComercial.append(res.representanteComercial);
        ruc.append(res.ruc);
        estacion.append(res.estacion);
        direccion.append(res.direccion);
        frencuencia.append(res.frecuencia);
        numeroRad.append(res.numeroRadio);
        email.append(res.email);
        telefono.append(res.telefono);

        autorizacion.append(res.autorizacion);
        periodista1.append(res.nomper1);
        telfper1.append(res.telper1);
        periodista2.append(res.nomper2);
        telfper2.append(res.telper2);

        websiteref.append(res.website);

        website.append(res.website);
        link = 'https://'+res.website+'/';
    });

}
function cargarpagina()
{
    window.open(link);
}
$("#emisoraPobl").change(event => {
    var tabladatos = $("#datos")
    var nombre = $("#nombreCadena")
    var respLegal=$("#respLegal");
    var repComercial=$("#repComercial");
    var ruc=$("#ruc");
    var direccion=$("#direccion");
    var frencuencia=$("#frencuencia");
    var numeroRad=$("#numeroRad");
    var email=$("#email");
    var telefono=$("#telefono");
    var autorizacion=$("#autorizacion");
    var periodista1=$("#periodista1");
    var telfper1=$("#telfper1");
    var periodista2=$("#periodista2");
    var telfper2=$("#telfper2");
    var estacion = $("#estacion");
    var website = $("#website");
    var websiteref = $("#websiteref");
    var href = document.getElementById('websiteref');

    $.get(`emisorabus/${event.target.value}`, function(res){
        nombre.empty();
        respLegal.empty();
        repComercial.empty();
        ruc.empty();
        direccion.empty();
        frencuencia.empty();
        numeroRad.empty();
        email.empty();
        estacion.empty();
        telefono.empty();
        autorizacion.empty();
        periodista1.empty();
        telfper1.empty();
        periodista2.empty();
        telfper2.empty();
        website.empty();
        websiteref.empty();
        link =null;
        nombre.append(res.nombrecadena);
        respLegal.append(res.representanteLegal);
        repComercial.append(res.representanteComercial);
        ruc.append(res.ruc);
        estacion.append(res.estacion);
        direccion.append(res.direccion);
        frencuencia.append(res.frecuencia);
        numeroRad.append(res.numeroRadio);
        email.append(res.email);
        telefono.append(res.telefono);

        autorizacion.append(res.autorizacion);
        periodista1.append(res.nomper1);
        telfper1.append(res.telper1);
        periodista2.append(res.nomper2);
        telfper2.append(res.telper2);

        websiteref.append(res.website);

        website.append(res.website);
        link = 'https://'+res.website+'/';
    });
});

function cambio() {
    var x = document.getElementById("departamentoPobl");
    var y = document.getElementById("distritosPobl");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        document.getElementById('cambiarBusqueda').innerHTML= 'Busqueda por Habitantes';

    } else {
        x.style.display = "none";
        y.style.display = "block";
        document.getElementById('cambiarBusqueda').innerHTML= 'Busqueda por Departamento';
    }
}
