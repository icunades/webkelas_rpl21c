

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION ['csrf_token'] ?>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Rpl 21c</title>
  </head>
  <body>
      <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <img src="img/logo.jpg" alt="" style="width:50px; heigth:50px;">
    <a class="navbar-brand" href="#" style="font-family:cambria;">RPL 21C</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#modale">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galeri">Galeri</a>
        </li>
      </ul>     
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/6.jpg"  height="700px" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Senin, 23 Agustus 2022</h5>
        <p>Ujian Akhir Semester</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/5.jpg"  height="700px" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Selasa, 02 Mei 2023</h5>
        <p>Peringatan Hari Pendidikan Nasional Tahun 2023</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/gu.jpg"   class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>Kamis, 25 November 2022</h5>
        <p>Memperingati Hari Guru Nasional </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 
<section id="about" class="about-section-padding" style="margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="img/guru.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-4">
                <div class="about-text"> 
                    <h2>Selamat Datang Di Website<br> RPL 21C Politeknik Negeri Bengkalis.</h2>
                    <p>Kami dari rpl 21 mengucapkan selamat datang di website kami.
                      Website ini memberikan informasi mengenai biodata mahasiswa dari prodi D4 RPL angkatan 2021.
                      Website ini juga menyediakan informasi mengenai kegiatan-kegiatan yang telah dilakukan 
                      selama masa perkuliahan di Politeknik Negeri Bengkalis.</p> 
                </div>
            </div>
            <video controls>
              <source src="img/vd.mp4" type="video/webm" />
              
            </video>
        </div>
    </div>
</section>

 <!-- Portfolio -->
 <section id="portfolio" class="portfolio section-padding" style="margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>AGENDA</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/z.jpg" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Izatul Fateha</h3>
                        <p>Juara 2 Essay (KOMTIK VII) </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/ff.jpg" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Fiqri Abdul Aziz</h3>
                        <p>Lulus IISMA 2023 (TAIWAN)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/n.jpg" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Nadia Khairunnisak</h3>
                        <p>Juara 2 Desain Grafis (KOMTIK VII) </p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/i.jpg" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">M.Sholihun</h3>
                        <p>Juara 1 Desain Web (KOMTIK VIII) </p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/a.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Muhammad Hafiz Al-Haq</h4>
                        <p>Juara 3 Fotografi (Festival TI) </p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/cc.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">M.Sholihun</h4>
                        <h6>Juara Catur Terbaik Mahasiswa (UKM Olahraga) </h6>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <div class="card text-center bg-secondary pb-2">
                  <div class="card-body text-white">
                        <div class="img-area mb-4">
                            <img src="img/tt3.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Tournament E-Sport UKM Cup II</h4>
                        <p>Juara 3 Mobile Legend</p>
                  </div>
                </div>
            </div>
            
            <div class="col-12 col-md-12 col-lg-6">
              <div class="card text-center bg-secondary pb-2">
                  <div class="card-body text-white">
                        <div class="img-area mb-4">
                            <img src="img/tour.jpg" alt="" class="img-fluid" style="height:240px; width:100%;">
                        </div>
                        <h4 class="card-title">Tournament E-Sport HMTI (UMUM)</h4>
                        <p>Juara 4 Mobile Legend </p>
                  </div>
                </div>
                <br><br><br>
            </div>
            
            <h2 style="text-align: center;">MAHASISWA <b>RPL 21C</b> Lulus PMM 3 Tahun 2023</h2>
            <hr>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/az.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Muhammad Azmi</h4>
                        <p>Lulus di Politeknik Negeri Malang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/co.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Muhammad Sholihun</h4>
                        <p>Lulus di Politeknik Negeri Pontianak</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/pes.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Muhammad Hafiz Al Haq</h4>
                        <p>Lulus di Politeknik Negeri Pontianak</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/sep.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Seva Rival Ramadhan</h4>
                        <p>Lulus di Politeknik Negeri Malang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/ai.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Muhammad Suhairi</h4>
                        <p>Lulus di Politeknik Negeri Malang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/tio.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Tio Marsauli Tamba</h4>
                        <p>Lulus di Politeknik Negeri Malang</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <img src="img/jen.jpg" alt="" class="img-fluid">
                        </div>
                        <h4 class="card-title">Jenny Konirlir Br Tarigan</h4>
                        <p>Lulus di Politeknik Negeri Semarang</p>
                  </div>
                </div>
            </div>
             
        </div>
    </div>
 </section>
 <!-- Akhir Porftolio -->

  
<!--Start Modal-->
<div class="container" id="modale" style="margin-bottom: 200px;"> 
  <br><br><br>
  <h2>Data Diri Mahasiswa RPL 21C</h2>
  <div class="row">
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
           <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target1">
            M.Sholihun
          </button>
          <div class="modal fade" id="target1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>M.Sholihun</b></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card text-start bg-white pb-2">
                        <div class="card-body text-dark">
                              <div class="img-area mb-4">
                                  <img src="img/img2/conn.jpg" alt="" class="img-fluid">
                              </div>
                              <h2 class="card-title">MAHASISWA</h2>
                              <hr>
                              <h5>Alamat : Jl. Wonosari Tengah</h5>
                              <h5>Jenis Kelamin : Laki-Laki</h5>
                              <h5>Tanggal Lahir : 21 Juni 2003</h5>
                              <h5>Agama : Islam</h5>
                              <h5>Hobi : Futsal dan Game</h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="col-sm-4">
      <div class="card text-center">
          <div class="card-body">
              <p>Mahasiswa</p>
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target2">
                  Tio Marsauli Tamba
              </button>
              <div class="modal fade" id="target2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog centered modal-dialog-scrollable">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Tio Marsauli Tamba</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="card text-start bg-white pb-2">
                                  <div class="card-body text-dark">
                                      <div class="img-area mb-4">
                                          <img src="img/img2/ti.jpg" alt="" class="img-fluid">
                                      </div>
                                      <h2 class="card-title">MAHASISWA</h2>
                                      <hr>
                                      <h5>Alamat : Jl. Pangkalan Batang Barat</h5>
                                      <h5>Jenis Kelamin : Perempuan</h5>
                                      <h5>Tanggal Lahir : 07 Maret 2003</h5>
                                      <h5>Agama : Kristen</h5>
                                      <h5>Hobi : Membaca, Bernyanyi dan Bermain Musik</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target3">
                Jenny Konirlir Br Tarigan
            </button>
            <div class="modal fade" id="target3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Jenny Konirlir Br Tarigan</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/j.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Medan, Sumatera Utara</h5>
                                    <h5>Jenis Kelamin : Perempuan</h5>
                                    <h5>Tanggal Lahir : 04 Oktober 2002</h5>
                                    <h5>Agama : Katolik</h5>
                                    <h5>Hobi : Membaca dan Bernyanyi </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target4">
              Fiqri Abdul Aziz
          </button>
          <div class="modal fade" id="target4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Fiqri Abdul Aziz</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/fiq.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jalan Pramuka</h5>
                                  <h5>Jenis Kelamin : Laki-laki</h5>
                                  <h5>Tanggal Lahir : 10 April 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Game </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target5">
              Izatul Fateha
          </button>
          <div class="modal fade" id="target5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Izatul Fateha</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/iza.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Penebal</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 23 April 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Membaca </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target6">
              Muhammad Azmi
          </button>
          <div class="modal fade" id="target6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Muhammad Azmi</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/azmi.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Pertanian</h5>
                                  <h5>Jenis Kelamin : Laki-laki</h5>
                                  <h5>Tanggal Lahir : 27 Juli 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Rubik  </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target7">
              Rahmad Hafif Nasution
          </button>
          <div class="modal fade" id="target7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Rahmad Hafif Nasution</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/pip.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl.Awang Mahmuda, Sei Alam</h5>
                                  <h5>Jenis Kelamin : Laki-laki</h5>
                                  <h5>Tanggal Lahir : 03 Maret 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Main Gaple </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target8">
              Darni Kurniawati Tafonao
          </button>
          <div class="modal fade" id="target8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Darni Kurniawati Tafonao</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/darni.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl.Awang Mahmuda, Sei Alam</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 30 Juni 2002</h5>
                                  <h5>Agama : Kristen</h5>
                                  <h5>Hobi : Badminton </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target9">
              Nadia Khairunnisak
          </button>
          <div class="modal fade" id="target9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Nadia Khairunnisak</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/nadia.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Air Putih</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 24 Februari 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Bernyanyi </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target10">
              Muhammad Iqbal Wicaksono
          </button>
          <div class="modal fade" id="target10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Muhammad Iqbal Wicaksono</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/ibal.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Pramuka</h5>
                                  <h5>Jenis Kelamin : Laki-laki</h5>
                                  <h5>Tanggal Lahir : 19 Maret 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Bola </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target11">
              Dewi Anjani
          </button>
          <div class="modal fade" id="target11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Dewi Anjani</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/jani.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Lubuk Muda</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 31 Oktober 2001</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Olahraga </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target12">
              Nur Atikah
          </button>
          <div class="modal fade" id="target12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Nur Atikah</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/tika.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Laksamana Damon</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 01 Oktober 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Mendengarkan Musik </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target13">
              Laila
          </button>
          <div class="modal fade" id="target13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Laila</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/l.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Sungai Alam</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 26 Februari 2002</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Berenang </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target14">
             Aidil Dzakwan Alfaris Islami
          </button>
          <div class="modal fade" id="target14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Aidil Dzakwan Alfaris Islami</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/aidil.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Kelapapati Darat</h5>
                                  <h5>Jenis Kelamin : Laki-laki</h5>
                                  <h5>Tanggal Lahir : 28 November 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Bersepeda </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target15">
             Dhea Destri Sarnita
          </button>
          <div class="modal fade" id="target15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Dhea Destri Sarnita</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/dea.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Bengkalis, Kebun Kapas IV Rimba Sekampung</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 15 Desember 2002</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Badminton </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target16">
             Seva Rival
          </button>
          <div class="modal fade" id="target16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Seva Rival</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/sepa.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Bengkalis, Gg.Sutra</h5>
                                  <h5>Jenis Kelamin :Laki-laki</h5>
                                  <h5>Tanggal Lahir : 06 November 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Badminton, Tidur, Makan </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target17">
             Muhammad Hafiz Alhaq
          </button>
          <div class="modal fade" id="target17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Muhammad Hafiz Alhaq</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/apis.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Taman Sari</h5>
                                  <h5>Jenis Kelamin :Laki-laki</h5>
                                  <h5>Tanggal Lahir : 27 April 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Futsal </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target18">
             Widya Wulan Sari
          </button>
          <div class="modal fade" id="target18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Widya Wulan Sari</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/wid.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Teluk Latak</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 11 November 2002</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Membaca </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target19">
             Muhammad Suhairi
          </button>
          <div class="modal fade" id="target19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Muhammad Suhairi</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/suhai.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Antara, Gg.Sidomulyo</h5>
                                  <h5>Jenis Kelamin : laki-laki</h5>
                                  <h5>Tanggal Lahir : 14 Januari 2004</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Membaca </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target20">
             Dela Novita
          </button>
          <div class="modal fade" id="target20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Dela Novita</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/dela.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Sungai Paknikng Jl. Kampung Jawa</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 28 Juli 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Badminton </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
  <div class="card text-center">
      <div class="card-body">
          <p>Mahasiswa</p>
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target21">
             Ade Dwi 
          </button>
          <div class="modal fade" id="target21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><b>Ade Dwi</b></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="card text-start bg-white pb-2">
                              <div class="card-body text-dark">
                                  <div class="img-area mb-4">
                                      <img src="img/img2/ade.jpg" alt="" class="img-fluid">
                                  </div>
                                  <h2 class="card-title">MAHASISWA</h2>
                                  <hr>
                                  <h5>Alamat : Jl. Taman Sari Bantan Tua</h5>
                                  <h5>Jenis Kelamin : Perempuan</h5>
                                  <h5>Tanggal Lahir : 22 Oktober 2003</h5>
                                  <h5>Agama : Islam</h5>
                                  <h5>Hobi : Tidak Ada </h5>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target22">
                Ricky Riotaro
            </button>
            <div class="modal fade" id="target22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Ricky Riotaro</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/riki.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Jl. Pramuka</h5>
                                    <h5>Jenis Kelamin : Laki-laki</h5>
                                    <h5>Tanggal Lahir : 28 Agustus 2003</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Tidur </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target29">
                Nadya Kusuma Indah
            </button>
            <div class="modal fade" id="target29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Nadya Kusuma Indah</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/yayaa.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Jl. Pramuka</h5>
                                    <h5>Jenis Kelamin : Perempuan</h5>
                                    <h5>Tanggal Lahir : 23 September 2003</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Makan jajan </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target24">
                Yulistiana
            </button>
            <div class="modal fade" id="target24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Yulistiana</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/yulis.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Jl Panglimaminal</h5>
                                    <h5>Jenis Kelamin : Perempuan</h5>
                                    <h5>Tanggal Lahir : 09 September 2003</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Masak </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target25">
                Nur Anjeli
            </button>
            <div class="modal fade" id="target25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Nur Anjeli</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/jeli.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Bangkinang</h5>
                                    <h5>Jenis Kelamin : Perempuan</h5>
                                    <h5>Tanggal Lahir : 20 Februari 2003</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Berenang </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target26">
                Fazzri Sinaga
            </button>
            <div class="modal fade" id="target26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Fazzri Sinaga</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/fazri.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Duri</h5>
                                    <h5>Jenis Kelamin : Laki-Laki</h5>
                                    <h5>Tanggal Lahir : 4 April 2003</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Memancing</h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target27">
                Via Laurenz
            </button>
            <div class="modal fade" id="target27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Via Laurenz</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/pia.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Pakning</h5>
                                    <h5>Jenis Kelamin : Perempuan</h5>
                                    <h5>Tanggal Lahir : 18 Agustus 2002</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Olahraga </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="card text-center">
        <div class="card-body">
            <p>Mahasiswa</p>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#target28">
                Muhammad Siddiq
            </button>
            <div class="modal fade" id="target28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Muhammad Siddiq</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card text-start bg-white pb-2">
                                <div class="card-body text-dark">
                                    <div class="img-area mb-4">
                                        <img src="img/img2/diq.jpg" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="card-title">MAHASISWA</h2>
                                    <hr>
                                    <h5>Alamat : Jl. Gatot Subroto</h5>
                                    <h5>Jenis Kelamin : Laki-Laki</h5>
                                    <h5>Tanggal Lahir : 27 Maret 2001</h5>
                                    <h5>Agama : Islam</h5>
                                    <h5>Hobi : Futsal </h5>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 <!-- Team -->
 <section id="team" class="team section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-2">
          <h2>Team</h2>
          <p></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/l.jpg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2"style="font-size: 20px;">Laila</h3>
            <p>Desainer</p>
            <p class="socials">
              <i class="bi bi-twitter text-dark mx-1"></i>
              <i class="bi bi-facebook text-dark mx-1"></i>
              <a href="https://instagram.com/laila__ajhaa?igshid=MzNlNGNkZWQ4Mg=="><i class="bi bi-instagram text-dark mx-1"></i></a>
              <i class="bi bi-tiktok text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/c.jpg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2" style="font-size: 20px;">M. Sholihun</h3>
            <p>Front-End Developer</p>
            <p class="socials">
              <a href="https://twitter.com/solihun55?t=IWFcF2ps1IVzxc22x0LuBg&s=08"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100070519862432"> <i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="https://instagram.com/solihunsir?igshid=ZDdkNTZiNTM="> <i class="bi bi-instagram text-dark mx-1"></i></a>
              <a href="https://www.tiktok.com/@iconn333?_t=8bSF7X84XX0&_r=1"> <i class="bi bi-tiktok text-dark mx-1"></i></a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card text-center">
          <div class="card-body">
            <img src="img/j.jpg" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2" style="font-size: 20px;">Jenny Konirlir Br Tarigan</h3>
            <p>System Analyst</p>
            <p class="socials">
             <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
             <a href="https://www.facebook.com/jenny.thariigand"><i class="bi bi-facebook text-dark mx-1"></i></a>
             <a href="https://instagram.com/jeetrgn04?igshid=ZDc4ODBmNjlmNQ=="><i class="bi bi-instagram text-dark mx-1"></i></a>
             <a href="http://tiktok.com/@jeetrg02"><i class="bi bi-tiktok text-dark mx-1"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
  <!-- Akhir team -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>