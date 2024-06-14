<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Poli</title>
    <style>
        .category-text {
            height: 300px;
            /* Atur tinggi kotak untuk teks, sesuaikan sesuai kebutuhan */
            overflow: auto;
            /* Gunakan scroll jika teks melebihi tinggi kotak */
        }

        .page-section {
            padding: 50px 0;
        }

        .poli-container {
            display: flex;
            overflow-x: auto;
            /* Tambahkan fungsi scroll horizontal */
            -webkit-overflow-scrolling: touch;
            /* Untuk mendukung scroll pada Safari */
            scrollbar-width: none;
            /* Hilangkan scrollbar */
            margin-bottom: 20px;
            /* Jarak antara poli-container dengan tombol Read More */
        }

        .poli-item {
            flex: 0 0 auto;
            width: calc(100% / 3);
            /* Maksimal 3 dalam tampilan */
            max-width: calc(100% / 3);
            padding: 0 10px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
            /* Efek transisi hover */
        }

        .poli-item:hover {
            transform: translateY(-5px);
            /* Efek angkat sedikit saat hover */
        }

        @media (max-width: 768px) {
            .poli-item {
                width: calc(100% / 2);
                /* Pada layar yang lebih kecil, tampilkan 2 dalam tampilan */
                max-width: calc(100% / 2);
            }
        }

        @media (max-width: 576px) {
            .poli-item {
                width: 100%;
                /* Pada layar yang sangat kecil, tampilkan 1 dalam tampilan */
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="page-section bg-light" id="category-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Our Category</h1>
            <p class="text-grey mb-4 text-center"> <br>E-Health Konoha provides comprehensive and integrated services to
                meet various healthcare needs of users.</p>
            <div class="poli-container">
                <div class="poli-item">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a
                                    href="https://www.alodokter.com/memahami-lebih-jauh-fungsi-dan-tugas-dokter-umum">General</a>
                            </div>
                            <a href="https://www.alodokter.com/memahami-lebih-jauh-fungsi-dan-tugas-dokter-umum"
                                class="post-thumb">
                                <img src="../assets/img/blog/general.jpg" alt="">
                            </a>
                        </div>
                        <div class="body category-text">
                            <h5><a>A General Practitioner (GP) or Family Physician in a hospital is a medical
                                    professional
                                    who treats acute and chronic illnesses, provides preventive care, and offers health
                                    education to patients of all ages.</a></h5>
                        </div>
                    </div>
                </div>
                <div class="poli-item">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a
                                    href="https://www.alodokter.com/periksakan-kesehatan-jantung-pada-ahli-kardiologi">Cardiology</a>
                            </div>
                            <a href="https://www.alodokter.com/periksakan-kesehatan-jantung-pada-ahli-kardiologi"
                                class="post-thumb">
                                <img src="../assets/img/blog/cardiologist.jpg" alt="">
                            </a>
                        </div>
                        <div class="body category-text">
                            <h5><a>A Cardiologist in a hospital is a medical professional who specializes in diagnosing,
                                    treating, and preventing diseases of the heart and blood vessels.</a></h5>
                        </div>
                    </div>
                </div>
                <div class="poli-item">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a
                                    href="https://www.alodokter.com/memahami-peran-dokter-kulit-serta-penyakit-yang-ditanganinya">Dermatology</a>
                            </div>
                            <a href="https://www.alodokter.com/memahami-peran-dokter-kulit-serta-penyakit-yang-ditanganinya"
                                class="post-thumb">
                                <img src="../assets/img/blog/dermatologist.jpg" alt="">
                            </a>
                        </div>
                        <div class="body category-text">
                            <h5><a>A Dermatologist in a hospital is a medical doctor who specializes in diagnosing and
                                    treating conditions that affect the skin, hair, and nails.</a></h5>
                        </div>
                    </div>
                </div>
                <div class="poli-item">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a
                                    href="https://www.alodokter.com/mengenal-dokter-gigi-dan-kapan-saatnya-memeriksakan-gigi">Dentistry</a>
                            </div>
                            <a href="https://www.alodokter.com/mengenal-dokter-gigi-dan-kapan-saatnya-memeriksakan-gigi"
                                class="post-thumb">
                                <img src="../assets/img/blog/dentistry.jpg" alt="">
                            </a>
                        </div>
                        <div class="body category-text">
                            <h5><a>A Dentist in a hospital, also known as a Dental Surgeon, is a medical professional
                                    who
                                    specializes in diagnosing and treating conditions that affect the teeth, gums, and
                                    other parts of the mouth.</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4 wow zoomIn">
                <a  class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>

</body>

</html>
