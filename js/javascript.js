
$(document).ready(function() {
    $("#FormCadastro").on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: 'controller/controllerCadastro.php',
            type: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.OKAY').show().html(Dados);
            }
        });
    });
});﻿

/* Confirmar antes de deletar os dados */

$(document).ready(function() {
    $('.Deletar').on('click',function(event){
        event.preventDefault();

        var Link=$(this).attr('href');

        if(confirm("Deseja mesmo apagar esse dado?")){
            window.location.href=Link;
        }else{
            return false;
        }
    });
});﻿



