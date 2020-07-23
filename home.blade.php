<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body style="background-image: url(assets/img/bckground4.jpg);">
    <div class="container-fluid first-container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <img src="assets/img/myphoto.jpg" class="img-fluid rounded-circle" alt="" width="250px">
            </div>

            <div class="col-4"></div>
            <div class="col-4 text-center mt-4 border-bottom border-white">
                <h3 style="color: white;">Fatimah Rizkyana Nuraini</h3>
            </div>
            <div class="col-4"></div>

            <div class="col-3"></div>
            <div class="col-6 text-center mt-3">
                <h6 style="color: white;">Back-End Developer | Data-Analyst</h6>
            </div>
            <div class="col-3"></div>
            
            <div class="col-3"></div>
            <div class="col-6 text-center mt-3">
                <h6 style="color: white;"><i class="fa fa-instagram" aria-hidden="true"></i> fatimahrizkyana</h6>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <h2><a href="#" id="next-btn"><i class="fa fa-chevron-down animate__animated animate__slideInDown" aria-hidden="true"></i></a></h2>
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <div class="container-fluid second-container">
        <br>
        <div class="row mt-5">
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="assets/img/profile.jpg" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/profile" class="card-link"><h4 class="card-title">Profile</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="assets/img/experience.jpg" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/experience" class="card-link"><h4 class="card-title">Experience</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="assets/img/portofolio.jpg" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/portfolio" class="card-link"><h4 class="card-title">Portofolio</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="assets/img/cv.jpg" alt="Card image cap" height="226">
                    <div class="card-body text-center">
                        <a href="/cv" class="card-link"><h4 class="card-title">Cv</h4></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <h2><a href="#" id="prev-btn"><i class="fa fa-chevron-up animate__animated animate__slideInUp" aria-hidden="true"></i></a></h2>
            </div>

            <div class="col-4"></div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
<script>
    $('#next-btn').click(function () { 
        window.scrollTo(0, ($('.first-container').height()));
    });
    $('#prev-btn').click(function () { 
        window.scrollTo(0, 0);
    });
</script>
</html>