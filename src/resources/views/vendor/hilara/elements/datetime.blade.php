<div>
@if ($this->state == 'ItemShow' || $this->state == 'NewShow')
    @if( $this->itemOptions['include-label'] == true )
        <div class="row mb-4 datetime-field">
            <label class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            @endif
            <div class="col-md-3 datetime-itemshow" style="direction: ltr">
                <div class="datetime-val p-0">{{ $this->value }}</div>
            </div>
            @if( $this->itemOptions['include-label'] == true )
        </div>
    @endif
@endif

@if ($this->state == 'ItemEdit' || $this->state == 'NewEdit')

    @if( $this->itemOptions['include-label'] == true )
        <div
            class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else row mb-4 @endif @if ($this->isValid === true) was-validated @endif">
            <label for="{{ $this->elementId }}" class="col-md-3 form-label">{{ $this->itemOptions['title'] }}</label>
            <div class="col-md-9">
                @endif

                <div id="date1-datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                    <span class="input-group-addon input-group-text bg-primary-transparent">
                        <i class="fe fe-calendar text-primary-dark"></i>
                    </span>
                    <input class="form-control task-start-date"
                        id="dtpicker-{{ $this->name }}"
                        data-jdp type="text"
                        placeholder="{{ $this->itemOptions['placeholder'] }}"
                        wire:model="value">
                </div>

                @if( $this->itemOptions['include-label'] == true )
            </div>
        </div>
    @endif
@endif

@if ($this->state == 'ListShow')
    <div class="datetime-field">
        @if ($this->listOptions['link'])
            <a href="{{ $this->listOptions['link'] }}"> {{ $this->value }} </a>
        @else
            <div class="datetime-container">
                <i class="ion-arrow-swap" wire:click.prevent="changeCalendarType"></i>
                {{ $this->value }}
            </div>
        @endif

    </div>
@endif


@if ($this->state == 'ListEdit')
    <div class="{{ implode(' ', $this->classList) }} @if ($this->isValid === true) was-validated @endif">
        <input type="text" class="form-control @if ($this->isValid === false) is-invalid @endif"
               value="{{ $this->value }}" wire:model.blur="value">
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

        master.registerElement("{{ $this->name }}", @json($this->value), (value) => 
            {
                var id = 'dtpicker-{{ $this->name }}';
                $("#"+id).on('change', function (e) {
                    master.setElementValue("{{ $this->name }}", $(this).val());
                })

            }, {{ $this->itemOptions['multilingual'] ? 'true' : 'false' }}
        ); 

    });

</script>


@push('styles')
    <style>

    </style>
@endpush


@pushonce('scripts')
    <script src="{{ asset('vendor/hilara/js/amazeui.datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/hilara/js/jalalidatepicker.min.js') }}"></script>
    <link href="{{ asset('vendor/hilara/css/jalalidatepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/hilara/fonts/vazir/Vazirmatn-font-face.css') }}" rel="stylesheet">
@endpushonce


@push('scripts')

    @if( $this->calendarType == 'shamsi')
        <script>
            jalaliDatepicker.startWatch({time: true});
        </script>
    @elseif( $this->calendarType == 'gregorian')
        <script>
            $('#dtpicker-{{ $this->name }}').datetimepicker({
                format: 'yyyy-mm-dd hh:ii',
                autoclose: true
            }); 
        </script>
    @endif

@endpush

</div>