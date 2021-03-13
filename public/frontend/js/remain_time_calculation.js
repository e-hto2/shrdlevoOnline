var timeInterval = null;
var COLOR_CODES = {
    info:{
        color: "green"
    }
};
var remainingPathColor = COLOR_CODES.info.color;
function startTimer(){
    timeInterval = setInterval(function() {
        timePassed = timePassed + 1;
        timeleft = TIME_LIMIT - timePassed;
        if (timeleft == 0){
            clearInterval(timeInterval);
            alert("Game finished");
        }
        document.getElementById('base-timer-label').innerHTML = formatTimeLeft(timeleft);
    }, 1000);
}
function formatTimeLeft(time){
    var minutes = Math.floor(time/60);
    var seconds = time % 60;
    if (seconds < 10){
        seconds = '0' + seconds;
    }
    return minutes + ":" + seconds;
}
startTimer();
document.getElementById('app').innerHTML = '<div class="base-timer">\n' +
    '    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">\n' +
    '        <g class="base-timer__circle">\n' +
    '            <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45" />\n' +
    '<path\n' +
    '        id="base-timer-path-remaining"\n' +
    '        stroke-dasharray="283"\n' +
    '        class="base-timer__path-remaining '+remainingPathColor+'"\n' +
    '        d="\n' +
    '          M 50, 50\n' +
    '          m -45, 0\n' +
    '          a 45,45 0 1,0 90,0\n' +
    '          a 45,45 0 1,0 -90,0\n' +
    '        "\n' +
    '      ></path>' +
    '        </g>\n' +
    '    </svg>\n' +
    '    <span id="base-timer-label" class="base-timer__label">\n' +
    formatTimeLeft(timeleft) +
    '  </span>\n' +
    '</div>';