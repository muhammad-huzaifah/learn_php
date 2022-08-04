<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("livesearch").innerHTML = "";
                document.getElementById("livesearch").style.border = "0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("livesearch").innerHTML = this.responseText;
                    document.getElementById("livesearch").style.border = "1px solid #A54CB2";
                }
            }
            xmlhttp.open("GET", "livesearch.php?q="+str, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

<form action="">
    <label>
        <input type="text" size="30" onkeyup="showResult(this.value)">
    </label>
    <div id="livesearch"></div>
</form>

</body>
</html>