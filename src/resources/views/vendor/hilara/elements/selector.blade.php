<div>

    @if ($this->state == 'ItemShow' || $this->state == 'NewShow')
        <div class="{{ count($this->classList) ? implode(' ', $this->classList) : ' row mb-4 ' }} 
                    {{ $this->isValid === true ? 'was-validated' : '' }}"
                     >            
            <label for="elem{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9" style=" display: flex; align-items: center;">

                <div>
                    @foreach ($this->possibleValues as $id => $item)
                        @if ( in_array($id, $this->selectedValues) )
                            <div>
                                <span class="option-indicator {{ $item['class'] ?? '' }}">{{ $item['title'] }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    @endif

    @if ($this->state == 'ItemEdit' || $this->state == 'NewEdit')

        <div class="{{ count($this->classList) ? implode(' ', $this->classList) : ' row mb-4 ' }} 
                    {{ $this->isValid === true ? 'was-validated' : '' }}"
                     >
            <label for="elem{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9">
                <ul class="form-group">
                    <li class="select-client" wire:ignore>
                        <select 
                                name="{{ $this->name }}"
                                id="elem{{ $this->name }}"
                                class="form-control select2-style1 select2-hidden-accessible" data-placeholder="Choose One"
                                @if ($this->itemOptions['max-count'] > 1) multiple="multiple" @endif tabindex="-1">
                            <option label="Choose one"></option>

                            @if($this->itemOptions['is-relation'])
                                @foreach ($this->possibleValues as $item)
                                    <option value="{{ $item->id }}"
                                            {{ in_array($item->id, $this->selectedValues) ? 'selected' : '' }}
                                            @if( $item['class'] ?? false )
                                                class="{{ $item['class'] }}"
                                        @endif
                                    >
                                        {{ $item['title'] }}
                                    </option>
                                @endforeach
                            @else
                                @foreach ($this->possibleValues as $id => $item)
                                    <option value="{{ $id }}"
                                        {{ in_array($id, $this->selectedValues) ? 'selected' : '' }}
                                        @if( $item['class'] ?? false )
                                            class="{{ $item['class'] }}"
                                        @endif
                                        >
                                        {{ $item['title'] }}
                                    </option>
                                @endforeach
                            @endif


                        </select>


                    </li>
                </ul>
            </div>

        </div>

    @endif

    @if ($this->state == 'ListShow')
        <div>

            @if ($this->listOptions['link'])

                @if ($this->selectedValues)
                    @foreach ($this->selectedValues as $item)
                        <a type="button" href="{{ str_replace('{id}', $item['id'], $this->listOptions['link']) }}"
                            class="selector-item btn btn-outline-primary mt-1 mb-1 me-3">
                            <span>{{ $item['title'] }}</span>
                        </a>
                    @endforeach
                @endif

            @else

                @if($this->itemOptions['is-relation'])
                    @foreach ($this->possibleValues as $id => $item)
                        @if( in_array($item->id, $this->selectedValues) !== false )
                            <span class="">
                                <span
                                    class="selector-indicator {{ $item['class'] ?? '' }}"> {{ $item['title'] ?? '' }}
                                </span>
                            </span>
                        @endif
                    @endforeach
                @else
                    @foreach ($this->possibleValues as $id => $item)
                        @if( in_array($id, $this->selectedValues) !== false )
                            <span class="">
                                <span
                                    class="selector-indicator {{ $item['class'] ?? '' }}"> {{ $item['title'] ?? '' }}
                                </span>
                            </span>
                        @endif
                    @endforeach
                @endif



            @endif

        </div>
    @endif


    @if ($this->state == 'ListEdit')
        <div class="{{ implode(' ', $this->classList) }} @if ($this->isValid === true) was-validated @endif">
            not implemented yet
        </div>
    @endif

    @if ($this->state == 'Filter')
        <div class="col-md-3">
            <label class="form-label">{{ $this->itemOptions['title'] }}</label>
            <select id="elem{{ $this->elementId }}"
                    class="form-control select2-style1 select2-hidden-accessible" data-placeholder="Choose One"
                    tabindex="-1"

            >
                <option label="Choose one"></option>
                @foreach ($this->possibleValues as $id => $item)
                    <option value="{{ $id }}"
                            {{ in_array($id, $this->selectedValues) ? 'selected' : '' }}
                            @if( $item['class'] ?? false )
                                class="{{ $item['class'] }}"
                        @endif
                    >
                        {{ $item['title'] }}
                    </option>
                @endforeach
            </select>

        </div>
    @endif

    <script>

        document.addEventListener("DOMContentLoaded", (event) => {

            @if($this->itemOptions['max-count'] > 1)
                var data = @json($this->getDBFriendlyValue());
            @else
                var data = @json($this->getDBFriendlyValue());
            @endif

            master.registerElement("{{ $this->name }}", data, (value) => 
                {
                    var id = 'elem{{ $this->name }}';
                    $("#"+id)
                        .val(value)
                        .select2({
                            templateResult: formatOption,
                            templateSelection: formatOption,
                            dropdownCssClass: "{{ $this->itemOptions['searchable'] ? 'is-searchable' : '' }}",
                        }).on('change', function (e) {
                            var data = $(this).val();
                            master.setElementValue("{{ $this->name }}", data);
                        })

                }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
            ); 

        });

        function formatOption(option) {
            if (!option.id) {
                return option.text; // If it's a placeholder, just return the text
            }

            // Get the original option element
            var $option = $(option.element);

            // Create a new span element with the class from the original option
            var $span = $('<span class="option-indicator">' + option.text + '</span>');
            $span.addClass($option.attr('class')); // Add the class from <option>

            return $span;
        }

    </script>



    @pushonce('scripts')
        <script>

/*
           

            function formatOption(option) {
                if (!option.id) {
                    return option.text; // If it's a placeholder, just return the text
                }

                // Get the original option element
                var $option = $(option.element);

                // Create a new span element with the class from the original option
                var $span = $('<span class="option-indicator">' + option.text + '</span>');
                $span.addClass($option.attr('class')); // Add the class from <option>

                return $span;
            }
*/
        </script>
    @endpushonce

</div>