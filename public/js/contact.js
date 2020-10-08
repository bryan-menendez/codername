$(document).ready(function () {
    //console.log('gg');
    loadContactList();

    $('.btnAdd').on("click", function () {
        resetModalInput();
        resetMessages();
    });

    //Usar este formato para elementos creados de manera dinamica en la pagina (cargados via script)
    //envolver elementos en un objeto superior y referirse a ellos por clase
    $('#contactTable').on('click', '.btnEdit', function () {
        $.get(contactDetailsUrl + "/" + $(this).data("id"), function (data) {
            setupFormInputs($('#formEditContact'), data);
            resetMessages();
        });
    });

    $('#contactTable').on('click', '.btnDelete', function () {
        $.get(contactDetailsUrl + "/" + $(this).data("id"), function (data) {
            setupFormInputs($('#formDeleteContact'), data);
            $('#formDeleteContact').find(".contactData").text(data.name);
        });
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
                    //console.log( "Index #" + i + ": " + e );
                  });
            });
            
            $('#modalAddContact').find(".msg").html(html);
        });
    });

    $('#formEditContact').on("submit", function (event) {
        event.preventDefault();

        submitForm(this).then(function(){     
            loadContactList($('#page_id').attr('value'));
            $('#modalEditContact').modal("hide");
        }).catch(err => {

            let errors = err.responseJSON.errors;
            let html = '';

            $.each(errors, function(k,v){
                $.each( v, function( i, e ){
                    html += "<p>" + e + "</p>";
                    console.log( "Index #" + i + ": " + e );
                  });
            });
            
            $('#modalEditContact').find(".msg").html(html);
        });
    });

    $('#formDeleteContact').on("submit", function (event) {
        event.preventDefault();

        submitForm(this).then(function(){
            loadContactList($('#page_id').attr('value'));
            $('#modalDeleteContact').modal("hide");
        }).catch(err => {

            let errors = err.responseJSON.errors;
            let html = '';

            $.each(errors, function(k,v){
                $.each( v, function( i, e ){
                    html += "<p>" + e + "</p>";
                    console.log( "Index #" + i + ": " + e );
                  });
            });
            
            $('#modalDeleteContact').find(".msg").html(html);
        });
    });
});

function loadContactList(page_id = 1) {
    $.get(contactListUrl + "?page_id=" + page_id, function (data, state) 
    {
        $("#contactTable").html(data);
        $('.pageList').on('click', '.page-link', function (event) {
            event.preventDefault();
            loadContactList($(this).html());            
        });
        $('#page_id').attr('value', page_id);
    });
}