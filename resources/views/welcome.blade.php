 @extends('layouts.Menu')
            @section('conteudo')
            <section class="content-banner">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            {{-- carousel com a descricao das imagens--}}
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner carousel-fade">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100 " src="{{ asset('img/202887969_819365532349927_8381754585315331315_n.jpg')}}"  alt="First slide">
                                        <div class="carousel-caption ">
                                            <h5 class="display-4 ">Thor</h5>
                                            <p>dkaskdhaksdhaks</p>
                                        </div>
                                    
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/236372106_854624118824068_4898027839881797603_n.jpg')}}" alt="Second slide">
                                    <div class="carousel-caption ">
                                        <h5>Thor</h5>
                                        <p>dkaskdhaksdhaks</p>
                                    </div>
                                  </div>

                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('img/237676549_854952035457943_5207095671193010926_n.jpg')}}" alt="Third slide">
                                    <div class="carousel-caption ">
                                        <h5>Thor</h5>
                                        <p>dkaskdhaksdhaks</p>
                                    </div>
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
            </section>
            <section >
                    <div class="container-fluid">
                        <menu-component><menu-component>
                    </div>
                    <contact-component ></contact-component>
                    <footer-component></footer-component>
             </section>         
                  
@endsection

  


