$("#departamento").change(event => {
	$.get(`provincias/${event.target.value}`, function(res, sta){
		$("#provincia").empty();
        $("#distrito").empty();
        $distrito = `${event.target.value}`;
        $("#distrito").append(`<option> Seleccione una opcion </option>`);

        $("#provincia").append(`<option> Seleccione una opcion </option>`);
		res.forEach(element => {
			$("#provincia").append(`<option value=${element.id}> ${element.name} </option>`);
		});
	});
});


$("#provincia").change(event => {
    $.get(`distritos/${event.target.value}`, function(res, sta){
        $("#distrito").empty();
        $("#distrito").append(`<option> Seleccione una opcion </option>`);

        res.forEach(element => {
            $("#distrito").append(`<option value=${element.id}> ${element.name} </option>`);
        });
    });
});
