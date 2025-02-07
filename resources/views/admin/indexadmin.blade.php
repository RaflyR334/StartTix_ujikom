@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-center justify-content-between pt-2 pb-4">

        <div>
          <h3 class="fw-bold mb-3">Selamat Datang di Halaman Dashboard StartTix</h3>
        </div>

        <div class="d-flex align-items-center">
          <!-- Jam -->
          <div class="card mb-4" style="width: 180px; height: 120px; margin-right: 15px;">
            <div class="card-body">
              <h5 class="card-title d-flex align-items-center">
                <i class="fas fa-clock me-2"></i> Jam
              </h5>
              <div id="clock" class="fs-4 fw-bold text-primary"></div>
            </div>
          </div>

          <!-- Kalender -->
          <div class="card mb-4" style="width: 180px; height: 120px;">
            <div class="card-body">
              <h5 class="card-title d-flex align-items-center">
                <i class="fas fa-calendar-alt me-2"></i> Hari Tanggal
              </h5>
              <div id="calendar" class="fs-5 fw-bold text-secondary"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection

@section('scripts')
<!-- Font Awesome-->
<script src="{{ asset('https://kit.fontawesome.com/a076d05399.js')}}"></script>

<script>
    // Fungsi untuk memperbarui jam
    function updateClock() {
        const clock = document.getElementById('clock');
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        clock.textContent = `${hours}:${minutes}:${seconds}`;
    }

    // Fungsi untuk memperbarui tanggal
    function updateCalendar() {
        const calendar = document.getElementById('calendar');
        const now = new Date();
        const day = now.getDate();
        const month = now.toLocaleString('default', { month: 'long' });
        const year = now.getFullYear();
        const weekday = now.toLocaleString('default', { weekday: 'long' });
        calendar.textContent = `${weekday}, ${day} ${month} ${year}`;
    }

    // Panggil fungsi pertama kali
    updateClock();
    updateCalendar();

    // Setel interval untuk memperbarui jam setiap detik
    setInterval(updateClock, 1000);
    // Setel interval untuk memperbarui kalender setiap menit
    setInterval(updateCalendar, 60000);
</script>
@endsection

@section('styles')
<style>

  .d-flex.align-items-center {
      display: flex;
      align-items: center;
      justify-content: space-between;
  }

 
  .card {
    border-radius: 8px;
    box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
  }

  .card-body {
    padding: 10px;
  }

  /* Ukuran Jam dan Kalender */
  .card {
    width: 180px;
    height: 120px;
  }

  /* Gaya untuk teks jam dan kalender */
  #clock, #calendar {
    text-align: center;
  }

  #clock {
    font-size: 1.5rem;
    font-weight: bold;
  }

  #calendar {
    font-size: 1.2rem;
    font-weight: bold;
  }

  /* Memberikan sedikit jarak antar elemen dalam card */
  .card-body {
    padding: 15px;
  }
</style>
@endsection
