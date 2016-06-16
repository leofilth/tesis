/**
 * Created by leon on 30-05-2016.
 */
var elige="Elige una fruta";
var desc="Te enseñare sobre ella";
$(document).ready(function(){
    $("p").on({
        click: function(){
            $("#hola").css("background-color", "yellow");
            $("#hola").text("Cambiando dinamicamente con JQuery");
        }
    });
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
            $("#explica").text(elige);
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
            $("#explica").text(elige);
            $("#descripcion").text(desc);
        }

    })
});
