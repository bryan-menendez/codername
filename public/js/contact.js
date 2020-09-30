$(document).ready(function () {
    console.log('gg');
    getContactList();
});

function getContactList()
{
    $.get(contactListUrl, function(data, state)
    {
        $("table tbody").html(data);
    });
}

function resetModals()
{
    $('.modal').find('input').each(function()
    {
        $(this).val(null);
    });
}

$('#formAddContact').on("submit", function(event) {
        event.preventDefault();
        submitForm(this);
        getContactList();
        $('#modalAddContact').modal("hide");
});

function store()
{
    $.ajax({
        method: 'POST',
        url: '/contacts/store',
        data: getInputs(),
        dataType: 'JSON',
        success: function(){
            console.log('inserted');
            getContactList();
        }
    });
}