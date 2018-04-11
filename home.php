<?php

    session_start();
    if (!isset($_SESSION['name']) and !isset($_SESSION['name'])) {
        header("Location: index.php");
        session_destroy();
    }
    // session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home_page</title>


    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />


<style type="text/css">

.header{

    margin-top: -620px;
    margin-left: 0px;
    margin-right: -560px;
    box-shadow: inset 0 0 0 3000px rgba(255,255,255,0.3);
    filter: blur(0.1px);

    color: white;
width: 100%;

}

.the-click-button {
    background-color: rgba(255, 80, 53, 0.901961);

    background-position: 20px -12px, 20px 4px;
    background-repeat: no-repeat;
    background-size: 22px, 22px;
    border-radius: 3px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: auto;
    display: inline-block;
    font-family: Montserrat, sans-serif;
    font-size: 18px;
    font-weight: normal;
    height: 64px;
    line-height: 24px;
    padding: 20px 30px 20px 60px;
    text-align: left;
    text-decoration: none;
    text-shadow: rgba(0, 0, 0, 0.270588) 0px 1px 0px;
    text-size-adjust: 100%;
    transition-delay: 0s, 0s, 0s, 0s;
    transition-duration: 0.2s, 0.2s, 0.2s, 0.2s;
    transition: color 200ms ease, background-color 200ms ease, opacity 200ms ease, background-position 200ms ease, transform 50ms ease, -webkit-transform 50ms ease;
    -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Chrome/Safari/Opera */ -moz-user-select: none; /* Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */
}

.container-login100 {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;

    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;
}
#button{

width: 120px;
height: 20px;
background-color: transparent;
background-color: rgba(255, 80, 53, 0.901961);
 background-image: url(https://daks2k3a4ib2z.cloudfront.net/553f831feb855b6a5f0e42a8/5853beacc62327483d8324b7_mouse%205.svg), url(https://daks2k3a4ib2z.cloudfront.net/553f831feb855b6a5f0e42a8/5853beac5b991c28512ad40b_mouse1.svg);
   border-radius: 3px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: auto;
    display: inline-block;
    background-position: 20px -12px, 20px 4px;
    background-repeat: no-repeat;
font-size: 18px;
    font-weight: normal;
    line-height: 24px;
    padding: 20px 30px 20px 60px;
    text-align: left;
    text-decoration: none;
    margin-left: 800px;
    text-shadow: rgba(0, 0, 0, 0.270588) 0px 1px 0px;
    text-size-adjust: 100%;
    transition-delay: 0s, 0s, 0s, 0s;
    transition-duration: 0.2s, 0.2s, 0.2s, 0.2s;
    transition: color 200ms ease, background-color 200ms ease, opacity 200ms ease, background-position 200ms ease, transform 50ms ease, -webkit-transform 50ms ease;
    -webkit-touch-callout: none; /* iOS Safari */ -webkit-user-select: none; /* Chrome/Safari/Opera */ -moz-user-select: none; /* Firefox */ -ms-user-select: none; /* Internet Explorer/Edge */
}
#align {




    background-color: rgba(red, green, blue, alpha);
}

#col{

  background-color: rgba(0, 0, 255, 0.1);
  border-color:transparent;
  border-width: -10px;
  border-color: rgba(0, 0, 255, 0.0);
margin-left: 1370px;
}
</style>
</head>
<body>



<div class="limiter">


    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="header">
        <h1> &nbsp;N e g i l a   Y o g i   T r u s t</h1>
        <a href="logout.php" class="btn btn-info btn-lg" id="col">
<span class="glyphicon glyphicon-log-out" id="align"></span> Log out
</a>
        </div>
        <div id="stage">

            <!-- The button HTML code -->
            <a href="register.php" class="the-click-button">Rigester</a>
            &nbsp; &nbsp;
            <a href="report.php" class="the-click-button">Report</a>
  </div>

</div>


</div>

</body>
</html>
