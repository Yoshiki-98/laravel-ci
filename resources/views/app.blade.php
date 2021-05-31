<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- twitterサマリーカード  -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@k27180314_yoshi" />
  <meta property="og:url" content="http://umeboshi-natto.work/" />
  <meta property="og:title" content="サーカレ！" />
  <meta property="og:description" content="サーカレ！は練習試合マッチングサービスです。今の部活動・サークル活動がもっと盛り上がる様なサービスを提供します。他チームと、もっと気軽に交流を！" />
  <meta property="og:image" content="https://asakotsu.s3-ap-northeast-1.amazonaws.com/images/summary_card_morning.png" />


  <title>
    サーカレ！
    @yield('title')
  </title>
  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://asakotsu.s3-ap-northeast-1.amazonaws.com/images/favicon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

  <link href="{{ asset('/favicon.ico') }}" rel="shortcut icon">

  <style>
    /* body { 
        background-image: url("/activity.jpg"); 
        background-size: cover; 
    } */
    /* .navbar {
      position:fixed;
    } */
  </style>
</head>

<body>
  <div id="app">
    @yield('content')
  </div>

  <script src="{{ mix('js/app.js') }}"></script> {{--この行を追加--}}
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
</body>

</html>
