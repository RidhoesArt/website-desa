

<div class="informasi-tambahan">
    <!-- Aparatur Desa -->
    <div class="aparatur-desa">
        <div class="header">
        <i class="bi bi-person-circle"></i>
        <h5>&nbsp;Aparatur Desa</h5>
        </div>
        <div id="last" class="last text-center col-md-8 bg-dark" style="
            padding:0;
            width: 100%;
            margin:auto;
            height: auto;
            overflow: hidden;
            border:3px solid #ffffff;
            border-radius:5px;
            box-shadow: 1px 1px 10px rgba(0,0,0,0.3);">
            <div class="wrapper" style="
            width: 100%;
            display: flex;
            animation: slide 20s infinite;">
            <?php foreach($query as $data) :?>
            <img src="assets/file/post/<?=$data['img']; ?>" style="width:100%;position:cover;display:block;" alt="">
            <?php endforeach;?>
            </div>
        </div>
    </div>

    <!-- Album Galeri -->
    <div class="album-galeri">
        <div class="header">
            <i class="bi bi-image-fill"></i>
            <h5>&nbsp;Album Galeri</h5>
        </div>

        <!-- Modal gallery -->
        <!-- <section class="galeri">
        <!-- Section: Images -->
        <!-- <section class="galeri">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="assets/img/temple.jpg" class="w-100"/>
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="assets/img/WhatsApp Image 2023-01-06 at 22.28.42.jpg" class="w-100"/>
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light">
                    <img src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43 (1).jpg"class="w-100"/>
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light">
                    <img src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43.jpg"
                        class="w-100"/>
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                    </div>
                </div>
            </div>
        </section>
        </section> -->
        <!-- <div class="album card-body text-center">
            <div class="galeri1">
                <a href="" title="Album : Kuil Di Bali">
                <img class="mw-100 border" width="300" loading="lazy" src="assets/img/temple.jpg" alt="">
                </a>
            </div>
            <div class="galeri2">
                <a href="" title="Album : Kuil Di Bali">
                <img class="mw-100 border" width="300" loading="lazy" src="assets/img/temple.jpg" alt="">
                </a>
            </div>
            <div class="galeri3">
                <a href="" title="Album : Observasi Dosen Pembimbing Lapangan">
                <img class="mw-100 border" width="300" loading="lazy" src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43 (1).jpg" alt="">
                </a>
            </div>
            <div class="galeri4">
                <a href="" title="Album : Observasi Dosen Pembimbing Lapangan Pada Tanaman Hydroponik">
                <img class="mw-100 border" width="300" loading="lazy" src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43.jpg" alt="">
                </a>
            </div>
        </div> -->
            <div class="row">
            <div class="gallery">
            <a target="_blank" href="img_5terre.jpg" title="Album : Kuil Di Bali">
                <img src="assets/img/temple.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            </div>

            <div class="gallery">
            <a target="_blank" href="img_forest.jpg" title="Album : Kuil Di Bali">
                <img src="assets/img/temple.jpg" alt="Forest" width="600" height="400">
            </a>
            </div>

            <div class="gallery">
            <a target="_blank" href="img_lights.jpg" title="Album : Observasi Dosen Pembimbing Lapangan">
                <img src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43 (1).jpg" alt="Northern Lights" width="600" height="400">
            </a>
            </div>

            <div class="gallery">
            <a target="_blank" href="assets/img/WhatsApp Image 2023-01-06 at 22.28.43.jpg" title="Album : Observasi Dosen Pembimbing Lapangan Pada Tanaman Hydroponik">
                <img src="assets/img/WhatsApp Image 2023-01-06 at 22.28.43.jpg" alt="Mountains" width="600" height="400">
            </a>
            </div>
            </div>
    </div>
    <!-- Peta Desa -->
    <div class="peta">
        <div class="judul">
            <i class="bi bi-justify"></i>
            <h5>&nbsp;Peta Desa</h5>
        </div>
        <div class="maps" style="padding:0 3% 0 3%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14860.285336288745!2d97.02072090617229!3d5.247235647233197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304776c198bee49f%3A0x4bb9506437507091!2sKeude%20Krueng%20Geukueh%2C%20Kec.%20Dewantara%2C%20Kabupaten%20Aceh%20Utara%2C%20Aceh!5e0!3m2!1sid!2sid!4v1678093972953!5m2!1sid!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

        <!-- Lokasi Kantor -->
        <div class="lokasi-kantor card z-index-1 col-lg-12 p-0 bg-dark" style="border-radius:2%;">
            <div class="card-header p-0">
                <ul class="kantor nav nav-tabs wizard-1" role="tablist">
                    <li class="lokasi nav-item text-center">
                        <a class="nav-link active" id="tabmaps-tab" data-toggle="tab" href="#tabmaps" role="tab" aria-controls="tabmaps" aria-selected="true">
                            <span>Lokasi Kantor Desa</span>
                        </a>
                    </li>
                    <li class="detail nav-item text-center">
                        <a class="nav-link" id="tabdetail-tab" data-toggle="tab" href="#tabdetail" role="tab" aria-controls="tabdetail" aria-selected="false">
                            <span>Detail</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body" style="margin:0;padding:0 3% 5% 3%;">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="tabmaps" role="tabpanel" aria-labelledby="tabmaps-tab">
                    
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.1977639752374!2d97.02499060772507!3d5.242802290443524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304776c3bbaae757%3A0x18daf8f1eac8fe84!2sMeunasah%20Keude%20Krueng%20Geukueh!5e0!3m2!1sid!2sid!4v1678158030846!5m2!1sid!2sid" width="100%" style="border:0;position:cover;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                        <a href="https://www.google.co.id/maps/place/Meunasah+Keude+Krueng+Geukueh/@5.2426799,97.0243672,18.67z/data=!4m15!1m8!3m7!1s0x304776c198bee49f:0x4bb9506437507091!2sKeude+Krueng+Geukueh,+Kec.+Dewantara,+Kabupaten+Aceh+Utara,+Aceh!3b1!8m2!3d5.2472574!4d97.0256505!16s%2Fg%2F12h2spzkp!3m5!1s0x304776c3bbaae757:0x18daf8f1eac8fe84!8m2!3d5.2428993!4d97.0248053!16s%2Fg%2F11cn6cg5zv">
                        <button class="btn btn-primary btn-block mb-1 mt-1" style="width:100%;">Titik Lokasi</button>
                        </a>
                    </div>
                    <div class="info-desa tab-pane fade" id="tabdetail" role="tabpanel" aria-labelledby="tabdetail-tab">
                        <a data-fancybox="gallery" href="http://pedekik.desa.id/desa/logo/KNT__sid__nGVaxTQ.jpg">
                        <img src="assets/img/nih.jpg" width="100%" class="img-responsive cover" alt="">
                        </a>
                        <table width="100%" style="background-color:blue;">
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Alamat</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%">Jl. Bahagia Rt 008 Rw 004</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Desa </td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%" height="30px">Keude Krueng Geukueh</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Kecamatan</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%" height="30px">Dewantara</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Kabupaten</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%" height="30px">Aceh Utara</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Kodepos</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%" height="30px">28751</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td class="label-info-desa" width="25%" height="30px">Telepon</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa" width="70%" height="30px">082350965378</td>
                            </tr>
                            <tr>
                                <td class="label-info-desa" width="25%" height="30px">Email</td>
                                <td width="5%" class="text-center">:</td>
                                <td class="isi-info-desa text-break" width="70%" height="30px">krunggukuh@gmail.com</td>
                            </tr>
					    </table>
                    </div>
                </div>
            </div>
        </div>
 

    <script>
    //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
        var posisi = [1.4992909939482353,102.09405899047853];
        var zoom = 13;
        var lokasi_kantor = L.map('map_canvas').setView(posisi, zoom);

    //Menampilkan BaseLayers Peta
        var baseLayers = getBaseLayers(lokasi_kantor, "", "");
        L.control.layers(baseLayers, null, {position: 'topright', collapsed: true}).addTo(lokasi_kantor);

    //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
        var kantor_desa = L.marker(posisi).addTo(lokasi_kantor);
    </script>

    <!-- <div class="lokasi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.1977639752374!2d97.02499060772507!3d5.242802290443524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304776c3bbaae757%3A0x18daf8f1eac8fe84!2sMeunasah%20Keude%20Krueng%20Geukueh!5e0!3m2!1sid!2sid!4v1678158030846!5m2!1sid!2sid" width="430" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->
</div>