
<div>
    @if( $this->state == 'ItemShow' || $this->state == 'NewShow')
        <div>
            {{ $this->value }}
        </div>
    @endif

    @if( $this->state == 'ItemEdit' || $this->state == 'NewEdit')

        <div class="@if( count($this->classList) ){{ implode( ' ' , $this->classList ) }}@else row mb-4 @endif @if($this->isValid===true) was-validated @endif">
            <label for="elem{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9" dir="{{ $this->direction }}">
                <div  wire:ignore>
                    <textarea id="elem{{ $this->name }}" name="{{ $this->name }}" placeholder="{{ $this->itemOptions['placeholder'] }}" style="display:none;">{{ $this->value }}</textarea>
                </div>

            </div>
        </div>
 

    @endif

    @if( $this->state == 'ListShow')
        <div>

            @if( $this->listOptions['link'] )

            <a href="{{ $this->listOptions['link'] }}"> {{ $this->value }} </a>

            @else

            {{ $this->value }}

            @endif

        </div>
    @endif


    @if( $this->state == 'ListEdit')
        <div class="{{ implode( ' ' , $this->classList ) }} ">
            <textarea name="{{ $this->name }}" class="form-control @if($this->isValid===false) is-invalid @endif" id="elem{{ $this->elementId }}" placeholder="{{ $this->itemOptions['placeholder'] }}" wire:model.blur="value">{{ $this->value }}</textarea>

        </div>
    @endif


    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            master.registerElement("{{ $this->name }}", @json($this->getDBFriendlyValue()), (value) => 
                {
                    var id = 'elem{{ $this->name }}';
                    let scriptTag = document.getElementById("summernote.js");
                    if(!scriptTag){
                        scriptTag = document.createElement("script");
                        scriptTag.setAttribute("src", "/vendor/hilara/noa/assets/plugins/summernote-editor/summernote1.js");
                        scriptTag.setAttribute("id", "summernote.js");
                        document.body.appendChild(scriptTag);
                        scriptTag = document.createElement("script");
                        scriptTag.setAttribute("src", "/vendor/hilara/noa/assets/plugins/summernote-editor/summernote-ext-rtl.js");
                        document.body.appendChild(scriptTag);
                    } 

                    var editorInterval = setInterval(() => {
                        if (typeof jQuery.fn.summernote === 'function') {
                            $('#'+id).summernote('destroy');
                            document.getElementById(id).innerHTML = value;
                            $('#'+id).summernote({
                                height:120,
                                /*toolbar: [
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['fontsize', ['fontsize']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['insert',['ltr','rtl']],
                                    ['insert', ['link','picture', 'video', 'hr']],
                                    ['view', ['fullscreen', 'codeview']],
                                ],
                                */
                                callbacks: { 
                                    onChange: function(contents, $editable) {

                                        master.setElementValue("{{ $this->name }}",contents);

                                    }
                                }
                            });
                            clearInterval(editorInterval);
                        }
                    }, 100);

                    //$("#"+id).summernote("code",  value);


                }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
            ); 

        });

    </script>

@push('scripts')
 
    <script>
/*
        if(!document.elems) document.elems = [];
        
    
        function initEditor1(id , interval){
            let scriptTag = document.getElementById("ckeditor.js");
            if(!scriptTag){
                scriptTag = document.createElement("script");
                scriptTag.setAttribute("src", "https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js");
                scriptTag.setAttribute("id", "ckeditor.js");
                document.body.appendChild(scriptTag);
            } 

            if(interval == 0)
            {
                createEditor1(id);
            }
            else
            {
                var cke = setInterval(() => {
                    if(typeof ClassicEditor != 'undefined')
                    {
                        clearInterval(cke);

                        createEditor1(id);
                    }
                }, interval);
            }

        }

        function createEditor1(id)
        {
            ClassicEditor
                .create(document.querySelector('#'+id))
                .then(editor => {

                    let debounceTimer;

                    document.elems[id] = editor;

                    // Debounce logic for updating Livewire content
                    editor.model.document.on('change:data', () => {
                        clearTimeout(debounceTimer);  // Clear the timer if the user is still typing

                        debounceTimer = setTimeout(() => {
                            @this.set('value', editor.getData());  
                        }, 500); 
                    });
                })
                .catch(error => {
                    console.error(error);
                });

        }

         


*/


    </script>
@endpush 

@pushonce('scripts')
    <script>

        Livewire.on('OnAdderChanged', (e) => {
        //window.addEventListener('OnEditorUpdated', e => {
            if (e.id) {
                if(e.editorType == 1)
                {
                    //document.elems['elem'+e.id].setData( e.content ? e.content : "" );
                }
                if(e.editorType == 2)
                {
                    //$("#elem"+e.id).summernote("code",  e.content ? e.content : "");
                }
            }
        })

        Livewire.hook('component.initialized', (component) => {

            if(component.fingerprint.name == 'elements.editor')
            {
                

            }
        });
        
         
 
    </script>
@endpushonce

@push('styles')
    <style>
        [dir=ltr]{
            direction: ltr;
            text-align: left;
        }
        [dir=rtl]{
            direction: rtl;
            text-align: right;
        }

        .note-editable{
            /*font-family: "Segoe UI";*/
            font-size: 16px;
            line-height: 32px;
        }
        
    </style>
    
@endpush

</div>