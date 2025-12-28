<div>
    
    @if ($this->state == 'ItemShow' || $this->state == 'NewShow')
        <div>
            {{ $this->value }}
        </div>
    @endif

    @if ($this->state == 'ItemEdit' || $this->state == 'NewEdit')
        <div
            class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else row mb-4 @endif @if ($this->isValid === true) was-validated @endif">
            <label for="{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9">
                <input type="text"
                    name="{{ $this->name }}"
                    class="form-control @if ($this->isValid === false) is-invalid @endif" id="{{ $this->elementId }}"
                    value="{{ $this->value }}" 
                    placeholder="{{ $this->itemOptions['placeholder'] }}"
                    @if($this->itemOptions['interactive']) wire:model.live.debounce.800ms="value" @endif
                    >

            </div>
        </div>
    @endif

    @if ($this->state == 'ListShow')
        <div>

            @if ($this->listOptions['link'])
                <a href="{{ $this->listOptions['link'] }}"> 
                    @if( trim($this->value) ) 
                        {{ $this->value }}
                    @else
                        <i>NOT DEFINED</i>
                    @endif
                </a>
            @else

                {{ $this->value }}
            @endif

        </div>
    @endif


    @if ($this->state == 'ListEdit')
        <div class="{{ implode(' ', $this->classList) }} @if ($this->isValid === true) was-validated @endif">
            <input 
                type="text" 
                class="form-control @if ($this->isValid === false) is-invalid @endif"
                value="{{ $this->value }}" 
                @if($this->itemOptions['interactive']) wire:model.live.debounce.800ms="value" @endif
                >
        </div>
    @endif


    @if ($this->state == 'Filter')
        <div class="col-md-3">
            <label class="form-label">{{ $this->itemOptions['title'] }}</label>
            <input type="search" class="form-control form-control-sm " placeholder="{{ translate('FILTERABLE_TEXT') }}"
                aria-controls="user-datatable" value="{{ $this->value }}" wire:model="value"
                wire:keydown.enter.prevent="$dispatch('newFilterApply','{{ $this->name }}',$event.target.value)">
        </div>
    @endif

    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            master.registerElement("{{ $this->name }}", @json($this->getDBFriendlyValue()), (value) => {

            }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}); 

        });
    </script>

</div>