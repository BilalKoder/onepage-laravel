<!DOCTYPE html>
    <html lang="en">
    <head>
     @include('components.head')
    </head>
    <body>
        <!-- Navbar STart -->
        @include('components.navbar')
       
        <!-- Navbar End -->
        <!-- Start Home -->
        <section class="bg-half-170 d-table w-100 border-bottom" style="background: url('images/bg/bg6.jpg') center center;" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="home-title text-white text-center">
                            <!-- <h1><i class="pe-7s-rocket"></i></h1>
                            <h5 class="mb-2 text-uppercase">Discover Landkey Today</h5> -->
                            <!-- <h1 class="display-4 letter-spacing mb-3 text-white text-uppercase font-weight-bold">Unlocking Brand Potential In Middle East</h1> -->
                            <!-- <p class="mt-4 text-white-50 para-desc mx-auto">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space.</p> -->

                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Home -->

          <!-- Services Start -->
          <section class="section bg-light" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-2">OUR BUSINESSES</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Proud Partners Of Our Global Brand</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card blog-post service-wrapper border-0 shadow rounded position-relative overflow-hidden">
                            <img src="images/blog/01.jpg" class="img-fluid" alt="">
                          
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card blog-post service-wrapper border-0 shadow rounded position-relative overflow-hidden">
                            <img src="images/blog/02.jpg" class="img-fluid" alt="">
                            
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card blog-post service-wrapper border-0 shadow rounded position-relative overflow-hidden">
                            <img src="images/blog/03.jpg" class="img-fluid" alt="">
                          
                        </div>
                    </div><!--end col-->
                </div>
            </div><!--end container-->
            
            
        </section><!--end section-->
        <!-- Services End -->

        <!-- Start Footer -->
        @include('components.footer')
        <!-- End Footer -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i>
        </a>
        <!-- Back to top -->
        
        <!-- javascript -->
        @include('components.scripts')
    </body>
</html>