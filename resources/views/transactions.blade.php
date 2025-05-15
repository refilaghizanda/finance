@extends('layouts.user_type.auth')

@section('content')
<div class="col-sm-9 mx-auto mt-1 mb-1">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-text"><strong>{{ $message }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-4 mx-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h5 class="mb-4">Laporan</h5>
                    </div>
                    <button class="btn bg-gradient-primary btn-sm mb-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModalLong" type="button">+&nbsp;
                        Add New
                    </button>
                </div>
            </div>

            <div class="container">
                <form action="{{ route('ck.store') }}" method="POST">
                    @csrf
                    <div class="col-md-4">
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mx-auto" id="exampleModalLongTitle"> Transaksi Baru
                                        </h5>
                                    </div>

                                    <div class="form-group mx-4">
                                        <label class="form label" for="nocek">No Bukti</label>
                                        <input type="text" class="form-control" name="nocek" id="nocek"
                                            placeholder=" ">
                                    </div>

                                    <div class="form-group mx-4">
                                        <label class="form label" for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal"
                                            placeholder=" ">
                                    </div>

                                    <div class="form-group mx-4">
                                        <label class="form label" for="kegiatan">Kegiatan</label>
                                        <textarea class="form-control" name="kegiatan" id="kegiatan" rows="2"></textarea>
                                    </div>

                                    <div class="form-group mx-4">
                                        <label class="form label" for="saldo">Saldo</label>
                                        <input type="text" class="form-control disabled" name="saldo" id="saldo" readonly value="2000.000">
                                    </div>

                                    <div class="form-group mx-4">
                                        <label class="form label" for="jumlah">Jumlah</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder=" " oninput="checkNominalValue(this)">
                                        <span id="nominal-error" style="color: grey; font-size: 0.8em;"></span>
                                    </div>
                                    
                                    <script>
                                        function checkNominalValue(input) {
                                            if (input.value > 2000000) {
                                                document.getElementById("nominal-error").innerHTML = "* nominal tidak boleh lebih dari Rp 2000.000";
                                                input.setCustomValidity("* nominal tidak boleh lebih dari Rp 2000.000");
                                            } else {
                                                document.getElementById("nominal-error").innerHTML = "";
                                                input.setCustomValidity("");
                                            }
                                        }
                                    </script>

                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-danger"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn bg-gradient-success">Save Data</button>
                                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        ID
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        No Bukti
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Tanggal
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Kegiatan
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Jumlah
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                        Aksi
                    </th>
                </tr>
            </thead>
            <?php
            $nomer = 1;
            ?>
            @foreach ($data as $ck)
                <tbody>
                    <tr>
                        <td class="ps-4">
                            <p class="text-xs font-weight-bold mb-0">{{ $nomer++ }}</p>
                        </td>
                        <td class="text-center">
                            <span class="text-xs font-weight-bold mb-0">{{ $ck->no_cek }}</span>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ date('d-m-Y', strtotime($ck->tanggal)) }}</p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $ck->kegiatan }}
                            </p>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Rp
                                {{ number_format($ck->jumlah, 0, '.', '.') }}</p>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('ck.edit', $ck->id) }}" class="mx-0" data-bs-toggle="tooltip"
                                data-bs-original-title="Edit user" style="display: inline-block;">
                                <form method="POST" action="{{ route('ck.update', $ck->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-link" style="padding: 0 10px;">
                                        <i class="fas fa-edit text-secondary" style="vertical-align: middle;"></i>
                                    </button>
                                </form>
                            </a>

                            <a href="#" class="mx-0" data-bs-toggle="tooltip"
                                data-bs-original-title="Hapus user" style="display: inline-block;">
                                <form method="POST" action="{{ route('ck.delete', $ck->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link" style="padding: 0 10px;">
                                        <i class="fas fa-trash text-secondary"
                                            style="vertical-align: middle;"></i>
                                    </button>
                                </form>
                            </a>

                            <a href="{{ route('download.index') }}" class="mx-0" data-bs-toggle="tooltip"
                                data-bs-original-title="Download" style="display: inline-block;">
                                <button type="submit" class="btn btn-link" role="button" aria-pressed="true"
                                    onclick="printPage()" style="padding: 0 10px;">
                                    <i class="fas fa-download text-secondary" style="vertical-align: middle;"></i>
                                </button>
                            </a>
                            {{-- <script>
                                function printPage() {
                                    window.print();
                                }
                            </script> --}}
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
</div>
</div>
</div>
@endsection
