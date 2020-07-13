<!DOCTYPE html>
<html lang="en">
<head>

    <title>Zuhal Distributor</title>
    <!--

    Template 2106 Soft Landing

    http://www.tooplate.com/view/2106-soft-landing

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="team" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{-- <link href="{{ asset('colorAdmin/css/default/app.min.css')}}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{asset('landingpage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('landingpage/css/font-awesome.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('landingpage/css/tooplate-style.css')}}">

</head>
<body>
    @if(session()->has('success'))
    <div class="alert alert-primary" role="alert">
        {{ session()->get('success') }}
    </div>
    @endif
    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>
               
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand">ZUHAL Activator</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#feature" class="smoothScroll">Introduction</a></li>
                    <li><a href="#about" class="smoothScroll">Application</a></li>
                    <li><a href="#pricing" class="smoothScroll">Package</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    {{-- <li><a href="#">Login | <span>Register</span></a></li> --}}
                    @if (Route::has('login'))
                        
                        @auth
                            <li><a href="{{ url('/dashboard') }}">Home</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                        
                    @endif
                </ul>
            </div>

        </div>
    </section>


    <!-- FEATURE -->
    <section id="home" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img src="{{asset('landingpage/images/ZUHALLOGOZ.png')}}" class="img-responsive, center"  alt="Catherine Soft">
                    <div class="home-info">
                        <h1>ZUHAL ACTIVATOR</h1>
                        <hr>
                        <h2 style="color:#dfdfdf;">ZUHAL Tonic Juice Herbs are enriched with the world’s best natural herbs.</h2>
                        <hr>
                    </div>
                </div>

            </div>
        </div>  
    </section>


    <!-- FEATURE -->
    <section id="feature" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h1>ZUHAL Activator</h1>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">About</a></li>

                        <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Laboratory</a></li>

                        <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Support</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab01" role="tabpanel">
                            <div class="tab-pane-item">
                                <h2>Secret Formulation</h2>
                                <p>The special and secret formulation of the many years of experience that has been shaped by the past can now be enjoyed by modern life</p>
                                <p>Rumusan khas dan rahsia dari pengalaman bertahun yang telah diformulakan oleh orang yang terdahulu kini dapat dinikmati oleh kehidupan sekarang</p>
                            </div>
                            <div class="tab-pane-item">
                                <h2>Herbal Terbaik Dunia</h2>
                                <p>ZUHAL Herbal Jus Tonik diperkaya dengan herba-herba semulajadi terbaik dunia, herba ini telah diformulasikan melalui ujian makmal dan telah disahkan mempunyai kebaikan yang pada sel-sel tubuh badan manusia</p>
                            </div>
                        </div>


                        <div class="tab-pane" id="tab02" role="tabpanel">
                            <div class="tab-pane-item">
                                <h2>Research & Development</h2>
                                <p>Through laboratory research and extraction process of selected herbs have produced high quality products for the current environment which provide the benefits and benefits to consumers.</p>
                            </div>
                            <div class="tab-pane-item">
                                <h2>Penyelidikan</h2>
                                <p>Melalui proses penyelidikan dan proses makmal herba terpilih telah menghasilkan produk berkualiti tinggi untuk persekitaran semasa yang memberikan faedah dan faedah kepada pengguna</p>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab03" role="tabpanel">
                            <div class="tab-pane-item">
                                <h2>Support</h2>
                                <p>Establish a formula-building structure by meet customer requirements and opening up market space internationally</p>
                            </div>
                        <div class="tab-pane-item">
                            <h2>Sokongan</h2>
                            <p>Membentuk struktur pembinaan formula dengan menepati kehendak pelanggan dan membuka ruang pasaran sehingga ke peringkat antarabangsa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="feature-image">
                        <img src="{{asset('landingpage/images/feature-mockup.png')}}" class="img-responsive" alt="Thin Laptop">                             
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <div class="section-title">
                        <h1>ZUHAL ACTIVATOR</h1>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/team-image1.jpg')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>AGED</h2>
                            <small>Berusia</small>
                            <p>For those who are over the age, do their daily activities with joy and enthusiasm to do whatever they like.</p>
                            <hr>
                            <p>Bagi yang telah melangkaui usia, lakukan aktiviti harian dengan gembira dan semangat untuk melakukan apa jua pekerjaan yang disukai.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <div class="team-info team-thumb-down">
                            <h2>New Experience</h2>
                            <small>Pengalaman baru</small>
                            <p>New experiences can be experienced as they are smart throughout the day, as well as being positive in their daily life activities complete the day-to-day tasks with joy in the comfort of a lifetime of memories</p>
                            <hr>
                            <p>Pengalaman baru dapat dirasai apabila merasa cerdas sepanjang hari, selain berfikiran positif dalam menjalani aktiviti kehidupan seharian menyelesaikan tugas seharian dengan gembira dengan keselesaan dengan merasai kembali kehidupan ketika dahulu</p>
                        </div>
                        <img src="{{asset('landingpage/images/team-image2.jpg')}}" class="img-responsive" alt="Catherine Soft">
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/team-image3.jpg')}}" class="img-responsive" alt="Jack Wilson">
                        <div class="team-info team-thumb-up">
                            <h2>Activities</h2>
                            <small></small>
                            <p>Not just for health but for those who need extra energy to engage in activities all the time, stay motivated to work or at work, enjoyment with family and friends around with a smile that gives experience, drives comfort, meets customers, works with confidence and dedicated, positive thinking in making many decisions</p>
                            <hr>
                            <p>Bukan hanya untuk kesihatan malah untuk yang memerlukan tenaga tambahan dalam menjalani akitiviti sepanjang masa, kekal dengan semangat untuk beriadah atau pun dalam pekerjaan, kebahagian bersama keluarga serta rakan disekeliling dengan senyuman memberi menceriakan pengalaman, memandu dengan keselesaan , ketika bertemu pelanggan, bekerja dengan penuh keyakinan dan berdedikasi, berfikiran positif dalam memberi keputusan dalam banyak perkara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURE2 -->
    <section id="feature2" data-stellar-background-ratio="0.5">
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h1>How to use</h1>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab01" role="tabpanel">
                            <div class="tab-pane-item">
                                <h2>Healthy</h2>
                                <p>Body aches, asthma / shortness, dizziness / migraine diarrhea / menstrual irregularities, body aches, cough, internal injuries, weakness of the heart, stroke / paralysis, diabetes, Obesity, Kidney disease stomach aches, body aches</p>
                                <p>Lenguh badan , asthma /semput, pening /migrain senggugut / haid tidak stabil, Kebas badan, batuk, luka dalaman, lemah jantung, stroke / lumpuh separuh badan, kencing manis, Lemah Syahwat, sakit pinggang sakit lutut, lemah badan</p>
                            </div>
                            <div class="tab-pane-item">
                                <h2>Application</h2>
                                <p>1 spoon after breakfast | 1 spoon after dinner</p>
                            </div>

                            <div class="tab-pane-item">
                                <h2>Penggunaan</h2>
                                <p>1 sudu besar selepas sarapan | 1 sudu besar selepas makan malam</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab01" role="tabpanel">
                            <div class="tab-pane-item">
                                <h2>Outdoor Activities</h2>
                                <p>For extreme activities, work, heavy vehicle drivers, musicians, security workers, sightseeing, fishing, onboard, traveling, shifting, construction and more for your daily routine</p>
                                <p>Untuk aktiviti lasak, bekerja, pemandu kenderaan berat, pemain musik, pekerja keselamatan, bersiar, memancing, diatas kapal,, melancong, bekerja syif, pembinaan dan sebagainya untuk rutin harian anda</p>
                            </div>
                            <div class="tab-pane-item">
                                <h2>How to use</h2>
                                <p>One cap cover 3/4 times a day</p>
                            </div>
                            <div class="tab-pane-item">
                                <h2>Aktiviti luar</h2>
                                <p>Satu penutup 3/4 kali sehari</p>
                            </div>
                      </div>
                    </div>
                </div>
           </div>
        </div>
    </section>
             
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <img src="{{asset('landingpage/images/megat.png')}}" class="img-responsive, center"  alt="Catherine Soft">
                    <h1>Megat Terawis (Pelakon)</h1>
                    <h2>Mereka selalu bertanya ' pak megat selalu nampak steady, apa rahsia pak megat'?</h2>

                    <p>Saya hanya mengamalkan ZUHAL, ketika bekerja atau melakukan aktiviti luar, ZUHAL sentiasa saya bawa bersama',
                    hanya satu kali teguk pada waktu pagi , sudah cukup untuk sepanjang hari'. </p>
                   
                </div>
            </div>
        </div>
        <hr>
    </section>

    <section id="#"data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/hiking.jpg')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>Hiking</h2>
                            <small>Outdoor Activities</small>
                            <p>For those who are over the age, do their daily activities with joy and enthusiasm to do whatever they like.</p>
                            <hr>
                            <p>Bagi yang telah melangkaui usia, lakukan aktiviti harian dengan gembira dan semangat untuk melakukan apa jua pekerjaan yang disukai.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <div class="team-info team-thumb-down">
                            <h2>Workers</h2>
                            <small>Bekerja</small>
                            <p>New experiences can be experienced as they are smart throughout the day, as well as being positive in their daily life activities complete the day-to-day tasks with joy in the comfort of a lifetime of memories</p>
                            <hr>
                            <p>Pengalaman baru dapat dirasai apabila merasa cerdas sepanjang hari, selain berfikiran positif dalam menjalani aktiviti kehidupan seharian menyelesaikan tugas seharian dengan gembira dengan keselesaan dengan merasai kembali kehidupan ketika dahulu</p>
                        </div>
                        <img src="{{asset('landingpage/images/kontrak.jpg')}}" class="img-responsive" alt="Catherine Soft">
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb">
                        <img src="images/cuti.jpg" class="img-responsive" alt="Jack Wilson">
                        <div class="team-info team-thumb-up">
                            <h2>Vacation</h2>
                            <small></small>
                            <p>Not just for health but for those who need extra energy to engage in activities all the time, stay motivated to work or at work, enjoyment with family and friends around with a smile that gives experience, drives comfort, meets customers, works with confidence and dedicated, positive thinking in making many decisions</p>
                            <hr>
                            <p>Bukan hanya untuk kesihatan malah untuk yang memerlukan tenaga tambahan dalam menjalani akitiviti sepanjang masa, kekal dengan semangat untuk beriadah atau pun dalam pekerjaan, kebahagian bersama keluarga serta rakan </p>
                        </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="container">
           <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="testimonial-image"></div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="testimonial-info">
                          
                        <div class="section-title">
                           <h1>The Herbs</h1>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <h3>Clinacanthus Nutans is a species of plant in the family Acanthaceae. It is also known by the common names belalai gajah (Malay), phaya yo (Thai), Sabah snake grass, ki tajam (Sunda), and dandang gendis (Jawa).</h3>
                                <div class="{{asset('landingpage/testimonial-item')}}">
                                     <img src="images/c1.jpg" class="img-responsive" alt="Michael">
                                     <h4>Belalai Gajah</h4>
                                </div>
                            </div>

                            <div class="item">
                                <h3>Carom Seeds or Ajwain has long been used in traditional Indian medicine for its health benefits. It is replete with antioxidants, fiber, vitamins, and minerals. Carom seeds may help in the treatment of several ailments such as blood pressure, high cholesterol, and premature graying of hair.</h3>
                                <div class="testimonial-item">
                                    <img src="{{asset('landingpage/images/c2.jpg')}}" class="img-responsive" alt="Sofia">
                                    <h4>Biji Lemuju</h4>
                                </div>
                           </div>

                           <div class="item">
                                <h3>The term Butterfly Tea refers to decoction of Mariposa Christia Vespertilionis leaves which is widely consumed by cancer patients throughout Malaysia and has gained a huge popularity among Malaysians.</h3>
                                <div class="testimonial-item">
                                    <img src="{{asset('landingpage/images/c3.jpg')}}" class="img-responsive" alt="Monica">
                                    <h4>Rama-Rama</h4>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Quercus Infectoria, the Aleppo oak, is a species of oak, bearing galls that have been traditionally used for centuries in Asia medicinally. Manjakani is the name used in Malaysia for the galls; these have been used for centuries in softening leather and in making black dye and ink.</h3>
                                <div class="testimonial-item">
                                    <img src="{{asset('landingpage/images/c4.jpg')}}" class="img-responsive" alt="Monica">
                                    <h4>Aleppo Oak</h4>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Eugenia Aromatica a tropical tree, the buds of which have a high concentration of essential oil containing eugenol and eugenyl acetate; it is analgesic, anti-emetic, antiseptic and carminative, and has been used to treat abdominal bloating and athlete’s foot (tinea pedis).</h3>
                                <div class="testimonial-item">
                                    <img src="{{asset('landingpage/images/c5.jpg')}}" class="img-responsive" alt="Monica">
                                    <h4>Cengkih</h4>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Elephant's Foot the plant is widely used as a medicinal herb in the tropics. It is anthelmintic, diaphoretic, diuretic, emmenagogue, emollient, febrifuge and tonic . It is used to treat conditions such as asthma, coughs and pulmonary diseases; dyspepsia, diarrhoea and dysentery; oedema; urethral discharges and venereal diseases.</h3>
                                <div class="testimonial-item">
                                    <img src="{{asset('landingpage/images/c6.jpg')}}" class="img-responsive" alt="Monica">
                                    <h4>Tapak Gajah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <hr>

    <!-- PRICING -->
    <section id="pricing1" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="section-title">
                          <h1>Maklumat Pemakanan (Nutrition</h1>
                     </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="pricing-thumb">
                        <div class="pricing-title">
                            <h2>Nutrition</h2>
                        </div>
                        <div class="pricing-info">
                            <p>Saiz Hidangan (Serving Size)</p>
                            <hr>
                            <p>Jumlah Purata (everage amount)</p>
                            <hr>
                            <p>Tenaga /Energy</p>
                            <hr>
                            <p>Karbohidrat / Carbohydrate</p>
                            <hr>
                            <p>Lemak/Fat</p>
                            <hr>
                            <p>Protin/Protein</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricing-thumb">
                        <div class="pricing-title">
                            <h2>Per-serving</h2>
                        </div>
                        <div class="pricing-info">
                            <p>10ml</p>
                            <hr>
                            <p>/</p>
                            <hr>
                            <p>7kcal (36kj)</p>
                            <hr>
                            <p>1.7g</p>
                            <hr>
                            <p>0.0g</p>
                            <hr>
                            <p>0.0g
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricing-thumb">
                        <div class="pricing-title">
                            <h2>Per 100ml</h2>
                        </div>
                        <div class="pricing-info">
                            <p>26per-pek</p>
                            <hr>
                            <p>/</p>
                            <hr>
                            <p>68kcal (286kJ)</p>
                            <hr>
                            <p>16.9g</p>
                            <hr>
                            <p>0.0g</p>
                            <hr>
                            <p>0.2g</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>   
    <hr>
    <!-- PRICING -->
    <section id="pricing" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h1>Choose your startup</h1>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/healthy.png')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>Startup</h2>
                            <p>Program ini dibuka kepada sesiapa sahaja yang ingin menjaga kesihatan dan bertenaga dalam menjalankan aktiviti harian. Anda bukan sahaja menjana pendapatan yang baik dan berterusan tetapi tetap kekal dengan kesihatan yang berpanjangan.</p>
                        </div>
                    </div>
                    <div class="pricing-thumb">
                        <img src="{{asset('landingpage/images/1.png')}}" class="img-responsive" alt="StarterPack">
                        <div class="pricing-title">
                            <h2>ZUHAL Healthy</h2>
                        </div>
                        <div class="pricing-info">
                            <p>Starter Pack RM200</p>
                            <p>1 Bottle ZUHAL</p>
                            <p>Promotion link</p>
                            <p><hr></p>
                            <p>Daily Earn</p>
                        </div>
                            <div class="pricing-bottom">
                            <span class="pricing-dollar">RM200</span>
                                 <a href="{{url('products/1/promo')}}" class="section-btn pricing-btn">Buy</a>
                            </div>
                        </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/activatorpackage.png')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>Entrepreneur</h2>
                            <p>Untuk kesihatan yang berpanjangan, anda sentiasa menyimpan stok TONIK ZUHAL, tidak perlu menunggu atau ragu kekurangan produk kesihatan TONIK ZUHAL yang akan sampai ke rumah, sistem akan bekerja untuk anda dan membantu inventori stok anda.</p>
                        </div>
                    </div>
                    <div class="pricing-thumb">
                        <img src="{{asset('landingpage/images/3.png')}}" class="img-responsive" alt="StarterPack">
                        <div class="pricing-title">
                            <h2>Entrepreneur Startup</h2>
                        </div>
                        <div class="pricing-info">
                            <p>Medium Pack</p>
                            <p>3 Bottles ZUHAL</p>
                            <p>Promotion link</p>
                            <p><hr></p>
                            <p>Coming soon</p>
                        </div>
                        <div class="pricing-bottom">
                            <span class="pricing-dollar">RM540</span>
                            <a href="{{url('products/2/promo')}}"   class="section-btn pricing-btn btn disabled">Buy</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/energypackage.png')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>Enterprise</h2>
                            <p>ZUHAL menawarkan program keahlian bersama, dalam rangkaian penggunaan produk kesihatan yang terbaik. ZUHAL meningkatkan prestasi kesihatan dan tenaga dalam aktiviti harian anda dalam pada itu juga anda telah pun menjana pendapatan.</p>
                        </div>
                    </div>
                    <div class="pricing-thumb">
                        <img src="{{asset('landingpage/images/7.png')}}" class="img-responsive" alt="StarterPack">
                        <div class="pricing-title">
                            <h2>Enterprise Package</h2>
                        </div>
                        <div class="pricing-info">
                            <p>Premium Pack RM1260</p>
                            <p>7 Bottles ZUHAL</p>
                            <p>Promotion link</p>
                            <p><hr></p>
                            <p>Coming soon</p>
                        </div>
                        <div class="pricing-bottom">
                            <span class="pricing-dollar">RM1260</span>
                            <a href="{{url('products/3/promo')}}" class="section-btn pricing-btn btn disabled">Buy</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <img src="{{asset('landingpage/images/live.png')}}" class="img-responsive" alt="Andrew Orange">
                        <div class="team-info team-thumb-up">
                            <h2>Business</h2>
                            <p>Sambil menonton tv dan melayari web atau membalas pesanan ringkas, satu sudu TONIK ZUHAL sudah cukup untuk menambah kesegaran, anda hanya perlu membalas pesanan ringkas, tanpa perlu melihat akaun anda dan anda pasti semuanya telah diuruskan</p>
                        </div>
                    </div>
                    <div class="pricing-thumb">
                        <img src="{{asset('landingpage/images/50.png')}}" class="img-responsive" alt="StarterPack">
                        <div class="pricing-title">
                            <h2>Business Package</h2>
                        </div>
                        <div class="pricing-info">
                            <p>LIFE PAckage</p>
                            <p>50 Bottles Zuhal</p>
                            <p>Promotion link</p>
                            <p><hr></p>
                            <p>Reseller</p>
                        </div>
                        <div class="pricing-bottom">
                            <span class="pricing-dollar">RM5000</span>
                            <a href="{{url('products/4/promo')}}" class="section-btn pricing-btn">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <img src="{{asset('landingpage/images/ZUHALLOGOZ.png')}}" class="img-responsive, center"  alt="Catherine Soft">
                    <h1>ZUHAL Activator</h1>
                    <h2>Kini berada di pasaran</h2>

                    <p>Untuk pertanyaan sila email ke sales@zuhaldistributor.com </p>
                       
                </div>

            </div>
        </div>
        <hr>
    </section> 

    <!-- CONTACT -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12">

                    <form id="contact-form" role="form" action="{{url('notifyme')}}" method="post">
                        @csrf
                        <div class="section-title">
                            <h1>Pra-Pendaftaran</h1>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <input type="text" class="form-control" placeholder="Full name" name="fullname" required="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="email" class="form-control" placeholder="Email address" name="email" required="">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <input type="submit" class="form-control" name="send message" value="Daftar">
                        </div>
                        <div class="col-md-12 col-sm-12">
                               {{-- <textarea class="form-control" rows="8" placeholder="Your message" name="message" required=""></textarea> --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>       

    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-md-12 col-sm-12">
                    <div class="col-md-6 col-sm-6">
                        <p>Copyright &copy; © 2020 - ZUHAL ENERGETIC TONIC
                        <a rel="nofollow" href="http://tooplate.com">ZUHAL GROUP</a></p>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </footer>


    <!-- SCRIPTS -->
    <script src="{{asset('landingpage/js/jquery.js')}}"></script>
    <script src="{{asset('landingpage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landingpage/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('landingpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landingpage/js/smoothscroll.js')}}"></script>
    <script src="{{asset('landingpage/js/custom.js')}}"></script>

</body>
</html>