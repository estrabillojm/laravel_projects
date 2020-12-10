@extends('layouts.app')
@section('content')

    <style>
        .jumbotron{
            background-color:#4275f5;
            color:white;
            border-radius:0;
        }

        .card{
            min-height:300px !important;
        }
    </style>
    <div class="jumbotron">
        <h1 class="display-4">Welcome to St. Nicolas College</h1>
        <p class="lead">
        St. Nicolas College of Business and Technology (SNC) allows its students to build a strong, solid career through a world-class skill-based training and higher education degree leading to globally competitive graduates responsive to the manpower, technological, research and development needs of the country.
        </p>
        <hr class="my-4">
        <p>
    "Advancing Your Knowledge and Skills for Global Competitiveness..."</p>
        <p class="lead">
            <a class="btn btn-success btn-lg" href="https://www.facebook.com/stnicolascollege" target="blank" role="button">Learn more</a>
        </p>
    </div>
    <div class="mb-5">
        <h1 class="text-center text-primary">Courses Offered</h1>
        <hr>
        <img class="d-block w-100" src="https://scontent.fcrk1-1.fna.fbcdn.net/v/t1.0-9/107817533_2980873872020930_4450237591128743527_o.jpg?_nc_cat=105&ccb=2&_nc_sid=730e14&_nc_eui2=AeEZkuecXHfZJHvWZPt2wcMXZqwp27KEHHZmrCnbsoQcdjj9W7n8bJ9MBnil7UtvOmyVuLv8deQMI6tts4oVwmbh&_nc_ohc=tDFtrgF5dPgAX9lQw54&_nc_ht=scontent.fcrk1-1.fna&oh=04ae49a13d8e99d6a6e285bceb9d00cc&oe=5FEF93C7" alt="First slide">
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-success">MISSION</h5>
                        <p class="card-text">
                        To develop and provide high quality academic and quality skills programs that would ensure employability and productivity of younv men and women through proper values and principles as a means to avhieve success with excellence for a better quality of life.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">VISION</h5>
                        <p class="card-text">
                        A center of excellence in academic  and technical skills programs in pursuing dynami  opportunities parallel to global standards, thereby, uplifting the socio-economic growth of the country.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div> 
        <hr>
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h3 class="text-success">St. Nicolas College of Business & Technology</h3>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t1.0-9/67424838_2205277966247195_5917846114999992320_o.jpg?_nc_cat=109&ccb=2&_nc_sid=730e14&_nc_eui2=AeFQ1Q_SSG4REmCJAIllCm7dV08yOpzOOjpXTzI6nM46OhMCH5KPwzzge1OWEgWtLit62wZDB6gC7hleDPyKCN3a&_nc_ohc=S52Vt2yA58AAX83Onci&_nc_ht=scontent.fcrk1-2.fna&oh=b5f58307a14aa0633fa05591d2580686&oe=5FEE4697" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t1.0-9/33174592_1548578385250493_217154624522551296_o.jpg?_nc_cat=111&ccb=2&_nc_sid=730e14&_nc_eui2=AeHkJCeG0zXS6bTFOD-igzPHX9Yn4tQbWnVf1ifi1BtadSOfbptdSbqoLArwxIpyo1E48drDH3H0HKPlXlS4bH1w&_nc_ohc=iCmZoVMQJzIAX_HDI3Z&_nc_ht=scontent.fcrk1-2.fna&oh=3fe9e1130d2133aa77169c5b61473c1a&oe=5FEE4523" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t1.0-9/86288184_2630444973730490_8508101046805987328_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_eui2=AeFvopE8v5C4cGj3AbeydCXv67wFSU_UGPHrvAVJT9QY8TcFZjAxeUCAdLFk4uepjM_gSvn2kM7LuAykTO1yGjn-&_nc_ohc=t8tFnsdcEO8AX--r7ir&_nc_ht=scontent.fcrk1-2.fna&oh=9a50b7b0c3e3c69daf94e20eaec6227c&oe=5FF0716A" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @include('partials.footer')
    <script>
        $(document).ready(function(){
            alert('ok')
            $('.carousel').carousel()
        });
    </script>
@endsection