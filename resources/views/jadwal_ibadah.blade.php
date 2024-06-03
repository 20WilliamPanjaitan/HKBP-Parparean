@extends('header')
@section('title', 'Jadwal Ibadah')
@section('header')


<main class="main">

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Jadwal Ibadah</h2>
            <p class="">Jadwal Ibadah Minggu</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper">
                <style>
                    /* Tambahkan gaya CSS sesuai kebutuhan Anda */
                    .table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    .table th,
                    .table td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: center;
                    }

                    .table-dark th {
                        background-color: #343a40;
                        color: white;
                        text-align: center;
                    }

                </style>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Parmingguon</th>
                            <th>Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakdanak</td>
                            <td>08:00-Selesai</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ina/Ama</td>
                            <td>10:00-Selesai</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Remaja</td>
                            <td>17:00-Selesai</td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </section><!-- /Testimonials Section -->

</main>

@endsection
