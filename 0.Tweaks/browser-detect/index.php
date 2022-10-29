<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Detect</title>
</head>

<body>
    <div class="nm_browser_alert"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        var nm_browser_alert = $('.nm_browser_alert');
        nm_browser_alert.hide();
        var msg = "Please make sure your browser is Chrome or Firefox.";

        function nm_show_alert() {
            nm_browser_alert.show();
            nm_browser_alert.text(msg);
        }

        //if (navigator.userAgent.indexOf("Edge") > -1 && navigator.appVersion.indexOf('Edge') > -1) {
        if (/Edg/.test(navigator.userAgent)) {
            nm_show_alert();
        } else if (navigator.userAgent.indexOf("Opera") != -1 || navigator.userAgent.indexOf('OPR') != -1) {
            nm_show_alert();
        } else if (navigator.userAgent.indexOf("Chrome") != -1) {
            nm_browser_alert.hide();
        } else if (navigator.userAgent.indexOf("Safari") != -1) {
            console.log('Safari');
        } else if (navigator.userAgent.indexOf("Firefox") != -1) {
            nm_browser_alert.hide();
        } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
        {
            nm_show_alert();
        } else {
            nm_show_alert();
        }
    </script>
</body>

</html>