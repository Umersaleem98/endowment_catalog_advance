<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .img {
            border-radius: 50%;
        }
        .justified-content {
            text-align: justify;
        }
    </style>
</head>
<body>
<div class="super_container">
    <!-- Header -->
    @include('template.navbar')
    <!-- Home -->
    @include('template.home')
    <div class="row mt-5">
        <div class="col-12">
            <div class="section_title text-center">
                <h1>Nust Trust Foundation</h1>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div class="about-section mt-4">
        <div class="container">
            <div class="row">
                <!-- Left Section for Images -->
                <div class="col-lg-5 col-md-4 col-sm-12 mb-4 mb-lg-0">
                    <div class="image-container">
                        <img src="{{ asset('templates/images/slider_background3.jpg') }}" alt="Image 1" class="img-fluid" style="border-radius: 5%; height:240px;">
                    </div>
                </div>
                <!-- Right Section for Content -->
                <div class="col-lg-7 col-md-8 col-sm-12 p-3">
                    <div class="content-container">
                        <h2>NUST OPENS FIRST NTF ACCOUNT IN UK</h2>
                        <p class="justified-content" class="justified-content">
                        NUST has opened its first international NUST Trust Foundation Office in the UK. The announcement was made during the official inauguration ceremony held in London by Mr Toaha Qureshi MBE, who is a long-term friend of NUST and as well a trustee of the NUST Trust Foundation, and Chairman of FIRD, and Rector NUST Engr Javed Mahmood Bukhari.
                        </p>
                        <p class="justified-content">
                        Among other notables were Pro-Rector Research Innovation & Commercialisation (RIC) Dr Rizwan Riaz and various business community members. Mr Syed Aoun Ali Bukhari was present as an alumni representative.
                        This initiative will not only guarantee a smooth and effective transference of charitable contributions to Pakistan from abroad but will also facilitate building the international visibility of NUST.
                        </p>
                        <p class="justified-content">
                        University Advancement Office various prospective donors during their outreach visit last week and the establishment of this office promises a hassle-free gift point and a time-saving payment process for the prospective donors. It will also enable tax exemption to the donors, and bridge the gap between communities thus ensuring maximum contribution to not only student endowment, but also to other nation-building projects by NUST.
                        </p>                        
                        <p class="justified-content">
                        The office has been established under charity number 1187170 and is located in FIRD Secretariat, Floor 2, 43 45 Coldharbour Lane, London. On the occasion, Rector NUST expressed his great appreciation for the efforts of the NUST office back home and also to the Board of Trustees based in the UK who have extended their support in making this great endeavor of national significance happen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
  


</div>

<br>

@include('template.footer')


</body>
</html>
