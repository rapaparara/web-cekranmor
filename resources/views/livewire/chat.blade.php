<div>
    <div class="container">
        <div class="mb-3">
            <h3>Chat</h4>
        </div>
        <div class="row clearfix  mb-3">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search p-2"></i></span>
                            </div>
                            <input wire:model.live="katakunci" type="text" class="form-control"
                                placeholder="Search...">
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            @foreach ($dataUser as $key => $value)
                                <a wire:click.prevent="pilih('{{ $value->id }}')" href="#">
                                    <li class="clearfix">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                            alt="avatar">
                                        <div class="about">
                                            <div class="name">{{ $value->name }}</div>
                                            <div class="status">{{ $value->role }}</div>
                                        </div>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                        {{ $dataUser->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                                            alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0"><span wire:model.live="name">{{ $name }}</span>
                                        </h6>
                                        <small wire:model.live="email">{{ $email }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history">
                            <ul class="m-b-0">
                                @if ($dataPercakapan)
                                    @foreach ($dataPercakapan as $key => $value)
                                        @foreach ($dataPesan as $key => $value)
                                            <li class="clearfix">
                                                <div
                                                    class="message-data {{ $value->user_id_pengirim == session('user_id') ? 'text-right' : '' }}">
                                                    <span class="message-data-time">{{ $value->created_at }}</span>
                                                </div>
                                                <div
                                                    class="message {{ $value->user_id_pengirim == session('user_id') ? 'other-message float-right' : 'my-message' }}">
                                                    {{ $value->pesan }}</div>
                                            </li>
                                        @endforeach
                                    @endforeach
                                @else
                                    <h4>Belum ada chat.</h4>
                                @endif

                            </ul>
                        </div>
                        <div class="chat-message clearfix">
                            <form wire:submit="save" action="">
                                <div class="input-group mb-0">
                                    <input wire:click="$refresh" wire:model="pesan" type="text" class="form-control"
                                        placeholder="Masukkan pesan disini...">
                                    <div class="input-group-prepend">
                                        <button type="submit" role="submit"
                                            style="border:none; background:none; padding:0; margin:0;">
                                            <span class="input-group-text">
                                                <i class="fa fa-send p-2"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                @error('pesan')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
