<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/landingPage.css')}}">
    <title>Lo.Co</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
    <button class='hamburger' onclick="burger()">=</button>
    <div class="navbar fade">
        <button class='close' onclick="burger()">X</button>
        <div class="navbarA" style="background-image:url({{asset('/seeder/locoblack.png')}});"></div>
        <div class="navbarB">
            <a href="#">
                <button class="navbarButton">ORDER NOW</button>
            </a>
        </div>
    </div>
    <div class="thumbnail-container">
        @foreach($thumbnails as $thumbnail)
            <div class="thumbnails fade" style="background-image:url({{asset($thumbnail->path)}})">
                <div class="buttonThumbnail" style="text-align:center;">
                    <button class="buttonTop">OUR MENU</button>
                    <br>
                    <br>
                    <button class="buttonBottom">ORDER NOW !</button>
                </div>
            </div>
        @endforeach
        <a class="prev" onclick="plusThumbnails(-1)">&#10094;</a>
        <a class="next" onclick="plusThumbnails(1)">&#10095;</a>
    </div>

    <div class="bumper" style="background-image:url({{asset('/seeder/imagesatu.png')}});">
    </div>

    <div class="snapshots-container" style="background-image:url({{asset('/seeder/imagetiga.png')}});">
        <div class="snapshotsTitle" style="text-align:center;">Look At Our Happy Customer!</div>
        @foreach($snapshots as $snapshot)
            <div class="snapshots fade" style="text-align:center;">
                <img class="snapshotImage" src="{{asset($snapshot->path)}}" alt="">
            </div>
        @endforeach
        <a class="prev" onclick="plusSnapshots(-1)">&#10094;</a>
        <a class="next" onclick="plusSnapshots(1)">&#10095;</a>
    </div>

    <div class="favorites-container" style="background-image:url({{asset('/seeder/imagetiga.png')}});">
        <div class="favoritesTitle" style="text-align:center;">Our Best Seller!</div>
        @foreach($products as $product)
            <div class="favorites fade" style="text-align:center;">
                <img class="favoriteImage" src="{{asset($product->path)}}" alt="">
            </div>
        @endforeach
        <a class="prev" onclick="plusFavorites(-1)">&#10094;</a>
        <a class="next" onclick="plusFavorites(1)">&#10095;</a>
    </div>

    <div class="container-black">
        <div class="left" style="background-image:url({{asset('/seeder/imagedua.png')}});">
        </div>
        <div class="right">
            <div class="ourPartner" style="text-align:center;">
                Our Partners
            </div>
            <div class="line" style="text-align:center;">
                <a href="https://instagram.com/buahtapa?r=nametag" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/iconsatu.png')}});">
                    </div>
                </a>
                <a href="https://instagram.com/rekanlaws51?utm_medium=copy_link" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/icondua.png')}});">
                    </div>
                </a>
                <a href="https://instagram.com/cinemorapictures?utm_medium=copy_link" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/icontiga.png')}});">
                    </div>
                </a>
            </div>
            <div class="line" style="text-align:center;">
                <a href="https://plabs.id/" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/iconempat.png')}});">
                    </div>
                </a>
                <a href="https://instagram.com/teaspace_official?utm_medium=copy_link" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/iconlima.png')}});">
                    </div>
                </a>
                <a href="https://pandegha.id/" target="_blank">
                    <div class="partner" style="background-image:url({{asset('/seeder/iconenam.png')}});">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="sectionOne">
            <div class="upper" style="text-align:center;">
                <span>FIND US!</span>
            </div>
            <div class="bottom" style="text-align:center;">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=marketing@itsloco.co.id" target="_blank">
                    <div class="icon" style="background-image:url({{asset('/seeder/mail.png')}});"></div>
                </a>
                <a href="http://www.itsloco.co.id/" target="_blank">
                    <div class="icon" style="background-image:url({{asset('/seeder/world.png')}});"></div>
                </a>
                <a href="https://www.instagram.com/its.lo.co/" target="_blank">
                    <div class="icon" style="background-image:url({{asset('/seeder/instagram.png')}});"></div>
                </a>
            </div>
        </div>
        <div class="sectionTwo">
            <div class="sectionText" style="text-align:center;">
                Jl. Bukit Dago Selatan No.51, Bandung
            </div>
        </div>
        <div class="sectionThree" style="text-align:center;">
            2022 — <span style="font-weight:bold;">Powered By PLABS</span>
        </div>
    </div>
        
<script>
    function burger(){
        var navbar = document.getElementsByClassName("navbar");
        var hamburger = document.getElementsByClassName("hamburger");
        console.log(navbar);
        if (navbar[0].style.display === "block") {
            navbar[0].style.display = "none";
            hamburger[0].style.display = "block";
        } else {
            navbar[0].style.display = "block";
            hamburger[0].style.display = "none";
        }
    }

    // Thumbnail
    var thumbnailIndex = 1;
    showThumbnails(thumbnailIndex);

    function plusThumbnails(n) {
        showThumbnails(thumbnailIndex += n);
    }

    function currentThumbnail(n) {
        showThumbnails(thumbnailIndex = n);
    }

    function showThumbnails(n) {
        var i;
        var thumbnails = document.getElementsByClassName("thumbnails");
        if (n > thumbnails.length) {thumbnailIndex = 1}    
        if (n < 1) {thumbnailIndex = thumbnails.length}
        for (i = 0; i < thumbnails.length; i++) {
            thumbnails[i].style.display = "none";  
        }
        thumbnails[thumbnailIndex-1].style.display = "block";  
    }
    // End Thumbnail

    // Snapshot
    var snapshotIndex = 1;
    showSnapshots(snapshotIndex);

    function plusSnapshots(n) {
        showSnapshots(snapshotIndex += n);
    }

    function currentSnapshot(n) {
        showSnapshots(snapshotIndex = n);
    }

    function showSnapshots(n) {
        var j;
        var snapshots = document.getElementsByClassName("snapshots");
        if (n > snapshots.length) {snapshotIndex = 1}    
        if (n < 1) {snapshotIndex = snapshots.length}
        for (j = 0; j < snapshots.length; j++) {
            snapshots[j].style.display = "none";  
        }
        snapshots[snapshotIndex-1].style.display = "block";  
    }
    // End Snapshot

    // Favorites
    var favoriteIndex = 1;
    showFavorites(favoriteIndex);

    function plusFavorites(n) {
        showFavorites(favoriteIndex += n);
    }

    function currentSnapshot(n) {
        showFavorites(favoriteIndex = n);
    }

    function showFavorites(n) {
        var k;
        var favorites = document.getElementsByClassName("favorites");
        if (n > favorites.length) {favoriteIndex = 1}    
        if (n < 1) {favoriteIndex = favorites.length}
        for (k = 0; k < favorites.length; k++) {
            favorites[k].style.display = "none";  
        }
        favorites[favoriteIndex-1].style.display = "block";  
    }
    // End Favorites
</script>        
</body>

</html>
