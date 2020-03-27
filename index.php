<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="gassets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="gassets/css/styles.css">
</head>

<body style="background-image:url(&quot;gassets/img/seamless-pattern-with-red-paper-hearts-black-background_9677-182.jpg&quot;);">
    <script language="javascript" type="text/javascript">
        var request = false;
        try {
            request = new XMLHttpRequest();
        } catch (trymicrosoft) {
            try {
                request = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (othermicrosoft) {
                try {
                    request = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (failed) {
                    request = false;
                }
            }
        }
        if (!request)
            alert("Error initializing XMLHttpRequest!");

        function updateDiv(person1, person2) {
            var url = "calc.php";
            var params = "p1=" + person1 + "&p2=" + person2;
            request.open("POST", url, true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.setRequestHeader("Content-length", params.length);
            request.setRequestHeader("Connection", "close");
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    var response = request.responseText;
                    document.getElementById('targetDiv').innerHTML = response + "%               ";
                }
            }
            request.send(params);
        }

    </script>
    <div class="container">
        <h1 class="text-center" style="color:#e0e0e0;font-family:Lobster, cursive;font-size:52px;height:56px;margin:44px 0px 10px;">Love</h1>
    </div>
    <div class="container">
        <h1 class="text-center" style="color:#e0e0e0;font-family:Lobster, cursive;font-size:52px;">Calculator</h1>
    </div>
    <div class="container">
        <h1 style="font-family:Lobster, cursive;color:#e0e0e0;"></h1>
    </div>
    <div class="container">
        <form class="d-inline d-flex flex-column justify-content-center align-items-center align-content-center align-self-center flex-wrap order-3 mt-auto" action="#" method="post" target="_parent" style="margin:0px 0px 0px;padding:30px 0px 0px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"></div>
            <div class="form-group">
                <input class="form-control align-items-center" type="text" required="true" name="p1" placeholder="Your Name" autocomplete="off" style="width:330px;margin:23px;padding:6px 12px;height:40px;background-color:rgba(0,0,0,0.7);font-family:Lobster, cursive;color:#e0e0e0">
                <input class="form-control align-items-center" type="text" required="true" name="p2" placeholder="Your Crush's Name" autocomplete="off" style="width:330px;margin:23px;padding:6px 12px;height:40px;background-color:rgba(0,0,0,0.7);font-family:Lobster, cursive;color:#e0e0e0"></div>

            <div class="form-group" style="margin:-60px 0px 0px 0px;height:200px;padding:-9px 0px 0px 0px;">
                <center>
                    <input onclick="updateDiv(p1.value, p2.value)" value="" style="margin:74px;border: medium none ; background: transparent url(gassets/calculate.png) repeat scroll 0% 0%; -moz-background-clip: border; -moz-background-origin: padding:14px; -moz-background-inline-policy: continuous; width: 131px; height: 52px;" type="button">

                    <div id="targetDiv" valign="middle" align="center" class="text-center" style="color:#e0e0e0;font-family:Lobster, cursive;font-size:42px;height:56px;margin:-44px 0px 10px;">
                        0%
                    </div>
                </center>


            </div>
            <div id="instructions"><img src="./gassets/how-it-works.png" alt="how does it work?" width="598" height="195" /></div>
        </form>
        <center>
            <p>
                <br />
                <h1 class="text-center" style="color:#e0e0e0;font-family:Lobster, cursive;font-size:22px;height:22px;">Hrithik Enterprises</h1>
                <span class="text-center" style="color:#e0e0e0;font-family:Lobster, cursive;font-size:px;height:18px;"> &copy; 2019 All Rights Reserved.</span>
            </p>
        </center>
    </div>
    <script src="gassets/js/jquery.min.js"></script>
    <script src="gassets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
