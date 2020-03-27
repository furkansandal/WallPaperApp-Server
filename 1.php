<!DOCTYPE html>
<html>
<head>
    <title>Wallpaper App</title>
    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }
    body{
        font-family: 'Segoe UI', sans-serif;;
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }
    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fafafa;
    }
    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 2rem;
        background: #ffffff;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
    }
    .form-footer{
        text-align: center;
    }
    .cv1{
        height: 100%;
        width: 100%;
        border:solid 5px #ccc;
    }
    </style>
     <script src="https://furkansandal.com/SimpleImage.js">
</script>
</head>
<body>
    <script type="text/javascript">
        function resim_goster(x) {
          var furkanCanvas = document.getElementById('furkanCanvas');
          var url = x;
          //alert(url);
          var Context2 = furkanCanvas.getContext('2d');
          var image = new Image();
          image.src = document.getElementById('link').value;
          alert(image.src);
                Context2.drawImage(image, 0, 0);
          //resim = new SimpleImage(fileInput);
          //resim.drawTo(furkanCanvas);
        }

        function showHint() {
            var x = document.getElementById('link').value;
            if (x.length == 0) {
                
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                    }else{
                        alert(this.responseText);
                    }
                };
                xmlhttp.open("GET", "https://furkansandal.com/wallpaperapp/veriekle.php?v=" + x, true);
                xmlhttp.send();
            }
        }

    </script>
    <div class="wrap">
        <form class="login-form" action="#">
            <div class="form-header">
                <h3>Resim Yukleme</h3>
                <p>resimi gormek icin resim linki yapistirin</p>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <canvas id="furkanCanvas" class="cv1"></canvas>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" id='link' placeholder="http://furkansandal.com/xxx.jpg" onchange="resim_goster(this.value)">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <button class="form-button" onclick="resim_goster('https://i.hizliresim.com/5NEZPz.png')">resim gor
                </button>
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" onclick="showHint()">resim yukle</button>
            </div>
            <div class="form-footer">
            Simdilik bos. <a href="#">bos buton</a>
            </div>
        </form>
    </div><!--/.wrap-->
</body>
</html>