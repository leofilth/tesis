/**
 * Created by leon on 19-12-2016.
 */
/**
 * Sonidos
 */
$(document).ready(function() {

    var audio = $("#mySoundClip");
    $("#fruta").on({
        click: function () {
            /*var over = new Howl({
                src: ['public/sounds/80s_vibe.mp3']
            });
            over.play();*/
            audio.play();
        }
    });
    $("#toca").on({
        mouseover: function () {
            var sound = new Howl({
                src: ['public/sounds/over.wav']
            });
            sound.play();
        }
    });
});
