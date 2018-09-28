<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pixstack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/semantic.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/semantic.min.js"></script>
    <link rel="shortcut icon" href=".images/favicon.png">
    <style media="screen">
      .masthead h1.ui.header{
        margin-top: 3em;
        font-size: 4em;
        font-family: 'Crimson Text', serif;
      }
      .masthead .ui.menu .ui.button{
        margin-left: 0.5em;
      }
      .masthead.segment{
        min-height: 700px;
        /* background-image: url("https://source.unsplash.com/user/erondu/1600x900") !important; */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .ui.secondary.pointing.menu{
        border-bottom: 0px !important;
      }
      .ui.secondary.inverted.pointing.menu{
        border-width: 0px !important;
      }
      .ui.secondary.vertical.menu{
        margin: 2em;
      }
    </style>
  </head>

  <body class="pushable">

    <!-- sidebar -->
    <div class="ui left inverted vertical inline thin sidebar menu" style="">
      <a class="item">
        <i class="compass icon"></i>
        Home
      </a>
      <a class="item">
        <i class="user icon"></i>
        profile
      </a>
      <a class="item">
        <i class="rocket icon"></i>
        Sign Out
      </a>
    </div>

    <!-- body -->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">

        <!-- navbar -->
        <div class="ui container">
          <div class="ui inverted secondary pointing menu">
            <a class="item" id="click">
              <i class="sidebar icon"></i>
            </a>
            <a class="active item hideable">
              Home
            </a>
            <a class="item hideable">
              About
            </a>
            <div class="ui right item">
              <a class="ui inverted button">
                Login
              </a>
              <a class="ui inverted button">
                Sign Up
              </a>
            </div>
          </div>


          <div class="ui text container">
            <h1 class="ui inverted header">
              Winter Studio.
            </h1>
            <span>
              Capturing every second of memory
              <a class="ui purple horizontal label">Take me there</a>
            </span>

          </div>
        </div>
      </div>

      <div class="ui vertical stripe segment">
        <div class="ui four column centered grid" style="margin-top:2em;">
          <div class="ui column">
            <div class="ui secondary pointing menu">
              <a class="active item">
                Nature
              </a>
              <a class="item">
                Portrait
              </a>
              <a class="item">
                Friends
              </a>
            </div>
        </div>

        </div>
        <div class="ui centered stackable grid">
          <div class="eight wide column">
            <div class="ui one column stackable grid">

              <div class="ui column">
                <div class="ui raised fluid link card">
                  <div class="image">
                    <img src="./images/1.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="ui column">
                <div class="ui link fluid card">
                  <div class="image">
                    <img src="./images/4.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="ui column">
                <div class="ui link fluid card">
                  <div class="image">
                    <img src="./images/2.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="ui column">
                <div class="ui link fluid card">
                  <div class="image">
                    <img src="./images/6.jpg" alt="">
                  </div>
                </div>
              </div>

              <div class="ui column">
                <div class="ui link fluid card">
                  <div class="image">
                    <img src="./images/3.jpg" alt="">
                  </div>
                </div>
              </div>

            </div>
          </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>

<script>
$('#click').on('click', function() {
  $('.ui.sidebar')
    .sidebar({
      transition : 'scale down'
    })
    .sidebar('toggle')
  ;
})
$(window).on('resize', function() {
  if ($(window).width() < 600) {
    $('.ui.masthead .ui.menu .item.hideable').fadeOut();
  } else {
    $('.ui.masthead .ui.menu .item.hideable').fadeIn();
  }
})
</script>
