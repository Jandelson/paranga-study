$(document).ready(function () {
    var dados_formulario = [];

    $("button[name='cadastro_contato_cadastrar']").click(function () {
        url = '../src/Ajax.php';
        evento = $(this).val();

        $.each($('form').serializeArray(), function () {
            dados_formulario[this.name] = this.value;
        });

        $.ajax({
            type: "POST",
            url: url,
            data: data = [
                evento,
                dados_formulario
            ],
            success: function (resposta) {
                if (resposta = 'TRUE') {
                    console.log(resposta)
                }
            },
            error: function (resposta) {
                if (resposta = 'FALSE') {
                    console.log(resposta)
                }
            }
        });
    });
});