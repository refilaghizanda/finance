@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4 mx-auto">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mt-4 mb-0 text-capitalize font-weight-bold">Saldo Maximum Kas Kecil</p>
                                <h5 class="font-weight-bolder mt-3 mb-4">
                                    Rp 2.000.000
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end mt-4">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-4">Log History</h5>
                            </div>
                            <button class="btn bg-gradient-primary btn-sm mb-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModalLong" type="button">+&nbsp;
                                Add New
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form role="form text-left" method="POST" action="kas-kecil">
                                            @csrf
                                            <div class="form-group mx-4">
                                                <label for="example-text-input" class="form-control-label">No Bukti</label>
                                                <input class="form-control" type="text" value=" " id="example-text-input">
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="example-date-input" class="form-control-label">Date</label>
                                                <input class="form-control" type="date" value="today" id="example-date-input" placeholder="dd/mm/yyyy">
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="example-search-input" class="form-control-label">Kategori</label>
                                                <select class="form-control">
                                                    <option>Pilih Kategori</option>
                                                    <option>Konsumsi</option>
                                                    <option>Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="example-sal-input" class="form-control-label">Saldo</label>
                                                <input class="form-control" type="sal" value="Rp. 2000.000" id="example-sal-input">
                                            </div>
                                            <div class="form-group mx-4">
                                                <label for="example-nom-input" class="form-control-label">Nominal</label>
                                                <input class="form-control" type="nom" value=" " id="example-nom-input">
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn bg-gradient-primary">Save changes</button>
                                        </div>
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
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No Bukti
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tanggal
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Kategori
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Keterangan
                                            </th>
                                            {{-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Saldo Awal
                                            </th> --}}
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nominal
                                            </th>
                                            {{-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Sisa Saldo
                                            </th> --}}
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $kaskecil)
                                        <tbody>
                                            <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kaskecil->id }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-xs font-weight-bold mb-0">{{ $kaskecil->no_bukti }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ date('d-m-Y', strtotime($kaskecil->tanggal)) }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kaskecil->kategori }}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kaskecil->keterangan }}</p>
                                                </td>
                                                {{-- <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kaskecil->saldo_awal }}</p>
                                                </td> --}}
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">Rp {{ number_format ($kaskecil->nominal_transaksi, 0, '.', '.') }}</p>
                                                </td>
                                                {{-- <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $kaskecil->sisa_saldo }}</p>
                                                </td> --}}
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit user">
                                                        <i class="fas fa-edit text-secondary "></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary mx-2"></i>
                                                    </span>
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
