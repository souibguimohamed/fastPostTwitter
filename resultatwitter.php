<?php echo '
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Resultat Twitter</title>
        <style media="screen">
            html{
                height: 100%;
            }
            body{
                height: 100%;
                background-color: #0984e3;
                text-align: center;
            }
            .post{
                border-radius: 8px;
                padding: 10px;
                border: 3px solid #2c3e50;
                margin-bottom: 20px;
                margin-left: 10px;
            }
            .post:focus{
                outline: none !important;
                border-color: #f39c12;
                box-shadow: 0 0 10px #f39c12;
                margin-bottom: 20px;
                margin-left: 10px;
            }
            .post:hover{
                background-color: #d63031;
            }
            h1{
                font-weight: bold;
                color:#d63031;
            }
        </style>
    </head>
    <body>';
    if(isset($_POST["test"])){
        $followers = $_POST["followers"];
        $post = $_POST["post"];
        $arrFollowers =explode(",",$followers);
        foreach ($arrFollowers as $key => $value) {
            echo '<textarea rows="8" cols="80" id="post'.$key.'" class="post">'.$post.$value.'</textarea>';
        }
    }
    echo '<h1>Congratulation !!!</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        function selectCopy(i){
            var copyText = document.getElementById("post"+i);
            copyText.select();
            document.execCommand("copy");
        }
        $(document).ready(function(){
                var i = 0;
                $("body").click(function(){
                selectCopy(i);
                $("textarea:first").fadeToggle(700,function(){this.remove();});
                i++;
                });
});
    </script>
    </body></html>';
 ?>
