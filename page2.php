<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
    <style>
        body{
            height: 100vh;
            width: 100vw;
        position: fixed;
   

        }
                form{
            align-items: center;
           justify-items: center;
           margin: auto;
            
        }
        fieldset{
            border: 5px solid rgba(146, 197, 242, 0.718);
            border-radius: 20px;
            box-shadow: rgb(3, 118, 141) -5px 10px 10px;
        }
        legend{
            color: blueviolet;
        }
.m1{
    border: #7cdef6 solid 3px;

display: flex;
align-items: center;
justify-self: center;
}
#img{
    
    margin: auto;
    height: 70px;
    width: 100px;
    padding: 2px;
border: rgb(38, 205, 239) solid 2px;
}
#img:hover{
    
    margin: auto;
    height: 80px;
    width: 100px;
}
td{
    border: solid 1px;
    padding: 20px;
}
.sup{
            color: rgb(255, 255, 255);
            background: rgb(38, 205, 239);
            width: 300px;
            transform: translate();
            box-shadow: 3px 5px 4px rgb(51, 232, 245);
            border-radius: 10px;
            border: rgb(58, 219, 255); 
            padding: 10px;
            margin: 10px 5px 10px 10px;
          }
          .sup:hover{
           cursor: pointer;
            background: rgb(21, 247, 255);
           transform: scale(1.05);
          }
    </style>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset> 
        <legend > Information </legend>
          <p id="n1"></p>
          <p id="p1"> </p>
            <input type="submit" class="sup" value="الرجوع للرئيسية" onclick="location.href='index.html'">

            <table class="m1" >
        
                <tr>   
                <td class="td" ><a href="back.jpg" download="back.jpg" ><img src="back.jpg" id="img" alt="img 1" ></a></td>
                
                <td><a href="2.jpg" download="2.jpg"><img src="2.jpg" id="img" alt=""></a></td>
            </tr> 
            <tr>   
                <td class="td"><a href="3.jpg" download="3.jpg "><img src="3.jpg" id="img" alt=""></a></td>
                
                <td><a href="3.jpg" download="3.jpg"><img src="4.jpg" id="img" alt=""></a></td>
            </tr> 
                
            </table>
        </fieldset>
    </form>



    <script>
        const par = new URLSearchParams(window.location.search);
        const n1 = document.getElementById('n1'); 
        const n2 = par.get('name'); 
        n1.textContent=`Your name Is : ${n2}` ;
        const p1 = document.getElementById('p1'); 
        const p2 = par.get('pa'); 
        n1.textContent=`Your name Is : ${n2}` ;
        p1.textContent = `Password : ${p2}` ;
        console.log(document.cookie) ;
        </script>
        
        
   

</body>
</html>