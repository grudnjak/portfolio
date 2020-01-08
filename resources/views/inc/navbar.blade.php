<!-- Header Section Start --> 
<div class="header-section section">
        <div class="container-fluid">
                    <div class="row align-items-center">
                        
                        <!-- Logo -->
                        <div class="header-logo col-lg-2 col-6 mt-40 mb-40"><a href="/"><img src="images/logo.png" alt=""></a></div>
                        
                        <!-- Header Menu -->
                        <div class="header-menu d-lg-flex justify-content-center col-lg-8 d-none">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="/">HOME</a>
                                    </li>
                                    <li>
                                            <a href="/galerija">GALERIJA </a>
                                        
                                        </li>
                                        <li>
                                                <a href="/services">PROJEKTI</a>
                                        </li>
                                        <li>
                                            <a href="/about">O MENI</a>
                                        </li>
                                        <li>
                                            <a href="/contact">KONTAKT</a>
                                        </li>
                                       
                                        @if(!Auth::guest())
                                        <li>
                                            <a href="/home">DASHBOARD</a>
                                        </li>

                                        @endif
                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Header Socail -->
                        <div class="header-social d-flex align-items-center justify-content-end col-lg-2 col-6">
                            
                            <!-- Side Menu Toggle -->
                        <button class="side-header-toggle d-block d-lg-none order-12 ml-20"><span></span></button>
                        
                            
                            <a href="#"><i class="fa fa-instagram"></i></a>
                    
                        </div>
                    </div>
                </div>
            </div><!-- Header Section End -->
            
            <!-- Side Header Overlay Start -->
        <div class="side-menu-overlay"></div><!-- Side Header Overlay End -->
    
        <!-- Side Header Start -->
        <div class="side-header custom-scroll mobile-side-header">
           
            <!-- Side Header Inner Start -->
            <div class="side-header-inner">
                <button class="side-header-close d-block d-lg-none"><span></span></button>
                <!-- Side Header Logo Start -->
                <div class="side-header-logo pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50">
                    <a href="/"><img src="/images/logo.png" alt=""><img src="/images/logo.png" class="light-logo" alt=""></a>
                </div><!-- Side Header Logo End -->
                
                <!-- Side Header Logo Start -->
                <div class="side-header-menu">
                    <nav id="side-menu" class="side-menu">
                        <ul>
                                <li><a href="/">HOME</a>
                                </li>
                                <li>
                                        <a href="/galerija">GALERIJA </a>
                                    
                                    </li>
                                    <li>
                                        <a href="/about">O MENI</a>
                                    </li>
                                    <li>
                                        <a href="/contact">KONTAKT</a>
                                    </li>
                                    @if(!Auth::guest())
                                        <li>
                                            <a href="/home">DASHBOARD</a>
                                        </li>

                                        @endif
                        </ul>
                    </nav>
                </div><!-- Side Header Menu End -->
                
                <!-- Side Header Logo Start -->
                <div class="side-header-footer pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
                    
                    <!-- Side Header Contact Information -->
                    <div class="side-header-contact-info">
                        <p><a href="#">+386 41 675 682</a></p>
                        <p><a href="#">info@fotografija-grudnik.si</a></p>
                    </div>
                    
                    <!-- Side Header Social -->
                    <div class="side-header-social">
                        <a href="https://www.instagram.com/valentingrudnik/"><i class="fa fa-instagram"></i></a>
                    </div>
                    
                    <!-- Side Header Copyright -->
                    <div class="side-header-copyright">
                        <p>&copy; 2019 VALENTIN GRUDNIK. ALL RIGHT RESERVED</p>
                    </div>
                    
                </div><!-- Side Header Footer End -->
                
            </div><!-- Side Header Inner End -->
            
        </div><!-- Side Header End -->
    
            
    
    