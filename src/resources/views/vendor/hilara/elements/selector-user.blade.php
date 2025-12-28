<div>
    @if( $this->state == 'ItemShow')
        <div class="card-header p-0 d-sm-flex">
            @foreach($this->membersData as $member)
                <div class="main-img-user online">
                    <img alt="avatar" src="{{ crop($member['avatar'], '200x200', 'avatar') }}">
                </div>
                <div class="main-chat-msg-name mt-2 ms-2 me-3">
                    <p class="mb-0">{{ $member['title'] }}</p>
                    <span class="dot-label bg-success"></span><small class="me-3">online</small>
                </div>
            @endforeach
        </div>
    @endif

    @if ($this->state == 'ItemEdit' || $this->state == "NewEdit")
    <div class="selector-user row mb-4 @if( count($this->classList) ){{ implode( ' ' , $this->classList ) }}@else @endif @if($this->isValid===true) was-validated @endif">
            <label class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9">
                <div style="position: relative;">
                    <div class="input-group" id="">
                        <input type="text" class="form-control text-dark @error('title') is-invalid @enderror"
                            placeholder="Enter anything (First name, Last name, Mobile, Email)"
                            wire:model.live.change="member_chooser">
                    </div>
                    @if( count($this->member_founds) )
                        <div class="form-group dropdown">
                            @foreach($this->member_founds as $elem)
                                <div class="main-chat-msg-name mt-2 ms-2 me-3 item"
                                    wire:click="selectMember('{{ $elem['id'] }}')">
                                    <p class="mb-0">{{ $elem['title'] }}</p>
                                    @if( $elem['email'] == $elem['title'] )
                                        <span class="dot-label bg-light"></span><small class="me-3">offline</small>
                                    @else
                                        <span class="dot-label bg-success"></span><small class="me-3">online</small>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="members mt-2">
                        @foreach($this->membersData as $member)
                            <div class="member m-1">
                                <div class="avatar mx-2">
                                    <img alt="avatar" src="{{ crop($member['avatar'], '200x200', 'avatar') }}">
                                </div>
                                <div class="main-chat-msg-name m-2">
                                    <p class="mb-0">{{ $member['title'] }}</p>
                                    <span class="dot-label bg-success"></span>
                                    <small class="me-3">online</small>
                                </div>
                                <a class="nav-link border rounded-pill p-2 m-3" href="javascript:void(0)"
                                style="line-height: 1;" wire:click="deleteMember('{{ $member['id'] }}')">
                                    <i class="bi bi-trash fs-14"></i>
                                </a>
                            </div>
                        @endforeach
                        @foreach($this->inviteesData as $invitee)
                            <div class="member m-1">
                                <div class="avatar mx-2">
                                    <img alt="avatar" src="{{ crop($invitee['avatar'], '200x200', 'avatar') }}">
                                </div>
                                <div class="main-chat-msg-name m-2">
                                    <p class="mb-0">{{ $invitee['title'] }}</p>
                                    <span class="dot-label bg-light"></span>
                                    <small class="me-3">offline</small>
                                </div>
                                <a class="nav-link border rounded-pill p-2 m-3" href="javascript:void(0)"
                                style="line-height: 1;" wire:click="deleteMember('{{ $invitee['id'] }}')">
                                    <i class="bi bi-trash fs-14"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
               
            </div>
        </div>

    @endif

    @if( $this->state == 'ListShow')

        <div class="avatar-list indicators">
            @foreach($this->membersData as $member)
                <span class="d-inline-block mx-1" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-content="{{ $member['email'] }}" data-bs-original-title="{{ $member['title'] }}"
                    data-bs-placement="top" data-bs-popover-color="head-primary">
                    <span class="avatar avatar-lg rounded-circle cover-image "
                        data-bs-image-src="{{ crop($member['avatar'], '200x200', 'avatar') }}"
                        style="background: url('{{ crop($member['avatar'], '200x200', 'avatar') }}') center center;"></span>
                </span>
            @endforeach
        </div>

    @endif


    @if( $this->state == 'ListEdit')
        <div></div>
    @endif


    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            var data = @json(['users' => $this->members, 'invitees' => $this->invitees]);

            master.registerElement("{{ $this->name }}", data, (value) => 
                {
                    // TODO for changing language                    

                }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
            ); 

        });

        Livewire.on('OnUsersChanged', (e) => {
        //window.addEventListener('OnUsersChanged', e => {
            if (e.name == '{{ $this->name }}' && e.data) {
                master.setElementValue(e.name, e.data);
            }
        })
 
    </script>


    @push('styles')
        <style>
            .selector-user {
                position: relative;
            }

            .selector-user .dropdown {
                position: absolute;
                background: #f7f7f7;
                right: 0;
                left: 0;
                z-index: 999;
                border: 1px solid #eee;
                border-radius: 6px;
                padding: 1em 0.3em;
                margin-top: .3em;
            }

            .selector-user .item {
                background: #fff;
                padding: 0.6em;
                border-radius: .6em;
                cursor: pointer;
            }

            .selector-user .dropdown .item:hover {
                background: #fbfbfb;
             }

            .selector-user .members {
                display: flex;
                flex-wrap: wrap;
            }

            .selector-user .member {
                display: flex;
                align-items: center;
                border: 1px solid #eee;
                border-radius: 5em;
            }

            .selector-user .member .avatar {
                width: 46px;
                height: 46px;
                border-radius: 100%;
            }

            .selector-user .member .avatar img {
                width: 100%;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                border-radius: 100%;
            }

            .avatar-list {
                width: auto !important;
                display: flex;
            }
        </style>
    @endpush
</div>