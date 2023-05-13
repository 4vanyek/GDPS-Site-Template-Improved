<?php
include 'config.php';
?>

<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDPS</title>
    <link rel="stylesheet" type="text/css" href="files/style.css">
</head>

<body style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(190,0,255,1) 100%);">
    <center>
        <img src="logo.png" style="max-width: 65%; max-height: 40%;">

        <div class="upper_btn">
            <br>
            <br>
            <br>
            <!-- Upper buttons -->
            <a href="<?php echo $windows; ?>.zip"download><img src="files/windows.png" width="25%" hspace="12"></a>
            <a href="<?php echo $android; ?>.apk"download><img src="files/android.png" width="25%" hspace="12"></a>
            <a href="<?php echo $tools; ?>"><img src="files/tools.png" width="25%" hspace="12"></a>
            <!-- Add buttons below -->
        </div>

        <br>

        <div class="lower_btn">
            <!-- Lower buttons -->
            <a href="<?php echo $youtube; ?>" target="_blank"><img src="files/youtube.png" width="25%" hspace="12"></a>
            <a href="<?php echo $discord; ?>" target="_blank"><img src="files/discord.png" width="25%" hspace="12"></a>
            <!-- Add buttons below -->
        </div>
        
        <br>
        <img src="files/about.png" style="max-width: 30%; height: auto;">
        
        <div class="text">
            <span class="white"><?php echo $about; ?></span>
        </div>

        <div class="text">
            <!-- Do not remove pls -->
            <span class="white">Original template by <span class="blue"><u><a href="https://www.youtube.com/c/ParadoxGDPS"
                            target="_blank">Starmor</a></u></span>, improved template by <span class="blue"><u><a href="https://github.com/4vanyek/" target="_blank">4vanyek</a></u></span>
        </div>
    </center>
</body>

</html>