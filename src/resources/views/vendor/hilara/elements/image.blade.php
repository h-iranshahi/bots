
@if( $this->state == 'ItemShow' || $this->state == 'NewShow')
    <div>
        
    
    </div>
@endif

@if( $this->state == 'ItemEdit' || $this->state == 'NewEdit')

    <div class="hi-gallery-list @if( count($this->classList) ){{ implode( ' ' , $this->classList ) }}@else  @endif @if($this->isValid===true) was-validated @endif">
            
            @if( !$this->fullUploaded )
            <div class="upload-item m-1 p-0"  >
                <div class="dropify-wrapper loadable" style="height: 101.6px;" wire:loading.class="loading" >
                    <div class="dropify-message">
                        <span class="file-icon"> <p>Drag and drop a file here or click</p></span>
                        <p class="dropify-error">Ooops, something wrong appended.</p>
                    </div>
                    <div class="dropify-loader"></div>
                    <div class="dropify-errors-container"><ul></ul></div>
                    <input type="file" class="dropify" data-height="100" wire:model.blur="newImage">
                    <button type="button" class="dropify-clear">Remove</button>
                    <div class="dropify-preview"><span class="dropify-render"></span>
                        <div class="dropify-infos">
                            <div class="dropify-infos-inner">
                                <p class="dropify-filename"><span class="dropify-filename-inner"></span></p>
                                <p class="dropify-infos-message">Drag and drop or click to replace</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
            <div id="{{ $this->elementId }}" class="image-list p-0 list-unstyled" lg-event-uid="">

                @foreach($this->images as $key => $image)
                <div class="m-1 image-item" data-responsive="{{ asset('storage/'.$image['src']) }}" data-src="{{ asset('storage/'.$image['src']) }}" data-sub-html="">
                    <a href="javascript:void(0)" wire:click.stop="removeImage('{{ $key }}')" class="delete-btn" title="Delete"><i class="fe fe-x"></i></a>
                    @if(!$loop->first)
                        <a href="javascript:void(0)" wire:click.stop="setAsFirst('{{ $key }}')" class="setfirst-btn" title="Set As First"><i class="fe fe-airplay"></i></a>
                    @endif
                    <a href="javascript:void(0)" style="position: absolute; width: 100%;">
                        <img class="img-responsive br-5 wp-100" src="{{ crop($image,'300x200') }}" >
                    </a>
                </div>
                @endforeach

            </div>

    </div>
@endif

@if( $this->state == 'ListShow')
    <div>
        <div class="avatar-list avatar-list-stacked {{ implode( ' ' , $this->classList ) }}">
            @if( $iterate = 0 ) @endif
            @foreach($this->images as $image)
                @if( $iterate < 5)
                    <span class="avatar avatar-lg rounded-circle bradius cover-image" data-bs-image-src="{{ crop($image,'100x100') }}" style="background: url(&quot;{{ crop($image,'100x100') }}&quot;) center center;"></span>
                @endif
                @if( $iterate++ ) @endif
            @endforeach
            @if( $iterate > 5 )
            <span class="avatar avatar-lg rounded-circle bradius bg-primary">+{{ $iterate-5 }}</span>
            @endif

            @if( count($this->images) == 0 )
            <div class="avatar avatar-lg text-white rounded-circle" style="background:#{{ $this->defaultColor }};">
                <span class="">{{ $this->defaultTitle }}</span>
            </div>
            @endif

        </div>
    </div>
@endif


@if( $this->state == 'ListEdit')



@endif

<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        var data = @json(array_values($this->images));  

        master.registerElement("{{ $this->name }}", data, (value) => 
            {
                // TODO for changing language

            }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
        ); 
    });
</script>

@push('styles')
    <!-- GALLERY CSS -->
    <style >
        .hi-gallery-list .dropify-wrapper{
            height: 100% !important;
        }
    </style>

@endpush


@pushonce('scripts')
    <!-- GALLERY JS -->
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('vendor/hilara/noa/assets/plugins/gallery/lg-share.js') }}"></script>
    <script>

        Livewire.on('OnImagesChanged', (e) => {
        //window.addEventListener('OnImagesChanged', e => {
            master.setElementValue(e.name, e.images);
            lightGallery(document.getElementById(e.elemId));
        })

    </script>
@endpushonce


@push('scripts')
    <script>

        window.dispatchEvent(new CustomEvent("OnImagesChanged", { "detail" : { "elemId": "{{ $this->elementId }}" } }));

    </script>
@endpush


