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

function editarVeiculo(url) {
    $(".titulo-modal").text("Detalhes");
    $("#modelo-carro").attr("placeholder", "");
    $("#marca-carro").attr("placeholder", "");
    $("#ano-carro").attr("placeholder", "");
}