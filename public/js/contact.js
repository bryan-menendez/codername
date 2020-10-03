$(document).ready(function () {
    console.log('gg');
    loadContactList();

    $('.btnAdd').on("click", function () {
        resetModalInput();
    });

    //Usar este formato para elementos creados de manera estatica en la pagina (pre cargados)
    $('#formAddContact').on("submit", function (event) {
        event.preventDefault();

        submitForm(this).then(function(){     
            loadContactList();
            $('#modalAddContact').modal("hide");
        }).catch(err => {

            let errors = err.responseJSON.errors;
            let html = '';

            $.each(errors, function(k,v){
                $.each( v, function( i, e ){
                    html += "<p>" + e + "</p>";
                    console.log( "Index #" + i + ": " + e );
                  });
            });
            
            $('#modalAddContact').find(".msg").html(html);
        });
        
        //let response = submitForm(this);


    });

    //Usar este formato para elementos creados de manera dinamica en la pagina (cargados via script)
    //envolver elementos en un objeto superior y referirse a ellos por clase
    $('#contactTable').on('click', '.btnEdit', function () {
        $.get(contactDetailsUrl + "/" + $(this).data("id"), function (data) {
            setupFormInputs($('#formEditContact'), data);
        });
    });

    $('#contactTable').on('click', '.btnDelete', function () {
        $.get(contactDetailsUrl + "/" + $(this).data("id"), function (data) {
            setupFormInputs($('#formDeleteContact'), data);
            $('#formDeleteContact').find(".contactData").text(data.name);
        });
    });

    $('#formEditContact').on("submit", function (event) {
        event.preventDefault();
        let response = submitForm(this);
        console.log("response: ");
        console.log(response);
        loadContactList();
        $('#modalEditContact').modal("hide");
    });
});

function loadContactList() {
    $.get(contactListUrl, function (data, state) {
        $("#contactTable").html(data);
    });
}

function resetModalInput() {
    $('.modal').find('input[name]').each(function () {
        if ($(this).attr("name") != "_token" && $(this).attr("name") != "_method") {
            //console.log($(this));
            $(this).val("");
        }
    });
}


