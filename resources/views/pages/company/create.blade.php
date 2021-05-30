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
                        <input type="text" class="form-control" name="npp" placeholder="Npp" value="{{ old('npp') }}">
                        @error('npp')
                            <span class="text-red-600 text-sm font-light" role="alert">
                                <p>*{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="npp">DIV</label>
                        <input type="text" class="form-control" name="div" placeholder="div" value="{{ old('div') }}">
                    </div>
                    <div class="form-group">
                        <label for="npp">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="company_name" placeholder="nama perusahaan"
                            value="{{ old('company_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="company_address">Alamat Perusahaan</label>
                        <textarea id="company_address" class="form-control" name="company_address"
                            rows="10">{{ old('company_address') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="npp">Kode Area</label>
                        <input type="text" class="form-control" name="code_area" placeholder="kode area"
                            value="{{ old('code_area') }}">
                    </div>
                    <div class="form-group">
                        <label for="npp">No Telepon Perusahaan</label>
                        <input type="text" class="form-control" name="company_phone_number"
                            placeholder="No Telepon Perusahaan" value="{{ old('company_phone_number') }}">
                    </div>
                    <div class="form-group">
                        <label for="npp">Kabupaten2</label>
                                <select name="district_id"
                                    class="form-control">
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
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
