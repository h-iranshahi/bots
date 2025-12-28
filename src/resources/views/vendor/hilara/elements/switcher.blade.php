@if ($this->state == 'ItemShow' || $this->state == "NewShow")
    <div>
        {{ $this->value }}
    </div>
@endif

@if ($this->state == 'ItemEdit' || $this->state == "NewEdit")
    <div class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else row mb-4 @endif ">

        <label for="elem{{ $this->name }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
        <div class="col-md-9">

                                        <div id="elem{{ $this->name }}">
                <div class="btn-group my-1 admin-switch-bar ">
                    @foreach($this->possibleValues as $key => $item)
                        <div
                            class="btn px-2 {{ $item['class'] ?? 'switch-' . $key }} {{ $this->value == $key ? 'active' : '' }}"
                            data-key="{{ $key }}">{{ $item['title'] }}</div>
                    @endforeach
                </div>
                <input type="hidden" name="{{ $this->name }}" value="{{ $this->value }}">
            </div>

        </div>

    </div>
@endif

@if ($this->state == 'ListShow')
    <div>

        @if ($this->listOptions['link'])
            <a href="{{ $this->listOptions['link'] }}">
                @foreach($this->possibleValues as $key => $item)
                    @if ($key == $this->value )
                        {{ $item['title'] }}
                    @endif
                @endforeach
            </a>
        @else
            @foreach($this->possibleValues as $key => $item)
                @if ($key == $this->value )
                    {{ $item['title'] }}
                @endif
            @endforeach

        @endif

    </div>
@endif


@if ($this->state == 'ListEdit')
    <div class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else  @endif ">

        <div class="main-toggle-group d-flex flex-wrap">
            <div id="elem{{ $this->name }}" class="loadable" wire:loading.class="requesting" wire:target="switchValue">
                <div class="btn-group my-1 admin-switch-bar ">
                    @foreach($this->possibleValues as $key => $item)
                        <button
                            class="btn px-2 {{ $item['class'] ?? 'switch-' . $key }} {{ $this->value == $key ? 'active' : '' }}"
                            type="button" wire:click="switchValue({{ $key }})">{{ $item['title'] }}</button>
                    @endforeach
                </div>
                <div class="cover"></div>
            </div>
        </div>

    </div>
@endif


<script>

    document.addEventListener("DOMContentLoaded", (event) => {

        @if($this->itemOptions['max-count'] > 1)
        var data = @json($this->getDBFriendlyValue());
        @else
        var data = "{{ $this->getEncodedData() }}";
        @endif

        master.registerElement("{{ $this->name }}", data, (value) => {
                var id = 'elem{{ $this->name }}';

                const buttons = document.querySelectorAll("#" + id + " .btn");
                const input = document.querySelector("input[name='{{ $this->name }}']");

                buttons.forEach((button, index) => {
                    button.addEventListener("click", function () {

                        buttons.forEach(btn => btn.classList.remove("active"));
                        this.classList.add("active");
                        input.value = this.getAttribute("data-key");

                        master.setElementValue("{{ $this->name }}", input.value);
                    });
                });


            }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
        );

    });


</script>

@push('scripts')

@endpush
