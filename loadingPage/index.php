<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Page</title>
    <link rel="stylesheet" href="css/loadingPage.css">
</head>
<body onload="triggerProgress()">
    <div class="container">
      <img id="logo" src="assets/images/logo.png" alt="Logo Was not loaded">
      <h2 class="text">Restaurant Name</h2>
      <div class="loading-juice-box">
        <div id="loading-juice" class="loading-juice"> </div>
      </div>
      <div id="loading-progress"></div>
      <h2 class="text">اسم المطعم</h2>
      <h1 class="text">ellMenus</h1>
    </div>
   <script src="js/index.js" ></script>
</body>
</html>