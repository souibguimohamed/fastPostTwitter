<?php
echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>twitter posts</title>
        <style media="screen">
        html{
            height: 100%;
        }
        body{
            min-height: 100%;
            background-color: #2980b9;
        }
        .formFP{
            text-align: center;

        }
        #followers,#post{
            border-radius: 8px;
            padding: 10px;
            border: 3px solid #2c3e50;
        }
        #followers:focus,#post:focus{
            outline: none !important;
            border-color: #f39c12;
            box-shadow: 0 0 10px #f39c12;
        }
        label{
            color:#c0392b;
            font-size: 30px;
            font-weight: bold;
            font-family: monospace;
        }
        /****Start Button Style****/

        /* GENERAL BUTTON STYLING */
        button,
        button::after {
          -webkit-transition: all 0.3s;
        	-moz-transition: all 0.3s;
          -o-transition: all 0.3s;
        	transition: all 0.3s;
        }

        button {
          background: none;
          border: 3px solid #fff;
          border-radius: 5px;
          color: #fff;
          display: block;
          font-size: 16px;
          font-weight: bold;
          margin: 1em auto;
          padding: 1em 3em;
          position: relative;
          text-transform: uppercase;
        }

        button::before,
        button::after {
          background: #fff;
          content: "";
          position: absolute;
          z-index: -1;
        }

        button:hover {
          color: #2ecc71;
        }
        /***btn style****/
        .btn {
          overflow: hidden;
        }

        .btn::after {
          /*background-color: #f00;*/
          height: 100%;
          left: -35%;
          top: 0;
          transform: skew(50deg);
          transition-duration: 0.6s;
          transform-origin: top left;
          width: 0;
        }

        .btn:hover:after {
          height: 100%;
          width: 135%;
        }
        /****End Button Style****/

        </style>
    </head>
    <body>
    <form action="resultatwitter.php" method="post" class="formFP">
        <br><br>
        <label for="followers">Followers:</label>
        <br><br>
        <textarea rows="8" cols="80" name="followers" id="followers" autofocus></textarea><br><br>
        <label for="post">Post:</label>
        <br><br>
        <textarea rows="8" cols="80" name="post" id="post"></textarea><br><br>
        <button type="submit" class="btn" name="test">Envoyer</button>
    </form>
    </body>
</html>';

 ?>
