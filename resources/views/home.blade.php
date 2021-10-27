@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript" src="/js/app.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat datang di Karasuno Course!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h1>OUR HOPE!</h1>
                    <img src="https://terazo.com/wp-content/uploads/2020/08/twiliocontactcenter.png" height=400 width=600>
                    <p>Selamat datang teman-teman! Kami adalah bimbingan belajar terpercaya nomor 1 di 
                        perfektur Miyagi, Jepang. Website ini dibuat untuk masyarakat luas agar mengetahui tentang 
                        Karasuno Course. Teman-teman juga bisa mengikuti kursus ini secara online.</p>
                    <br>
                    <p>Bimbingan belajar ini didirikan oleh direktur kami yaitu Dwi Peni Ningsih yang berasal dari Indonesia, loh.
                        Di usianya yang masih 19 tahun, ia bercita-cita untuk mendirikan sebuah tempat di mana 
                        anak muda bisa belajar banyak hal. Yuk langsung daftar.</p>
                    <br><br>

                    <h1>OUR SUBJECTS</h1>
                    <img src="https://th.bing.com/th/id/R.c019bf2b7a270dca38090923c70fb0ad?rik=O%2fMMP0qC9keN%2fQ&riu=http%3a%2
                    f%2fpdmdomingo.weebly.com%2fuploads%2f9%2f2%2f0%2f9%2f92094122%2feditor%2fsubjects.png%3f1520952762&ehk=lyqL
                    xwbOd9xlnUK7aBBzSWU2uiBvIh2TokU90AO6H%2fE%3d&risl=&pid=ImgRaw&r=0" height=300 width=600>
                    <table class="table table-responsive">
                        <tr><th>Matematika</th><th>Bahasa Inggris</th><th>Bahasa Brazil</th><th>Bahasa Indonesia</th></tr>
                        <tr><th>Bahasa Jepang</th><th>Bahasa Argentina</th><th>Geografi</th><th>Fisika</th></</tr>
    
                    </table>
                    <br><br>

                    <h1>OUR TUTORS</h1>
                    <img src="https://th.bing.com/th/id/OIP.1nhF8OdbIMW1puaM_26dtgHaEr?pid=ImgDet&rs=1" height=300 width=600>
                    <table align="center" class="table table-responsive">
                        <tr align="center"><th>Nama</th><th>Mengajar</th><th>Alamat</th><th>Nomor Handphone</th></tr>
                        <tr align="center"><td>Miya Atsumu</td><td>Bahasa Inggris</td><td>Hyogo</td><td>145885</td></tr>
                        <tr align="center"><td>Kageyama Tobio</td><td>Matematika</td><td>Sendai</td><td>145886</td></tr>
                        <tr align="center"><td>Hinata Shoyo</td><td>Bahasa Brazil</td><td>Sendai</td><td>145887</td></tr>
                        <tr align="center"><td>Oikawa Tooru</td><td>Bahasa Argentina</td><td>Sendai</td><td>145888</td></tr>
                        <tr align="center"><td>Ushijima Wakatoshi</td><td>Bahasa Jepang</td><td>Sendai</td><td>145889</td></tr>
                        <tr align="center"><td>Kita Shinsuke</td><td>Fisika</td><td>Hyogo</td><td>145880</td></tr>
                        <tr align="center"><td>Iwaizumi Hajime</td><td>Bahasa Indonesia</td><td>Sendai</td><td>145881</td></tr>
                        <tr align="center"><td>Suna Rintarou</td><td>Geografi</td><td>Hyogo</td><td>145882</td></tr>
                    </table>
                    <br><br>

                    <h1>OUR CONTACT</h1>
                    <p>Email: karasuno@gmail.com</p>
                    <p>Phone: 12345</p>
                    <p>Instagram: @karasuno_miyagi</p>
                    <br><br>

                    <h1>OUR MAP</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400704.17342433607!2d140.
                        48864666418962!3d38.314219395519864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5
                        f8a2aee30cd55d3%3A0xba2579e0b846b1ee!2sSendai%2C%20Prefektur%20Miyagi%2C%20Jepang!5e0!3m2!
                        1sid!2sid!4v1635299350745!5m2!1sid!2sid" width="600" height="450" style="border:0;" 
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection