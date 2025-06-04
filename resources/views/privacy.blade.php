<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>

    {{-- AlpineJs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <livewire:navbar>

    <section class="pt-[110px]">
        <div class="container mx-auto px-5 lg:px-0">

            <h1 data-aos="fade" class="heading-2 mb-[32px]">Privacy policy</h1>

            <div data-aos="fade" data-aos-delay="200" x-data="{tab : 'pendahuluan'}" class="flex flex-row gap-[64px]">
                <div class="flex flex-col text-sm  text-[#412FA4] border-[#EAECF0] border-[1px] rounded-[16px] w-[20%] py-[12px] gap-[4px]">
                    <a href="#" @click.prevent="tab = 'pendahuluan'" class="py-[14px] px-[24px] border-l-[3px] border-transparent hover:border-[#444CE7] focus:border-[#444CE7]">Pendahuluan</a>
                    <a href="#" @click.prevent="tab = 'Informasi-yang-kami-kumpulkan'" class="py-[14px] px-[24px] border-l-[3px] border-transparent hover:border-[#444CE7] focus:border-[#444CE7]">Informasi yang kami kumpulkan</a>
                    <a href="#" @click.prevent="tab = 'Cara Kami Menggunakan Informasi Anda'" class="py-[14px] px-[24px] border-l-[3px] border-transparent hover:border-[#444CE7] focus:border-[#444CE7]">Cara Kami Menggunakan Informasi Anda</a>
                </div>

            
                    <div class="w-[80%]">
                        <div data-aos="fade-right" data-aos-delay="400" x-show="tab === 'pendahuluan'" class="flex flex-col ">
                            <h1 data-aos="fade-right" data-aos-delay="600" class="text-global-bold mb-[24px]">Pendahuluan</h1>
                            <h1 data-aos="fade-right" data-aos-delay="800" class="text-sm">
                                Terakhir diperbarui: [Tanggal Pembaruan] 
                                <br><br>    

                                Slego berkomitmen untuk melindungi privasi pengguna kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi informasi pribadi Anda saat menggunakan layanan kami. Dengan mengakses dan menggunakan situs web Slego, Anda menyetujui kebijakan ini.</h1>
                        </div>
            
                        <div x-show="tab === 'Informasi-yang-kami-kumpulkan'" class="flex flex-col ">
                            <h1 data-aos="fade-right" data-aos-delay="400" class="text-global-bold mb-[24px]">Informasi yang Kami Kumpulkan</h1>
                            <h1 data-aos="fade-right" data-aos-delay="600" class="text-sm">Kami dapat mengumpulkan informasi berikut saat Anda menggunakan layanan kami: </h1>
                            <ol data-aos="fade-right" data-aos-delay="800" type="disc" class="text-sm">
                                <li>Informasi Pribadi: Nama, alamat email, nomor telepon, dan informasi lain yang Anda berikan secara langsung.</li>
                                <li>Informasi Transaksi: Data pembayaran dan detail pembelian jika Anda melakukan transaksi.</li>
                                <li>Informasi Teknis: Alamat IP, jenis perangkat, sistem operasi, dan aktivitas penelusuran di situs kami.</li>
                                <li>Cookies dan Teknologi Pelacakan: Kami menggunakan cookies untuk meningkatkan pengalaman pengguna dan mengumpulkan data analitik.</li>
                            </ol>
                        </div>   
            
                        <div x-show="tab === 'Cara Kami Menggunakan Informasi Anda'" class="flex flex-col ">
                            <h1 data-aos="fade-right" data-aos-delay="400" class="text-global-bold mb-[24px]">Cara Kami Menggunakan Informasi Anda</h1>
                            <h1 data-aos="fade-right" data-aos-delay="600" class="text-sm">Kami dapat mengumpulkan informasi berikut saat Anda menggunakan layanan kami: </h1>
                            <ol data-aos="fade-right" data-aos-delay="800" type="disc" class="text-sm">
                                <li>Informasi Pribadi: Nama, alamat email, nomor telepon, dan informasi lain yang Anda berikan secara langsung.</li>
                                <li>Informasi Transaksi: Data pembayaran dan detail pembelian jika Anda melakukan transaksi.</li>
                                <li>Informasi Teknis: Alamat IP, jenis perangkat, sistem operasi, dan aktivitas penelusuran di situs kami.</li>
                                <li>Cookies dan Teknologi Pelacakan: Kami menggunakan cookies untuk meningkatkan pengalaman pengguna dan mengumpulkan data analitik.</li>
                            </ol>
                        </div> 
                    </div>
                
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