<!DOCTYPE html>
<html class="pixel-ratio-1 watch-active-state">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>TAMZ - Počasí</title>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="css/css/framework7.ios.css">
        <link rel="stylesheet" href="css/css/framework7.ios.colors.css">
        <link rel="stylesheet" href="css/framework7-icons.css">
        <link rel="stylesheet" href="css/kitchen-sink.css">
        <link rel="stylesheet" href="css/wu-icons-style.css">
        <link rel="icon" href="img/icon.png">
        <link rel="apple-touch-icon" href="img/icon.png">
        <style type="text/css">
            body, .page, .toolbar {
                background: #003366;
            }
            .tabbar {
                border-top: 1px solid white;
            }
            .tabbar a, .list-block .item-title, .list-block .item-subtitle {
                color:white;
            }
            .tabbar a.active {
                color:white;
            }
            .media-list .active-state {
                background: #004992 !important;
            }
            .list-block input[type="text"], .list-block input[type="password"], .list-block input[type="search"], .list-block input[type="email"], .list-block input[type="tel"], .list-block input[type="url"], .list-block input[type="date"], .list-block input[type="datetime-local"], .list-block input[type="time"], .list-block input[type="number"], .list-block select, .list-block textarea {
                color: white;
            }
            i.icon.icon-add {
                width: 21px;
                height: 21px;
                background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDUxMiA1MTIiIGhlaWdodD0iNTEycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxwYXRoIGQ9Ik0yNTYuMTA4LDMuMDJjLTEzOS43NDMsMC0yNTMsMTEzLjI1Ny0yNTMsMjUzczExMy4yNTcsMjUyLjk5NSwyNTMsMjUyLjk5NSAgIGMxMzkuNzQzLDAsMjUzLTExMy4yNTIsMjUzLTI1Mi45OTVTMzk1Ljg1MiwzLjAyLDI1Ni4xMDgsMy4wMnogTTI1Ni4xMDgsNDg4Ljc3NWMtMTI4LjMzOCwwLTIzMi43Ni0xMDQuNDE3LTIzMi43Ni0yMzIuNzU1ICAgYzAtMTI4LjMzOSwxMDQuNDIyLTIzMi43NiwyMzIuNzYtMjMyLjc2YzEyOC4zMzgsMCwyMzIuNzYsMTA0LjQyMSwyMzIuNzYsMjMyLjc2QzQ4OC44NjgsMzg0LjM1OCwzODQuNDQ2LDQ4OC43NzUsMjU2LjEwOCw0ODguNzc1ICAgeiIgZmlsbD0iIzAwN2FmZiIvPjxwb2x5Z29uIGZpbGw9IiMwMDdhZmYiIHBvaW50cz0iMjY2LjIyOCwxMDQuMjIgMjQ1Ljk4OCwxMDQuMjIgMjQ1Ljk4OCwyNDUuOSAxMDQuOTgsMjQ1LjkgMTA0Ljk4LDI2Ni4xNCAyNDUuOTg4LDI2Ni4xNCAgICAyNDUuOTg4LDQwNy4xNDggMjY2LjIyOCw0MDcuMTQ4IDI2Ni4yMjgsMjY2LjE0IDQwNy45MDgsMjY2LjE0IDQwNy45MDgsMjQ1LjkgMjY2LjIyOCwyNDUuOSAgIi8+PC9nPjwvc3ZnPg==");
            }
            .page-content .list-block li {
                background-color: #004992;
            }
            .small-picture {
                height:44px;
                width:44px;
            }
            .swiper-slide {
                background: #004992;
                box-sizing: border-box;
            }
            .swiper-slide span {
                text-align:center;
                display:block;
                margin: 10px 20px;
                color: white;
            }
            .swiper-container {
                background: #004992;
                height: 130px;
                margin: 35px 0;
                border-top: 1px solid white;
                border-bottom: 1px solid white;
            }
            .swiper-pagination, .swiper-pagination-modal {
                display: none;
            }
            .content-block-title {
                color: white;
            }
        </style>
    </head>
    <body class="framework7-root">
        <div class="statusbar-overlay"></div>
        <div class="panel-overlay"></div>
        <div class="views">
      <div class="view view-main">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="center sliding">Počasí</div>
            <div class="right sliding"><a href="#" data-popover=".popover-menu" class="open-popover link"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="content-block-title">Vítejte na TAMZ Počasí</div>
              <div class="content-block"><a href="position.html" class="button item-link">Aktuální poloha</a></div>
              <div class="content-block"><a href="favourite.html" class="button item-link">Oblíbená místa</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div id="popups">
            <div class="popup demo-popup">
                <div class="view navbar-fixed">
                    <div class="pages">
                        <div class="page">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <div class="center modal-city"></div>
                                    <div class="right"><a href="#" class="link close-popup">Zavřít</a></div>
                                </div>
                            </div>
                            <div class="page-content">
                                 <div class="content-block-title">Předpověď</div>
                                <div class="swiper-container swiper-3-modal">
                                    <div class="swiper-pagination-modal"></div>
                                    <div class="swiper-wrapper" id="hourly-modal">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popover popover-menu">
            <div class="popover-angle"></div>
            <div class="popover-inner">
                <div class="list-block">
                    <ul>
                        <li><a href="insert.html" class="list-button item-link">Přidat nové město</a></li>
                        <li><a href="settings.html" class="list-button item-link">Nastavení</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-reveal layout-dark">
            <div class="view view-right">
              <div class="pages navbar-through">
                <div class="page">
                  <div class="page-content"> 
                    <div class="content-block">
                      <p>This is a right side panel. You can close it by clicking outsite or on this link: <a href="#" class="close-panel">close me</a>. You can put here anything, even another isolated view, try it:</p>
                    </div>
                    <div class="list-block">
                      <ul>
                        <li><a href="panel-right2.html" class="item-link"> 
                            <div class="item-content">
                              <div class="item-inner"> 
                                <div class="item-title">Right panel page 2</div>
                              </div>
                            </div></a></li>
                        <li><a href="panel-right3.html" class="item-link">
                            <div class="item-content">
                              <div class="item-inner"> 
                                <div class="item-title">Right panel page 3</div>
                              </div>
                            </div></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script type="text/javascript" src="js/js/framework7.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>