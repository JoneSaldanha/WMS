<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select id="options" onchange="optionCheck()">


    <option value="show">Mostra Div</option>
    <option value="goto">Vai para o Google</option>

    </select>

    <div id="hiddenDiv" style="height:100px;width:300px;border:1px;visibility:hidden;">
    Eu estou visível agora!
    </div>
</body>
    <script type="text/javascript">
        function optionCheck(){
            var option = document.getElementById("options").value;
            if(option == "show"){
                document.getElementById("hiddenDiv").style.visibility ="visible";
            }
            if(option == "goto"){
                window.location = "http://google.com";
            }
        }
    </script>
</html>