<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WorshipU - 詩歌譜網</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&amp;subset=chinese-traditional" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
</head>

<body id="page-top" style="height: 100%;">
  
  <!-- Navigation -->
  <?php include("navigation.php"); ?>

  <!-- Header -->
  <header class="masthead" style="background-image: url('img/header/home.jpg');">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading">WorshipU - 和弦譜</div>
        <div class="intro-lead-in">找回起初敬拜的心。</div>

        <!-- Search Bar -->
        <div id="search">
          <input type="text" placeholder="尋找想要的歌名：" style="display: inline-block; width: 60%">
          <button style="display: inline-block;" type="button" onclick="javascript:location.href='#'">Search</button>
        </div>
      </div>
    </div>
  </header>

  <!-- Footer -->
  <?php include("footer.php"); ?>
  
  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.js"></script>
  
  <!-- Scroll to top -->
  <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
  <script>
    // ===== Scroll to Top ==== 
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(300);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(300);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 800);
    });
  </script>
  
</body>

</html>