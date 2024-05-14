@extends('layouts.app')
@section('content')
<style>
    body{
        background-color:#EFBC9B;
    }
    .accordion{
        max-width:500px;
        margin:auto;
    }
    .table{
        max-width:900px;
        margin:auto;
    }
</style>

<div>
<!-- 
        <div class="container mt-3">
            <h1 style="text-align: center;">Daftar Siswa</h1>
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Nikolas
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Detail</strong>
                    <ul class="list-group">
                        <li class="list-group-item">Nikolas</li>
                        <li class="list-group-item">Suruh</li>
                        <li class="list-group-item">20081</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Abi
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Syahrul Abi</li>

                    <li class="list-group-item">Pule</li>
                    <li class="list-group-item">28375</li>
                </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Prasetya
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Prasetya</li>
                    <li class="list-group-item">Nglinggis</li>
                    <li class="list-group-item">67543</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Samuel
            </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Samuel Mige</li>
                    <li class="list-group-item">Karangan</li>
                    <li class="list-group-item">56421</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Rifandi
            </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Rifandi</li>
                    <li class="list-group-item">Pule</li>
                    <li class="list-group-item">15256</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Yudi
            </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Yudi</li>
                    <li class="list-group-item">Prambon</li>
                    <li class="list-group-item">25434</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Rengga
            </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Rengga</li>
                    <li class="list-group-item">Dermosari</li>
                    <li class="list-group-item">18763</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Novian
            </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Novian</li>
                    <li class="list-group-item">Prambon</li>
                    <li class="list-group-item">97281</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                Satrio
            </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Satrio</li>
                    <li class="list-group-item">Trenggalek</li>
                    <li class="list-group-item">91277</li>
                </ul>
            </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                Kikik
            </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Detail</strong>
                <ul class="list-group">
                    <li class="list-group-item">Kikik</li>
                    <li class="list-group-item">Sumberingin</li>
                    <li class="list-group-item">12456</li>
                </ul>
            </div>
            </div>
        </div> -->

</div>

        <table class="table table-striped table-hover" border="1px">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nikolas</td>
                    <td>Suruh</td>
                    <td>200207</td>
                    <td>
                        <img src="{{ asset('gmbr/niklas.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Prasetya</td>
                    <td>Tugu</td>
                    <td>182738</td>
                    <td>
                        <img src="{{ asset('gmbr/pras.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Rifandi</td>
                    <td>Pule</td>
                    <td>198298</td>
                    <td>
                        <img src="{{ asset('gmbr/rifan.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Yudi</td>
                    <td>Tugu</td>
                    <td>177260</td>
                    <td>
                        <img src="{{ asset('gmbr/yudi.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Samuel</td>
                    <td>Karangan</td>
                    <td>872681</td>\
                    <td>
                        <img src="{{ asset('gmbr/mige.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Nandito</td>
                    <td>Karangan</td>
                    <td>817231</td>
                    <td>
                        <img src="{{ asset('gmbr/dito.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Vicky</td>
                    <td>Nganjuk</td>
                    <td>562635</td>
                    <td>
                        <img src="{{ asset('gmbr/piki.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Kikik</td>
                    <td>Sumberingin</td>
                    <td>921272</td>
                    <td>
                        <img src="{{ asset('gmbr/kikik.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Rama</td>
                    <td>Trenggalek</td>
                    <td>265639</td>
                    <td>
                        <img src="{{ asset('gmbr/Rama.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Satrio</td>
                    <td>Trenggaek</td>
                    <td>715563</td>
                    <td>
                        <img src="{{ asset('gmbr/bobot.jpg') }}" width="50px" height="80px">
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
@endsection
</body>
</html>
