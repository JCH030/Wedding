<?php
echo '
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const myAudio = document.getElementById("myAudio");

        const enableAudio = () => {
            myAudio.muted = false; // Unmute the audio
            myAudio.play()
                .then(() => console.log("Audio is playing"))
                .catch(error => console.error("Audio play failed:", error));
            document.removeEventListener("click", enableAudio);
            document.removeEventListener("scroll", enableAudio);
        };

        // Add listeners for user interaction
        document.addEventListener("click", enableAudio);
        document.addEventListener("scroll", enableAudio);
    });
</script>

<audio id="myAudio" autoplay loop muted>
    <source src="./music/brigerton.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
';
?>


<!-- Include Code -->

<?php
    // Include the PHP file
    // include('include.php');
  ?>
  