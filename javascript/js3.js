function getpoke(){
   $('#table1 tr').each(function() {
       var userinput = $(this).find("td").eq(0).html();
   });
   alert("started");
   alert(userinput);
    var Json= "https://api.microlink.io?url="+userinput;

    $.getJSON(Json,function (data) {

        //alert(JSON.stringify(data,null," "));
        var pokename = data.name;
        var poketype = data.types[0].name;
        alert(pokename+poketype)
        $("#pokeholder").append(pokename+poketype);

    });
}