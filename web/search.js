function search (){

    var keyword = document.getElementById('keyword').value;
    var myVariable;

$.ajax({
    'async': false,
    'type': "GET",
    'global': false,
    'dataType': 'html',
    'url': "/search",
    'data': { 'request': "", 'target': 'arrange_url', 'method': 'method_target' ,'title': keyword},
    'success': function (data) {
        myVariable = data;
        console.log(myVariable);
        document.getElementById('content').setAttribute("style", "background-image: url(" + myVariable + "); height:125px; width:200px;");
    }
});
}

