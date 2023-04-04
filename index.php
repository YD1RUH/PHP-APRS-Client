<html>
<head>
    <title>YD1RUH</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "300%"
        }
    </script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#reloaddiv").load('reload.php')
            }, 1000);
        });
    </script>
</head>
<body onload="zoom()">

<div id="container">
    <div class="row single">
        <h2>APRS Send Packet</h2>
        <u>loaded config</u><br>
        <p style="font-size: 12px">
        <?php
        $config_json = file_get_contents(__DIR__ ."/config.json");
        $decoded_json = json_decode($config_json, true);
        $config = $decoded_json['config'];
        echo 'callsing : '.$config['call'];?><br><?php
        echo 'passcode : '.$config['pass'];?><br><?php
        echo 'lat : '.$config['lat'];?><br><?php
        echo 'long : '.$config['long'];?><br><?php
        echo 'port : '.$config['port'];?><br><?php
        echo 'server address : '.$config['server'];?><br><?php
        ?>
        </p>
        <button id="myBtn">Configuration </button>
        <script>
            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function() {
            document.location.href = '<?php echo "config.php"; ?>';
            });
        </script>
        <br><br>
        <button id="myBtn1">Send Messages</button>
        <script>
            var btn = document.getElementById('myBtn1');
            btn.addEventListener('click', function() {
            document.location.href = '<?php echo "send.php"; ?>';
            });
        </script>
        <button id="myBtn2">Beacon !</button>
        <script>
            var btn = document.getElementById('myBtn2');
            btn.addEventListener('click', function() {
            document.location.href = '<?php echo "beacon.php"; ?>';
            });
        </script>
    </div>
    <br>
    <u>Log Direwolf</u>
    <div id="reloaddiv" style="font-size: 50%" class="row double">
</div>
</div>
</body>
</html>
