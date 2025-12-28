
@if( $this->state == 'ItemShow')
    <div>
        {{ $this->value }}
    </div>
@endif

@if( $this->state == 'ItemEdit')

    <div class="@if( count($this->classList) ){{ implode( ' ' , $this->classList ) }}@else mb-4 @endif ">

        <div class="form-check">

            <input name="{{ $this->name }}" class="form-check-input" type="checkbox" id="{{ $this->elementId }}"  @if($this->isValid===false) required @endif>
            <label class="form-check-label" for="{{ $this->elementId }}">{{ $this->itemOptions['title'] }}</label>
            <div class="invalid-feedback">Example invalid feedback text</div>

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
        <input type="text" class="form-control @if($this->isValid===false) is-invalid @endif" value="{{ $this->value }}" wire:model.blur="value" >
    </div>
@endif
