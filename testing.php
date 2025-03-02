<!doctype html>
<html>
<head>
        <title>jQuery enable/disable button</title>
        <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
        <style type='text/css'> /* Lets use a Google Web Font :) */
        @import url(http://fonts.googleapis.com/css?family=Finger+Paint); /* Basic CSS for positioning etc */
        body {
            font-family: 'Finger Paint', cursive;
            background-image: url('bg.jpg');
        }
    
        #frame {
            width: 700px;
            margin: auto;
            margin-top: 125px;
            border: solid 1px #CCC; /* SOME CSS3 DIV SHADOW */
            -webkit-box-shadow: 0px 0px 10px #CCC;
            -moz-box-shadow: 0px 0px 10px #CCC;
            box-shadow: 0px 0px 10px #CCC; /* CSS3 ROUNDED CORNERS */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            border-radius: 5px;
            background-color: #FFF;
        }
    
        #searchInput {
            height: 30px;
            line-height: 30px;
            padding: 3px;
            width: 300px;
        }
    
        #submitBtn {
            height: 40px;
            line-height: 40px;
            width: 120px;
            text-align: center;
        }
    
        #frame h1 {
            text-align: center;
        }
    
        #frame form {
            text-align: center;
            margin-bottom: 30px;
        } </style>
    </head>
    <body>
    <div id='frame'>
        <div class='search'><h1>jQuery Enable and Disable button</h1>
            <form method='post'><input type='text' name='searchQuery' id='searchInput'/>
                <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled'/
            </form>
        </div>
    </div>
    </body>
</html>