$(document).ready(function () {
    //const URL = '../src/Ajax.php';

    $("button[name='cadastro_contato_cadastrar']").click(function () {
        evento = $(this).val();
        url = '../src/Ajax.php';
        data = { 'evento': evento };
        alert("Ação performada:" + evento);

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (resposta) {
                if (resposta = 'TRUE') {
                    console.log(resposta);
                    console.log(typeof (resposta)); // server response
                }
            },
            error: function (resposta) {
                if (resposta = 'FALSE') {
                    console.log(resposta);
                    console.log(typeof (resposta)); // server response
                }
            }
        });
    });
});