@extends('layouts.front.main')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content content--top-nav">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5"><span class="text-danger">* Wajib Diisi</span></h2>
                        </div>
                        <div class="grid grid-cols-12 gap-12 mt-5">
                            <div class="col-span-12 sm:col-span-12 xl:col-span-12 intro-y">
                                <!-- BEGIN: Validation Form -->
                                <form class="validate-form">
                                    <div class="input-form">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Lengkap
                                        </label>
                                        <input id="validation-form-1" type="text" name="name" class="form-control"
                                            placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Nama Singkat
                                        </label>
                                        <input id="validation-form-1" type="text" name="name" class="form-control"
                                            placeholder="Nama Singkat" required>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Kewarganegaraan</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="wni" class="form-check-input" type="radio"
                                                    name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="wni">WNI</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="wna" class="form-check-input" type="radio"
                                                    name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="wna">WNA</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Alamat Sesuai KTP</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" placeholder="Alamat"
                                                aria-label="default input inline 1" required>
                                            <input type="number" class="form-control col-span-1" placeholder="RT"
                                                aria-label="default input inline 2" maxlength="3" minlength="1" required>
                                            <input type="number" class="form-control col-span-1" placeholder="RW"
                                                aria-label="default input inline 3" maxlength="3" minlength="1" required>
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Kabupaten/Kota" aria-label="default input inline 4" required>
                                            <input type="text" class="form-control col-span-3" placeholder="Provinsi"
                                                aria-label="default input inline 5" required>
                                            <input type="number" class="form-control col-span-1" placeholder="Kode Pos"
                                                aria-label="default input inline 6" minlength="5" maxlength="5" required>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row">
                                            Alamat Domisili</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" placeholder="Alamat"
                                                aria-label="default input inline 1">
                                            <input type="number" class="form-control col-span-1" placeholder="RT"
                                                aria-label="default input inline 2" maxlength="3" minlength="1">
                                            <input type="number" class="form-control col-span-1" placeholder="RW"
                                                aria-label="default input inline 3" maxlength="3" minlength="1">
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Kabupaten/Kota" aria-label="default input inline 4">
                                            <input type="text" class="form-control col-span-3" placeholder="Provinsi"
                                                aria-label="default input inline 5">
                                            <input type="number" class="form-control col-span-1" placeholder="Kode Pos"
                                                aria-label="default input inline 6" minlength="5" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> No telp Rumah
                                        </label>
                                        <input id="validation-form-1" type="tel" name="no_telp_rumah"
                                            class="form-control" placeholder="" required minlength="10" maxlength="12">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> No telp Genggam/Hp
                                        </label>
                                        <input id="validation-form-1" type="tel" name="no_telp_rumah"
                                            class="form-control" placeholder="" required minlength="10" maxlength="12">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            <span class="text-danger">* </span> Tempat/Tanggal Lahir
                                        </label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3"
                                                placeholder="Tempat Lahir" aria-label="default input inline 1" required>
                                            <input type="date" class="form-control col-span-6" data-single-mode="true"
                                                aria-label="default input inline 2" required>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Agama</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="agama-1" class="form-check-input" type="radio"
                                                    name="agama" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="agama-1">Islam</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-2" class="form-check-input" type="radio"
                                                    name="agama" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="agama-2">Katolik</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-3" class="form-check-input" type="radio"
                                                    name="agama" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="agama-3">Protestan</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-4" class="form-check-input" type="radio"
                                                    name="agama" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="agama-4">Hindu</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="agama-5" class="form-check-input" type="radio"
                                                    name="agama" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="agama-5">Budha</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Tanda Pengenal</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="pengenal-1" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="pengenal-1">KTP</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="pengenal-2" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="pengenal-2">SIM</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="pengenal-3" class="form-check-input" type="radio"
                                                    name="tanda_pengenal" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="pengenal-3">Paspor</label>
                                            </div>
                                            <input type="number" class="form-control col-span-6"
                                                aria-label="default input inline 1" minlength="16" maxlength="16"
                                                placeholder="Nomor Tanda Pengenal" required>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Jenis Kelamin</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="jenis_kelamin" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-4">Laki - Laki</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="jenis_kelamin" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Status Perkawinan</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-4">Belum Menikah</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Sudah Menikah</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="status_perkawinan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Janda/Duda</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Golongan Darah</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-4">A</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">B</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">AB</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="golongan_darah" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">O</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Pendidikan Terakhir</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-4">SD</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">SMP</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">SMA</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">D3</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">S1</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">S2</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pendidikan_terakhir" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">S3</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label for="validation-form-1"
                                            class="form-label w-full flex flex-col sm:flex-row">
                                            Alamat Email
                                        </label>
                                        <input id="validation-form-1" type="email" name="email" class="form-control"
                                            placeholder="Alamat Email">
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row">
                                            Rekening Bank Lain</label>
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-3" placeholder="Nama Bank"
                                                aria-label="default input inline 1">
                                            <input type="number" class="form-control col-span-6"
                                                placeholder="Nomor Rekening" aria-label="default input inline 2">
                                        </div>
                                    </div>
                                    <div class="input-form mt-3">
                                        <label class="form-label w-full flex flex-col sm:flex-row"><span
                                                class="text-danger">* </span> Pekerjaan Sekarang</label>
                                        <div class="flex flex-col sm:flex-row mt-2">
                                            <div class="form-check mr-2">
                                                <input id="radio-switch-4" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-chris-evans">
                                                <label class="form-check-label"
                                                    for="radio-switch-4">Pelajar/Mahasiswa</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">PNS</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">TNI/POLRI</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Wiraswasta</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">BUMN?D</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Karyawan
                                                    Swatsa</label>
                                            </div>
                                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                                <input id="radio-switch-5" class="form-check-input" type="radio"
                                                    name="pekerjaan" value="horizontal-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-5">Pensiunan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-5 ">Register</button>
                                </form>
                                <!-- END: Validation Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
@endsection
