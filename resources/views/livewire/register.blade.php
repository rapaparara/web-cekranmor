<div>
    <div class="mb-3">
        <h1>Buat Akun Baru</h1>
        <p>Anda harus punya akun sebelum bisa chat dengan admin. Anda sudah punya akun? <a
                href="{{ route('login') }}">Masuk
                disini</a>.</p>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title mb-3">Buat Akun</h3>
                    <form class="row g-3" wire:submit="save">
                        <div class="col-md-12">
                            <x-flash-messages />
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <input wire:model="form.name" type="text" class="form-control" id="name"
                                        placeholder="Nama Lengkap disini">
                                    <label for="name">Masukkan nama lengkap anda</label>
                                    @error('form.name')
                                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <input wire:model="form.email" type="email" class="form-control" id="email"
                                        placeholder="Email Lengkap disini">
                                    <label for="name">Masukkan email anda</label>
                                    @error('form.email')
                                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <input wire:model="form.password" type="password" class="form-control"
                                        id="password" placeholder="Email Lengkap disini">
                                    <label for="name">Masukkan password</label>
                                    @error('form.password')
                                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Buat Akun</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
