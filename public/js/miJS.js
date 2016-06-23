/**
 * Created by leon on 30-05-2016.
 */
var fruta="Elige una Fruta";
var verdura="Elige Verdura";
var desc="Te enseñare sobre ella";
$(document).ready(function(){
    /*$(".nav-link-reg").on({
        click: function(){
            $(this).css("background-color", "orange");
            $("#hola").text("Cambiando dinamicamente con JQuery");
        }
    });*/
    $(".fruta").on({
        mouseenter:function(){
            var texto=$(this).attr("title");
            $("#explica").text(texto);
        },
        click:function(){
            var titulo=$(this).attr("title");
            var link=$(this).attr("src");
            console.log(link);
            var texto=$("#"+titulo).text();
            $("#modal-body").text(texto);
            $("#modal-title").text(titulo);
            $("#modalimg").attr("src",link);
        },
        mouseleave:function(){
            $("#explica").text(fruta);
            $("#descripcion").text(desc);
        }

    })
    $(".verduras").on({
        mouseenter:function(){
            var texto=$(this).attr("title");
            $("#explica2").text(texto);
        },
        click:function(){
            var titulo=$(this).attr("title");
            var link=$(this).attr("src");
            console.log(link);
            var texto=$("#"+titulo).text();
            $("#modal-body").text(texto);
            $("#modal-title").text(titulo);
            $("#modalimg").attr("src",link);
        },
        mouseleave:function(){
            $("#explica2").text(verdura);
            $("#descripcion").text(desc);
        }

    })
});
