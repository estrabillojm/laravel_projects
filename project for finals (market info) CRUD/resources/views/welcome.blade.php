@extends('layouts.app')
@section('content')
    <style>
        .jumbotron{
            background-color:#6ba9ff !important;
            
        }

        .bg-white{
            border-left:3px solid rgb(50,50,50);
            box-shadow:-5px -5px -5px rgb(50,50,50);
            z-index: 2;
        }

        .my-img{
            max-width:440px;
        }

        p.white{
            color:white !important;
        }
    </style>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/image-1.jpg') }}"
                alt="First slide">
            </div>


            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/image-2.jpg') }}"
                alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/image-3.jpg') }}"
                alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/image-4.jpg') }}"
                alt="Fourth slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Welcome to Garbes Dizon Supermarket</h2>
            <p class="lead">
            Usual destination of "sari-sari"(variety) store owners where they procure their products.
            </p>
        </div>
    </div>




    <div class="container">
        
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Garbes Dizon Supermarket</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Conveniency</h6>
                            <p class="lead">Convenient procedures, products and services are those intended to increase ease in accessibility, save resources (such as time, effort and energy) and decrease frustration.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Garbes Dizon Supermarket</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Cheaper Price</h6>
                            <p class="lead white">
                            Goods or services that are cheap cost less money than usual or than you expected.
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Garbes Dizon Supermarket</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Disinfection</h6>
                            <p class="lead">
                            Less chance of viruses and bacteria' survival at home and offices. Excellent services. We do a 6 - step intensive disinfection process. 
                            </p>
                        </div>
                    </div>
                </div>


                
            </div>
        
    </div>


    <hr class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="https://fastly.4sqi.net/img/general/600x600/18641922_tXlmDA8foNRBYt5k9D66byVtMu1Bm7aCfGZcZ5cIl34.jpg" alt="">
            </div>

            <div class="col-md-3">
                <img class="img-fluid" src="https://fastly.4sqi.net/img/general/600x600/142804273_jWtQ1ps92kGhIoeolYt5vTN11V4trGMpmEYKP93y418.jpg" alt="">
            </div>

            <div class="col-md-3">
                <img class="img-fluid" src="data:image/jpeg;base64,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I2afvM8khYZ6GoqgGzmOKG4LmRkue6xvhc42AGW4Lbr9NRRdUHnJN0cfWeT7Bs9pWcvn89pr1k0qG17VF3j9b87uS57l80NXveZIZgBNCQHFvkuBF2uHC+8KSVbp6+Kjc+WskbFNUEHDmQ1rRZrbgZkXzK2P9Z0HpLPB36LMZpLrM0q0JSnenFtZbE2r2ztyvexOLzNIGNLnGzWgkngBmVC/6zoPSWeDv0UDrvrjTupHx08we+TqmwOTd52b9nekqkUr3MUsHWqTUNVq74PIrWhITpTSpkcLsxmRwO5rTk3/ABauvqlclmieap3TuHWmOX3R+pv4BXVaUI2jd7WWNKVVOvqR/TBaq7vdu4IiKc5gREQBERAEREAREQBERAEREAUXpPQzJZBOZJY3MZhvG4DLM55HipRfHC4ssNJ5M3p1JU3rRdjndLUVlYXOpJZWwtdYPmlzd7AG5Le0BNJNO+lqJqmOdgxdWUFrhxHVy2hbbdU56dzuh1Ijjcb829mMNPYVv6v6tdHkfPLKZp3ixeRYAcAO4eC51KliOlbnbVNliq1lnnvyVvQz/IR9LqveN/anyEfS6r3jf2qWRX+jiSfFVePkvsRPyEfS6r3jf2p8hH0uq9439qlkTo4j4qrx8l9iJ/08w5SS1Eo4PlNvBtlvUdBFCLRxtZ90AX9p2nvWwiyopbERzr1Jq0pO3Dd4bCE1h1Wgr3MdMXjACBgIG3jcFVDWjVSiomsDRPJLK7DGzG0XOW04O0eK6UonWPQDK1jQXFj2G8b27Wn8xkPBR1aaabisySOMxFOGpTm0u05vVaoSU7DNLGHxtzc1kgDmj2ltj8VZNGag0FRCyZjp8LxcXcy47D1NxW7NqxWTt5uetBi+1giAc4cCVZqGjZBG2JgsxgsAqmEoVEn0yRv+IYq+VSVubPVHTNijZGwWaxoaB2DJZURdEphERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREB//Z" alt="">
            </div>

            <div class="col-md-3">
                <img class="img-fluid" src="https://fastly.4sqi.net/img/general/600x600/18058956_-ahxCNs-EmXAWpXyqMYJ-yrcFxJM5Gy3ro4A1HSI9LM.jpg" alt="">
            </div>

            <div class="col-md-3">
                <img class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>

  
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
    


    @include('partials.footer')
@endsection
