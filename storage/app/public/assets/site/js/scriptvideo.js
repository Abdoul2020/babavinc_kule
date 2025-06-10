$(document).ready(function () {
    var preloaderVideo = $("#preloaderVideo"); // Access the image element


    // Function to handle actions after the image is loaded
    function handlePreloader() {
        if (preloaderVideo.length) {
            const dubaiLink = document.querySelector(
                ".link-boxx a:first-child"
            );
            const abudhabiLink = document.querySelector(
                ".link-boxx a:nth-child(2)"
            );
            const message = document.querySelectorAll(".description__message");

            // Initially hide the buttons until the video is about to end
            dubaiLink.style.opacity = "0";
            abudhabiLink.style.opacity = "0";

            // Check if the image exists
            // Handle the image load event
            preloaderVideo.on("load", function () {
                

                // Make links and messages visible and start animations

                document.querySelectorAll(".link-boxx a").forEach((link) => {
                    // link.style.opacity = '1'; // Make the link visible just before the animation starts
                    link.style.display = "block";
                });

                message.forEach((messages) => {
                    messages.classList.add("show-message");
                });
                // Trigger animations by adding classes that apply the animation CSS
                dubaiLink.style.opacity = "1";
                abudhabiLink.style.opacity = "1";
                dubaiLink.style.animation = "moveFromLeftToCenter 3s forwards";
                abudhabiLink.style.animation =
                    "moveFromRightToCenter 3s forwards";
            });

            // Trigger the load event in case the image was cached and loaded before the script runs
            if (preloaderVideo.get(0).complete) {
                preloaderVideo.trigger("load");
            }
        }
    }

    // Call the preloader handler function
    handlePreloader();
});
