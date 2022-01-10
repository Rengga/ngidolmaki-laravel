<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ngidolMaki-2</title>
        <link rel="stylesheet" href="{{ asset('css/utama.css') }}" />
    </head>

    <body>
        <div class="container">
            <div class="navb" id="navb">
                <div class="navbar">
                    <nav>
                        <ul id="menuList">
                            <br />
                            <li><a href="#navb"><b>Home</b></a></li>
                            <br />
                            <li><a href="#me">Link</a></li>
                            <br />
                            <li><a href="#about">About</a></li>
                            <br />
                            <li><a href="#gallery">Gallery</a>
                            </li>
                            <br />
                        </ul>
                        <ul class="menu-2">
                            <li><a href="#navb"><b>Home</b></a></li>
                            <li><a href="#me">Link</a></li>
                        </ul>
                    </nav>
                    <a href=""><h2 class="logo">ngidolMaki</h2></a>
                    <nav>
                        <ul class="menu-2">
                            <li><a href="#about">About</a></li>
                            <li><a href="#gallery">Gallery</a>
                            </li>
                        </ul>
                    </nav>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="menu"
                        onclick="toggleMenu()"
                        width="40"
                        height="40"
                        viewBox="0 0 24 24"
                        style="fill: #1db9c3"
                    >
                        <path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path>
                    </svg>
                </div>
                <img src="{{ asset('image/gambar.webp') }}" class="imagebg2" />
            </div>
            <div class="col-1">
                <div class="me" id="me">
                    <div class="row">
                        <div class="row-1">
                            <a href="https://www.facebook.com/NgidolMaki-100951018672716"
                                ><img
                                    id="fb"
                                    src="{{ asset('image/facebook.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href="https://www.instagram.com/ngidolmaki/"
                                ><img
                                    id="ig"
                                    src="{{ asset('image/instagram.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href="https://twitter.com/ngidolMaki_"
                                ><img
                                    id="twit"
                                    src="{{ asset('image/twitter.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                        </div>
                        <img src="{{ asset('image/profil.webp') }}" class="profil" />
                        <div class="row-1">
                            <a href="https://github.com/Rengga"
                                ><img
                                    id="git"
                                    src="{{ asset('image/github.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href="https://www.pixiv.net/en/users/13503194"
                                ><img
                                    id="pix"
                                    src="{{ asset('image/pixiv.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href="https://arxist.com/ngidolmaki/"
                                ><img
                                    id="arx"
                                    src="{{ asset('image/arxist.svg') }}"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                        </div>
                    </div>
                    <h2>ngidolMaki</h2>
                </div>
                <div class="about" id="about">
                    <h2>About</h2>
                    <p>
                        Drawing is my hobby, this website displays the works that I have made, 
                        I hope you like it. If you want to order, you can contact me via Facebook or Instagram above.
                    </p>
                </div>
                <div class="gallery" id="gallery">
                    <h2>Gallery</h2>
                    <div class="row">
                        @yield('row')
                    </div>
                    <div class="footer"></div>
                    
                </div>
            </div>
        </div>
    </body>
    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";
        function toggleMenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "200px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
</html>
