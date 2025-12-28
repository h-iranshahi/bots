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
                <div class="col-md-12">
                    <input type="text"
                        class="form-control my-3 @if ($this->isValid === false) is-invalid @endif" 
                        value="{{ $this->title }}" placeholder="Title"
                        wire:model.blur="title">
                </div>
                <div class="col-md-12">
                    <input type="text"
                        class="form-control my-3 @if ($this->isValid === false) is-invalid @endif" 
                        value="{{ $this->title }}" placeholder="Url"
                        wire:model.blur="url">
                </div>
                <div class="col-md-12">
                    <button class="btn btn-radius btn-primary my-3" tabindex="-1" wire:click.prevent="addItem"><i class="fe fe-plus-circle"></i> Add </button>
                </div>
                <div class="col-md-12 py-5 adder-list">
                    @foreach($this->addedList as $n => $item)
                    <div class="my-2 p-0 adder-item">
                        <a href="#" wire:click.prevent="removeItem({{ $n }})"><i class="fe fe-x-circle icon m-0" ></i></a>
                        <a href="{{ $item['url'] }}" class="mx-2"> {{ $item['title'] }} </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if ($this->state == 'ListShow')
        <div>

            @if ($this->listOptions['link'])
                <a href="{{ $this->listOptions['link'] }}"> {{ $this->value }} </a>
            @else
                {{ $this->value }}
            @endif

        </div>
    @endif


    @if ($this->state == 'ListEdit')
        <div class="{{ implode(' ', $this->classList) }} @if ($this->isValid === true) was-validated @endif">

        
        </div>
    @endif


    @if ($this->state == 'Filter')
        <div class="col-md-3">
        </div>
    @endif

    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            var data = @json($this->getDBFriendlyValue());

            master.registerElement("{{ $this->name }}", data, (value) => 
                {
                    @this.emit('switchLanguage', master.currentLanguage);

                }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
            ); 

        });


        Livewire.on('OnAdderChanged', (e) => {
        //window.addEventListener('OnAdderChanged', e => {
            if (e.list) {
                let list = e.list;
                master.setElementValue(e.name, list);
            }
        })

    </script>
</div>