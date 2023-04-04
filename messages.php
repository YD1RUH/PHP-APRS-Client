<html>
<head>
    <title>YD1RUH</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "300%"
        }

        $(document).ready(function(){
            setInterval(function(){
                $("#reloaddiv").load('reload.php')
            }, 1000);
        });

        $(document).ready(function(){
            setInterval(function(){
                $("#reloaddiv2").load('reloadMessages.php')
            }, 1000);
        });
    </script>
</head>
<body onload="zoom()">

<div id="container">
    <div class="row single">
    <?php
        $config_json = file_get_contents(__DIR__ ."/messages.json");
        $decoded_json = json_decode($config_json, true);
        $partner = $decoded_json['msg'];
    ?>
    <h2>APRS Send Packet</h2>
    <form action="send.php" method="POST">
        <p style="font-size: 12px">Input your partner callsign</p>
        Callsign : <input type="text" name="partner" value="<?php echo $partner['partner']; ?>"> <br><br>
        Messages : <input type="text" name="messages"> <br>
        <input type="hidden" name="form_submitted" value="1" /> <br>
        <input type="submit" value="Send">
    </form>
    <button id="myBtn">Back </button>
    <script>
        var btn = document.getElementById('myBtn');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo "index.php"; ?>';
        });
    </script>
    <br>
    </div>
    <br>
    <u>Log Messages</u>
    <div id="reloaddiv2" style="font-size: 50%" class="row double">
    </div>
    <br>
    <u>Log Direwolf</u>
    <div id="reloaddiv" style="font-size: 50%" class="row double">
    </div>
</div>
</body>
</html>
