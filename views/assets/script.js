function novoVeiculo(url) {

    $("#form-veiculo").attr("action", url);

    $(".titulo-modal").text("Inserir novo veículo");
    $("#modelo-carro").val("");
    $("#modelo-carro").attr("placeholder", "Insira o modelo do veículo");
    $("#marca-carro").val("");
    $("#marca-carro").attr("placeholder", "Insira a marca do veículo");
    $("#ano-carro").val("");
    $("#ano-carro").attr("placeholder", "Insira o ano do veículo");
    $("#desc-carro").val("");

    $(".form-check.my-3").hide();
}

function editarVeiculo(id, url) {
    $("#form-veiculo").attr("action", url);
    $(".titulo-modal").text("Detalhes");
    $("#modelo-carro").attr("placeholder", "");
    $("#marca-carro").attr("placeholder", "");
    $("#ano-carro").attr("placeholder", "");

    $.ajax({
        url: ("http://localhost/projects/php-test/app/?fn=showSingle&id=" + id)
    }).done(function(data){
        console.log(data.descricao);
        $("#modelo-carro").attr("value", data.modelo);
        $("#marca-carro").attr("value", data.marca);
        $("#ano-carro").attr("value", data.ano);
        $("#desc-carro").text(data.descricao);
    });

}

$("#btn-submit").click(function(ev){
   ev.preventDefault();

   if($("#modelo-carro").val() == "") {
        $("#msg-form").addClass("d-block");
        $("#msg-form").removeClass("d-none");
        $("#modelo-carro").addClass("border-danger");
        return;
   } else {
        $("#msg-form").removeClass("d-block");
        $("#msg-form").addClass("d-none");
        $("#modelo-carro").removeClass("border-danger");
   }

   if($("#marca-carro").val() == "") {
        $("#msg-form").addClass("d-block");
        $("#msg-form").removeClass("d-none");
        $("#marca-carro").addClass("border-danger");
        return;
   } else {
        $("#msg-form").removeClass("d-block");
        $("#msg-form").addClass("d-none");
        $("#marca-carro").removeClass("border-danger");
   }

   if($("#ano-carro").val() == "") {
        $("#msg-form").addClass("d-block");
        $("#msg-form").removeClass("d-none");
        $("#ano-carro").addClass("border-danger");
        return;
   } else {
        $("#msg-form").removeClass("d-block");
        $("#msg-form").addClass("d-none");
        $("#ano-carro").removeClass("border-danger");
   }

   if($("#desc-carro").val() == "") {
        $("#msg-form").addClass("d-block");
        $("#msg-form").removeClass("d-none");
        $("#desc-carro").addClass("border-danger");
        return;
   } else {
        $("#msg-form").removeClass("d-block");
        $("#msg-form").addClass("d-none");
        $("#desc-carro").removeClass("border-danger");
   }

   $("#form-veiculo").submit();

});

$("document").ready(function(){
    var url = window.location.href;
    if(url.includes("?")) {
        var url_params = url.split("?");
        url_params = url_params[1].split("&");
        var msg_param = url_params.map(function(el){
            return (el.split("="))[1];
        });

        console.log(msg_param);

        if(msg_param[0] == "success") {

            if(msg_param[1] == "create") {
                $("#info-msg").text("Veículo cadastrado com sucesso!");
            }

            if(msg_param[1] == "update") {
                $("#info-msg").text("Veículo atualizado com sucesso!");
            }

            $("#info-container").removeClass("d-none");
            $("#info-container").removeClass("bg-danger");
            $("#info-container").addClass("bg-info");

            setTimeout(function() {
                $("#info-container").addClass("d-none");
            }, 3000);

        }

        if(msg_param[0] == "failed") {

            if(msg_param[1] == "create") {
                $("#info-msg").text("Falha ao cadastrar veículo");
            }

            if(msg_param[1] == "update") {
                $("#info-msg").text("Falha ao atualizar veículo");
            }

            $("#info-container").removeClass("d-none");
            $("#info-container").removeClass("bg-info");
            $("#info-container").addClass("bg-danger");

            setTimeout(function() {
                $("#info-container").addClass("d-none");
            }, 3000);

        }

    }

});

$("li.list-group-item").mouseover(function(ev){

    var id = ev.target.id;

    $.ajax({
        url: ("http://localhost/projects/php-test/app/?fn=showSingle&id=" + id)
    }).done(function(data){
        $("#cur-vehicle-modelo").text(data.modelo);
        $("#cur-vehicle-marca").text( data.marca);
        $("#cur-vehicle-ano").text(data.ano);
        $("#cur-vehicle-desc").text(data.descricao);
    });

});
