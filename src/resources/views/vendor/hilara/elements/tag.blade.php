<div>
    
@if ($this->state == 'ItemShow' || $this->state == "NewShow")
    <div>
        {{ $this->value }}
    </div>
@endif


@if ($this->state == 'ItemEdit' || $this->state == "NewEdit")
    <div
        class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else row mb-4 @endif @if ($this->isValid === true) was-validated @endif">
        <label for="{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
        <div class="col-md-9">
            <div class="form-control tags-container loadable" wire:loading.class="loading" wire:target="deleteTag,addTag">
                <div class="tags">
                    <div>
                        <input type="text"
                               placeholder="Type then Enter"
                               class="new-tag @if ($this->isValid === false) is-invalid @endif" value="{{ $this->newTag }}"
                               wire:model="newTag" wire:model.live.debounce.500ms="newTag" wire:keydown.enter.prevent="addTag">
                        >
                    </div>
                    <div class="mt-2">
                        @if( $this->tags )
                        @foreach($this->tags as $value)
                            <span class="tag">
                                {{ $value }}
                                <a href="javascript:void(0)" wire:click="deleteTag('{{ $value }}')" class="tag-addon"><i class="fe fe-x"></i></a>
                            </span>
                        @endforeach
                        @endif
                    </div>

                </div>
                <div style="position:relative;">
                    @if($this->foundList !== null)
                        @if( count($this->foundList) )
                            <div class="tag-downlist">
                                @foreach($this->foundList as $founditem)
                                    <div wire:click="addTag('{{ $founditem['name'] }}')">{{ $founditem['name'] }}</div>
                                @endforeach
                            </div>
                        @else
                            <div class="tag-downlist">
                                <div>not found</div>
                            </div>
                        @endif
                    @endif
                </div>

            </div>

        </div>

    </div>
@endif

@if ($this->state == 'ListShow')
    <div>
        <div class="tags">
            @foreach( $this->tags as $tag)
            <span class="tag">
                {{ $tag }}
            </span>
            @endforeach
        </div>
    </div>
@endif


@if ($this->state == 'ListEdit')
    <div class="{{ implode(' ', $this->classList) }} @if ($this->isValid === true) was-validated @endif">
        <input type="text" class="form-control @if ($this->isValid === false) is-invalid @endif" >
    </div>
@endif


@if ($this->state == 'Filter')
    <div class="col-md-3">
        <label class="form-label">{{ $this->itemOptions['title'] }}</label>
        <input type="search" class="form-control form-control-sm " placeholder="{{ translate('FILTERABLE_TEXT') }}"
            aria-controls="user-datatable" value="{{ $this->value }}" wire:model.blur="value"
            wire:keydown.enter.prevent="$dispatch('newFilterApply','{{ $this->name }}',$event.target.value)">
    </div>
@endif


    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            var data = JSON.parse('{!! json_encode($this->tags) !!}');

            master.registerElement("{{ $this->name }}", data, (value) => 
                {
                    // TODO for changing language

                }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
            ); 

        });

        Livewire.on('OnTagsChanged', (e) => {
        //window.addEventListener('OnTagsChanged', e => {
            if (e.tags) {
                master.setElementValue(e.name, e.tags);
            }
        })

    </script>


</div>