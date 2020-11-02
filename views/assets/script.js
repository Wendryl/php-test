function novoVeiculo() {
    
    $(".titulo-modal").text("Inserir novo veículo");
    $("#modelo-carro").val("");
    $("#modelo-carro").attr("placeholder", "Insira o modelo do veículo");
    $("#marca-carro").val("");
    $("#marca-carro").attr("placeholder", "Insira a marca do veículo");
    $("#ano-carro").val("");
    $("#ano-carro").attr("placeholder", "Insira o ano do veículo");

    $(".form-check.my-3").remove();
}