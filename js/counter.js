(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let birthday = "Feb 28, 2021 00:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function () {

            let now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById("days").innerText = pad(Math.floor(distance / (day)), 2);
            document.getElementById("hours").innerText = pad(Math.floor((distance % (day)) / (hour)), 2);
            document.getElementById("minutes").innerText = pad(Math.floor((distance % (hour)) / (minute)), 2);
            document.getElementById("seconds").innerText = pad(Math.floor((distance % (minute)) / second), 2);
        }, 0)
}());

function pad(num, size) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}