
    <section class="bg-white sticky top-0 z-50 h-[80px] mb-[-80px]">

        <div id="modal" x-data="{modalOpen: false}" class="relative w-full h-full">
            <div x-show="modalOpen" class=" fixed inset-0 z-50 flex items-center justify-center ">
                <div class="flex flex-col  w-[400px] h-[300px] bg-white rounded-lg p-6">
                    <h1 x-ref="modalTitle" class="text-md mb-[24px]"></h1>
                    <h1 x-ref="modalContent" class="text-sm"></h1>
                    
                        <button @click="modalOpen = false" class="cursor-pointer p-3 mt-auto">
                            Close
                        </button>
               
                </div>
            </div>
        {{-- Dekstop     --}}
        <div class="container hidden lg:flex flex-col justify-center  mx-auto px-5 lg:px-0 h-full    "> 
        <div id="nav-dekstop" class="  h-full w-full flex flex-row items-center justify-between">        
           <div class="flex flex-row items-center gap-[32px] ">
            <a href="/">
            <img src="/assets/static/logo.png" alt="" class="w-[95.7px]">
            <ul class="flex flex-row gap-[24px] ">
            </a>    
                <li>
                   <a href="#" class="text-navbar">Produk kami</a>
                </li>

                <li>
                    <a href="/about" class="text-navbar">Tentang Slego</a>
                </li>

                <li>
                    <a href="#" class="text-navbar">Temukan Kami</a>
                </li>

                <li>
                    <a href="#" class="text-navbar">Kontak</a>
                </li>

            </ul>
           </div>

           <div class="flex flex-row items-center gap-[8px] ">
            <button @click="modalOpen = true
                            $refs.modalTitle.innerText='Unduh Katalog'
                            $refs.modalContent.innerText='Katalog Content'
            " class="text-button-navbar box-sizing: border-box text-[#412FA4] hover:text-white px-[24px] py-[14px] bg-white hover:bg-[#412FA4] rounded-[24px] border-[1.5px] border-[#412FA4] cursor-pointer transition-colors: ease-in-out duration-300"> UNDUH KATALOG</button>

            <button @click="modalOpen = true
                            $refs.modalTitle.innerText='Pesan Sekarang'
                            $refs.modalContent.innerText='Pesan Kontent'
            " 
            
            class="text-button-navbar text-[#FFFFFF]  bg-[#412FA4]  px-[24px] py-[14px] rounded-[24px] border-[1.5px]  border-[#412FA4] cursor-pointer transition-colors: ease-in-out duration-300"> PESAN SEKARANG</button>
           </div>
        </div>

    </div> 
    

        {{-- Mobile--}}

         <div id="nav-mobile" x-data="{open: false}" class=" lg:hidden relative h-full w-full flex flex-col items-center justify-center z-50 bg-white">        
            <div class="flex flex-row items-center justify-between gap-[32px] h-full w-full mx-auto px-5 lg:px-0  ">
             <a href="/">   
             <img src="/assets/static/logo.png" alt="" class="w-[95.7px]">
             </a>
             <button @click="open = ! open">
                <img x-show="! open" src="/assets/static/svg/menu.png"></img>  
                <img x-show="open" src="/assets/static/svg/Silang.png" class="w-[25px]"></img>  
            </button>  
            
            </div>

            <div x-show="open" x-collapse.duration.600ms @click.outside="open = false" class="flex flex-col justify-center items-center  top-[80px] py-8 left-0 bg-white absolute w-full gap-24 ">
                <div class="flex flex-row  items-center gap-[32px] self-baseline pl-5 ">
                    <ul class="flex flex-col  gap-[24px] ">
                        <li>
                           <a href="#" class="text-navbar">Produk kami</a>
                        </li>
    
                        <li>
                            <a href="/about" class="text-navbar">Tentang Slego</a>
                        </li>
    
                        <li>
                            <a href="#" class="text-navbar">Temukan Kami</a>
                        </li>
    
                        <li>
                            <a href="#" class="text-navbar">Kontak</a>
                        </li>
    
                    </ul>
                   </div>
    
                   <div class="flex flex-row items-center gap-[8px] ">
            <button class="text-button-navbar box-sizing: border-box text-[#412FA4] hover:text-white px-[24px] py-[14px] bg-white hover:bg-[#412FA4] rounded-[24px] border-[1.5px] border-[#412FA4] cursor-pointer transition-colors: ease-in-out duration-300"> UNDUH KATALOG</button>

            <button class="text-button-navbar text-[#FFFFFF]  bg-[#412FA4]  px-[24px] py-[14px] rounded-[24px] border-[1.5px]  border-[#412FA4] cursor-pointer transition-colors: ease-in-out duration-300"> PESAN SEKARANG</button>
           </div>
            </div>
        </div>
    
    </div>
    </section>

