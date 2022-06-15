<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv= "x-ua-compatible" content= "ie=edge">
        <meta meta name= "viewport" content= "width=device-width initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <title>ak studio</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
<div class="headding">
        <?php
        @include 'header.php';
        ?>
</div>
<div class="paragraph">
<p> Hey! I'm <strong>Shanmugananthan</strong> from <strong>Bangalore, India.</strong>. Currently Working in<strong>M-Tutor</strong>. <br>I Like <strong>Web Development</strong> </p>
</div>
<br>
<br>
             <center><div id="clock">8:10:45</div></center>
             <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
 
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
 
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
 
            let currentTime = hour + ":"
                + min + ":" + sec + am_pm;
 
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
 
        showTime();
    </script>
    </body>
</html>