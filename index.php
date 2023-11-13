<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talitha's Birthday</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <audio id="myAudio" autoplay="autoplay" loop>
        <source src="audio/birthday.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
    <div class="containerr">
    <div class="header">
                <div class="ahah">
                <h1>COMING <span>TALITHA'S </span>BIRTHDAY</h1>
                <div class="countdown">00 : 00 : 00 : 00</div>
                </div>
            </div class="header">
        <div id="slide">
            <div class="item" style="background-image: url(photo/1.jpg);">
                <div class="content">
                <h1>Hi!, <span class="element"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark1" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton">Play Song</button>
                </div>
            </div>
            <div class="item" style="background-image: url(photo/6.jpg);">
                <div class="content">
                <h1>Hi!, <span class="element6"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark2" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton2">Play Song</button>
                </div>
            </div>
            <div class="item" style="background-image: url(photo/3.jpg);">
                <div class="content">
                <h1>Hi!, <span class="element2"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark3" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton3">Play Song</button>
                </div>
            </div>
            <div class="item" style="background-image: url(photo/4.jpg);">
                <div class="content">
                <h1>Hi!, <span class="element3"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark4" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton4">Play Song</button>
                </div>
            </div>
            <div class="item" style="background-image: url(photo/5.jpg);">
                <div class="content">
                <h1>Hi!, <span class="element4"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark5" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton5">Play Song</button>
                </div>
            </div>
            <div class="item" style="background-image: url(photo/2.jpg);">
                <div class="content">
                    <h1>Hi!, <span class="element5"></span></h1>
                    <div class="des">Birthday Content, <mark id="mark6" style="background-color:#FB8B24;padding:2px; border-radius:5px;">☟ Play this birthday song for you</mark></div>
                    <button type="button"  class="btn btn-dark" id="playButton6">Play Song</button>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton');


            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton2');


            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none'; // Hide the play button after clicking
                markButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton3');

            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none';
                markButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton4');

            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none';
                markButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton5');

            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none';
                markButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('myAudio');
            var playButton = document.getElementById('playButton6');

            playButton.addEventListener('click', function () {
                audio.play();
                playButton.style.display = 'none';
                markButton.style.display = 'none'; // Hide the play button after clicking
            });
        });
    </script>
    <script>
        var typed = new Typed(".element", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script>
        var typed = new Typed(".element2", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script>
        var typed = new Typed(".element3", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script>
        var typed = new Typed(".element4", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script>
        var typed = new Typed(".element5", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script>
        var typed = new Typed(".element6", {
        strings: ["Talitha Syahda Amany", "Selamat Ulang Tahun ke - 24", "Panjang Umur Sehat Selalu Heppyy", "Bunch photo buat menemani dini hari", "Also Chill aja di Manchester", "I support you", " ( ＾◡＾)"],
        typeSpeed: 50,
        backspeed : 150,
        loop : true,
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
  