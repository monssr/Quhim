<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examble</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            justify-items: center;
            align-items: center;
           margin: auto;
        }

          .sup{
            color: rgb(255, 255, 255);
            background: rgb(242, 196, 191);
            width: 300px;
            transform: translate(0px,0px);
            box-shadow: 3px 5px 4px rgb(89, 65, 63);
            border-radius: 10px;
            border: rgb(89, 65, 63); ;
          }
          .sup:hover{
           cursor: pointer;
            background: rgb(134, 105, 101);
            transform: translate(1.5px,1.5px);
          }
    </style>
</head>
<body>
    <form action="page2.php" method="get">
        <fieldset> 
        <legend > اهلا بكم في صفحة منصر  </legend>
            <label for="name"> Name    :     </label>
            <input type="text" name="name" id="name"> <br> 
            <label for="pa"> Passwrd: </label>
            <input type="password" name="pa"  id="pa"><br>
            <input class="sup" type="submit" value="Send Information" onclick="location.href='page2.html'">
        </fieldset>
    </form>
    <script> 
    
        document.cookie = "username=monssr; expires="+ new Date(new Date().getTime()+7*24*60*60*1000).toUTCString()+"; path=/" ;
    </script>
    
</body>
</html>