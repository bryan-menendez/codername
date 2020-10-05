console.log("loading utils");

// $("form").on("submit", function(event) {
//     event.preventDefault();
//     submitForm(this);
// });

async function submitForm(form){
    //console.log(form);
    var url = form.action;
    var formData = {};
    
    $(form).find("input[name]").each(function (index, node) {
        //console.log(node.name + ":" + node.value);
        formData[node.name] = node.value;
    });

    //console.log("form data: ");
    //console.log(formData);

    const dataset = await $.post(url, formData).always(function (data) { //data = returned data
        //console.log("url to post: " + url);    
        console.log("response submitForm: ");
        console.log(data);
        return data;
    });
}

function setupFormInputs(form, json)
{
    for (let key in json) {
        if (key != "_token" && key != "_method")
        {
            $(form).find("input[name="+key+"]").val(json[key]);
            //console.log(key + ":" + json[key])
        }
    }
}

function resetModalInput() {
    $('.modal').find('input[name]').each(function () {
        if ($(this).attr("name") != "_token" && $(this).attr("name") != "_method") {
            //console.log($(this));
            $(this).val("");
        }
    });
}

function resetMessages(){
    $('.msg').html("");
}


