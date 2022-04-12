$(document).ready(function() {
    $('input').each(function () {
        if ($(this).val() == '' || $(this).val() == null || $(this).val().length == 0) {
            empty = true;
        }
    });

    //Desabilitar botão caso formulario não estiver preenchido
    if (empty) {
        $('#botao').attr("disabled", true);
        $('#botao').addClass("uk-button-disabled");
        $('#botao').removeClass("uk-button");

  
    //Habilitar botao caso formulario estiver preenchido
    } else {
        $('#botao').attr("disabled", false);
        $('#botao').removeClass("uk-button-disabled");
        $('#botao').addClass("uk-button");
    }
});

$('input').keyup(function () {
    var empty = false;
    $('input').each(function () {
        if ($(this).val() == '' || $(this).val() == null || $(this).val().length == 0) {
            empty = true;
        }
    });

    //Desabilitar botão caso formulario não estiver preenchido
    if (empty) {
        $('#botao').attr("disabled", true);
        $('#botao').addClass("uk-button-disabled");
        $('#botao').removeClass("uk-button");

  
    //Habilitar botao caso formulario estiver preenchido
    } else {
        $('#botao').attr("disabled", false);
        $('#botao').removeClass("uk-button-disabled");
        $('#botao').addClass("uk-button");
    }
});
