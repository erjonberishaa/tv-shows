<?php include'includes/navbar.php' ?>
<?php include'includes/header.php' ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Movies Card UI Design Inspiration - HTML & CSS | SoftAOX</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head> 

<style>

body {
    height: 100%;
    width: 100%;
    background: #e9e9e9;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #010b26;
}
 
* {
    -webkit-transition: 300ms;
    transition: 300ms;
}
 
h1,
h2,
h3,
h4,
h5,
p {
    font-weight: 400;
}
 
a {
    text-decoration: none;
    color: inherit;
}
 
a:hover {
    color: #6ABCEA;
}
 
.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
 
.movie_list {
    margin-top: -1rem;
    padding-left: 4rem !important;
}
 
.card-view {
    background: #ffffff;
    box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 315px;
    margin: 2em;
    border-radius: 10px;
    display: inline-block;
}
 
.card-header {
    padding: 0;
    margin: 0;
    height: 367px;
    width: 100%;
    display: block;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
 
.avengers {
    background: url("assets/images/avengers.jpg");
    background-size: cover;
}
 
.mrbean {
    background: url("assets/images/mrbean.jpg");
    background-size: cover;
}
.mile {
    background: url("assets/images/mile1.jpg");
    background-size: cover;
    href:
}
.babydriver {
    background: url("assets/images/babydriver.jpg");
    background-size: cover;
}
.homealone {
    background: url("assets/images/homealone.jpg");
    background-size: cover;
}
.slumdog {
    background: url("assets/images/slumdog.jpg");
    background-size: cover;
}
.hachi {
    background: url("assets/images/hachi.jpg");
    background-size: cover;
}
.whiplash {
    background: url("assets/images/whiplash.jpeg");
    background-size: cover;
}
.gbook {
    background: url("assets/images/gbook.png");
    background-size: cover;
}
.papillon {
    background: url("assets/images/papillon.png");
    background-size: cover;
}
.alita {
    background: url("assets/images/alita.png");
    background-size: cover;
}
.escape {
    background: url("assets/images/escape.png");
    background-size: cover;
}
.kingkong {
    background: url("assets/images/kingkong.jpg");
    background-size: cover;
}
.stars {
    background: url("assets/images/stars.jpg");
    background-size: cover;
}
 

.card-header-icon {
    position: relative;
}
 
.header-icon {
    width: 100%;
    height: 367px;
    line-height: 367px;
    text-align: center;
    vertical-align: middle;
    margin: 0 auto;
    color: #ffffff;
    font-size: 54px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 20px #6ABCEA;
    opacity: .85;
}
 
.header-icon:hover {
    background: rgba(0, 0, 0, 0.15);
    font-size: 74px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 30px #6ABCEA;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    opacity: 1;
}
 
.card-view:hover {
    -webkit-transform: scale(1.03);
    transform: scale(1.03);
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.08);
}
 
.card-movie-content {
    padding: 18px 18px 24px 18px;
    margin: 0;
}
 
.card-movie-content-head,
.card-movie-info {
    display: table;
    width: 100%;
}
 
.card-movie-title {
    font-size: 22px;
    margin: 0;
    display: table-cell;
}
 
.ratings {
    width: 50px;
    height: 15px;
    background-size: contain;
    display: table-cell;
    text-align: right;
    position: relative;
    margin-top: 5px;
    font-weight: 600;
}
 
.ratings span {
    color: #2196F3;
}
 
.card-movie-info {
    margin-top: 1em;
}
 
.movie-running-time {
    display: table-cell;
    text-transform: uppercase;
    text-align: center;
}
 
.movie-running-time:first-of-type {
    text-align: left;
}
 
.movie-running-time:last-of-type {
    text-align: right;
}
 
.movie-running-time label {
    display: block;
    color: rgba(0, 0, 0, 0.5);
    margin-bottom: .5em;
    font-size: 9px;
}
 
.movie-running-time span {
    font-weight: 700;
    font-size: 11px;
}
 
@media Running time and (max-width: 500px) {
    .card-view {
        width: 95%;
        max-width: 95%;
        margin: 1em;
        display: block;
    }
    .container {
        padding: 0;
        margin: 0;
    }
}

</style>

<body>
    
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' >

    <div class="container p-0">
 <!-- <div class="container text-center">
                    <div class="header">
                        <div class="row">
                            <h1> TV SHOW SUGGESTIONS</h1>
                        </div> -->

                       



<section  class="p-1" style="background-color: #4e94a4;">
    <div class="titleNetflix1 p-3">
    <h2> MOVIES SUGGESTIONS</h2>
    </div>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
                    <div class="pt-8 pb-2 mb-3 ">                   
 
                        <div class="row">
 
                            <!-- 2 Gisht Mjalte -->
                            <div class="card-view">
                                <div class="card-header avengers">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://vidcloud9.com/streaming.php?id=MjUzOTgx&title=Avengers%3A+Endgame+-+Full+HD&typesub=SUB&sub=L2F2ZW5nZXJzLWVuZGdhbWUvYXZlbmdlcnMtZW5kZ2FtZS52dHQ=&cover=Y292ZXIvYXZlbmdlcnMtZW5kZ2FtZS5wbmc=">
                                            <h3 class="card-movie-title">Avengers:End Game</h3>
                                        </a>
                                        <div class="ratings"><span>8.4</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>26.04.2019</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>3h 1min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 Gisht Mjalte -->

                            <!-- Shok -->
                            <div class="card-view">
                                <div class="card-header mrbean">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=MjIwNg==&title=Mr.+Bean%27s+Holiday+HD-720p&typesub=SUB&sub=L21yLWJlYW5zLWhvbGlkYXktZGRtL21yLWJlYW5zLWhvbGlkYXktZGRtLnZ0dA==&cover=L21yLWJlYW5zLWhvbGlkYXktZGRtL2NvdmVyLnBuZw==">
                                            <h3 class="card-movie-title">Mr.Bean's Holiday</h3>
                                        </a>
                                        <div class="ratings"><span>6.4</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>24.08.2007</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 30mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shok -->

                            <!-- 8 mile -->
                            <div class="card-view">
                                <div class="card-header mile">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=NjgxNg==&title=8+Mile+HD-720p&typesub=SUB&sub=LzgtbWlsZS1oZC03MjBwLzgtbWlsZS1oZC03MjBwLnZ0dA==&cover=LzgtbWlsZS10dmUvY292ZXIucG5n">
                                            <h3 class="card-movie-title">8 mile</h3>
                                        </a>
                                        <div class="ratings"><span>7.1</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;" >Date Released</label>
                                            <span>06.11.2002</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 58mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 8 mile -->

                            <!-- Baby Driver -->
                            <div class="card-view">
                                <div class="card-header babydriver">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=OTY5NjE=&title=Baby+Driver&typesub=SUB&sub=L2JhYnktZHJpdmVyL2JhYnktZHJpdmVyLnZ0dA==&cover=Y292ZXIvYmFieS1kcml2ZXIucG5n">
                                            <h3 class="card-movie-title">Baby Driver</h3>
                                        </a>
                                        <div class="ratings"><span>7.6</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>11.02.2017</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 54mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Baby Driver -->

                            <!-- Home Alone -->
                            <div class="card-view">
                                <div class="card-header homealone">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=NjE2MA==&title=Home+Alone+HD-720p+&typesub=SUB&sub=L2hvbWUtYWxvbmUtcnBjL2hvbWUtYWxvbmUtcnBjLnZ0dA==&cover=L2hvbWUtYWxvbmUtcnBjL2NvdmVyLnBuZw==">
                                            <h3 class="card-movie-title">Home Alone</h3>
                                        </a>
                                        <div class="ratings"><span>7.6</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>14.11.1990</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 43mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Home Alone -->

                            <!-- Slumdog Millionaire -->
                            <div class="card-view">
                                <div class="card-header slumdog">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=NTgzNA==&title=Slumdog+Millionaire+HD-720p&typesub=SUB&sub=L3NsdW1kb2ctbWlsbGlvbmFpcmUtaGQtNzIwcC9zbHVtZG9nLW1pbGxpb25haXJlLWhkLTcyMHAudnR0&cover=L3NsdW1kb2ctbWlsbGlvbmFpcmUtaWN2L2NvdmVyLnBuZw==">
                                            <h3 class="card-movie-title">Slumdog Millionaire</h3>
                                        </a>
                                        <div class="ratings"><span>8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>12.11.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>2h 3mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slumdog Millionaire -->

                            <!-- Hachiko -->
                            <div class="card-view">
                                <div class="card-header hachi">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=NTI0OQ==&title=Hachiko+A+Dogs+Story+HD-720&typesub=SUB&sub=L2hhY2hpa28tYS1kb2dzLXN0b3J5LXBvay9oYWNoaWtvLWEtZG9ncy1zdG9yeS1wb2sudnR0&cover=L2hhY2hpa28tYS1kb2dzLXN0b3J5LXBvay9jb3Zlci5wbmc=">
                                            <h3 class="card-movie-title">Hachi: A Dog's Tale</h3>
                                        </a>
                                        <div class="ratings"><span>8.1</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>08.07.2009</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 33mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hachiko -->

                            <!-- Whiplash -->
                            <div class="card-view">
                                <div class="card-header whiplash">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=ODI1Mw==&title=Whiplash+HD-720p+&typesub=SUB&sub=L3doaXBsYXNoLXdpbi93aGlwbGFzaC13aW4udnR0&cover=L3doaXBsYXNoLXdpbi9jb3Zlci5wbmc=">
                                            <h3 class="card-movie-title">Whiplash</h3>
                                        </a>
                                        <div class="ratings"><span>8.5</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>16.10.2014</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 47mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Whiplash -->

                            <!-- Green Book -->
                            <div class="card-view">
                                <div class="card-header gbook">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=MjMyNTU2&title=Green+Book+&typesub=SUB&sub=L2dyZWVuLWJvb2svZ3JlZW4tYm9vay52dHQ=&cover=Y292ZXIvZ3JlZW4tYm9vay5wbmc=">
                                            <h3 class="card-movie-title">Green Book</h3>
                                        </a>
                                        <div class="ratings"><span>8.2</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>21.11.2018</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>2h 10mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Green Book -->

                            <!-- Papillon -->
                            <div class="card-view">
                                <div class="card-header papillon">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=MjE4MTg0&title=Papillon&typesub=SUB&sub=L3BhcGlsbG9uL3BhcGlsbG9uLnZ0dA==&cover=Y292ZXIvcGFwaWxsb24ucG5n">
                                            <h3 class="card-movie-title">Papillon</h3>
                                        </a>
                                        <div class="ratings"><span>7.2</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>27.06.2018</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>2h 13mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Papillon -->

                            <!-- Alita -->
                            <div class="card-view">
                                <div class="card-header alita">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=MjM5NDE2&title=Alita%3A+Battle+Angel&typesub=SUB&sub=L2FsaXRhLWJhdHRsZS1hbmdlbC9hbGl0YS1iYXR0bGUtYW5nZWwudnR0&cover=Y292ZXIvYWxpdGEtYmF0dGxlLWFuZ2VsLnBuZw==">
                                            <h3 class="card-movie-title">Alita: Battle Angel</h3>
                                        </a>
                                        <div class="ratings"><span>7.3</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>14.02.2019</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>2h 2mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Alita --> 

                            <!-- Escape Room -->
                            <div class="card-view">
                                <div class="card-header escape">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://vidcloud9.com/streaming.php?id=MjM2Nzg3&title=Escape+Room+%282019%29+&typesub=SUB&sub=L2VzY2FwZS1yb29tLTIwMTkvZXNjYXBlLXJvb20tMjAxOS52dHQ=&cover=Y292ZXIvZXNjYXBlLXJvb20tMjAxOS5wbmc=">
                                            <h3 class="card-movie-title">Escape Room</h3>
                                        </a>
                                        <div class="ratings"><span>6.3</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>04.01.2019</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>1h 40mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Escape Room --> 

                            <!-- King Kong -->
                            <div class="card-view">
                                <div class="card-header kingkong">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=NDU3Mg==&title=King+Kong+%282005%29+&typesub=SUB&sub=L2tpbmcta29uZy0yMDA1L2tpbmcta29uZy0yMDA1LnZ0dA==&cover=L2tpbmcta29uZy0yMDA1LWJudy9jb3Zlci5wbmc=">
                                            <h3 class="card-movie-title">King Kong</h3>
                                        </a>
                                        <div class="ratings"><span>7.2</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>14.12.2005</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>3h 10mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- King Kong --> 

                            <!-- The Fault in our Stars -->
                            <div class="card-view">
                                <div class="card-header stars">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="//vidcloud9.com/streaming.php?id=ODI1NA==&title=The+Fault+In+Our+Stars+HD-720p&typesub=SUB&sub=L3RoZS1mYXVsdC1pbi1vdXItc3RhcnMtZXF1L3RoZS1mYXVsdC1pbi1vdXItc3RhcnMtZXF1LnZ0dA==&cover=L3RoZS1mYXVsdC1pbi1vdXItc3RhcnMtZXF1L2NvdmVyLnBuZw==">
                                            <h3 class="card-movie-title">The Fault in our stars</h3>
                                        </a>
                                        <div class="ratings"><span>7.7</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>06.06.2014</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Length</label>
                                            <span>2h 6mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The Fault in our stars -->                            
                             
                        </div>
                    </div>
 
                </main>
            </div>
        </div>
 
    </div>
</body> 
</html>