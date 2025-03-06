
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michelle Time Zone (MTZ)</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #FFDAB9; /* Peach pink background */
        }
        .content {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .time {
            font-size: 2em;
            color: #333;
        }
        .title {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #333;
        }
        .paragraph {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="title">Michelle Time Zone (MTZ)</div>
        <div class="paragraph">Michelle's 🧠 typically operates at 🇬🇧🎡🏰, plus one hour. British  ☀️summer time included.</div>
        <div class="paragraph">Exception 1 for example "🕑 2PM ish" means between "🕑2PM and 🕝2:30PM".</div>
        <div class="paragraph">Exception 2 for example "around 🕐 1PM" means between "🕐1PM and 🕐1:15PM".</div>
        <div class="time" id="time"></div>
        <p><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/> <a href="https://github.com/MichelleFindlay/time.lp0.uk" target="_BLANK"><img src="https://img.shields.io/badge/View%20Source-100000?style=for-the-badge&logo=github&logoColor=white&text=View"/></a></p>
    </div>

    <script>
        function displayTime() {
            // Get the current time in UTC
            const currentTime = new Date();
            
            // Add one hour to the current time
            currentTime.setHours(currentTime.getHours() + 1);
            
            // Format the new time
            const formattedTime = currentTime.toISOString().slice(0, 19).replace('T', ' ');
            
            // Display the time in the middle of the page
            document.getElementById('time').textContent = formattedTime;
        }

        // Update the time every second
        setInterval(displayTime, 1000);

        // Initial call to display the time immediately
        displayTime();
    </script>
</body>
</html>
