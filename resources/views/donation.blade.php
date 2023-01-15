@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">IDonation</h1>
            <p class="lead">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container">
        <form action="#" id="donation_form">
            <legend>Donation</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">Nama</label>
                        <input type="text" name="donor_name" class="form-control" id="donor_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">E-Mail</label>
                        <input type="email" name="donor_email" class="form-control" id="donor_email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="">Jenis Donasi</label>
                        <select name="donation_type" class="form-select" id="donation_type">
                          <option value="medis_kesehatan">Medis & Kesehatan</option>
                          <option value="kemanusiaan">Kemanusiaan</option>
                          <option value="bencana_alam">Bencana Alam</option>
                          <option value="rumah_ibadah">Rumah Ibadah</option>
                          <option value="beasiswa_pendidikan">Beasiswa & Pendidikan</option>
                          <option value="sarana_infrastruktur">Sarana & Infrastruktur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">Jumlah</label>
                        <input type="number" name="amount" class="form-control" id="amount">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">Catatan (Opsional)</label>
                        <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>

</div>
@endsection
