   

$(document).ready(function () {
    // Set the target date and time (in ISO format)
    const target = new Date("<?= $formatted_time ?>").getTime();

    // Update the countdown every second
    setInterval(function () {
        const now = new Date().getTime();
        const timeRemaining = target - now;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        // Display the result in the respective elements
        $("#day").text(days.toString().padStart(2, '0'));
        $("#hour").text(hours.toString().padStart(2, '0'));
        $("#minute").text(minutes.toString().padStart(2, '0'));
        $("#second").text(seconds.toString().padStart(2, '0'));

        // If the countdown is finished, show "00" for all values
        if (timeRemaining < 0) {
            $("#day").text("00");
            $("#hour").text("00");
            $("#minute").text("00");
            $("#second").text("00");
        }
    }, 1000);
});




   