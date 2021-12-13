<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ngidolMaki-2</title>
        <link rel="stylesheet" href="{{ asset('css/utama.css') }}" />
    </head>

    <body>
        <div class="container">
            <div class="navb">
                <div class="navbar">
                    <nav>
                        <ul id="menuList">
                            <br />
                            <li><a href="">Home</a></li>
                            <br />
                            <li><a href="">About</a></li>
                            <br />
                            <li><a href="">Gallery</a></li>
                            <br />
                            <li>
                                <a href="" style="text-decoration: line-through"
                                    >Contact</a
                                >
                            </li>
                            <br />
                        </ul>
                        <ul class="menu-2">
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                        </ul>
                    </nav>
                    <a href=""><h2 class="logo">ngidolMaki</h2></a>
                    <nav>
                        <ul class="menu-2">
                            <li><a href="">Gallery</a></li>
                            <li>
                                <a href="" style="text-decoration: line-through"
                                    >Contact</a
                                >
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
                <div class="me">
                    <div class="row">
                        <div class="row-1">
                            <a href=""
                                ><img
                                    id="fb"
                                    src="image/facebook.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href=""
                                ><img
                                    id="ig"
                                    src="image/instagram.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href=""
                                ><img
                                    id="twit"
                                    src="image/twitter.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                        </div>
                        <img src="image/profil.webp" class="profil" />
                        <div class="row-1">
                            <a href=""
                                ><img
                                    id="git"
                                    src="image/github.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href=""
                                ><img
                                    id="pix"
                                    src="image/pixiv.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                            <a href=""
                                ><img
                                    id="arx"
                                    src="image/arxist.svg"
                                    alt=""
                                    style="height: 55px; width: 55px"
                            /></a>
                        </div>
                    </div>
                    <h2>ngidolMaki</h2>
                </div>
                <div class="about">
                    <h2>About</h2>
                    <p>
                        anjay lorem ipsum gk jelas pantek mending di sidoarjo
                        atau sukodono keqing wangy wangy. Dota enak tapi lostrek
                        ada momment mamaaa aku di ti. Sebenarnya sih gitu tapi
                        yang nggak tau juga wicis wicis tai asw bahasa kentut.
                        hicun sangean nge geh sisan. dua tiga ayam melompat
                        mending makan tomat, masih enak makan nasi goreng. masak
                        sih, iya donk masa iya iya donk
                    </p>
                </div>
                <div class="gallery">
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
