console.log("loading utils");

// $("form").on("submit", function(event) {
//     event.preventDefault();
//     submitForm(this);
// });

function submitForm(form){
    console.log(form);
    var url = form.action;
    var formData = {};
    
    $(form).find("input[name]").each(function (index, node) {
        console.log(node.name + ":" + node.value);
        formData[node.name] = node.value;
    });

    console.log("form data: ");
    console.log(formData);

    $.post(url, formData).always(function (data) { //data = returned data
        console.log("url to post: " + url);    
        console.log("response: ");
        console.log(data);
        return data;
    });
}




