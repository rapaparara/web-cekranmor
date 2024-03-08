<div>
    <div class="mb-3">
        <h1>Masuk dengan akun anda</h1>
        <p>Silakan masukkan email dan password anda untuk login.</p>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title mb-3"><i class="bi bi-arrow-right me-2"></i>Login</h3>
                    <form class="row g-3" wire:submit="login">
                        <div class="col-md-12">
                            <x-flash-messages />
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
                            <div class="col-12 mb-3">
                                <small>Belum punya akun? buat akun anda <a
                                        href="{{ route('register') }}">disini.</a></small>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
