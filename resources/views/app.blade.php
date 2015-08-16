<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="token" id="token" value="{{ csrf_token() }}"/>
  <link rel="icon" href="vue-favicon.png" type="image/x-icon">
  <title>Components in Vue.js</title>
  <link rel="stylesheet" href="/css/all.css">
</head>

<body class="container">

  <div id="app">
    <component is="@{{ currentView }}"></component>
  </div>

<script src="/js/app.js"></script>
</body>
</html>