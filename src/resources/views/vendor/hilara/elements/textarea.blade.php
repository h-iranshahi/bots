<div>   
   @if( $this->state == 'ItemShow' || $this->state == 'NewShow')
        <div>
            <div>
                {!!  html_entity_decode($this->value) !!}
            </div>
        </div>
    @endif

    @if( $this->state == 'ItemEdit' || $this->state == 'NewEdit')

        <div
            class="@if( count($this->classList) ){{ implode( ' ' , $this->classList ) }}@else row mb-4 @endif @if($this->isValid===true) was-validated @endif">
            <label for="{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9">
                <textarea  rows="3"
                    name="{{ $this->name }}"
                    class="form-control @if($this->isValid===false) is-invalid @endif" id="{{ $this->elementId }}"
                    placeholder="{{ $this->itemOptions['placeholder'] }}"
                    >{{ $this->value }}</textarea>
                        
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
        <div class="{{ implode( ' ' , $this->classList ) }} @if($this->isValid===true) was-validated @endif">
            <textarea name="{{ $this->name }}" class="form-control @if($this->isValid===false) is-invalid @endif"
                    id="{{ $this->elementId }}" placeholder="{{ $this->itemOptions['placeholder'] }}"
                    wire:model.blur="value">{{ $this->value }}</textarea>

        </div>
    @endif

    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            master.registerElement("{{ $this->name }}", @json($this->getDBFriendlyValue()), (value) => {

            }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}); 

        });
    </script>

</div>