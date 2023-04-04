<html>
<head>
    <title>YD1RUH</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "300%"
        }
    </script>
</head>
<body onload="zoom()">
    <?php
        $config_json = file_get_contents(__DIR__ ."/config.json");
        $decoded_json = json_decode($config_json, true);
        $config = $decoded_json['config'];
    ?>
    <h2>APRS Send Packet</h2>
    <form action="action.php" method="POST">
        <p style="font-size: 12px">Input your callsign and passcode</p>
        Callsign : <input type="text" name="callsign" value="<?php echo $config['call']; ?>"> <br>
        Passcode : <input type="text" name="passcode" value="<?php echo $config['pass']; ?>"> <br><br>
        <p style="font-size: 12px">format DMS, don't forget add N/S and S/E</p>
        Lat : <input type="text" name="lat" placeholder="ex:0611.04S" value="<?php echo $config['lat']; ?>"> <br>
        Long : <input type="text" name="long" placeholder="ex:10643.18E" value="<?php echo $config['long']; ?>"> <br><br>
        <p style="font-size: 12px">Input server information</p>
        Server : <input type="text" name="server" placeholder="ex:asia.aprs2.net"> <br>
        Port : <input type="text" name="port" placeholder="ex:14580"> <br>
        <input type="hidden" name="form_submitted" value="1" /> <br>
        <input type="submit" onclick="return confirm('save the config ?');" value="Submit">
    </form>
    <button id="myBtn">Back </button>
    <script>
        var btn = document.getElementById('myBtn');
        btn.addEventListener('click', function() {
        document.location.href = '<?php echo "index.php"; ?>';
        });
    </script>
</body>
</html>
