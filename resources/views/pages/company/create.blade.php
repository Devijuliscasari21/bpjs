@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3 justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Devi</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="npp">NPP</label>
                        <input type="text" class="form-control" name="npp" placeholder="" value="{{ old('npp') }}">
                        @error('npp')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="npp">DIV</label>
                        <input type="text" class="form-control" name="div" placeholder="" value="{{ old('div') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="company_name" placeholder=""
                            value="{{ old('company_name') }}">
                    </div>

                    <div class="form-group">
                        <label for="company_address">Alamat Perusahaan</label>
                        <textarea id="company_address" class="form-control" name="company_address"
                            rows="10">{{ old('company_address') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="npp">Kabupaten2</label>
                        <select name="district_id" class="form-control">
                            <option value="">Pilih Kabupaten</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->district }}
                                </option>
                            @endforeach
                        </select>
                        @error('district_id')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="npp">Kode Area</label>
                        <input type="text" class="form-control" name="code_area" placeholder=""
                            value="{{ old('code_area') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">No Telepon Perusahaan</label>
                        <input type="text" class="form-control" name="company_phone_number" placeholder=""
                            value="{{ old('company_phone_number') }}">
                    </div>

                    {{-- <div class="form-group">
                        <label for="npp">Nama PIC</label>
                        <input type="text" class="form-control" name="nama_pic" placeholder=""
                            value="{{ old('nama_pic') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Jabatan PIC</label>
                        <input type="text" class="form-control" name="jabatan_pic" placeholder=""
                            value="{{ old('jabatan_pic') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Nomor Handphone PIC</label>
                        <input type="text" class="form-control" name="nomor_handphone_pic" placeholder=""
                            value="{{ old('nomor_handphone_pic') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Email PIC</label>
                        <input type="text" class="form-control" name="email_pic" placeholder=""
                            value="{{ old('email_pic') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">BLTH (KEPS)</label>
                        <input type="text" class="form-control" name="blth_keps" placeholder=""
                            value="{{ old('blth_keps') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Kategori (PK/BU)</label>
                        <input type="text" class="form-control" name="kategori_pk_bu" placeholder=""
                            value="{{ old('kategori_pk_bu') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Jumlah TK</label>
                        <input type="text" class="form-control" name="jumlah_tk" placeholder=""
                            value="{{ old('jumlah_tk') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Jumlah Program</label>
                        <input type="text" class="form-control" name="jumlah_program" placeholder=""
                            value="{{ old('jumlah_program') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Status Iuran BU</label>
                        <input type="text" class="form-control" name="status_iuran_bu" placeholder=""
                            value="{{ old('status_iuran_bu') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Bulan Tunggakan</label>
                        <input type="text" class="form-control" name="bulan_tunggakan" placeholder=""
                            value="{{ old('bulan_tunggakan') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Kegiatan (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="kegiatan_crm" placeholder=""
                            value="{{ old('kegiatan_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Petugas Perusahaan yang Dikunjung (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="petugas_perusahaan_yang_dikunjungi_crm" placeholder=""
                            value="{{ old('petugas_perusahaan_yang_dikunjungi_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Pendampingan (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="pendampingan_crm" placeholder=""
                            value="{{ old('pendampingan_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Tanggal (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="tanggal_crm" placeholder=""
                            value="{{ old('tanggal_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Hasil Kegiatan (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="hasil_kegiatan_crm" placeholder=""
                            value="{{ old('hasil_kegiatan_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Link Foto Kunjungan (Customer Relationship Management)</label>
                        <input type="text" class="form-control" name="foto_kunjungan_crm" placeholder=""
                            value="{{ old('foto_kunjungan_crm') }}">
                    </div>

                    <div class="form-group">
                        <label for="npp">Tindak Lanjut</label>
                        <input type="text" class="form-control" name="tindak_lenjut" placeholder=""
                            value="{{ old('tindak_lenjut') }}">
                    </div> --}}


                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
