<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AboutPage</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

       {{-- SplideJs --}}
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

        {{-- AlpineJs --}}
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Aos --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
            
    </head>
    <body>

        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        
        <script>
          document.addEventListener('DOMContentLoaded', function () {
            
            var Slider = new Splide('#rating-slider', {
              type      : 'loop', 
              perPage   : 3,      
              perMove   : 1,     
              gap       : '24px', 
              pagination: true,   
              arrows    : true,
              autoplay  : true,   
              breakpoints: {
                1024: { 
                  perPage: 2, 
                  gap    : '20px',
                },
                768: {  
                  perPage: 1, 
                  gap    : '16px',
                },
                640: { 
                   perPage: 1, 
                   gap    : '16px',
                   arrows : false, 
                }
              }
            });

            Slider.mount(); 

            new Splide( '.splide', {
            classes: {
		    arrows: 'splide__arrows container-arrows',
		    prev  : 'splide__arrow--prev prev-arrow',
		    next  : 'splide__arrow--next next-arrow',
            },
            } );

            });

          
        </script>


        <livewire:navbar>
       
        <section class="lg:pt-[200px] lg:pb-[100px] bg-[#F9FAFB]">
            <div class="container flex flex-col justify-center mx-auto px-5 lg:px-0 h-[100vh] ">
                <div class="flex lg:flex-row flex-col mb-[68px]">
                    <h1 class="heading-1 lg:w-[70%] w-full lg:text-start text-center lg:mb-[0px] mb-[56px] text-[#101828]">Slego adalah teman bertumbuh, bukan sekedar sofa<h1>
                    <h1 class="text-global lg:w-[30%] w-full lg:text-right text-center text-[#475467]">Kami percaya bahwa hunian bukan sekadar tempat tinggal, tetapi bagian dari cerita hidup. Slego hadir untuk beradaptasi dengan setiap perubahan dalam hidupmu.<h1>    
                </div>

                <div class="grid grid-cols-3 grid-rows-2 gap-[24px]">
                    <img src="/assets/static/about/1.png" class="w-full h-full object-cover object-center max-h-[173px] rounded-[16px]"/>
                    <img src="/assets/static/about/3.png" class="row-span-2 col-span-2 w-full h-full object-cover object-center max-h-[370px] rounded-[16px]"/>
                    <img src="/assets/static/about/2.png" class="w-full h-full object-cover object-center max-h-[173px] rounded-[16px]"/>
                </div>
            </div>
        </section>
        
        <section class="py-[100px] bg-[#F2F4F7]">
            <div class="container mx-auto px-5 lg:px-0 ">

                <div class="flex flex-col items-center gap-[24px] mb-[80px]">
                    <h1 class="heading-2 text-[#101828]">Tumbuh bersama, berkembang bersama</h1>
                    <h1 class="text-global text-center lg:w-[50%] w-full text-[#475467]">Kami percaya bahwa furnitur harus fleksibel, tidak kaku. Slego tumbuh bersama rumahmu, memenuhi kebutuhanmu tanpa batas. Maka dari itu kami membuat slego sedemikian rupa dengan fitur fitur berikut</h1>
                </div>

                <div class="grid grid-rows-3 lg:gap-[64px] gap-[120px]">

                    <div class="flex lg:flex-row flex-col items-center gap-[36px] lg:max-h-[326px] max-h-none">
                        <video 
                        src="/assets/static/about/4.mp4"
                        class="lg:w-[50%] w-full lg:h-[326px] h-[246px] object-cover rounded-[16px]"
                        autoplay
                        muted
                        loop
                        >
                        </video>

                        <div class="flex flex-col lg:w-[50%] w-full gap-[24px]">
                            <h1 class="text-md text-[#101828]">Modular - Bebas Berubah & Berkembang</h1>
                            <h1 class="text-global text-[#475467]">Tak perlu membeli sofa baru saat kebutuhanmu berubah. Tambah, hapus, atau susun ulang modul sesuai kebutuhan. Slego menyesuaikan jumlah dudukan, memberikan fleksibilitas untuk setiap ruang dan momen.</h1>
                        </div>
                    </div>

                    <div class="flex lg:flex-row flex-col items-center gap-[36px] lg:max-h-[326px] max-h-none">
                        <div class="flex flex-col lg:w-[50%] w-full gap-[24px] lg:order-1 order-2">
                            <h1 class="text-md text-[#101828]">Kustomisasi - Buat Sendiri Sesuai Gayamu</h1>
                            <h1 class="text-global text-[#475467]">Tidak ada dua rumah yang sama, begitu juga dengan Slego. Pilih warna, bahan, dan kombinasi yang paling cocok untuk rumahmu. Gunakan set yang sudah tersedia atau ciptakan desain unik dengan elemen pilihanmu.</h1>
                        </div>

                        <video 
                        src="/assets/static/about/5.mp4"
                        class="lg:w-[50%] w-full lg:h-[326px] h-[246px] object-cover rounded-[16px] lg:order-2 order-1"
                        autoplay
                        muted
                        loop
                        >
                        </video>

                    </div>

                    <div class="flex lg:flex-row flex-col items-center gap-[36px] lg:max-h-[326px] max-h-none">
                        <video 
                        src="/assets/static/about/6.mp4"
                        class="lg:w-[50%] w-full lg:h-[326px] h-[246px] object-cover rounded-[16px]"
                        autoplay
                        muted
                        loop
                        >
                        </video>

                        <div class="flex flex-col lg:w-[50%] w-full gap-[24px]">
                            <h1 class="text-md text-[#101828]">Multifungsi - Lebih dari Sekadar Sofa</h1>
                            <h1 class="text-global text-[#475467]">Slego lebih dari sekadar sofa. Gunakan sebagai tempat duduk, tempat tidur, atau ruang penyimpanan tersembunyi. Dengan desain modular yang fleksibel, satu furnitur dapat beradaptasi untuk berbagai kebutuhan ruang.</h1>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <section class="bg-[#FFFFFF] ">
            <div class="relative flex items-end mx-auto px-5 lg:px-0 h-[100vh]  pt-[100px] pb-[100px]">
                <video
                src="assets/static/about/7.mp4"
                class="absolute z-1 top-0 left-0 w-full h-full object-cover"
                autoplay
                muted
                loop    
                ></video>
                
                <div class="absolute z-2 bg-linear-to-b from-transparent to-[#00000029]  top-0 left-0 w-full h-full"></div>

                <div class="relative container mx-auto  z-3 flex flex-col lg:flex-row items-center ">
                    <h1 class="heading-1 text-[#FFFFFF] text-center lg:text-left lg:w-[50%] w-full lg:mb-0 mb-[24px]">Dibuat dengan Kualitas & Tanggung Jawab</h1>
                    <h1 class="text-sm text-[#D0D5DD] lg:text-right text-center lg:w-[50%] w-full">
                        Kami tidak hanya peduli dengan desain, tetapi juga dengan ketahanan dan keberlanjutan.Slego dibuat dengan material premium yang ramah lingkungan dan tahan lama </h1>    
                </div>
            </div>
        </section>

        <section class="lg:bg-[#F9FAFB] bg-[#2C2C2C] lg:py-[100px] py-[0px] ">
            <div class="container flex flex-col justify-center  mx-auto px-5 lg:px-0  h-[100vh]">
                <div class="grid grid-cols-1 grid-rows-3 lg:grid-cols-2 lg:grid-rows-1 items-center justify-center  gap-y-[10px] gap-x-[24px]">
                <div class="heading-2  lg:col-span-2 flex flex-col text-[#101828] text-center lg:mb-[56px]  ">
                    <h1 class="heading-2  lg:text-[#101828] text-[#FFFFFF] mb-[24px]">Kami peduli masa depan</h1>
                    <h1 class="text-global lg:text-[#475467] text-[#D0D5DD]">Setiap tahun, jutaan ton furnitur berakhir di tempat pembuangan sampah. Kami percaya bahwa desain modular adalah kunci untuk mengurangi limbah dan menciptakan solusi jangka panjang </h1>
                </div>
                <img src="/assets/static/about/8.jpg" class="w-full h-full object-cover object-center rounded-[16px] max-h-[370px]" >
                <img src="/assets/static/about/9.png" class="w-full h-full object-cover object-center rounded-[16px] max-h-[370px]" >
                </div>
            </div>
        </section>
        
     
        <section class="bg-[#F2F4F7] py-[100px]">
            <div class="container flex flex-col mx-auto px-5 "> 
                <div id="rating-slider" class="splide">
                <div class="flex flex-row justify-between mb-[80px] items-center">
                    <h1 class="heading-1 text-[#101828]">Apa kata mereka tentang slego?</h1>

                    <div class="splide__arrows container-arrows hidden lg:flex flex-row items-center gap-[8px]">
                    
                        <button type="button" class="splide__arrow--prev prev-arrow p-[12px] rounded-full bg-[#EAECF0] border border-[#98A2B3] cursor-pointer ">
                             <img src="assets/static/svg/about/Prev.png" alt="Previous Testimonial"/>
                        </button>
                         <button type="button" class="splide__arrow--next next-arrow p-[12px] rounded-full bg-[#EAECF0] border border-[#98A2B3] cursor-pointer ">
                            <img src="assets/static/svg/about/Next.png" alt="Next Testimonial"/>
                        </button>
                        
                    </div>

                </div>

        
                <div  >
                  
                    <div class="splide__track">
                       
                        <ul class="splide__list">

                         
                            <li class="splide__slide">
                               
                                <div class="flex flex-col justify-between bg-[#F9FAFB] py-[35px] px-[25px] rounded-[16px] h-full"> 
                                    <p class="text-global mb-[40px] text-[#475467]">"Sebagai freelancer yang sering bekerja dari rumah, saya butuh ruang yang bisa multifungsi. Dengan Slego, saya bisa memiliki sofa santai di siang hari, lalu mengubahnya menjadi tempat tidur saat malam. Selain itu, sarung sofa yang bisa dilepas dan dicuci sangat membantu menjaga kebersihan, terutama dengan anak kecil di rumah. Desainnya juga stylish, cocok untuk interior minimalis!"</p>
                                    <div class="flex flex-row items-center w-full mt-auto"> 

                                        <img src="/assets/static/about/10.jpg" class="h-[37px] w-[37px] rounded-full object-cover object-center mr-[8px]"/>
                                        <div class="flex flex-col">
                                            <h2 class="text-vsm-bold text-[#101828]">Nadia Salsabila</h2> 
                                            <span class="text-vsm text-[#98A2B3]">Bandung</span> 
                                        </div>
                                        <div class="grid grid-cols-5 justify-self-end ml-auto">
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                        </div>
                                    </div>
                                </div>
                            </li>

                         
                            <li class="splide__slide">
                                <div class="flex flex-col justify-between bg-[#F9FAFB] py-[35px] px-[25px] rounded-[16px] h-full">
                                    <p class="text-global mb-[40px] text-[#475467]">"Rumah saya sering menjadi tempat berkumpul keluarga besar, jadi saya butuh furnitur yang bisa fleksibel untuk berbagai acara. Slego adalah jawaban dari semua kebutuhan itu. Bisa jadi sofa sudut untuk bersantai, dipisah jadi beberapa kursi saat acara keluarga, dan bahkan berubah menjadi tempat tidur tambahan jika ada yang menginap. Selain fungsional, kualitasnya juga luar biasa!"</p>
                                    <div class="flex flex-row items-center w-full mt-auto">
                                        <img src="/assets/static/about/12.png" class="h-[37px] w-[37px] rounded-full object-cover object-center mr-[8px]"/>
                                        <div class="flex flex-col">
                                            <h2 class="text-vsm-bold text-[#101828]">Nana Mustika</h2>
                                            <span class="text-vsm text-[#98A2B3]">Jakarta</span>
                                        </div>
                                         <div class="grid grid-cols-5 justify-self-end ml-auto">
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                        </div>
                                    </div>
                                </div>
                            </li>

                       
                            <li class="splide__slide">
                                <div class="flex flex-col justify-between bg-[#F9FAFB] py-[35px] px-[25px] rounded-[16px] h-full">
                                    <p class="text-global mb-[40px] text-[#475467]">"Sebagai seseorang yang sering berpindah tempat karena pekerjaan, memiliki furnitur yang fleksibel adalah hal yang sangat penting. Slego membuat segalanya jadi lebih mudah! Saya bisa mengatur ulang sofa sesuai ukuran ruangan di setiap tempat baru tanpa harus membeli yang baru. Selain praktis, desainnya juga modern dan nyaman untuk digunakan sehari-hari."</p>
                                    <div class="flex flex-row items-center w-full mt-auto">
                                        <img src="/assets/static/about/13.jpg" class="h-[37px] w-[37px] rounded-full object-cover object-center mr-[8px]"/>
                                        <div class="flex flex-col">
                                            <h2 class="text-vsm-bold text-[#101828]">Philip Deckow</h2>
                                            <span class="text-vsm text-[#98A2B3]">Jakarta</span>
                                        </div>
                                        <div class="grid grid-cols-5 justify-self-end ml-auto">
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                            <img src="assets/static/about/11.png" alt="Star Rating" class="" />
                                        </div>
                                    </div>
                                </div>
                            </li>

                         

                        </ul>
                    </div>
                     
                </div>
            </div>

            </div>
        </section>

        

        <section class="bg-[#F9FAFB] py-[60px]">
            <div class="container flex flex-col justify-center mx-auto px-5 lg:px-0 lg:h-[113px] ">
                <div class="flex lg:flex-row flex-col justify-between items-center">
                    <div class="flex flex-col gap-[16px] lg:mb-0 mb-[32px] ">
                        <h1 class="heading-2 text-[#101828]">Bergabung dengan slego family</h1>
                        <h1 class="text-global w-[85%] text-[#475467]">Dapatkan inspirasi, tips dekorasi, dan promo eksklusif langsung ke inbox-mu.</h1>
                    </div>

                    <div class="flex flex-col gap-[8px] w-[359px]">
                        <input type="email" placeholder="Email" class="py-[16px] px-[24px] bg-[#EAECF0] rounded-full text-sm text-[#101828]"></input>

                        <button class="py-[16px] px-[24px] bg-[#412FA4] rounded-full cursor-pointer flex flex-row justify-start items-center gap-[4px]">
                        <h1 class="text-sm text-[#FFFFFF]">Gabung Sekarang</h1>
                        <img src="/assets/static/svg/about/NextWhite.png" />    
                        </button>

                    </div>
                </div>
            </div>
        </section>

        <section style="background-image: url('/assets/static/18(2).png'); background-position: center top  ;  " class="relative pt-[100px]">
      

            <div class="container relative flex flex-col justify-start content-center z-3 mx-auto px-5  h-[100vh] ">
                <h1 class="heading-1 text-[#FFFFFF] mb-[24px] text-center">Siap Menemukan Slego untuk Rumahmu?</h1>
                <h1 class="text-sm text-[#EAECF0] mb-[24px] text-center">Sofa yang tumbuh bersama Anda. – ubah, atur, dan sesuaikan dengan mudah!</h1>
                <button class="flex flex-row items-center gap-[16px] bg-[#FFFFFF4D] text-[#F5F5F5] self-center px-[24px] py-[14px] rounded-full cursor-pointer">
                   <h1 class="text-sm-bold text-[#F5F5F5]">Lihat Katalog</h1>
                   <img src="assets\static\svg\Button_arrow.png" class=""></img>
                </button>
            </div>
        </section>

        <section  class="lg:bg-[#EAECF0] bg-[#2C2C2C]">
            <div class="container flex flex-col  mx-auto px-5 lg:px-0 pt-[100px] ">
                <div class="flex flex-col lg:flex-row lg:mb-[64px] mb-0">
                <div class="flex flex-col lg:w-[45%] w-full mb-[24px] lg:mb-0">
                    <h1 class="text-md-bold text-[#FFFFFF] lg:text-[#101828] mb-[16px]">Slego - Solusi rumah nyaman, <br>
                        gaya, dan terjangkau untuk semua</h1>

                    <h1 class="text-vsm w-full lg:w-[80%] text-[#D0D5DD] lg:text-[#475467] mb-[32px]">Slego hadir untuk menghadirkan furnitur yang nyaman, bergaya, dan terjangkau bagi semua orang. Dengan desain modular yang fleksibel, setiap produk kami dirancang untuk menyesuaikan diri dengan kebutuhan dan ruang Anda, baik di apartemen kecil maupun rumah yang lebih luas. Temukan solusi rumah ideal Anda dan mulai menciptakan ruang yang lebih personal bersama Slego. Read More</h1>

                    <div class="flex flex-col lg:flex-row w-full lg:w-[80%] gap-[12px] mb-[20px]">
                        <input type="email" placeholder="Masukkan Email Anda..." class="bg-[#F5F5F5] px-[24px] py-[16px] rounded-full text-vsm text-center lg:text-left text-[#101828] focus-visible:outline-none grow " >
                        </input>
                        
                        <div class="flex flex-row justify-center items-center bg-[#412FA4] px-[24px] py-[16px] rounded-[24px] text-vsm text-[#FFFFFF]">

                            <h1 class="text-vsm ">Berlangganan</h1>
                            <img src="/assets/static/svg/Arrow_right.png" class="w-[18px]"></img>
                        </div>
                    </div>
                    
                    <div class="flex flex-row items-center gap-[8px]">
                        <input type="checkbox"></input>
                        <h1 class="text-vsm text-[#D0D5DD] lg:text-[#475467]">Saya dengan ini menyetujui buletin tersebut</h1>
                    </div>
                </div>

                <div class="flex flex-col lg:w-[55%] w-full  items-end justify-between  ">
                    <div class="grid lg:grid-cols-3 grid-cols-2 lg:gap-y-[0px] gap-y-[24px]">
                        <div class="flex flex-col">
                            <h1 class="text-md-bold text-[#FFFFFF] lg:text-[#101828] mb-[20px]">Layanan Kami</h1>
                            <ul class="flex flex-col gap-[12px]">
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Uji Coba Gratis di Rumah</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Tukar Tambah</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Garansi Produk Ekstra</a></li>
                            </ul>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="text-md-bold text-[#FFFFFF] lg:text-[#101828] mb-[20px]">Kategori Sofa</h1>
                            <ul class="flex flex-col gap-[12px]">
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Sofa Modern</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Sofa Minimalis</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Sofa Skandinavia</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Sofa Klasik</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Sofa Industrial</a></li>
                            </ul>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="text-md-bold text-[#FFFFFF] lg:text-[#101828] mb-[20px]">Semua tentang Slego</h1>
                            <ul class="flex flex-col gap-[12px]">
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Tentang Slego</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Promo</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Produk</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Layanan</a></li>
                                <li><a href="#" class="text-vsm text-[#D0D5DD] lg:text-[#475467]"> Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div> 
                    
                    <div class="flex flex-row self-center lg:self-end items-center lg:my-0 my-[24px]  gap-[16px] text-[#D0D5DD] lg:text-[#475467]">
                        <div class="p-[12px] rounded-full border-1 border-[#D0D5DD] lg:border-[#475467] ">
                            <svg width="20"  height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8565 1.66602C11.794 1.66852 12.2698 1.67352 12.6807 1.68518L12.8423 1.69102C13.029 1.69768 13.2132 1.70602 13.4357 1.71602C14.3223 1.75768 14.9273 1.89768 15.4582 2.10352C16.0082 2.31518 16.4715 2.60185 16.9348 3.06435C17.3587 3.48079 17.6866 3.98474 17.8957 4.54102C18.1015 5.07185 18.2415 5.67685 18.2832 6.56435C18.2932 6.78602 18.3015 6.97018 18.3082 7.15768L18.3132 7.31935C18.3257 7.72935 18.3307 8.20518 18.3323 9.14268L18.3332 9.76435V10.856C18.3352 11.4639 18.3288 12.0717 18.314 12.6793L18.309 12.841C18.3023 13.0285 18.294 13.2127 18.284 13.4343C18.2423 14.3218 18.1007 14.926 17.8957 15.4577C17.6866 16.014 17.3587 16.5179 16.9348 16.9343C16.5184 17.3583 16.0144 17.6862 15.4582 17.8952C14.9273 18.101 14.3223 18.241 13.4357 18.2827L12.8423 18.3077L12.6807 18.3127C12.2698 18.3243 11.794 18.3302 10.8565 18.3318L10.2348 18.3327H9.14399C8.53587 18.3348 7.92776 18.3284 7.31982 18.3135L7.15816 18.3085C6.96033 18.301 6.76255 18.2924 6.56482 18.2827C5.67816 18.241 5.07316 18.101 4.54149 17.8952C3.98551 17.6861 3.48186 17.3582 3.06566 16.9343C2.64144 16.518 2.31325 16.014 2.10399 15.4577C1.89816 14.9268 1.75816 14.3218 1.71649 13.4343L1.69149 12.841L1.68732 12.6793C1.67196 12.0717 1.66502 11.4639 1.66649 10.856V9.14268C1.66418 8.53485 1.67029 7.92701 1.68482 7.31935L1.69066 7.15768C1.69732 6.97018 1.70566 6.78602 1.71566 6.56435C1.75732 5.67685 1.89732 5.07268 2.10316 4.54102C2.3129 3.98451 2.64168 3.48055 3.06649 3.06435C3.48245 2.64064 3.98581 2.31274 4.54149 2.10352C5.07316 1.89768 5.67732 1.75768 6.56482 1.71602C6.78649 1.70602 6.97149 1.69768 7.15816 1.69102L7.31982 1.68602C7.92748 1.67121 8.53532 1.66482 9.14316 1.66685L10.8565 1.66602ZM9.99982 5.83268C8.89475 5.83268 7.83495 6.27167 7.05354 7.05307C6.27214 7.83447 5.83316 8.89428 5.83316 9.99935C5.83316 11.1044 6.27214 12.1642 7.05354 12.9456C7.83495 13.727 8.89475 14.166 9.99982 14.166C11.1049 14.166 12.1647 13.727 12.9461 12.9456C13.7275 12.1642 14.1665 11.1044 14.1665 9.99935C14.1665 8.89428 13.7275 7.83447 12.9461 7.05307C12.1647 6.27167 11.1049 5.83268 9.99982 5.83268ZM9.99982 7.49935C10.3281 7.49929 10.6532 7.5639 10.9566 7.68949C11.2599 7.81508 11.5355 7.99918 11.7677 8.23129C11.9999 8.4634 12.1841 8.73896 12.3098 9.04226C12.4355 9.34555 12.5002 9.67063 12.5002 9.99893C12.5003 10.3272 12.4357 10.6523 12.3101 10.9557C12.1845 11.259 12.0004 11.5346 11.7683 11.7668C11.5362 11.999 11.2606 12.1832 10.9573 12.3089C10.654 12.4346 10.329 12.4993 10.0007 12.4993C9.33762 12.4993 8.70173 12.236 8.23289 11.7671C7.76405 11.2983 7.50066 10.6624 7.50066 9.99935C7.50066 9.33631 7.76405 8.70042 8.23289 8.23158C8.70173 7.76274 9.33762 7.49935 10.0007 7.49935M14.3757 4.58268C14.0994 4.58268 13.8344 4.69243 13.6391 4.88778C13.4437 5.08313 13.334 5.34808 13.334 5.62435C13.334 5.90062 13.4437 6.16557 13.6391 6.36092C13.8344 6.55627 14.0994 6.66602 14.3757 6.66602C14.6519 6.66602 14.9169 6.55627 15.1122 6.36092C15.3076 6.16557 15.4173 5.90062 15.4173 5.62435C15.4173 5.34808 15.3076 5.08313 15.1122 4.88778C14.9169 4.69243 14.6519 4.58268 14.3757 4.58268Z" fill="currentColor"/>
                                </svg>     
                        </div>

                        <div class="p-[12px] rounded-full border-1 border-[#D0D5DD] lg:border-[#475467] ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.3327 9.99935C18.3327 5.39935 14.5993 1.66602 9.99935 1.66602C5.39935 1.66602 1.66602 5.39935 1.66602 9.99935C1.66602 14.0327 4.53268 17.391 8.33268 18.166V12.4993H6.66602V9.99935H8.33268V7.91602C8.33268 6.30768 9.64102 4.99935 11.2493 4.99935H13.3327V7.49935H11.666C11.2077 7.49935 10.8327 7.87435 10.8327 8.33268V9.99935H13.3327V12.4993H10.8327V18.291C15.041 17.8743 18.3327 14.3243 18.3327 9.99935Z" fill="currentColor"/>
                                </svg>
                                  
                        </div>

                        <div class="p-[12px] rounded-full border-1 border-[#D0D5DD] lg:border-[#475467] ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.2027 3.33398C10.6477 3.33648 11.761 3.34732 12.9444 3.39482L13.3643 3.41315C14.5552 3.46898 15.7452 3.56565 16.336 3.72982C17.1235 3.95148 17.7418 4.59648 17.951 5.41482C18.2843 6.71482 18.326 9.24982 18.331 9.86398L18.3319 9.99065V10.1357C18.326 10.7498 18.2843 13.2857 17.951 14.5848C17.7393 15.4057 17.1202 16.0515 16.336 16.2698C15.7452 16.434 14.5552 16.5307 13.3643 16.5865L12.9444 16.6057C11.761 16.6523 10.6477 16.664 10.2027 16.6657L10.0068 16.6665H9.79435C8.85268 16.6607 4.91435 16.6182 3.66102 16.2698C2.87435 16.0482 2.25518 15.4032 2.04602 14.5848C1.71268 13.2848 1.67102 10.7498 1.66602 10.1357V9.86398C1.67102 9.24982 1.71268 6.71398 2.04602 5.41482C2.25768 4.59398 2.87685 3.94815 3.66185 3.73065C4.91435 3.38148 8.85352 3.33898 9.79518 3.33398H10.2027ZM8.33185 7.08398V12.9173L13.3318 10.0007L8.33185 7.08398Z" fill="currentColor"/>
                                </svg>
                                    
                        </div>

                        <div class="p-[12px] rounded-full border-1 border-[#D0D5DD] lg:border-[#475467] ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_11271_284)">
                                <path d="M15.7508 0.960938H18.8175L12.1175 8.61927L20 19.0384H13.8283L8.995 12.7184L3.46333 19.0384H0.395L7.56167 10.8468L0 0.961771H6.32833L10.6975 6.73844L15.7508 0.960938ZM14.675 17.2034H16.3742L5.405 2.7001H3.58167L14.675 17.2034Z" fill="currentColor"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_11271_284">
                                <rect width="20" height="20" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                     
                        </div>

                        <div class="p-[12px] rounded-full border-1 border-[#D0D5DD] lg:border-[#475467] ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.99935 1.66602C8.35118 1.66602 6.74001 2.15476 5.3696 3.07044C3.99919 3.98611 2.93109 5.2876 2.30036 6.81032C1.66963 8.33304 1.5046 10.0086 1.82614 11.6251C2.14769 13.2416 2.94136 14.7265 4.1068 15.8919C5.27223 17.0573 6.75709 17.851 8.3736 18.1726C9.99011 18.4941 11.6657 18.3291 13.1884 17.6983C14.7111 17.0676 16.0126 15.9995 16.9283 14.6291C17.8439 13.2587 18.3327 11.6475 18.3327 9.99935C18.3305 7.78989 17.4518 5.67155 15.8895 4.10923C14.3271 2.5469 12.2088 1.66822 9.99935 1.66602ZM14.9485 8.09352V8.63185C14.9485 8.67305 14.9403 8.71384 14.9243 8.7518C14.9083 8.78976 14.8848 8.82413 14.8553 8.85287C14.8258 8.88162 14.7908 8.90415 14.7524 8.91915C14.714 8.93414 14.673 8.9413 14.6319 8.94018C13.752 8.87802 12.9102 8.55674 12.2127 8.01685V11.9569C12.2125 12.3929 12.1254 12.8246 11.9566 13.2266C11.7878 13.6287 11.5405 13.9931 11.2294 14.2985C10.9156 14.612 10.5425 14.8597 10.1318 15.0271C9.72111 15.1945 9.28115 15.2783 8.83769 15.2735C7.94591 15.2722 7.08998 14.9223 6.45269 14.2985C6.04718 13.8897 5.7551 13.3823 5.60518 12.8264C5.45527 12.2704 5.45268 11.685 5.59769 11.1277C5.73019 10.5927 5.99769 10.101 6.37519 9.70018C6.65671 9.35609 7.01158 9.07926 7.41385 8.88995C7.81611 8.70064 8.25561 8.60363 8.70019 8.60602H9.38352V10.0252C9.38382 10.0664 9.37533 10.1072 9.35862 10.1449C9.34191 10.1826 9.31736 10.2162 9.28661 10.2437C9.25585 10.2711 9.2196 10.2917 9.18027 10.304C9.14094 10.3164 9.09944 10.3202 9.05852 10.3152C8.66176 10.196 8.23423 10.2355 7.86605 10.4254C7.49787 10.6153 7.2178 10.9408 7.08489 11.3331C6.95197 11.7255 6.97659 12.1542 7.15356 12.5287C7.33053 12.9033 7.64602 13.1945 8.03352 13.341C8.25852 13.4702 8.51019 13.546 8.76852 13.5635C8.96852 13.5719 9.16852 13.5469 9.35852 13.4868C9.67571 13.3798 9.9516 13.1765 10.1477 12.9053C10.3439 12.634 10.4505 12.3083 10.4527 11.9735V4.79435C10.4527 4.71493 10.4842 4.63875 10.5403 4.58251C10.5963 4.52627 10.6724 4.49457 10.7519 4.49435H11.931C12.0076 4.49444 12.0813 4.52385 12.1369 4.57653C12.1926 4.62922 12.2259 4.70119 12.2302 4.77768C12.2732 5.14537 12.3899 5.5006 12.5735 5.82207C12.7571 6.14354 13.0037 6.42464 13.2985 6.64852C13.6969 6.94759 14.1701 7.13098 14.666 7.17852C14.7403 7.18487 14.8098 7.21792 14.8615 7.27154C14.9133 7.32516 14.9439 7.39573 14.9477 7.47018L14.9485 8.09352Z" fill="currentColor"/>
                                </svg>
                                    
                        </div>
                            
                
                    </div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row border-t-1 justify-between lg:py-[32px] py-[16px] lg:gap-0 gap-[16px] border-[#98A2B3] lg:border-[#98A2B3] lg:text-[#475467] text-[#D0D5DD]">
                <h1 class="text-vsm lg:order-1 order-2 text-center lg:text-left">© Slego. All Right Reserved</h1>
                <ul class="flex flex-row lg:gap-[32px] justify-between lg:order-2 order-1">
                    <li class="text-vsm"><a href="#">Kebijakan Privasi</a></li>
                    <li class="text-vsm"><a href="#">Syarat & Ketentuan</a></li>
                    <li class="text-vsm"><a href="#">Kebijakan Cookie</a></li>
                </ul>
            </div>
            </div>
       </section>

       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            once: true,
            duration: 700,
        });
        </script>
        
    </body>
</html>
