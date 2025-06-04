<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HomePage</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        {{-- Swiper --}}
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        {{-- Alpine --}}
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Aos --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            
        </style>
    </head>
    <body>
    
        <livewire:navbar >
        
       
        <section style="background-image:url('/assets/static/Content.png'); background-size:cover; background-position: center; " 
        class="relative" >
            <div class="absolute z-2 bg-linear-to-b from-transparent to-[#00000029]  top-0 left-0 w-full h-full"></div>
            <div class="container relative flex flex-col  justify-end mx-auto px-5 lg:pb-[16px] pb-[54px] lg:px-0 h-[100vh] ">
                <div class="flex lg:flex-row flex-col justify-between items-center lg:mb-[98px] mb-[44px]">
                    <h1 data-aos="fade-down"   class="heading-1 text-center lg:text-left lg:mb-0 mb-[24px] text-[#FFFFFF]">Susun seperti lego, <br>atur sesuai ruang</h1>
                    <h1 data-aos="fade-down" data-aos-delay = "200" class="text-global text-center lg:text-right text-[#D0D5DD]">Setiap perjalanan memiliki awal. <br>Dengan mimpi sederhana rumah yang nyaman,<br> fleksibel, dan bisa tumbuh bersama keluarga.</h1>
                </div>
                

                <div class="flex flex-col items-center gap-[16px]" data-aos="fade-down" data-aos-delay = "400" data-aos-offset="0" >
                    <h1 class="text-sm text-[#EAECF0]">Ikuti perjalanan Selly & George bersama Slego</h1>
                    <img src="/assets/static/svg/Arrow_down.png" alt="" class="w-[10px]">
                </div>
            </div>
        </section>

        <section style="background-image:url('/assets/static/2.jpg'); background-size:cover; background-position: center; "  >
            <div class="container flex flex-col justify-center mx-auto px-5 lg:px-0 h-[100vh] gap-[24px]" data-aos="fade-in" data-aos-delay = "400">
                <h1 class=" heading-1 text-center text-[#FFFFFF] ">Awal kebersamaan</h1>
                <h1 class="text-global  text-center text-[#D0D5DD]">Ketika memulai dari nol, kami hanya punya sedikit barang. Tapi satu hal yang kami tahu,<br> kami ingin rumah ini menjadi tempat di mana cerita baru dimulai.</h1>
            </div>
        </section>

        <section class="lg:bg-[#FFFFFF] bg-[#2C2C2C] lg:py-[100px] py-[200px] ">
            <div class="container flex flex-col justify-center  mx-auto px-5 lg:px-0  lg:h-[100vh]">
                
                <div class="heading-2   flex flex-col text-[#101828] text-center lg:mb-[56px] mb-[36px]  ">
                    <h1 data-aos="fade-down" class="heading-2  lg:text-[#101828] text-[#FFFFFF] mb-[24px]">Namun, memilih sofa ternyata tidak semudah yang kami kira</h1>
                    <h1 data-aos="fade-down" data-aos-delay="200" class="text-global lg:text-[#475467] text-[#D0D5DD]"><span class="text-global-bold lg:text-[#475467] text-[#F2F4F7]">75% pembeli menyesal</span> membeli sofa karena <span class="text-global-bold lg:text-[#475467] text-[#F2F4F7]">ukurannya tidak pas</span> dengan ruangan setelah barang tiba. Kami hampir mengalami hal yang sama. Tapi kami sadar, yang kami butuhkan bukan sekadar sofa—kami butuh sesuatu yang bisa beradaptasi. </h1>
                </div>

                <div data-aos="fade" data-aos-delay="600" class="swiper w-full items-center justify-center  gap-y-[10px] gap-x-[24px]" >
                
                <div class="swiper-wrapper" >
    
                            <div class="swiper-slide">          
                                <img src="/assets/static/image.png" class=" rounded-[16px] object-cover" >
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/static/3.png" class=" rounded-[16px] object-cover" >
                            </div>

                            <div class="swiper-slide">          
                                <img src="/assets/static/image.png" class=" rounded-[16px] object-cover" >
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/static/3.png" class=" rounded-[16px] object-cover" >
                            </div>

               
                    </div> 
                    <div class="swiper-pagination"></div>


       
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        
        <script>
          const swiper = new Swiper('.swiper', {
            slidesPerView: 2,
            direction: 'horizontal',
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
            });

          
        </script>

        <section class="lg:bg-[#F2F4F7] bg-[#2C2C2C] lg:py-[100px] py-[200px]">
            <div class="container flex lg:flex-row flex-col justify-center mx-auto px-5 lg:px-0 lg:h-[100vh] ">
                <div class="flex flex-col lg:w-1/3 w-full mr-[121px] lg:mb-0 mb-[53px]">
                    <h1 data-aos="fade-right" class="heading-1 text-[#FFFFFF] lg:text-[#101828] text-center lg:text-left mb-[24px] lg:mb-[16px] ">Bangun
                        kenyamanan</h1>
                    <h1 data-aos="fade-right" data-aos-delay="100" class="text-sm text-[#D0D5DD] lg:text-[#475467] text-center lg:text-left">Kami memilih Slego bukan hanya karena desainnya yang indah, tetapi juga karena ia bisa tumbuh bersama kami. Seiring waktu, rumah ini dipenuhi kenangan—mengundang teman, berbagi momen, dan menyesuaikan ruang.  Untungnya, Slego berkembang seiring kebutuhan. Modul baru bisa ditambahkan tanpa mengganti yang lama.</h1>    
                </div>
                <div class="grid lg:grid-rows-3 grid-rows-2  lg:grid-cols-2 grid-cols-2 lg:w-2/3 w-full lg:gap-[24px] gap-[10px]">
                <img src="/assets/static/4.png" data-aos="fade-right" data-aos-delay="200" class=" lg:row-span-3 lg:col-span-1 col-span-2  justify-self-end w-full h-[163px] lg:h-full rounded-[16px] object-cover object-left" >
                <img src="/assets/static/5.png" data-aos="fade-left" data-aos-delay="400"  class="justify-self-end w-full h-[163px] lg:h-full rounded-[16px] object-cover" >
                <img src="/assets/static/6.png" data-aos="fade-left" data-aos-delay="600"  class="lg:row-span-2 justify-self-end w-full h-[163px] lg:h-full rounded-[16px] object-cover" >
                </div>
            </div>
        </section>

        <section class="lg:bg-[#FFFFFF] bg-[#2C2C2C] lg:py-[100px] py-[200px]">
            <div class="container flex flex-col justify-center mx-auto px-5 lg:px-0 lg:h-[100vh]  ">
                <div class="flex flex-col lg:flex-row gap-[28px] lg:mb-[24px] mb-[10px]">
                    <img data-aos="fade" src="/assets/static/7.png" class="w-full lg:w-2/3 order-2 lg:order-1"></img>
                    <div data-aos="fade-left" class=" flex flex-col row-span-2 justify-self-end w-full lg:w-1/3 order-1 lg:order-2">
                        <h1 class="heading-1 text-[#FFFFFF] text-center lg:text-left lg:text-[#101828] lg:mb-[16px] mb-[24px]">Sebuah<br> 
                        kehidupan baru</h1>
                        <h1 class="text-sm text-[#D0D5DD] lg:text-left text-center lg:text-[#475467] lg:mb-0 mb-[24px]">Hari-hari kami tak lagi sama sejak kehadiran si kecil. Ruangan ini harus lebih fleksibel, lebih aman, dan lebih nyaman. Kini, kami bisa menyesuaikan sofa sesuai kebutuhan tanpa perlu khawatir. Dari tempat duduk, menjadi area bermain, hingga tempat tidur darurat di malam hari.</h1>
                    </div>
                </div>    
                <div class="grid grid-cols-3 grid-rows-1 lg:gap-[24px] gap-[10px]">    
                    <img data-aos="fade-down" data-aos-delay="200" src="/assets/static/8.png" class="w-full h-[163px] lg:h-full object-cover rounded-[8px] "></img>
                    <img data-aos="fade-down" data-aos-delay="400" src="/assets/static/9.png" class="w-full h-[163px] lg:h-full object-cover rounded-[8px]"></img>
                    <img data-aos="fade-down" data-aos-delay="600" src="/assets/static/10.png" class="w-full h-[163px] lg:h-full object-cover rounded-[8px]"></img>
                </div>
            </div>
        </section>

        <section class="lg:bg-[#FFFFFF] bg-[#2C2C2C] lg:py-[100px] py-[200px] ">
            <div class="container flex flex-col justify-center mx-auto px-5 lg:px-0 lg:h-[100vh] ">
                <div class=" lg:hidden flex flex-col text-center  mb-[24px] ">
                    <h1 class="heading-1 text-[#FFFFFF] lg:text-[#101828] mb-[16px]">Akhir cerita</h1>
                    <h1 class="text-sm text-[#D0D5DD] lg:text-[#475467]">"Slego tumbuh bersama kami. Dari apartemen pertama hingga rumah impian, kami tidak pernah perlu mengganti sofa—kami hanya menyesuaikannya." <br><br>
                    <span class="text-sm-bold text-[#D0D5DD] lg:text-[#475467]">George & Selly</span></h1>
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-6 lg:grid-rows-2 grid-rows-2 lg:gap-[24px] gap-[8px]">
                    <img data-aos="zoom-in" src="/assets/static/11.png" class="lg:col-span-1 col-span-3 w-full h-[163px] lg:h-full lg:rounded-[16px] rounded-[8px] object-cover object-center"></img>
                    <div data-aos="zoom-in" data-aos-delay="200" class=" hidden lg:flex flex-col text-center justify-self-center w-full h-full  ">
                        <h1 class="heading-1 text-[#FFFFFF] lg:text-[#101828] mb-[16px]">Akhir cerita</h1>
                        <h1 class="text-sm text-[#D0D5DD] lg:text-[#475467]">"Slego tumbuh bersama kami. Dari apartemen pertama hingga rumah impian, kami tidak pernah perlu mengganti sofa—kami hanya menyesuaikannya." <br><br>
                        <span class="text-sm-bold text-[#D0D5DD] lg:text-[#475467]">George & Selly</span></h1>
                    </div>
                    <img data-aos="zoom-in" data-aos-delay="400" src="/assets/static/12.png" class="lg:col-span-1 col-span-3 w-full h-[163px] lg:h-full lg:rounded-[16px] rounded-[8px] object-cover object-center"></img>
                    <img data-aos="zoom-in" data-aos-delay="600" src="/assets/static/13.png" class="lg:col-span-1 col-span-2 w-full h-[163px] lg:h-full lg:rounded-[16px] rounded-[8px] object-cover object-center"></img>
                    <img data-aos="zoom-in" data-aos-delay="800" src="/assets/static/14.png" class="lg:col-span-1 col-span-2 w-full h-[163px] lg:h-full lg:rounded-[16px] rounded-[8px] object-cover object-center"></img>
                    <img data-aos="zoom-in" data-aos-delay="1000" src="/assets/static/15.png" class="lg:col-span-1 col-span-2 w-full h-[163px] lg:h-full lg:rounded-[16px] rounded-[8px] object-cover object-center"></img>
                </div>
            </div>
        </section>

        <section class="bg-[#FFFFFF] ">
            <div class="relative flex items-end mx-auto px-5 lg:px-0 h-[100vh]  pt-[100px] pb-[100px]">
                <video
                src="assets/static/bg-1.mp4"
                class="absolute z-1 top-0 left-0 w-full h-full object-cover"
                autoplay
                muted
                loop    
                ></video>
                
                <div class="absolute z-2 bg-linear-to-b from-transparent to-[#00000029]  top-0 left-0 w-full h-full"></div>

                <div class="relative container mx-auto  z-3 flex flex-col lg:flex-row items-center ">
                    <h1 data-aos="fade-right" class="heading-1 text-[#FFFFFF] text-center lg:text-left lg:w-[50%] w-full lg:mb-0 mb-[24px]">Ruang yang selalu 
                        berkembang</h1>
                    <h1 data-aos="fade-left" data-aos-delay="200" class="text-sm text-[#D0D5DD] lg:text-right text-center lg:w-[50%] w-full">
                        Tahun demi tahun berlalu,  rumah ini selalu menyesuaikan diri dengan kehidupan kami. Dari hari pertama kami pindah, hingga hari ini, kami tak pernah merasa perlu mengganti sofa kami. Kami hanya terus menyesuaikannya, membentuknya agar pas dengan kehidupan kami. </h1>    
                </div>
            </div>
        </section>

        <section style="background-image: url('/assets/static/16.jpg'); background-size:cover ; background-position:center;"
        class="relative">
            <div class="absolute z-2 bg-linear-to-b from-transparent to-[#00000029]  top-0 left-0 w-full h-full"></div>   
            <div class="container relative items-center content-center grid lg:grid-cols-3 grid-cols-1 lg:grid-rows-1 grid-rows-3 mx-auto px-5 lg:px-0 h-[100vh]  pt-[100px] pb-[100px]">
                <div class="flex flex-col lg:gap-[54px] gap-[24px] mb-[56px] lg:mb-0">
                    <h1 data-aos="fade-right" class="heading-2 text-center lg:text-left text-[#FFFFFF] ">Faktanya, banyak orang merasakan 
                        hal yang sama</h1>
                    <h1 data-aos="fade-right" data-aos-delay="200" class="text-sm text-center lg:text-left text-[#D0D5DD]">Itulah mengapa kami merancang Slego untuk tumbuh bersama setiap perjalanan hidup bukan sekadar sofa, tetapi ruang yang terus beradaptasi. </h1>    
                </div>
                
                <img src="assets/static/17.png" class="lg:justify-self-center absolute bottom-[200px] lg:static lg:h-[425px] h-[329px] lg:w-[221px] w-[130px]">

                <div class="flex flex-col lg:gap-[100px] gap-[80px] pl-[110px] lg:pl-[0px] mt-[172px] lg:mt-[0px]">
                    <div data-aos="fade-left" class="flex flex-col gap-[16px]">
                        <h1 class="text-sm-bold  text-[#FFFFFF]">7 dari 10 pemilik sofa</h1>
                        <h1 class="text-sm text-[#D0D5DD]">lebih memilih sofa dengan desain yang bisa mereka ubah sendiri.</h1>
                    </div>

                    <div data-aos="fade-left" data-aos-delay="200" class="flex flex-col gap-[16px] ml-[88px]">
                        <h1 class="text-sm-bold  text-[#FFFFFF]">3 dari 4 pembeli sofa</h1>
                        <h1 class="text-sm text-[#D0D5DD]">Menyesal membeli sofa karena ukurannya tidak pas dengan ruangan.</h1>
                    </div>

                    <div data-aos="fade-left" data-aos-delay="400" class="flex flex-col gap-[16px]">
                        <h1 class="text-sm-bold  text-[#FFFFFF]">5 dari 10 pemilik sofa</h1>
                        <h1 class="text-sm text-[#D0D5DD]">Ingin menggantinya lebih cepat karena modelnya tidak fleksibel</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="lg:bg-[#FFFFFF] bg-[#2D2D2D] lg:py-[100px] py-[200px] ">
            <div class="container relative flex flex-col justify-center mx-auto px-5 lg:px-0 lg:h-[100vh] ">
                <div class="flex flex-row justify-between lg:mb-[56px] mb-[32px]">
                    <h1 class="heading-2 lg:text-[#101828] text-[#FFFFFF]">Kami rancang kusus untuk memudahkan anda</h1>
                    <a class="text-sm lg:text-[#6938EF] text-[#BDB4FE] underline self-end lg:block hidden ">Baca Selengkapnya</a>
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-1 lg:grid-rows-1 grid-rows-3 lg:gap-[24px] gap-[10px] lg:mb-0 mb-[24px]">
                    <div data-aos="fade-right" class="flex lg:flex-col flex-row items-start py-[24px] px-[24px] lg:px-[40px] lg:py-[48px] bg-[#344054] lg:bg-[#EAECF0] rounded-[12px]">

                        <div class="flex flex-col lg:order-1 order-2">
                        <h1 class="text-sm-bold text-[#F9FAFB] lg:text-[#101828] mb-[16px]">Modular</h1>
                        <h1 class="text-sm text-[#D0D5DD] lg:text-[#475467] lg:mb-[172px]">Desain modular yang dapat dirakit dan diatur ulang sesuai kebutuhan.</h1>
                        </div>

                        <svg width="111" class= "lg:order-2 order-1 text-[#F5F5F5] lg:text-[#667085] w-[50px] lg:w-[111px] h-[40px] lg:h-auto  mr-[24px] lg:mr-0" height="88" viewBox="0 0 111 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10954_548)">
                            <path d="M47.5002 9.89961H19.2002C18.6002 9.89961 18.2002 9.49961 18.2002 8.89961V1.59961C18.2002 0.999609 18.6002 0.599609 19.2002 0.599609H47.5002C48.1002 0.599609 48.5002 0.999609 48.5002 1.59961V8.89961C48.5002 9.49961 48.0002 9.89961 47.5002 9.89961ZM20.2002 7.89961H46.5002V2.59961H20.2002V7.89961Z" fill="#667085"/>
                            <path d="M83.6 35.9004H47.5C46.9 35.9004 46.5 35.5004 46.5 34.9004V8.90039C46.5 8.30039 46.9 7.90039 47.5 7.90039H83.7C84.3 7.90039 84.7 8.30039 84.7 8.90039V34.9004C84.6 35.4004 84.2 35.9004 83.6 35.9004ZM48.5 33.9004H82.7V9.90039H48.5V33.9004Z" fill="#667085"/>
                            <path d="M19.1996 35.8996H11.0996C10.4996 35.8996 10.0996 35.4996 10.0996 34.8996V1.59961C10.0996 0.999609 10.4996 0.599609 11.0996 0.599609H19.1996C19.7996 0.599609 20.1996 0.999609 20.1996 1.59961V34.8996C20.1996 35.4996 19.7996 35.8996 19.1996 35.8996ZM12.0996 33.8996H18.1996V2.59961H12.0996V33.8996Z" fill="#667085"/>
                            <path d="M37.2996 87.2004H9.09961C8.49961 87.2004 8.09961 86.8004 8.09961 86.2004V52.9004C8.09961 52.3004 8.49961 51.9004 9.09961 51.9004H37.3996C37.9996 51.9004 38.3996 52.3004 38.3996 52.9004V86.2004C38.2996 86.7004 37.8996 87.2004 37.2996 87.2004ZM10.0996 85.2004H36.3996V53.9004H10.0996V85.2004Z" fill="#667085"/>
                            <path d="M9.1 87.2004H1C0.4 87.2004 0 86.8004 0 86.2004V52.9004C0 52.3004 0.4 51.9004 1 51.9004H9.1C9.7 51.9004 10.1 52.3004 10.1 52.9004V86.2004C10.1 86.7004 9.6 87.2004 9.1 87.2004ZM2 85.2004H8.1V53.9004H2V85.2004Z" fill="#667085"/>
                            <path d="M47.5002 35.9004H19.2002C18.6002 35.9004 18.2002 35.5004 18.2002 34.9004V8.90039C18.2002 8.30039 18.6002 7.90039 19.2002 7.90039H47.5002C48.1002 7.90039 48.5002 8.30039 48.5002 8.90039V34.9004C48.5002 35.5004 48.0002 35.9004 47.5002 35.9004ZM20.2002 33.9004H46.5002V9.90039H20.2002V33.9004Z" fill="#667085"/>
                            <path d="M83.6 9.89961H47.5C46.9 9.89961 46.5 9.49961 46.5 8.89961V1.59961C46.5 0.999609 46.9 0.599609 47.5 0.599609H83.7C84.3 0.599609 84.7 0.999609 84.7 1.59961V8.89961C84.6 9.49961 84.2 9.89961 83.6 9.89961ZM48.5 7.89961H82.7V2.59961H48.5V7.89961Z" fill="#667085"/>
                            <path d="M103 76.1004C102.9 76.1004 102.8 76.1004 102.7 76.0004C102.4 75.9004 102.2 75.7004 102.1 75.5004L90.0005 49.5004C89.8005 49.0004 90.0005 48.4004 90.5005 48.2004L96.9005 45.1004C97.1005 45.0004 97.4005 45.0004 97.7005 45.1004C98.0005 45.2004 98.2005 45.4004 98.3005 45.6004L110.4 71.6004C110.6 72.1004 110.4 72.7004 109.9 72.9004L103.5 76.0004C103.3 76.1004 103.1 76.1004 103 76.1004ZM92.2005 49.6004L103.4 73.8004L108 71.5004L96.9005 47.3004L92.2005 49.6004Z" fill="#667085"/>
                            <path d="M80.0005 87.3C79.9005 87.3 79.8005 87.3 79.7005 87.2C79.4005 87.1 79.2005 86.9 79.1005 86.7L67.0005 60.7C66.8005 60.2 67.0005 59.6 67.5005 59.4L90.4005 48.2C90.6005 48.1 90.9005 48.1 91.2005 48.2C91.5005 48.3 91.7005 48.5 91.8005 48.7L103.9 74.7C104.1 75.2 103.9 75.8 103.4 76L80.5005 87.2C80.3005 87.2 80.2005 87.3 80.0005 87.3ZM69.3005 60.7L80.5005 84.9L101.6 74.6L90.4005 50.5L69.3005 60.7Z" fill="currentColor"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10954_548">
                            <rect width="111" height="88" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                    </div>

                    <div data-aos="fade-right" data-aos-delay="200" class="flex lg:flex-col flex-row py-[24px] px-[24px] lg:px-[40px] lg:py-[48px] bg-[#1D2939] lg:bg-[#D9DDE4] rounded-[12px]">
                        <div class="flex flex-col lg:order-1 order-2">
                        <h1 class="text-sm-bold text-[#F9FAFB] lg:text-[#101828] mb-[16px]">Customizable</h1>
                        <h1 class="text-sm text-[#D0D5DD] lg:text-[#475467] lg:mb-[172px]">Ukuran dapat disesuaikan untuk berbagai tata letak ruang.</h1>
                        </div>      

                        <svg width="96" class="lg:order-2 order-1 text-[#F5F5F5] lg:text-[#667085] w-[45px] lg:w-[95px] h-[40px] lg:h-auto mr-[24px] lg:mr-0" height="84" viewBox="0 0 96 84" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10954_563)">
                            <path d="M71.6332 28.2008C71.6332 28.5008 71.5332 28.9008 71.4332 29.2008C70.0332 29.0008 68.6332 28.8008 67.2332 28.8008C60.3332 28.8008 54.1332 31.7008 49.7332 36.4008C49.0332 37.2008 47.8332 37.2008 47.1332 36.4008C42.7332 31.8008 36.5332 28.8008 29.6332 28.8008C27.8332 28.8008 26.1332 29.0008 24.4332 29.4008C24.2332 28.0008 24.0332 26.6008 24.0332 25.2008C24.0332 11.8008 35.2332 1.10082 48.8332 1.60082C62.7332 2.20082 73.3332 14.6008 71.6332 28.2008Z" fill="#475467" fill-opacity="0.4"/>
                            <path d="M48.4332 38.0004C47.6332 38.0004 46.9332 37.7004 46.4332 37.1004C42.1332 32.5004 36.0332 29.9004 29.6332 29.9004C27.9332 29.9004 26.3332 30.1004 24.6332 30.4004C24.3332 30.5004 24.1332 30.4004 23.8332 30.3004C23.6332 30.2004 23.4332 29.9004 23.4332 29.6004C23.1332 28.2004 23.0332 26.7004 23.0332 25.2004C23.0332 18.5004 25.7332 12.2004 30.5332 7.50037C35.4332 2.80037 41.9332 0.300372 48.8332 0.600372C55.7332 0.900372 62.3332 4.10037 66.8332 9.40037C71.2332 14.6004 73.3332 21.5004 72.5332 28.1004V28.2004C72.5332 28.6004 72.4332 28.9004 72.3332 29.3004C72.3332 30.0004 71.8332 30.3004 71.3332 30.2004C70.0332 30.0004 68.6332 29.9004 67.2332 29.9004C60.9332 29.9004 54.7332 32.5004 50.4332 37.1004C49.9332 37.7004 49.2332 38.0004 48.4332 38.0004ZM29.6332 27.9004C36.5332 27.9004 43.1332 30.8004 47.8332 35.8004C48.0332 36.0004 48.2332 36.1004 48.4332 36.1004C48.6332 36.1004 48.8332 36.0004 49.0332 35.8004C53.7332 30.8004 60.3332 27.9004 67.2332 27.9004C68.3332 27.9004 69.5332 28.0004 70.6332 28.1004C71.4332 21.9004 69.5332 15.6004 65.4332 10.8004C61.2332 5.90037 55.2332 2.90037 48.9332 2.70037C42.6332 2.50037 36.6332 4.70037 32.0332 9.10037C27.5332 13.4004 25.1332 19.2004 25.1332 25.3004C25.1332 26.3004 25.2332 27.3004 25.3332 28.3004C26.7332 28.0004 28.1332 27.9004 29.6332 27.9004Z" fill="#475467"/>
                            <path d="M24.933 83.0003C21.533 83.0003 18.233 82.3003 15.133 81.0003C12.233 79.8003 9.73301 78.0003 7.43301 75.7003C5.33301 73.6003 3.73301 71.2003 2.53301 68.5003C1.23301 65.6003 0.533008 62.5003 0.333008 59.4003C0.333008 59.1003 0.333008 58.7003 0.333008 58.4003C0.333008 46.9003 8.43301 36.8003 19.633 34.4003C24.533 33.3003 29.633 33.8003 34.133 35.6003C38.133 37.2003 41.633 39.8003 44.333 43.3003C44.633 43.7003 44.633 44.4003 44.133 44.7003C43.733 45.0003 43.033 45.0003 42.733 44.5003C40.233 41.3003 37.033 38.9003 33.333 37.4003C29.133 35.7003 24.533 35.3003 19.933 36.3003C9.73301 38.6003 2.33301 47.9003 2.33301 58.4003V59.3003C2.43301 62.2003 3.13301 65.1003 4.33301 67.7003C5.43301 70.2003 7.03301 72.4003 8.83301 74.3003C10.833 76.4003 13.233 78.0003 15.833 79.1003C18.633 80.3003 21.733 81.0003 24.833 81.0003C31.833 81.0003 38.333 77.8003 42.633 72.3003C42.933 71.9003 43.633 71.8003 44.033 72.1003C44.433 72.4003 44.533 73.1003 44.233 73.5003C39.633 79.6003 32.533 83.0003 24.933 83.0003Z" fill="#475467"/>
                            <path d="M93.9334 58.3992C93.9334 71.3992 83.3334 81.9992 70.3334 81.9992C62.7334 81.9992 56.0334 78.3992 51.7334 72.8992C48.6334 68.8992 46.7334 63.7992 46.7334 58.2992C46.7334 56.8992 46.8334 55.5992 47.0334 54.2992C47.7334 50.3992 49.3334 46.7992 51.7334 43.7992C56.0334 38.2992 62.8334 34.6992 70.3334 34.6992C71.7334 34.6992 73.1334 34.7992 74.5334 35.0992C85.5334 37.0992 93.9334 46.7992 93.9334 58.3992Z" fill="#475467" fill-opacity="0.4"/>
                            <path d="M70.3334 82.9996C62.7334 82.9996 55.6334 79.5996 50.9334 73.4996C47.5334 69.0996 45.7334 63.8996 45.7334 58.2996C45.7334 56.8996 45.8334 55.4996 46.0334 54.0996C46.7334 50.0996 48.4334 46.2996 50.9334 43.0996C55.6334 37.0996 62.7334 33.5996 70.3334 33.5996C71.8334 33.5996 73.2334 33.6996 74.7334 33.9996C86.1334 35.9996 94.5334 45.6996 95.0334 57.1996V58.1996C94.9334 71.9996 83.9334 82.9996 70.3334 82.9996ZM70.3334 35.7996C63.3334 35.7996 56.8334 38.9996 52.5334 44.4996C50.2334 47.3996 48.7334 50.8996 48.0334 54.5996C47.8334 55.8996 47.7334 57.0996 47.7334 58.3996C47.7334 63.4996 49.4334 68.2996 52.5334 72.2996C56.8334 77.8996 63.3334 80.9996 70.3334 80.9996C82.5334 80.9996 92.5334 71.1996 92.9334 59.0996V58.3996C92.9334 47.3996 85.1334 38.0996 74.3334 36.0996C73.0334 35.8996 71.6334 35.7996 70.3334 35.7996Z" fill="#475467"/>
                            <path d="M0.777344 58.5137L33.2162 35.6266L34.3692 37.2608L1.93034 60.1479L0.777344 58.5137Z" fill="#475467"/>
                            <path d="M3.9334 68.9996L2.7334 67.3996L21.4334 54.1996C27.8334 49.6996 34.3334 45.0996 40.7334 40.5996L41.9334 42.1996C35.5334 46.6996 29.0334 51.2996 22.6334 55.7996L3.9334 68.9996Z" fill="#475467"/>
                            <path d="M8.13281 75.9994C7.73281 75.9994 7.43281 75.7994 7.23281 75.4994C7.03281 74.9994 7.13281 74.4994 7.53281 74.1994L17.7328 66.9994C24.6328 62.0994 31.6328 57.1994 38.5328 52.2994C39.0328 51.9994 39.6328 52.0994 39.9328 52.4994C40.2328 52.9994 40.1328 53.5994 39.7328 53.8994C32.8328 58.7994 25.8328 63.6994 18.9328 68.5994L8.73281 75.7994C8.63281 75.7994 8.63281 75.8994 8.53281 75.8994C8.43281 75.9994 8.33281 75.9994 8.13281 75.9994Z" fill="#475467"/>
                            <path d="M15.533 81.1002C15.233 81.1002 14.933 81.0002 14.733 80.7002C14.433 80.2002 14.533 79.6002 14.933 79.3002L25.833 71.6002C30.033 68.6002 34.333 65.6002 38.533 62.6002C39.033 62.3002 39.633 62.4002 39.933 62.8002C40.233 63.3002 40.133 63.9002 39.733 64.2002C35.533 67.2002 31.233 70.2002 27.033 73.2002L16.133 80.9002C15.933 81.0002 15.733 81.1002 15.533 81.1002Z" fill="#475467"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10954_563">
                            <rect width="95" height="84" fill="white" transform="translate(0.333008)"/>
                            </clipPath>
                            </defs>
                            </svg>
                            
                    </div>

                    <div data-aos="fade-right" data-aos-delay="400" class="flex lg:flex-col flex-row py-[24px] px-[24px] lg:px-[40px] lg:py-[48px] bg-[#101828] lg:bg-[#BFC5D1] rounded-[12px]">
                        <div class="flex flex-col lg:order-1 order-2">
                        <h1 class="text-sm-bold text-[#F9FAFB] lg:text-[#101828] mb-[16px]">Multifunctional</h1>
                        <h1 class="text-sm text-[#D0D5DD] lg:text-[#475467] lg:mb-[172px]">Fungsi serbaguna untuk efisiensi dan kenyamanan maksimal.</h1>
                        </div>    

                        <svg width="44" class="lg:order-2 order-1 text-[#F5F5F5] lg:text-[#667085] w-[45px] lg:h-[88px] lg:w-[95px] mr-[24px] lg:mr-0" height="41" viewBox="0 0 44 41" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_10434_2237)">
                            <path d="M21.7581 40.3958H5.337C5.06332 40.3958 4.88086 40.2133 4.88086 39.9396V20.6905C4.88086 20.4168 5.06332 20.2344 5.337 20.2344H21.7581C22.0317 20.2344 22.2142 20.4168 22.2142 20.6905V39.9396C22.2142 40.1677 21.9861 40.3958 21.7581 40.3958ZM5.79314 39.4835H21.3019V21.1467H5.79314V39.4835Z" fill="currentColor"/>
                            <path d="M21.7581 6.36777H5.337C5.06332 6.36777 4.88086 6.18531 4.88086 5.91163V1.12216C4.88086 0.848472 5.06332 0.666016 5.337 0.666016H21.7581C22.0317 0.666016 22.2142 0.848472 22.2142 1.12216V5.91163C22.2142 6.18531 21.9861 6.36777 21.7581 6.36777ZM5.79314 5.45549H21.3019V1.5783H5.79314V5.45549Z" fill="currentColor"/>
                            <path d="M5.33546 21.1467H0.545984C0.2723 21.1467 0.0898438 20.9643 0.0898438 20.6906V1.12216C0.0898438 0.848472 0.2723 0.666016 0.545984 0.666016H5.33546C5.60914 0.666016 5.7916 0.848472 5.7916 1.12216V20.6906C5.7916 20.9643 5.60914 21.1467 5.33546 21.1467ZM1.00212 20.2344H4.87932V1.5783H1.00212V20.2344Z" fill="currentColor"/>
                            <path d="M37.8131 40.3958H21.7569C21.4832 40.3958 21.3008 40.2133 21.3008 39.9396V20.6905C21.3008 20.4168 21.4832 20.2344 21.7569 20.2344H37.8131C38.0867 20.2344 38.2692 20.4168 38.2692 20.6905V39.9396C38.2692 40.1677 38.0867 40.3958 37.8131 40.3958ZM22.2131 39.4835H37.3569V21.1467H22.2131V39.4835Z" fill="currentColor"/>
                            <path d="M42.603 21.1467H37.8136C37.5399 21.1467 37.3574 20.9643 37.3574 20.6906V1.12216C37.3574 0.848472 37.5399 0.666016 37.8136 0.666016H42.603C42.8767 0.666016 43.0592 0.848472 43.0592 1.12216V20.6906C43.0592 20.9643 42.8767 21.1467 42.603 21.1467ZM38.2697 20.2344H42.1469V1.5783H38.2697V20.2344Z" fill="currentColor"/>
                            <path d="M21.7581 21.1463H5.337C5.06332 21.1463 4.88086 20.9639 4.88086 20.6902V5.91122C4.88086 5.63753 5.06332 5.45508 5.337 5.45508H21.7581C22.0317 5.45508 22.2142 5.63753 22.2142 5.91122V20.6902C22.2142 20.9639 21.9861 21.1463 21.7581 21.1463ZM5.79314 20.234H21.3019V6.36736H5.79314V20.234Z" fill="currentColor"/>
                            <path d="M5.33546 40.3958H0.545984C0.2723 40.3958 0.0898438 40.2133 0.0898438 39.9396V20.6905C0.0898438 20.4168 0.2723 20.2344 0.545984 20.2344H5.33546C5.60914 20.2344 5.7916 20.4168 5.7916 20.6905V39.9396C5.7916 40.1677 5.60914 40.3958 5.33546 40.3958ZM1.00212 39.4835H4.87932V21.1467H1.00212V39.4835Z" fill="currentColor"/>
                            <path d="M37.8131 6.36777H21.7569C21.4832 6.36777 21.3008 6.18531 21.3008 5.91163V1.12216C21.3008 0.848472 21.4832 0.666016 21.7569 0.666016H37.8131C38.0867 0.666016 38.2692 0.848472 38.2692 1.12216V5.91163C38.2692 6.18531 38.0867 6.36777 37.8131 6.36777ZM22.2131 5.45549H37.3569V1.5783H22.2131V5.45549Z" fill="currentColor"/>
                            <path d="M37.8131 21.1463H21.7569C21.4832 21.1463 21.3008 20.9639 21.3008 20.6902V5.91122C21.3008 5.63753 21.4832 5.45508 21.7569 5.45508H37.8131C38.0867 5.45508 38.2692 5.63753 38.2692 5.91122V20.6902C38.2692 20.9639 38.0867 21.1463 37.8131 21.1463ZM22.2131 20.234H37.3569V6.36736H22.2131V20.234Z" fill="currentColor"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10434_2237">
                            <rect width="43.3333" height="40.1403" fill="white" transform="translate(0 0.666016)"/>
                            </clipPath>
                            </defs>
                            </svg>
                            
                            
                    </div>
                </div>

                <a class="text-sm lg:text-[#6938EF] text-[#BDB4FE] underline self-center lg:hidden block ">Baca Selengkapnya</a>
            </div>
        </section>

        {{-- Mobile Version --}}
        <section style="background-image: url('/assets/static/18(2).png'); background-position: center top ; " class="relative lg:hidden ">

            

           <div class="container relative flex flex-col justify-start content-center z-3 mx-auto px-5 pt-[100px]  h-[100vh] ">
               <h1 class="heading-1 text-[#FFFFFF] mb-[24px] text-center">Mulai perjalananmu<br> bersama Slego</h1>
               <h1 class="text-sm text-[#EAECF0] mb-[24px] text-center">Sofa yang tumbuh bersama Anda. – ubah, atur, dan sesuaikan dengan mudah!</h1>
               <div class="flex flex-row items-center gap-[16px] bg-[#FFFFFF4D] text-[#F5F5F5] self-center px-[24px] py-[14px] rounded-full">
                  <h1 class="text-sm-bold text-[#F5F5F5]">PILIH SLEGOMU SEKARANG</h1>
                  <img src="assets\static\svg\Button_arrow.png" class=""></img>
               </div>
           </div>
       </section>

       {{-- Dekstop Version --}}
        <section style="background-image: url('/assets/static/18.jpg'); background-size:cover; background-position: top;  " class="lg:relative lg:block hidden">

             <div class="absolute z-2 bg-linear-to-l from-transparent from-20% to-[#412FA4]   top-0 left-0 w-full h-full"></div>

            <div class="container relative flex flex-col justify-center z-3 mx-auto px-5 lg:px-0 h-[517px] pt-[100px] pb-[100px]">
                <h1 data-aos="fade-right" class="heading-1 text-[#FFFFFF] mb-[24px]">Mulai perjalananmu<br> bersama Slego</h1>
                <h1 data-aos="fade-right" data-aos-delay="200"  class="text-sm text-[#EAECF0] mb-[48px]">Sofa yang tumbuh bersama Anda. – ubah, atur, dan sesuaikan dengan mudah!</h1>
                <div data-aos="fade-up-right" data-aos-delay="400"  class="flex flex-row items-center gap-[16px] bg-[#FFFFFF4D] text-[#F5F5F5] self-start px-[24px] py-[14px] rounded-full">
                   <h1 class="text-sm-bold text-[#F5F5F5]">PILIH SLEGOMU SEKARANG</h1>
                   <img src="assets\static\svg\Button_arrow.png" class=""></img>
                </div>
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
