<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>ReliableBD</title>
    <link rel="icon" href="{{asset('css/images/rb-ltd-logo.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="reliable development ltd.">
    <meta name="keywords" content="reliable,reliablebd,reliable development,ReliableBD,reliablebd.org,www.reliablebd.org, reliablebd org, reliable builders,reliable builders ltd">
    <meta name="author" content="">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/plugin.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="tab/main.css" />
    <link rel="stylesheet" type="text/css" href="tab/tabModule.css" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="tab/tabModule.js"></script>

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

    <!-- revolution slider -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">

</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="col">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="http://www.reliablebd.org/">
                                <img class="logo" src="images/logo.png" alt="" height="64" width="64"> <font size="3" class="logo">RBL</font>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->
                        
                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="#wrapper">Home</a></li>
                                <li><a href="#section-profile">About</a>
                                    <ul><li><a href="#section-profile">Corporate Profile</a></li>
                                        <li><a href="#section-message">Message</a></li>
                                        <li><a href="#section-mission">Mission & Vision</a></li>
                                        <li><a href="#section-activities">Activities</a></li>
                                        <li><a href="#section-org">Organization Chart</a></li>
                                        <li><a href="#section-financial">Financial Capability</a></li>
                                    </ul>
                                </li>
                                <li><a href="#section-person">Personnels</a></li>
                                <li><a href="#section-team">Projects</a>
                                    <ul><li><a href="#section-team">Work In Hand</a></li>
                                       <li><a href="#section-steps">Completed Projects</a></li> 
                                    </ul>
                                </li>
                                <li><a href="#section-equipment">Equipments</a></li>
                                <li><a href="#section-machine">Sister Concern</a>
                                    <ul><li><a href="#section-machine">Reliable Machineries</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="#section-portfolio">Gallery</a></li>
                                <li><a href="#section-contact">Contact</a></li>
                                 @if (Route::has('login'))
                                <li>
                                    @auth
                                        <a href="{{ url('/home') }}">Dashboard</a>
                                    @else
                                    <a class=" " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Sign In</a>
                                    @endauth
                                </li>
                                @endif 
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->
                    <div class="col-md-6"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="collapse" id="collapseExample">
                          <div class="card">
                            <div class="card-header h5"><span class="id-color">{{ __('Login') }}</span></div>

                            <div class="card-body">
                                <form method="POST" action="{{route('login')}}" id="login_form">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right id-color">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right id-color">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- header close -->





        <!-- content begin -->
        <div id="content" class="no-bottom no-top">


            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="images-slider/wide1.jpg" alt="" />
                            <div class="tp-caption big-white sft"
                                data-x="0"
                                data-y="160"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="450">
                                Our Expertise For
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start"
                                data-x="0"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="400">
                                Reliable BD
                            </div>

                            <div class="tp-caption sfb"
                                data-x="0"
                                data-y="335"
                                data-speed="400"
                                data-start="800"
                                data-easing="easeInOutExpo">
                                <nav><a href="#section-portfolio" class="btn-slider">Our Gallery</a></nav>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="images-slider/wide2.jpg" alt="" />
                            <div class="tp-caption big-white sft"
                                data-x="0"
                                data-y="160"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="450">
                                Featured Project
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start"
                                data-x="0"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="400">
                                Reliable BD
                            </div>

                            <div class="tp-caption sfb"
                                data-x="0"
                                data-y="335"
                                data-speed="400"
                                data-start="800"
                                data-easing="easeInOutExpo">
                                <nav><a href="#section-portfolio" class="btn-slider">Our Gallery</a></nav>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="images-slider/wide3.jpg" alt="" />
                            <div class="tp-caption big-white sft"
                                data-x="0"
                                data-y="160"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="450">
                                Reliable BD
                            </div>

                            <div class="tp-caption ultra-big-white customin customout start"
                                data-x="0"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutExpo"
                                data-endspeed="400">
                                Your Life Easier
                            </div>

                            <div class="tp-caption sfb"
                                data-x="0"
                                data-y="335"
                                data-speed="400"
                                data-start="800"
                                data-easing="easeInOutExpo">
                                <nav><a href="#section-portfolio" class="btn-slider">Our Gallery</a></nav>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->
                        
                <!-- section begin -->
            <section id="section-profile">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Corporate Profile</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-md-12 wow fadeInLeft">
I take pride in preparatory of the prominent mechanical engineering solutions and construction firms in Bangladesh, having achieved remarkable growth over the years and contributing significantly to the development of National Infrastructure. The Reliable Builders & Reliable Machineries has attained prominence as a leader in the field of construction and engineering through competence, competitiveness and timely delivery with highest quality standards and recognized safety performance. We have a long tradition of serving our valued customers to their complete satisfaction through efficient management and excellent workmanship, which we continue to maintain with our untiring efforts. Our Organization is also ISO Certified. <b><u><a href="#iso">ISO number is 110583 (9001:2015).</a></u></b>
<br><br>
In an era of advanced technologies and new techniques, we continuously strive for innovation and enhanced efficiency.
<br><br>
Offering services spanning a wide range of engineering fields in oil & gas, sewage systems, marine structures, building constructions, power & water, roads & bridges and industrial and civil infrastructure, RBL is the preferred choice of many clients because of its reliability and commitment to quality and safety.
<br><br>
Due to strong background in Mechanical Engineering Solutions & design, <RBL></RBL> has been able to succeed in the projects by prioritizing our engineering notion. Whereby, the “corporate synergy” built together with our mother company OTBL and Partnership Corporation (DEWL) had a major contribution on our success. We never failed to realize that our efficient structure has always been the most significant anchorage for our Clients. As we look to the years ahead we renew our pledge to remain committed to excellence, keep abreast of changes and innovations, adopt better management and construction techniques and successfully overcome all challenges before us.
<br><br><br>
<span class="id-color">Shafiqul Alam Mithun</span><br>
Managing Director<br>
Reliable Builders Ltd. 
                        </div>
                        
                        <div id="iso" class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>ISO Certificate</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInLeft">                            
                        <p align="center"><img src="images/iso_certificate.jpg" width="80%"></p>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- section close -->
            
            
            <!-- section ISO -->
            <!--<section>-->
            <!--    <div class="container">-->
            <!--        <div class="row">-->
            <!--            <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">-->
            <!--                <h1>ISO Certificate</h1>-->
            <!--                <div class="separator"><span><i class="fa fa-circle"></i></span></div>-->
            <!--                <div class="spacer-single"></div>-->
            <!--            </div>-->

            <!--            <div class="col-md-12 wow fadeInLeft">                            -->
            <!--            <p align="center"><img src="images/org_chart.png" width="80%"></p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- section close -->
            
            <!-- section begin -->
            <section id="section-message" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Message of Founder</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInLeft">
<p align="center"><img src="images/pp.png" alt="Shafiul Alam Mithun" width="150" height="182"></p><hr><br>           
<p align="justified">                            
Within a short span of time, The Reliable Builders has not only been able to establish itself as a leading Civil Engineering contractor & related Equipment Service Provider in wide ranged organized sector, but also has earmarked its presence in other business with a strong support of its sister concerns.<br><br> 
Today it is very satisfying to see a dedicated & resolute team stride proudly towards building our National Infrastructure with our asset deployed at every corner of the country.<br><br> 
My compliment goes to the leadership for imbibing an exemplary service culture and winning customers confidence and loyalty. With its unique proposition, I hope to see The Reliable Builders spreading its wings globally under various business opportunities.<br><br>
<br><br>                          
<span class="id-color">Shafiqul Alam Mithun</span><br>
Managing Director<br>
Reliable Builders Ltd.
</p>
<hr>
<br>
<div id="msg-bx">                            
<div class="left-div left-text"><i><u>MISSION:</u></i><br><i>Our mission has been focused on creating an Industrial Group active in multiple sectors which are diverse but key to the country’s grouth.</i></div>
<div class="right-div right-text"><i><u>VISSION:</u></i><br><i>To provice quality services that exceeds the expectations of our esteemed customers.</i></div>
</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            
             <!-- section begin -->
            <section id="section-mission">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Mission & Vision</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInLeft">
<div class="mission1"><span class="id-color"><u>Mission:</u></span><br>
With a well-defined direction in place, the path to realizing our Vision is based on fundamental drivers, instrumental in achieving our goals. Industrialization is a process that happens in countries when they start to use machines to do work that was once done by traditional labor. Industries are the most important aspect of the economy. Using better technology, it becomes possible to generate more possessions in a shorter amount of time. Sectors such as Agriculture, Energy, Transportation, Material Handling, Heavy Duty Machineries, Electric Appliances, Textile and etc; are the versatile parts of International Trading.
<br><br>
On the other hand, Road infrastructure is vital in assisting the Nation’s economic development by moving people and goods. Sectors such as Civil Construction particularly roads, buildings, airport, power and ports have become very attractive for both domestic and foreign contractor & investors. This is due to relatively low entry barriers in these markets, a strong project pipeline and a considerable opportunity size.
<br><br>
As a result, the market as a whole has become a mixed bag of opportunities in which different types of players are participating, concerning the common interest of doing business. Orienting towards market demand, THE RELIABLE BUILDERS (TRB) is the most imperative Sister Concerns of OTBL. Facing the new challenges and opportunities, TRB has emerged as a leading enterprise in Bangladesh in the field of Infrastructure construction & International trading of Industrial Machineries.
<br><br>
The Reliable Builders has been a key partner in the infrastructure growth of BANGLADESH, since the company’s founding TRB has explored & expanded to meet the needs of the region as the demands for improved infrastructure increase. As The Company grown, TRB has formed & pursue new partnerships and branched out to new subsidiaries to meet nearly every Industrial Machinery of Transportation, Construction, Material Handling, Marin, Textile, Agriculture & a wide variety of products.</div>
<br><br>                            
<div class="vision1"><span class="id-color"><u>Vision:</u></span><br>
From being number one construction company in Bangladesh, TRB continues to excel in its entire field through its leadership skills. It makes its mark in South East Asia delivering projects that consistently meet international standards.
</div>                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            
            <!-- section begin -->
            <section id="section-activities" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>ACTIVITIES</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInLeft">
The construction work involves earthworks, foundation works, piling and foundation reinforcement, tunneling and underground construction, harbor construction and dredging, municipal engineering, and the construction of streets, roads, bridges and Street light facilities etc. In infrastructure maintenance, our company is involved in up keeping roads, streets and the rail network, including related structures such as bridges. We offer long-term maintenance agreements where pricing is influenced by the usability of the route and service quality.
<br><br>
RM will continue on its path of pursuing growth in high margin growth oriented sectors, particularly in the Industrial Machinery regarding Construction, Agriculture, Material Handling & Vehicles and power sectors where a supply capacity crunch is anticipated with the pressures brought on by the rise in regional demand. We have earmarked a strong focus on improving client service and relations, as well as increase investment and empower high margin businesses to drive sustainable and long term growth.
<br><br>
To procure projects at competitive pricing, provide safe working condition and deliver quality work within reasonable time frame the advantages of hiring TRB for your special projects include:
<br><br>
• Single point of contact for all aspects of civil construction
<br>
• Rapid response and mobilization
<br>
• Big-picture understanding of ongoing business environments
<br>
• Well-defined scopes of work
<br>                            
• Quick response to change
<br>
• 100% Quality
<br><br>
Selected areas where RM can help:
<br><br>
• Product profitability: Striking the right balance across go-to-market strategy, option profitability, cost structure, discount strategy, and product mix.<br> 
• Global launches: Effectively launching the same platform or product in multiple regions through a combination of local and global suppliers.<br>
• Cost engineering: Delivering both value and insight in the face of the dual challenges of elaborate global complexity and low volumes.
<br>                            
• Relationships between suppliers and original equipment manufacturers: Targeting and executing the right mix of local and global relationships to jointly develop and profitably deliver products globally.
<br>
• Technical cost reduction: Implementing major programs across geographies to reduce direct material costs on current products.
<br>
• Functional assessments and redesign: Assessing organizations’ current capabilities and developing road maps to sustainably achieve best-in-class performance.
<br><br>
To us, “Excellence” means not only being the very best at what we do, but also holding ourselves to the highest ethical standards in terms of how we do things. That is why we must never deviate from our Business Principles, regardless of the difficulties or consequences. As we strive for Excellence, we must continue to earn the trust of our customers, employees, local communities and co-workers by continuously demonstrating that we are worthy of the trust that they have placed in us.                               
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
<!-- section begin -->
            <section id="section-org">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Organization Chart</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


<div class="col-md-12 wow fadeInLeft">                            
<p align="center"><img src="images/org_chart.png" width="80%"></p>
</div>
                                      
                    </div>                   
                </div>
            </section>
            <!-- section close -->
            
<!-- section begin --> 
            <section id="section-services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Working Department</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="working">
                            <div class="working_left">
                                <ul>
                                <li>Roads and Highways Department (RHD)</li><br>
                                <li>Local Government Engineering Department (LGED)</li><br>
                                <li>Civil Aviation Authority of Bangladesh (CAAB)</li>
                                </ul>
                            </div>
                            <div class="working_right">
                                <ul>
                                <li>Bangladesh Navy (BN)</li><br>
                                <li>Rajdhani Unnayan Kartipokkha (RAJUK)</li><br>
                                <li>Bangladesh Economic Zones Authority (BEZA)</li>
                                </ul>
                            </div>  
                        </div>
                
                    </div>
                </div>
            </section>
             <!-- section close -->
             
<!-- section begin -->
            <section id="section-financial">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Financial Capability</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>


                        <div class="col-md-12 wow fadeInLeft">
<p align="justify">The ability to successfully cash manage a project is vital to its success. Through our substantial construction experience we have developed our job costing and control systems to accurately monitor the overlay company cash management and the specific cash management of each project.<br><br>
The Reliable Builders has recently upgraded to the suite of construction accounting packages this now provides even more accurate and detailed financial management of specific projects and client requirements, as well as more information on the overall company performance. According to the need of the clients we provide primavera or MS project-project planning and control software. <br><br>
The Reliable Builders operates very significant trade accounts with Bangladesh’s leading suppliers and subcontractors. We have proven that we have the financial capacity to complete any project that we choose to engage in. with the company entering its 20th year of operations and with an annual turnover approaching higher growth The Reliable Builders has created the base for long term success in the Bangladesh Construction Industry. Banking facilities more than 300 Cr. Taka shows Trust in our financial strength and objectivity and delivery capabilities. 
</p><br><br>      
<!--<div id="msg-bx_finance"><h2><u>Source of Financing</u></h2><br>                        -->
<!--<div class="left-div_finance left-text_finance"><b>DHAKA BANK LIMITED</b></div>-->
<!--<div class="right-div_finance right-text_finance"><b>UNITED COMMERCIAL BANK LTD.</b></div>-->
<!--<div class="right-div_finance right-text_finance"><b>BANK ASIA LTD.</b></div>-->
<!--</div>-->
                     
<table>                             
      <thead>
        <tr>
          <th>Sl. No.</th>
          <th></th>
          <th></th>
          <th>Financial Year</th>
          <th></th>
          <th>Turnover (Taka)</th>   
        </tr>
                                  </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td></td>
          <td></td>
          <td>2007-2008</td>
          <td></td>
          <td> 850,223,280.75 </td>
        </tr>
         
           <tr>
          <td>2.</td>
          <td></td>
          <td></td>
          <td>2008-2009</td>
          <td></td>
          <td> 1,393,593,284.38 </td>    
        </tr>
         
           <tr>
          <td>3.</td>
          <td></td>
          <td></td>
          <td>2009-2010</td>
          <td></td>
          <td> 967,966,535.91 </td>    
        </tr>
         
           <tr>
          <td>4.</td>
          <td></td>
          <td></td>
          <td>2010-2011</td>
          <td></td>
          <td> 1,630,101,164.47 </td>    
        </tr>
         
           <tr>
          <td>5.</td>
          <td></td>
          <td></td>
          <td>2011-2012</td>
          <td></td>
          <td> 1,455,348,659.42 </td>    
        </tr>
         
           <tr>
          <td>6.</td>
          <td></td>
          <td></td>
          <td>2012-2013</td>
          <td></td>
          <td> 2,051,420,221.00 </td>    
        </tr>
         
           <tr>
          <td>7.</td>
          <td></td>
          <td></td>
          <td>2013-2014</td>
          <td></td>
          <td> 1,725,526,732.19 </td>    
        </tr>
         
           <tr>
          <td>8.</td>
          <td></td>
          <td></td>
          <td>2014-2015</td>
          <td></td>
          <td> 3,300,033,803.17 </td>    
        </tr>
         
        <tr>
          <td>9.</td>
          <td></td>
          <td></td>
          <td>2015-2016</td>
          <td></td>
          <td> 2,570,893,419.82 </td>    
        </tr>
        
        <tr>
          <td>10.</td>
          <td></td>
          <td></td>
          <td>2016-2017</td>
          <td></td>
          <td> 3,883,782,916.11 </td>    
        </tr>
        
        <tr>
          <td>11.</td>
          <td></td>
          <td></td>
          <td>2017-2018</td>
          <td></td>
          <td> 3,954,954,406.48 </td>    
        </tr>
        
        <tr>
          <td>12.</td>
          <td></td>
          <td></td>
          <td>2018-2019</td>
          <td></td>
          <td> 4,531,300,516.25 </td>    
        </tr>
          
          <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Total:</td>
          <td>28,315,144,939.95</td>
        </tr>
      </tbody>
</table>
<br><br>                            
<p align="center"><img src="images/financial_chat.png"  width="70%"></p>
</div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            
            <!-- section begin -->
            <section id="section-person">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Personnel Mejor</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 container-4 wow fadeInUp">
             
                            <table>
                                
      <thead>
        <tr>
          <th>Sl No.</th>
          <th>Name</th>
          <th>Technical Qualification</th>
          <th>Phone</th>
          <th>Email</th>
        </tr>
                                  </thead>
      <tbody>
       
       <tr>
          <td>1.</td>
          <td>Abul Kalam Mojumder</td>
          <td>Director Operation</td>
          <td>01755558051, 01712797396</td>
          <td>kalam.mojumder@reliablebd.org</td>
        </tr>
         
        <tr>
          <td>2.</td>
          <td>Sazzad Kadir Khan</td>
          <td>Executive Director</td>
          <td>01755558053</td>
          <td>sazzad.kadir@reliablebd.org</td>
        </tr> 
          
        <tr>
          <td>3.</td>
          <td>Abu Sayed</td>
          <td>Project Manager</td>
          <td>01711167036</td>
          <td>abu.sayed@reliablebd.org</td>
        </tr>
        
        <tr>
          <td>4.</td>
          <td>Gazi Kamal Pasha</td>
          <td>Project Manager</td>
          <td>01716191390, 01957799874</td>
          <td>gazi.kamal.pasha@reliablebd.org</td>
        </tr>
        
          <tr>
          <td>5.</td>
          <td>Bimal Debnath</td>
          <td>GM (Accounts & Finance)</td>
          <td>01710974475</td>
          <td>bimal.debnath@reliablebd.org</td>
        </tr>
         
         <tr>
          <td>6.</td>
          <td>Md. Rajaul Karim</td>
          <td>DGM (Accounts & Finance)</td>
          <td>01715026111</td>
          <td>rajaul.karim@reliablebd.org</td>
        </tr>
           
          <tr>
          <td>7.</td>
          <td>Md. Rafiqul Islam</td>
          <td>Accountant</td>
          <td>01917536315</td>
          <td>rafiqulislam.shahin@reliablebd.org</td>
        </tr>
        
        <tr>
          <td>8.</td>
          <td>Riyadh Khondaker</td>
          <td>Executive Director</td>
          <td>01757224440</td>
          <td>riyadh.khondaker@reliablebd.org</td>
        </tr>
          
          <tr>
          <td>9.</td>
          <td>Rezaul Kabir Bappi</td>
          <td>GM Commercial</td>
          <td>01716507025</td>
          <td>rezaul.kabir@reliablebd.org </td>
        </tr>
         
          <tr>
          <td>10.</td>
          <td>Md. Arman Islam</td>
          <td>IT Engineer</td>
          <td>01673776339</td>
          <td>arman.islam@reliablebd.org</td>
        </tr>
         
        <tr>
          <td>11.</td>
          <td>A.S.M. Faisal Ahamed (Dipu)</td>
          <td>Marketing Manager</td>
          <td>01716879765</td>
          <td>faisal.ahamed@reliablebd.org</td>
        </tr>
          
        <tr>
          <td>12.</td>
          <td>Md. Abdul Mannan</td>
          <td>Sr. Accountant</td>
          <td></td>
          <td>acc@reliablebd.org</td>
        </tr>
        
        <tr>
          <td>13.</td>
          <td>Babul Biswas</td>
          <td>Accountant</td>
          <td></td>
          <td>acc@reliablebd.org</td>
        </tr>
        
        <tr>
          <td>15.</td>
          <td>Md. Saiful Rahman</td>
          <td>Accountant</td>
          <td></td>
          <td>acc@reliablebd.org</td>
        </tr>
        
        <tr>
          <td>16.</td>
          <td>Md. Sohel Ahmed</td>
          <td>Accountant</td>
          <td></td>
          <td>acc@reliablebd.org</td>
        </tr>
        
          <tr>
          <td>14.</td>
          <td>Sazzad Hossain</td>
          <td>Accountant</td>
          <td></td>
          <td>acc@reliablebd.org</td>
        </tr>
           
      </tbody>
                            </table>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-team">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Works In Hand</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 container-4 wow fadeInUp">
             
                            <table>
                                
      <thead>
        <tr>
          <th>Sl No.</th>
          <th>Name of the Work</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
                                  </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Construction of New Flexible Pavement at Ch. 2+100m to 5+200m at Borotakia (Abu Torab) - Mirsarai Economic Zone Connecting Road</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>2.</td>
          <td>Re-Construction of Flexible Pavement at Ch.0+000m to 2+100m & Ch.5+200m to 10+000m at Borotakia (Abu Torab) - Mirsarai Economic Zone Connecting Road</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
        <tr>
          <td>3.</td>
          <td>Widening, Strengthening, Surfacing, RCC Culvert & Protective work at 14th Km (P) to 31th Km of Mowna-Fulbaria-Kaliakoir-Dhamrai-Nobinagor (Dulivita) Road (R-315) under Gazipur Road Division during the year 2018-2019 (W4-04).</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
        <tr>
          <td>4.</td>
          <td>Widenging of Road Embankment (Earth Work) New Construction, Widening of Pavement (2x0.90m), Strengthening of Existing Pavement (3.7m), Surfacing (DBS Wearing Course 5.5), Construction of 8 Nos RCC Box Culvert, Protective Work, Road Sign, Km Post & Road Marking from Ch. 50+126 to Ch. 74+355 of (Rajapur-Kathalia-Amua-Bamna-Patharghata)(Z-8708) Under Barguna Road Division during the Year 2018-2019.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
                                             
        <tr>
          <td>5.</td>
          <td>Widening of Pavement including Earthwork, construction of Hard Shoulder, Strengthening, Reconstrcution, Surfacing & Protective work from Ch.86+872 k.m to Ch.116+385 of Mymensingh(Raghurampur)-Kishoregonj(Battali)-Bhairab(bazar) Road (R360) under Road Division Kishoreganj during the year 2017-2018.(Package WP-07).</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <!--<tr>-->
        <!--  <td>6.</td>-->
        <!--  <td>.............</td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td>7.</td>-->
        <!--  <td>...........</td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td>8.</td>-->
        <!--  <td>...............</td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--  <td>9.</td>-->
        <!--  <td>............</td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--  <td></td>-->
        <!--</tr>-->
                                              
           
      </tbody>
                            </table>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-steps" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Complete Project</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12 wow fadeInUp">
                              <table>
                                
      <thead>
        <tr>
          <th>Sl No.</th>
          <th>Description of Works</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Name of contract : Up grading of Lalpur Upazila Health Complex from 31 bed to 50 bed at Natore.
            Procuring Entity : CMMU, Rajshahi Zone</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>2.</td>
          <td>Name of Contract : Construction of 500 seated Auditorium Building at Govt. Laboratory High School under Dhanmondi Thana, Dhaka.
Procuring Entity: Education Engineering Department, Dhaka. 
</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>3.</td>
          <td>Name of Contract: The Civil Construction work of 2nd phase/expansion of China Bangla Ceramic Industries Ltd. Rupgonj, Naraynganj. 
Procuring Entity: China Bangla Ceramic Ind., Narayangonj. 
</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>4.</td>
          <td>Name of Contract : Construction of Students Hostel and Residential Quarter in/c associates works at Dental College, Mirpur, Dhaka
Procuring Entity: CMMU, Dhaka.
</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
           <tr>
          <td>5.</td>
          <td>Name of Contract : Construction of General Gallery of Natore District Stadium" under the project for construction of 8 District Stadium (Group 2)  
Procuring Entity: National Sports Council, Dhaka. 
</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>6.</td>
          <td>Name of Contract: Modaffargonj-Chitoshi-Ramgonj Road (Km.0.00 to Km 9.00) Emergency Flood Damage Rehabilitation Project.
Procuring Entity : RHD, Laxmipur</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>7.</td>
          <td>Name of Contract: Gouripur-Kachua-Hajigonj-Feni Road (Km. 0.00 to Km. 10.00) Emergency Flood Damage Rehabilitation Project.
Procuring Entity : RHD, Comilla</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>8.</td>
          <td>Road:- Kushtia (Bottail) - Poradhah - Alamdanga - Chuadanga Road.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>9.</td>
          <td>Widening of Pavement (Charfasion bazar area) with Carpeting and seal coat from Chainage 0+900 to 1+255 Km of Carfassion-Charmanika-Baburhat Launchghat Regional Highways under Road Division Bhola during the Fiscal year 2010-2011.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>10.</td>
          <td>Widening of Pavement with Carpeting and seal coat from Chainage 34+000 to 36+000 Km of Carfassion-Charmanika-Baburhat Launchghat Regional Highways under Road Division Bhola during the Fiscal year 2010-2011. </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>11.</td>
          <td>Road : N7 (Dauladia-Faridpur (Goalchamot) – Magura – Jhenaidah–Jessore – Khulna - Mongla(Digraj) Road) LRP 221+613 (Ch: 221.562) - LRPE = 30.478 km</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>12.</td>
          <td>Development and Construction of Lot-2 Works at Payra Seaport project, Kolapara, Patuakhali.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td>13.</td>
          <td>Dredging/Excavation in Tentulia River at char Banshbaria, Patuakhali for BADC Beej Bordhan Khamar Project.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
        <tr>
          <td>14.</td>
          <td>Emergency raising of Pavement in front of Padma Bridge Rehabilitation Project at 43rd Km(P) of Fatullah-Mushigonj-Lauhajong-Mawa road under Munshigonj Road Division during the year 2012-2013.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>15.</td>
          <td> (i) Bhola (Porantalukderhat)- Borhanuddin-Lalmohon-Charfassion- Charmanik Road (R-890) LRP 10+449 (Ch.10.30)-LRP011+456 (Ch.11.30),  LRP016+516 (Ch.16.400)- LRP 017+697 (Ch. 17.600), LRPS+000 (Ch.0.00)- LRP 004+1191 (Ch. 5.00)  (ii) Rahmatpur-Bahugonj-Muladi-Hizla Road (Z-8034) LRP 014+163 (Ch. 15.00) LRP- 018+761 (Ch. 19.60)  & LRP023 +2907 (Ch.27.00)-LRP 023+9107 (Ch. 33.200).</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>16.</td>
          <td>Work: Repair and Restoration by Overlay work from LRPS to LRP 010 (at 4th km(p), 5th km, 6th km(p), 7th km(p), 8th km, 11th km to 15th km, 16th km(p), 17th km(p), 18th km to 21th km) of Kalampur Bus Stand-Kawalipara-Balia-Warsi-Mirzapur Road (Z-5061) of Manikgonj Road Division under Periodic Maintanance Program 2013-2014.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>17.</td>
          <td>Work: Providing Overlay with Repairing & Earth work at(a) LRP018+761 (Ch: 19.600) - LRP021 +1744(Ch: 24.00), LRP023+907 (Ch:25.00) - LRP023 + 2907 (Ch: 27.000), LRP023+9107 (Ch: 33.200)-LRP023+11907(Ch: 36.000) & LRPS (Ch:0.000) - LRP007 + 663 (Ch: 7.700) of Rahamatpur – Babugonj – Muladi - Hizla Road (Z-8034) (b) Providing Strengthening, Surfacing, Earth work & Palisading work at LRP004+29(Ch: 4.000) to LRP009+3183(Ch:13.000) of Hizla-Mehendigonj - Barisal (Mehedigonj - Barisal) (Laharhat connecting road) (Z-8043) under Barisal Road Division during the year 2013-2014.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
                            
        <tr>
          <td>18.</td>
          <td>Work: Periodic Maintenance providing DBST & DBS-wearing course at Ch.120.280 to Ch.145.900 of Dhaka(Katchpur)- Bhairab- Jagodishpur- Shaistagonj-Sherpur-Sylhet-Tamabil – Jaflong Road (N-2) of Habiganj Road Division of Sylhet Zone, Sylhet under PMP, year 2013-2014. </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>19.</td>
          <td>Maintenance Dredging in Tentulia River at Char Bashbaria, Patuakhali.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>20.</td>
          <td>Earth work , widening by flexible pavement & 40 mm DBS Wearing Course at different km of Barisal(Dinererpool)-Laximpasha-Dumki Road(Z-8044) under Barisal Road Division during the year 2014-2015.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
                            
        <tr>
          <td>21.</td>
          <td>Strengthening, Partial widening and Overlay work at 10th km (P) to 25th km (P) of Tongi-Kaligonj-Ghorashal-Pachdona road (R-301) & Widening with DBS wearing course at 22nd km (P) to 26th km (P) of Kapashia-Pabur-Fuldi-Kaligonj road (Z-3025) under Periodic Maintenance Program under Gazipur road division during the year 2014-2015.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
          
          <tr>
          <td>22.</td>
          <td>PMP work with DBST(20mm followed by 10mm) at LRP189+827(Ch:188.486) to LRP203+708 (Ch:202.090) of Dhaka (Jatrabari)-Mawa-Bhanga-Barisal-Patuakhali Road (N-8) (Patuakhali Part) & At LRPS(Ch:0.000) to LRP025+4236 (Ch:29.200) of Patuakhali-Amtali-Barguna-Kacchira Road (R-880) under Patuakhali Road Division during the year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td>23.</td>
          <td>Widening & Strengthening of Jamalpur-Islampur-Dewanganj Road under Jamalpur Road Division during the year 2015-2016</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td>24.</td>
          <td>Construction of 588.0m long PC Girder Bridge over Modhumati river on Gopalgonj-Singati Upazila (Chapail Ferrighat) Road at ch. 2400m (ID No. 33532201) under Gopalgonj Sadar Upazila of Gopalgonj District.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
                      
        <tr>
          <td>25.</td>
          <td>PMP work with 40mm DBS Base Course, 30mm DBS Wearing course with Strengthening work of Barisal-Laharhat-Veduria-Bhola- Ilisha-Moju Chowdhurir Hat-Laxmipur National Highways (N-809) (Bhola Part) under Bhola Road Division during the year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>                                                  
           
         <tr>
          <td>26.</td>
          <td>Improvement of District Road : Earth work, side widening, DBS wearing course at 19th (p) K.M. to 29th(p) K.M & Re-construction of Double vent & three vent straight R.C.C Box Culvert at 21st km & 23rd K.M, Construction of R.C.C Palisading, Sign Signal, K.M Post, Guide post & U-Drain of Faridpur-Charvadrasan-Sadarpur (Z-8402) Road under Faridpur Road Division during the year 2015-16. (WP-04).</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> 
          
         <tr>
          <td>27.</td>
          <td>Improvement of District Road : Earth work, side widening, Strengthening, Re-construction DBS wearing course at 1st K.M. to 7th(p) K.M & Re-construction of Double vent straight R.C.C Box Culvert at 4th K.M, Construction of R.C.C Palisading, Sign Signal, K.M Post, Guide post & Drain of Munshibazar -Hatgazaria Alternet(Z-8416) Road under Faridpur Road Division during the year 2015-16. (WP-05).</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>    
          
        <tr>
          <td>28.</td>
          <td>Construction of Jamalpur Town Bypass Road including Widening & Strengthening of Jamalpur-Islampur-Dewangonj Road from ch: 30+000 to ch: 39+000 under Road Division Jamalpur During the year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td>29.</td>
          <td>DBST work including necessary repairing & Earthwork from LRP140a (CH. 139+700) (Joysree Bus stand) to LRP 151a (CH. 151+400) (Rahmatpur Bus Stand) of Dhaka(Jatrabari)- Mawa- Bhanga- Barisal- Patuakhali Road (N8) under Barisal Road Division during the year of 2016-2017.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
        <tr>
          <td>30.</td>
          <td>Widening of pavement, Including Extension of RCC Box Culvert & Protective work at Ch: 173+600 KM to 192+600 KM of Dhaka (Jatrabari )- Mawa-Bhanga -Barisal-patuakhali Road (N-8 ) under Barisal Road Division During the Year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>31.</td>
          <td>Widening of road embankment, widening of pavement, strengthening of existing pavement, surfacing (DBS wearing course), construction of side drain, protective work, sign signal, KM post and road marking from 33rd km (P) to 34th km & 45th km to 56th km of Bakergonj-Padrishibpur-Kathaltoli_Subidkhali-Chandukhali-Barguna Road under Barguna Road Division.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>32.</td>
          <td>Dredging work by Cutter Suction and Excavator including Dredging related works during the year 2017-2018.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>33.</td>
          <td>Curve straightening from Indrapool to Chakrashala of Dhaka-Chittagong-Cox’s Bazar National Highway (N1) Providing new alignment with Construction of 5.2 KM Flexible Pavement, 14 Nos. Culvert (1x1.5mx1.5m=6 nos.), (1x2.0mx2.0m=1 no.), (1x3.0mx3.0m=1 no.), (1x4.0mx2.0m=3 nos.), (1x5.0mx5.0m=1 no.), (2x4.0mx4.0m=1 no.), (2x5.0mx5.0m=1 no.) & 1 No 4-lane PC Girder Bridge (1x37.92m) under Dohazari Road Division during the year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>34.</td>
          <td>Construction of 686.75m P.C. Girder Bridge on kalkini upazila HO-Khaserhat G.C. Road at ch. 12000m over Arial Khan River (ID No. 354402002) under Kalkini Upazila of Madaripur District.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>35.</td>
          <td>Construction of RCC Pavement (Submersible Road) at 35th (p) to 46th (p) (ch. 34+900 to 45+029) km and Construction of 8 nos different size RCC Box culvert at different km of Netrakona-Madan-Khaliajuri Road (Z-370) under Netrakona Road Division, Netrakona during the year 2015-2016.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>36.</td>
          <td>Construction of 686.75m P.C. Girder Bridge on kalkini upazial HQ-Khaserhat G.C. Road at ch. 12000m over Arial Khan River (ID No. 354402002) under Kalkini Upazila of Madaripur District.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>37.</td>
          <td>Construction of RCC Pavement ( Submergible Road ) at 46th km(p) to 55th km (ch.45+029 to 55+000) km and Construction of 4 nos different size RCC Box culvert at different km of Netrakona-Madan-Khaliajuri Road (Z-3701) under Netrakona Road Division, Netrakona</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>38.</td>
          <td>Construction of RCC Pavement ( Submergible Road ) at 46th km(p) to 55th km (ch.45+029 to 55+000) km and Construction of 4 nos different size RCC Box culvert at different km of Netrakona-Madan-Khaliajuri Road (Z-3701) under Netrakona Road Division, Netrakona</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>39.</td>
          <td>Periodic Maintenance Programme providing DBS-Wearing Course from LRP Ch. 3+714 to 18+744 of Mymensingh(Raghurampur)-Kishoreganj(Battali)-Bhairab(Bazar) Road (R-360) under Kishoreganj Road Division and Ch. 62+000 to 69+000 of Mymensingh(DC Office)-Raghurampur-Netrakona-Mohanganj-Dharmapasha-Jamalganj-Sunamganj Road (R-370) under Netrakona Road Division during the year of 2018-2019.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>40.</td>
          <td>Construction of Fexible Pavement and Slope Protection work of 10th (p) to 20th km with Sign Signal & Km Post, Road Marking etc of Shaymgonj-Jaria-Birishiri-Durgapur Road (Road No. Z-3704) under Netrakona Road Division During the year 2016-2017.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>41.</td>
          <td>(a) Surfacing work with DBS-Wearing Course and Earthwork at different location of Rahmatpur-Babugonj-Muladi-Hizla Road (Z-8034) under Barisal Road Division during the year 2018-2019 (b) DBST work at Ch. 167+358 to 169+358 Km. of Dhaka (Jatrabari)-Mawa-Bhanga-Barisal-Patuakhali National Highway (N-8) under Barisal Road Division during the year 2018-2019 (c) Repair of pavement by DBST work at 170th (p) km to 174th(p) (Ch. 169+358 to Ch. 173+358) of Dhaka (Jatrabari)-Mawa-Bhanga-Barisal-Patuakhali National Highway (N-8) Road (Jhalokati potion) Through PMP under Jhalokhati Road Division during the year 2018-2019.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>42.</td>
          <td>a) Improvement of Panti Gajipur Bottola-Adarsha Andulla Mosque road Chatkabaria village Noth side to Adarsha Andulia village end north portion road ch. 00-855m) & b) Construction of 02 Nos. 0.625m x 0.600m culvert at ch. 268m & 368 on the same road, Harinakunda.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>43.</td>
          <td>(a) Surfacing work with DBS-Wearing Course and Earthwork at different location of Rahmatpur-Babugonj-Muladi-Hizla Road (Z-8034) under Barisal Road Division during the year 2018-2019 (b) DBST work at Ch. 167+358 to 169+358 Km. of Dhaka (Jatrabari)-Mawa-Bhanga-Barisal-Patuakhali National Highway (N-8) under Barisal Road Division during the year 2018-2019 (c) Repair of pavement by DBST work at 170th(p) km to 174th(p) km (Ch.169+358 to Ch.173+358) of Dhaka (Jatra bari)-Mawa-Bhanga-Barisal-Patuakhali National Highway (N-8) Road (Jhalokati portion) Through PMP under Jhalokati Road Division during the year 2018-2019.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>44.</td>
          <td>Periodic Maintenance Programe Providing DBS-wearing course from LRP ch. 3+714 to 18+744 of Mymensingh-Kishorgonj-Bhairab Road (R-360) under Kishorgonj Road Division and ch. 62+000 to 69+000 of Mymensingh (DC Office) -Raghurampur-Netrakona -Mohanganj- Dharmapasha-Jamalganj-Sunamganj Road (R-370) under Netrokona Road Division during the year 2018-19.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>45.</td>
          <td>a) Improvement of Gajipr Bottola-Adarsha Andulia Mosque Road. Chatkabaria village north side to Adarsha Andulia village end North portion road (ch. 00m-855m & (b) Construction of 02 nos 0.625m x 0.600m Culvert at ch. 268 & 368m on the Same Road Harinakundu.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
      
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

           <!-- section begin -->
            <section id="section-equipment">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Equipment List</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 container-4 wow fadeInUp">
                          <!-- Equipment List -->
<table>
                                
      <thead>
        <tr>
          <th>Sl No.</th>
          <th>Equipments</th>
          <th></th>
          <th></th>
          <th>Quantity</th>
        </tr>
                                  </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Asphalt Batching Plant</td>
          <td></td>
          <td></td>
          <td>4 Nos.</td>
        </tr>
          
          <tr>
          <td>2.</td>
          <td>Asphalt Hot Mix Plant</td>
          <td></td>
          <td></td>
          <td>5 Nos.</td>
        </tr>
          
          <tr>
          <td>3.</td>
          <td>Paver Finisher</td>
          <td></td>
          <td></td>
          <td>6 Nos.</td>
        </tr>
          
          <tr>
          <td>4.</td>
          <td>Bitumen Distributor</td>
          <td></td>
          <td></td>
          <td>10 Nos.</td>
        </tr>
          
           <tr>
          <td>5.</td>
          <td>Tandem Vibratory Roller</td>
          <td></td>
          <td></td>
          <td>15 Nos.</td>
        </tr>
          
          <tr>
          <td>6.</td>
          <td>Road Roller</td>
          <td></td>
          <td></td>
          <td>18 Nos.</td>
        </tr>
          
          <tr>
          <td>7.</td>
          <td>Pneumatic Tire Roller</td>
          <td></td>
          <td></td>
          <td>12 Nos.</td>
        </tr>
          
        <tr>
          <td>8.</td>
          <td>Excavator</td>
          <td></td>
          <td></td>
          <td>20 Nos.</td>
        </tr>
          
        <tr>
          <td>9.</td>
          <td>Soil Compactor</td>
          <td></td>
          <td></td>
          <td>16 Nos.</td>
        </tr>
          
        <tr>
          <td>10.</td>
          <td>Air Compressor</td>
          <td></td>
          <td></td>
          <td>20 Nos.</td>
        </tr>
          
        <tr>
          <td>11.</td>
          <td>Motor Grader</td>
          <td></td>
          <td></td>
          <td>28 Nos.</td>
        </tr>
          
          <tr>
          <td>12.</td>
          <td>Pay Loader/Wheel Loader</td>
          <td></td>
          <td></td>
          <td>17 Nos.</td>
        </tr>
          
        <tr>  
          <td>13.</td>
          <td>Chips Spreader</td>
          <td></td>
          <td></td>
          <td>15 Nos.</td>
        </tr>
          
        <tr>
          <td>14.</td>
          <td>Store Crushing Plant </td>
          <td></td>
          <td></td>
          <td>10 Nos.</td>
        </tr>
          
          <tr>
          <td>15.</td>
          <td>Road Marking</td>
          <td></td>
          <td></td>
          <td>15 No.</td>
        </tr>
          
          <tr>
          <td>16.</td>
          <td>Dump Truck</td>
          <td></td>
          <td></td>
          <td>120 Nos.</td>
        </tr>
          
          <tr>
          <td>17.</td>
          <td>Generator</td>
          <td></td>
          <td></td>
          <td>30 Nos.</td>
        </tr>
                            
        <tr>
          <td>18.</td>
          <td>Milling Machine</td>
          <td></td>
          <td></td>
          <td>2 Nos.</td>
        </tr>
          
          <tr>
          <td>19.</td>
          <td>Water Tanker</td>
          <td></td>
          <td></td>
          <td>100 Nos.</td>
        </tr>
          
          <tr>
          <td>20.</td>
          <td>Water Pump</td>
          <td></td>
          <td></td>
          <td>50 Nos.</td>
        </tr>
                            
        <tr>
          <td>21.</td>
          <td>Mixture Machine</td>
          <td></td>
          <td></td>
          <td>25 Nos.</td>
        </tr>
          
          <tr>
          <td>22.</td>
          <td>Bitumen Decanter</td>
          <td></td>
          <td></td>
          <td>15 Nos.</td>
        </tr>
                      
        <tr>
          <td>23.</td>
          <td>Core Cutter</td>
          <td></td>
          <td></td>
          <td>15 Nos.</td>
        </tr>                                                  
           
         <tr>
          <td>24.</td>
          <td>Plate Compactor</td>
          <td></td>
          <td></td>
          <td>25 Nos.</td>
        </tr> 
          
         <tr>
          <td>25.</td>
          <td>High Pressure Water Cleaner</td>
          <td></td>
          <td></td>
          <td>10 Nos.</td>
        </tr>    
          
          <tr>
          <td>26.</td>
          <td>Self Loader</td>
          <td></td>
          <td></td>
          <td>13 Nos.</td>
        </tr>
          
         <tr>
          <td>27.</td>
          <td>Hino Prime-over</td>
          <td></td>
          <td></td>
          <td>13 Nos.</td>
        </tr>                                                                                                                                                         <tr>
          <td>28.</td>
          <td>Hino Cement Tanker</td>
          <td></td>
          <td></td>
          <td>9 Nos.</td>
        </tr>                                                                                                                  
          <tr>
          <td>29.</td>
          <td>Grove Crane</td>
          <td></td>
          <td></td>
          <td>5 No.</td>
        </tr>
        
         <tr>
          <td>30.</td>
          <td>Motor Cycle</td>
          <td></td>
          <td></td>
          <td>62 Nos.</td>
        </tr>
          
          <tr>
          <td>31.</td>
          <td>Welding Set</td>
          <td></td>
          <td></td>
          <td>20 Set.</td>
        </tr>
          
          <tr>
          <td>32.</td>
          <td>Fuel Tank</td>
          <td></td>
          <td></td>
          <td>15 Set.</td>
        </tr>
          
          <tr>
          <td>33.</td>
          <td>Survey Equipment</td>
          <td></td>
          <td></td>
          <td>30 Set.</td>
        </tr>
           
      </tbody>
                            </table>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
           
            <!-- section begin -->
            <section id="section-machine">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                        <h1>Reliable Machinaries</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="row">
   
                    <div class="col-md-12 container-4 wow fadeInUp">
              
<div class="demo">
        <div class="tab tab-horiz">
            <ul class="tab-legend">
                <li class="active">corporate profile</li>
                <li>Vision</li>
                <li>Mission</li>
                <li>Activities</li>
            </ul>
            <ul class="tab-content">
                <li>
<p align="justify">I take pride in preparatory of the prominent mechanical engineering solutions and construction firms in Bangladesh, having achieved remarkable growth over the years and contributing significantly to the development of National Infrastructure. The Reliable Builders & Reliable Machineries has attained prominence as a leader in the field of construction and engineering through competence, competitiveness and timely delivery with highest quality standards and recognized safety performance. We have a long tradition of serving our valued customers to their complete satisfaction through efficient management and excellent workmanship, which we continue to maintain with our untiring efforts.
<br><br>
In an era of advanced technologies and new techniques, we continuously strive for innovation and enhanced efficiency.
<br><br>
Offering services spanning a wide range of engineering fields in oil & gas, sewage systems, marine structures, building constructions, power & water, roads & bridges and industrial and civil infrastructure, TRB & RM are the preferred choice of many clients because of its reliability and commitment to quality and safety.
<br><br>
Due to strong background in Mechanical Engineering Solutions & design, TRB & RM have been able to succeed in the projects by prioritizing our engineering notion. Whereby, the “corporate synergy” built together with our mother company OTBL and Partnership Corporation (DEWL) had a major contribution on our success. We never failed to realize that our efficient structure has always been the most significant anchorage for our Clients. As we look to the years ahead we renew our pledge to remain committed to excellence, keep abreast of changes and innovations, adopt better management and construction techniques and successfully overcome all challenges before us.
<br><br>
<span class="id-color">Shafiqul Alam Mithun</span><br>
Proprietor<br>
Reliable Machineries</p>
                </li>
                <li>
<p align="justify">From being number one construction company in Bangladesh, TRB & RM continues to excel in its entire field through its leadership skills. It makes its mark in South East Asia delivering projects that consistently meet international standards.</p><!--TAB CONTENT-->
                </li>
                <li>
<p align="justify">
With a well-defined direction in place, the path to realizing our Vision is based on fundamental drivers, instrumental in achieving our goals. Industrialization is a process that happens in countries when they start to use machines to do work that was once done by traditional labor. Industries are the most important aspect of the economy. Using better technology, it becomes possible to generate more possessions in a shorter amount of time. Sectors such as Agriculture, Energy, Transportation, Material Handling, Heavy Duty Machineries, Electric Appliances, Textile and etc; are the versatile parts of International Trading.
<br><br>
On the other hand, Road infrastructure is vital in assisting the Nation’s economic development by moving people and goods. Sectors such as Civil Construction particularly roads, buildings, airport, power and ports have become very attractive for both domestic and foreign contractor & investors. This is due to relatively low entry barriers in these markets, a strong project pipeline and a considerable opportunity size.
<br><br>
As a result, the market as a whole has become a mixed bag of opportunities in which different types of players are participating, concerning the common interest of doing business. Orienting towards market demand, THE RELIABLE BUILDERS (TRB) & RELIABLE MACHINERIES (RM) are the most imperative Sister Concerns of OTBL. Facing the new challenges and opportunities, TRB & RM has emerged as a leading enterprise in Bangladesh in the field of Infrastructure construction & International trading of Industrial Machineries.
<br><br>
The Reliable Builders has been a key partner in the infrastructure growth of BANGLADESH, since the company’s founding TRB has explored & expanded to meet the needs of the region as the demands for improved infrastructure increase. As The Company grown, TRB has formed & pursue new partnerships and branched out to new subsidiaries to meet nearly every Industrial Machinery of Transportation, Construction, Material Handling, Marin, Textile, Agriculture & a wide variety of products and services under the company Reliable Machineries (RM). RM prides itself as a major player in the Industrial Machinery, not only for its quality products, but also for its high company standards of safety and performance with Engineering Workshops for ensured After Sales Service. RM’s success is based on a foundation of exceptional accomplishments, with an eye on Mechanical innovation for the future.
</p><!--TAB CONTENT-->
                    
                </li>
                <li>
                    <!--TAB CONTENT-->
<p align="justify">The construction work involves earthworks, foundation works, piling and foundation reinforcement, tunneling and underground construction, harbor construction and dredging, municipal engineering, and the construction of streets, roads, bridges and Street light facilities etc. In infrastructure maintenance, our company is involved in up keeping roads, streets and the rail network, including related structures such as bridges. We offer long-term maintenance agreements where pricing is influenced by the usability of the route and service quality.
<br><br>
RM will continue on its path of pursuing growth in high margin growth oriented sectors, particularly in the Industrial Machinery regarding Construction, Agriculture, Material Handling & Vehicles and power sectors where a supply capacity crunch is anticipated with the pressures brought on by the rise in regional demand. We have earmarked a strong focus on improving client service and relations, as well as increase investment and empower high margin businesses to drive sustainable and long term growth.
<br>

<div class="big-cal">
  <div class="boxes">
    <div class="box-row">
      <div class="box-cell one">
        <div class="box-content">
To procure projects at competitive pricing, provide safe working condition and deliver quality work within reasonable time frame the advantages of hiring TRB for your special projects include:
<br><br>
• Single point of contact for all aspects of civil construction
<br><br>
• Rapid response and mobilization
<br><br>
• Big-picture understanding of ongoing business environments
<br><br>
• Well-defined scopes of work
<br><br>
• Quick response to change
<br><br>
• 100% Quality
        </div>
      </div>

      <div class="box-cell two">
        <div class="box-content">
            <b><span class="id-color">Selected areas where RM can help:</span></b>
<br><br>
<span class="id-color">• Product profitability:</span> Striking the right balance across go-to-market strategy, option profitability, cost structure, discount strategy, and product mix.<br>
<span class="id-color">• Global launches:</span> Effectively launching the same platform or product in multiple regions through a combination of local and global suppliers.<br>
<span class="id-color">• Cost engineering:</span> Delivering both value and insight in the face of the dual challenges of elaborate global complexity and low volumes.<br>
<span class="id-color">• Relationships between suppliers and original equipment manufacturers:</span> Targeting and executing the right mix of local and global relationships to jointly develop and profitably deliver products globally. <br>
<span class="id-color">• Technical cost reduction:</span> Implementing major programs across geographies to reduce direct material costs on current products.<br>
<span class="id-color">• Functional assessments and redesign:</span> Assessing organizations’ current capabilities and developing road maps to sustainably achieve best-in-class performance.
        </div>
      </div>
      
    </div>
  </div>
</div>

<br>
<p>
To us, “Excellence” means not only being the very best at what we do, but also holding ourselves to the highest ethical standards in terms of how we do things. That is why we must never deviate from our Business Principles, regardless of the difficulties or consequences. As we strive for Excellence, we must continue to earn the trust of our customers, employees, local communities and co-workers by continuously demonstrating that we are worthy of the trust that they have placed in us. 
</p>    
                </li>
            </ul>
        </div>
    </div>                             
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            

            <!-- section begin -->
            <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                <div class="container">

                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                <li><a href="#" data-filter=".completed">Completed Project</a></li>
                                <li><a href="#" data-filter=".dump">Dump trucks</a></li>
                                <li><a href="#" data-filter=".work">Work In Process</a></li>
                                <li><a href="#" data-filter=".other">Other</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- portfolio filter close -->

                </div>

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

                    <!-- gallery item -->
                    <div class="item office">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Asphalt Batching Plant-TRB</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(1).jpg" alt="" />
                        </div>
                        
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Asphalt-Plant</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(2).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item hospitaly">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Barisal-Kawarchar Road</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(3).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item completed">
                        <div class="picframe">
                           
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Barisal-Goma-DC Road</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(4).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item completed">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Barisal-Laharhat-veduria-Bhola-Hisha-Moju Chowdhurir Hat-Laxmipur Road</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(5).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item completed">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">N7 (Dauladia-Faridpur (Foalchanmot)-Magura-Jhenaidah-jassore-khulna-Mongla(Digraj) Road)</span>
                                    </span>
                                </span>
                            
                            <img src="images/portfolio/pf%20(6).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item completed">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dhaka (Jatrabari)-Mawa-Bhanga-Barisal-Patuakhali Road</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/pf%20(7).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item dump">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dump Truck</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/pf%20(8).jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item dump">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dump Truck</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/dt1.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item dump">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dump Truck</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/dt2.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item dump">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dump Truck</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/dt3.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item dump">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Dump Truck</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/dt4.jpg" alt="" />
                        </div>
                    </div>
                    <!------------------------------ WORK IN PROCESS GALLERY STARTS ------------------------------->
                    <div class="item work">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Work In Process #1</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/w1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="item work">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Work In Process #2</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/w2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="item work">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Work In Process #3</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/w3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="item work">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Work In Process #4</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/w4.jpg" alt="" />
                        </div>
                    </div>
                    <!------------------------------ WORK IN PROCESS GALLERY ENDS ------------------------------->
                    <div class="item other">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Image #1</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/o-1.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item other">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Batching Plant</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/o-2.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item other">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">grader</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/o-3.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="item other">
                        <div class="picframe">
                            
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Bitumen Distributor</span>
                                    </span>
                                </span>
                            <img src="images/portfolio/o-4.jpg" alt="" />
                        </div>
                    </div>
                    
                    <!-- close gallery item -->

                </div>

                <div id="loader-area">
                    <div class="project-load"></div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                <nav><a href="#section-contact" class="btn btn-line-black btn-big">Contact Us</a></nav>
            </section>
            <!-- logo carousel section close -->


            <!-- section begin 
            <section id="section-testimonial" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Customer Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="de_carousel  wow fadeInUp" data-wow-delay=".3s">

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        John, Customer
                                    </div>
                                </blockquote>

                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Michael, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Patrick, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        James, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             section close -->

            <!-- section begin
            <section id="section-fun-facts">
                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Fun Facts</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <i class="icon-alarmclock wow zoomIn" data-wow-delay="0"></i>
                                <h3 class="timer" data-to="2350" data-speed="2500">0</h3>
                                <span>Hours of Works</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <i class="icon-tools wow zoomIn" data-wow-delay=".25s"></i>
                                <h3 class="timer" data-to="128" data-speed="2500">0</h3>
                                <span>Projects Complete</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <i class="icon-piechart wow zoomIn" data-wow-delay=".5s"></i>
                                <h3 class="timer" data-to="750" data-speed="2500">0</h3>
                                <span>Slice of Pizza</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <i class="icon-wine wow zoomIn" data-wow-delay=".75s"></i>
                                <h3 class="timer" data-to="520" data-speed="2500">0</h3>
                                <span>Cups of Coffee</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
             section close -->

            <!-- section begin
            <section id="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Latest Blog</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <ul id="blog-carousel" class="blog-list blog-snippet wow fadeInUp">
                            <li class="col-md-6 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="images/blog/pic-blog-1.jpg" alt="" />
                                    </div>


                                    <div class="date-box">
                                        <div class="day">26</div>
                                        <div class="month">FEB</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="css/#">5 Things That Take a Room from Good to Great</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    </div>

                                </div>
                            </li>

                            <li class="col-md-6 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="images/blog/pic-blog-2.jpg" alt="" />
                                    </div>


                                    <div class="date-box">
                                        <div class="day">20</div>
                                        <div class="month">FEB</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="css/#">Functional and Stylish Wall-to-Wall Shelves</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    </div>

                                </div>
                            </li>
                            
                            <li class="col-md-6 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="images/blog/pic-blog-3.jpg" alt="" />
                                    </div>


                                    <div class="date-box">
                                        <div class="day">16</div>
                                        <div class="month">FEB</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="css/#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    </div>

                                </div>
                            </li>

                            <li class="col-md-6 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="images/blog/pic-blog-4.jpg" alt="" />
                                    </div>


                                    <div class="date-box">
                                        <div class="day">08</div>
                                        <div class="month">FEB</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="css/#">How to Make a Huge Impact With Multiples</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
           section close -->

            <!-- section begin -->
            <section id="section-contact" class="no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center wow fadeInUp">
                            <h1>Contact Us</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-8 wow fadeInLeft">
                            <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <p id='submit'>
                                            <input type="submit" id="send_message" value="Submit Form" class="btn btn-line">
                                        </p>
                                        <div id="mail_success" class="success">Your message has been sent successfully.</div>
                                        <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-4 wow fadeInRight">

                            <div class="widget_text">
                                <h3>Head Office</h3>
                                <address>
                                    <span>Road No. #96, House No. #3/A,<br>Gulshan 2, Dhaka-1212</span>
                                    <span><strong>Tel:</strong>88-02-9882018,8835692</span>
                                    <span><strong>IP:</strong>09639222777, 09614500750</span>
                                    <span><strong>Fax:</strong>88-02-9882018</span>
                                    <span><strong>Email:</strong><a href="mailto:commercial@reliablebd.org">commercial@reliablebd.org</a></span>
                                </address>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="spacer-double"></div>

                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4341.345798460878!2d90.41333578028004!3d23.796466999350898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c737c6f3d703%3A0x2e8faee3bcabaa3d!2sReliable+Builders+Ltd.!5e0!3m2!1sen!2sbd!4v1540449482747" width="100%" height="580" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </section>
            <!-- section close -->

            <!-- footer begin -->
            <footer>
               <!-- HIDE THIS SECTION
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/logo.png" class="logo-small" alt="" height="64" width="64">&nbsp;&nbsp;&nbsp;&nbsp;<font size="3" class="logo">RBL</font><br>
                            Offering services spanning a wide range of engineering fields in oil & gas, sewage systems, marine structures, building constructions, power & water, roads & bridges and industrial and civil infrastructure, TRB is the preferred choice of many clients because of its reliability and commitment to quality and safety.
 
                        </div>

                        <div class="col-md-4">
                            <div class="widget widget_recent_post">
                                <h3>Latest News</h3>
                                <ul>
                                    <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                                    <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                                    <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                                    <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                                    <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3>Corporate Office</h3>
                            <div class="widget widget-address">
                                <address>
                                    <span>Road No. #10/A, House No. #07,<br>Nikunja-1 (South), Dhaka-1212</span>
                                    <span><strong>Tel:</strong>88-02-8900173</span>
                                    <span><strong>Fax:</strong>8900170</span>
                                    <span><strong>Mob.:</strong>01711565737</span>
                                    <span><strong>Email:</strong><a href="mailto:md@reliablebd.org">md@reliablebd.ogr</a></span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
HIDE THIS SECTION -->
                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                &copy; Copyright 2017 - <a href="http://www.reliablebd.org/"><span class="id-color">ReliableBD</span></a> Developed by <a href="http://www.celeste-bd.com/" target="_blank"><span class="id-color">Celeste.</span></a>                     
                        </div>
                           <!--
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jpreLoader.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/video.resize.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/designesia.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
             tabModule.init();
        });
    </script>
<script type="text/javascript">
 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content2").hide();
    $(".tab_content2:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
        
      $(".tab_content2").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();        
        
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

      $(".tab_drawer_heading").removeClass("d_active");
      $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
      
    });
    /* if in drawer mode */
    $(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
      
      $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
      
      $("ul.tabs li").removeClass("active");
      $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
    
    
    /* Extra class "tab_last" 
       to add border to right side
       of last tab */
    $('ul.tabs li').last().addClass("tab_last");
    
</script>   

</body>
</html>
