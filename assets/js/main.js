let btn = document.querySelector("#playBtn");
let audio = document.createElement("audio");

let isPlaying = false;

btn.addEventListener("click", () => {
    if (!isPlaying) {
        isPlaying = true
        audio.setAttribute("src", "./assets/music/WeAreRemake.mp3");
        audio.volume = 0.1;
        audio.play();
        btn.style.backgroundImage = 'url("./assets/img/unmute.png")';
    } else if (isPlaying) {
        isPlaying = false;
        audio.pause();
        btn.style.backgroundImage = 'url("./assets/img/mute.png")';
    }
    console.log(isPlaying);
})