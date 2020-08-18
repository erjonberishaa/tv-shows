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
    margin-top: 5rem;
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
 
.breakingbad {
    background: url("assets/images/moviecover4.jpg");
    background-size: cover;
}
 
.lcdp {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.pb {
    background: url("assets/images/cover3.jpg");
    background-size: cover;
    href:
}
.got {
    background: url("assets/images/cover4.jpg");
    background-size: cover;
}
.vikings {
    background: url("assets/images/cover5.jpg");
    background-size: cover;
}
.friends {
    background: url("assets/images/cover6.jpg");
    background-size: cover;
}
.dark {
    background: url("assets/images/cover7.jpg");
    background-size: cover;
}
.sherlock {
    background: url("assets/images/coveri.jpg");
    background-size: cover;
}
.saul {
    background: url("assets/images/cover9.jpg");
    background-size: cover;
}
.sopranos {
    background: url("assets/images/cover10.jpg");
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
    <h2> MOVIE SUGGESTIONS</h2>
    </div>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
                    <div class="pt-8 pb-2 mb-3 ">                   
 
                        <div class="row">
 
                            <!-- Breaking Bad -->
                            <div class="card-view">
                                <div class="card-header breakingbad">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://www.amc.com/shows/breaking-bad--18">
                                            <h3 class="card-movie-title">2 Gisht Mjalte</h3>
                                        </a>
                                        <div class="ratings"><span>9.5</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Breaking Bad -->

                            <!-- LCDP -->
                            <div class="card-view">
                                <div class="card-header lcdp">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://www.netflix.com/bg/title/80192098">
                                            <h3 class="card-movie-title">I ❤ Tropoja</h3>
                                        </a>
                                        <div class="ratings"><span>8.4</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>02.05.2017</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>32</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LCDP -->

                            <!-- Peaky Blinders -->
                            <div class="card-view">
                                <div class="card-header pb">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://peakyblinders.tv/">
                                            <h3 class="card-movie-title">Peaky Blinders</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;" >Date Released</label>
                                            <span>12.09.2013</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>37</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Peaky Blinders -->

                            <!-- Game of Thrones -->
                            <div class="card-view">
                                <div class="card-header got">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Game of Thrones</h3>
                                        </a>
                                        <div class="ratings"><span>9.3</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>17.04.2011</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>73</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Game of Thrones -->

                            <!-- Vikings -->
                            <div class="card-view">
                                <div class="card-header vikings">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://www.history.com/shows/vikings">
                                            <h3 class="card-movie-title">Vikings</h3>
                                        </a>
                                        <div class="ratings"><span>8.5</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>03.03.2013</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>93</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Vikings -->

                            <!-- Friends -->
                            <div class="card-view">
                                <div class="card-header friends">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://www.warnerbros.com/tv/friends">
                                            <h3 class="card-movie-title">Friends</h3>
                                        </a>
                                        <div class="ratings"><span>8.9</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>22.09.1994</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>235</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Friends -->

                            <!-- Dark -->
                            <div class="card-view">
                                <div class="card-header dark">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://dark.netflix.io/en">
                                            <h3 class="card-movie-title">Dark</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>01.12.2017</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>26</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dark -->

                            <!-- Sherlock -->
                            <div class="card-view">
                                <div class="card-header sherlock">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="bbc.co.uk/programmes/b018ttws">
                                            <h3 class="card-movie-title">Sherlock</h3>
                                        </a>
                                        <div class="ratings"><span>9.1</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>25.07.2017</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>13</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Sherlock -->

                            <!-- Better Call Saul -->
                            <div class="card-view">
                                <div class="card-header saul">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="https://www.amc.com/shows/better-call-saul--16">
                                            <h3 class="card-movie-title">Better Call Saul</h3>
                                        </a>
                                        <div class="ratings"><span>8.7</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>08.02.2015</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Better Call Saul -->

                            <!-- The Sopranos -->
                            <div class="card-view">
                                <div class="card-header sopranos">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">The Sopranos</h3>
                                        </a>
                                        <div class="ratings"><span>9.2</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label style="color:black;">Date Released</label>
                                            <span>10.01.1999</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label style="color:black;">Number of episodes</label>
                                            <span>9.2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The Sopranos -->                           
                             
                        </div>
                    </div>
 
                </main>
            </div>
        </div>
 
    </div>
</body> 
</html>