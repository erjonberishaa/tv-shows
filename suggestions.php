<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Movies Card UI Design Inspiration - HTML & CSS | SoftAOX</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='style.css'>
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
    background: url("assets/images/cover1.jpg");
    background-size: cover;
}
 
.lcdp {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.pb {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.got {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.vikings {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.friends {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.dark {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.narcos {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.saul {
    background: url("assets/images/cover2.jpg");
    background-size: cover;
}
.sopranos {
    background: url("assets/images/cover2.jpg");
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
    <div class="container p-0">
 
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
                    <div class="pt-8 pb-2 mb-3 border-bottom">

                        <div class="row">
                            <h1 style="padding-left:200px;"> TV SHOW SUGGESTIONS</h1>
                        </div>
 
                        <div class="row">
 
                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header breakingbad">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Breaking Bad</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->
 
                            



                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header lcdp">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">La Casa de Papel</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->




                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header pb">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Peaky Blinders</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->





                            <!-- Movie Card Start -->
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
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->





                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header vikings">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Vikings</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->


                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header friends">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Friends</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->


                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header dark">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Dark</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->



                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header narcos">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Narcos</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->


                            <!-- Movie Card Start -->
                            <div class="card-view">
                                <div class="card-header saul">
                                    <div class="card-header-icon">
                                    </div>
                                </div>
 
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">Better Call Saul</h3>
                                        </a>
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->


                            <!-- Movie Card Start -->
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
                                        <div class="ratings"><span>8.8</span>/10</div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Date Released</label>
                                            <span>20.01.2008</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Number of episodes</label>
                                            <span>63</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Movie Card End -->








                            
                             
                        </div>
                    </div>
 
                </main>
            </div>
        </div>
 
    </div>
</body>
 
</html>