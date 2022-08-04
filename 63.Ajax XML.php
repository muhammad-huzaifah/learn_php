<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function showCD(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML= "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "getcd.php?q="+str, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

<form action="">
    SELECT a CD:
    <label for=""></label><select name="cds" onchange="showCD(this.value)" id="">
        <option value="">Select a CD:</option>
        <option value="Bob Dylan">Bob Dylan</option>
        <option value="Bee Gees">Bee Gees</option>
        <option value="Cat Stevens">Cat Stevens</option>
    </select>
</form>

<div id="txtHint"><b>CD info will be listed here...</b></div>

</body>
</html>