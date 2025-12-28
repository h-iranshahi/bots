<div class="main-container container-fluid">
    <!-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. -->
    <link rel="stylesheet" href="{{ asset('vendor/hilara/css/style.css') }}">

    @if (
        ($this->mode == 'item' || $this->mode == 'item+list') &&
            count($forms['item']) &&
            ($this->newItem || $this->itemData))

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">{{ $forms['item']['title'] }}</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <!--
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
                    -->
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        @if( $this->isMultilingual && count($this->languages) >= 2)
            <div class="page-header" style="margin: 0; margin-bottom: -2px; padding: 0 1em;">
                <div class="" >
                    <div class="btn-group admin-language-bar ">
                        @foreach($this->languages as $key => $lang)
                            <button class="btn px-4 {{ $key == $this->selectedLanguage ? 'active' : '' }}" data-lng="{{ $key }}"
                                type="button"  >{{ $lang['title'] }}</button>
                        @endforeach
                    </div>
                    <div class="cover"></div>
                </div>
            </div>
        @endif

        <!-- ITEM ROW OPEN -->
        <form wire:submit="storeItem(master.getData())" method="post" id="formitem">

            <div class="row">
                @foreach ($forms['item']['blocks'] as $key => $block)
                    <div class="@if ($block['class']) {{ $block['class'] }}@else col-xm-12 @endif">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">
                                    @if (isset($block['title']))
                                        {{ $block['title'] }}
                                    @endif
                                </h3>
                            </div>
                            <div id="blockName{{ $key }}" class="card-body">

                                @if (isset($block['description']) && $block['description'] )
                                    <p class="text-muted mb-5">{!! $block['description'] !!}</p>
                                @endif


                                @foreach ($block['elements'] as $elemKey => $element)

                                    @if (isset($element['description']) && $element['description'])
                                        <p class="text-muted my-3">{!! $element['description'] !!}</p>
                                    @endif

                                    @livewire('hilara::elements.' . $element['type'],[
                                    'mode' => 'item',
                                    'moduleName' => $this->moduleName,
                                    'entityName' => $this->entityName,
                                    'entityFullName' => $this->entityFullName,
                                    'formName' => $this->formName,
                                    'name' => $elemKey,
                                    'value' => isset($this->itemData[$elemKey]) ? $this->itemData[$elemKey] : '',
                                    //'value' => isset($this->itemData[$elemKey]) ?
                                    //(in_array($elemKey,$this->translatableFields) ?
                                    //$this->itemObject->getTranslatedAttribute($elemKey,$this->selectedLanguage) :
                                    //$this->itemData[$elemKey] ) : '',
                                    'itemOptions' => $element,
                                    'listOptions' => $forms['listElements'][$elemKey] ?? [],
                                    'itemId' => $this->itemId,
                                    //'rowData' => $this->itemData,
                                    //'rowObject' => $this->itemObject,
                                    'language' => $this->selectedLanguage,
                                    'state' => $this->determineElementState('item', $element, [], $this->itemId)
                                    ],key('master_item_' . $elemKey))
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- ITEM ROW CLOSE -->

            <!-- BUTTONS ROW OPEN -->
            <div class="row">
                <div class="btn-list my-5">

                    @if (in_array('back', $forms['item']['buttons']) || in_array('back', array_keys($forms['item']['buttons'])))
                        <a href="{{ route($forms['routes']['list']) }}" class="btn btn-light" ><i
                                class="fe fe-corner-down-left"></i>{{ translate('BUTTONS_BACK_TITLE') }}</a>
                    @endif

                    @if (in_array('save', $forms['item']['buttons']) || in_array('save', array_keys($forms['item']['buttons'])))
                        <button type="button"  wire:click.prevent="storeItem(master.getData())" class="btn btn-radius btn-primary" tabindex="-1"><i
                                class="fe fe-check-circle"></i>{{ translate('BUTTONS_SAVE_TITLE') }}</button>
                    @endif


                    <!--
                    <a class="btn btn-radius btn-secondary" wire:click="$refresh"> &nbsp; &nbsp; &nbsp; Refresh &nbsp; &nbsp; &nbsp;</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-success">Success</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-info">Info</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-warning">Warning</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-danger">Danger</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-dark">Dark</a>
                    -->
                </div>
            </div>
            <!-- BUTTONS ROW CLOSE -->

        </form>

    @endif




    @if (($this->mode == 'list' || $this->mode == 'item+list') && count($forms['list']))

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">{{ $forms['list']['title'] }}</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <!--
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
                    -->
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- LIST ROW OPEN -->
        <form method="post" id="formlist">
            <div class="row row-sm">
                @foreach ($forms['list']['blocks'] as $block)
                    <div class="col-lg-12 {{ $block['class'] }}">
                        
                        @if(count($forms['filterElements']))
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class=" row mb-4  ">
                                    @foreach ($forms['filterElements'] as $elemKey => $element)
                                        @livewire('hilara::elements.' . $forms['elements'][$elemKey]['type'] ?? '',
                                            [
                                            'mode' => 'filter',
                                            'moduleName' => $this->moduleName,
                                            'entityName' => $this->entityName,
                                            'entityFullName' => $this->entityFullName,
                                            'formName' => $this->formName,
                                            'name' => 'filter__' . $elemKey,
                                            'value' => '',
                                            'listOptions' => $element,
                                            'itemOptions' => $forms['elements'][$elemKey] ?? [],
                                            'language' => $this->selectedLanguage,
                                            'state' =>
                                            $this->determineElementState('filter', ($forms['elements'][$elemKey] ?? []), $element, null)
                                            ],
                                        key('master_filter_' . $elemKey))
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="user-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="user-datatable"
                                                       class="table table-bordered dataTable no-footer" role="grid"
                                                       aria-describedby="user-datatable_info">
                                                    <thead>
                                                    <tr role="row">

                                                        @if (count($forms['list']['buttons']))
                                                            <th class="inbox-small-cells p-3" style="width:20px;">
                                                                <label
                                                                    class="custom-control custom-checkbox p-3 m-0"
                                                                    style="width:20px;">
                                                                    <input type="checkbox"
                                                                           class="custom-control-input"
                                                                           name="example-checkbox2" value="option2">
                                                                    <span class="custom-control-label"></span>
                                                                </label>
                                                            </th>
                                                        @endif

                                                        @if ($lc = 0) @endif
                                                        @foreach ($block['elements'] as $elemKey => $element)
                                                            <th @if ($element['sortable'] == 1) wire:click="sort({{ ++$lc }})"
                                                                @endif
                                                                class="field-{{ $elemKey }}  @if ($element['sortable'] == 1) sorting @if ($elemKey == $this->sortCol && $this->sortDir == 'asc') sorting_desc @endif @if ($elemKey == $this->sortCol && $this->sortDir == 'desc') sorting_asc @endif @endif"
                                                                tabindex="0" aria-controls="user-datatable"
                                                                rowspan="1" colspan="1" aria-sort=""
                                                                aria-label="" style="">
                                                                {{ $element['title'] }}
                                                            </th>
                                                        @endforeach

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($this->listData as $i => $rowData)
                                                        <tr
                                                            class="@if ($loop->index % 2 == 0) even @else odd @endif">

                                                            @if (count($forms['list']['buttons']))
                                                                <td class="inbox-small-cells p-3"
                                                                    style="width:20px;">
                                                                    <label
                                                                        class="custom-control custom-checkbox p-3 m-0"
                                                                        style="width:20px;"
                                                                        title="{{ $rowData['id'] }}">
                                                                        <input type="checkbox"
                                                                               class="custom-control-input"
                                                                               name="cid__{{ $rowData['id'] }}"
                                                                               value="1">
                                                                        <span class="custom-control-label"></span>
                                                                    </label>
                                                                </td>
                                                            @endif

                                                            @foreach ($block['elements'] as $elemKey => $element)
                                                                <td class="{{ $element['align'] == 'center' ? 'text-center' : '' }} field-{{ $elemKey }} sorting_1">

                                                                    @livewire('hilara::elements.' .
                                                                    $forms['elements'][$elemKey]['type'] ?? '',
                                                                    [
                                                                    'mode' => 'list',
                                                                    'moduleName' => $this->moduleName,
                                                                    'entityName' => $this->entityName,
                                                                    'entityFullName' => $this->entityFullName,
                                                                    'formName' => $this->formName,
                                                                    'name' => $elemKey,
                                                                    'value' => isset($rowData[$elemKey]) ?
                                                                    $rowData[$elemKey] : null,
                                                                    'listOptions' => $element,
                                                                    'itemOptions' => $forms['elements'][$elemKey] ?? [],
                                                                    'itemId' => $rowData['id'],
                                                                    'language' => $this->selectedLanguage,
                                                                    'state' => $this->determineElementState('list',($forms['elements'][$elemKey] ?? []),$element,$rowData['id'])
                                                                    ],
                                                                    key('master_list_' . $rowData['id'] . $elemKey))

                                                                </td>
                                                            @endforeach

                                                        </tr>
                                                    @endforeach


                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>

                                        @if($this->pageInfo['last_page'] > 1)
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10">
                                                <div class=" paging_simple_numbers" id="user-datatable_paginate">

                                                    <ul class="pagination">
                                                        @foreach ($this->pageInfo['links'] as $linkItem)
                                                            <li
                                                                class="page-item @if ($linkItem['active']) active @endif @if (!$linkItem['url']) disabled @endif">
                                                                <a href="{{ $linkItem['url'] }}"
                                                                   tabindex="{{ $loop->index }}" class="page-link"
                                                                   wire:click.prevent="selectPage({{ $linkItem['page'] }})">

                                                                    @if (html_entity_decode($linkItem['label']) == 'Next »')
                                                                        {{ translate('PAGINATION_NEXT') }}
                                                                    @elseif(html_entity_decode($linkItem['label']) == '« Previous')
                                                                        {{ translate('PAGINATION_PREVIOUS') }}
                                                                    @else
                                                                        {{ html_entity_decode($linkItem['label']) }}
                                                                    @endif

                                                                </a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-2 row perpage-container">
                                                <div class="label" role="status" aria-live="polite">
                                                    {{ translate("PAGINATION_SHOWING") }}
                                                    {{ ($this->pageInfo['current_page'] - 1) * $this->perPage + 1 }}
                                                    {{ translate("PAGINATION_TO") }}
                                                    @if ($this->perPage >= $this->pageInfo['total'])
                                                        {{ $this->pageInfo['total'] }}
                                                    @endif
                                                    @if ($this->perPage < $this->pageInfo['total'])
                                                        {{ $this->pageInfo['current_page'] * $this->perPage }}
                                                    @endif
                                                    {{ translate("PAGINATION_OF") }}
                                                    {{ $this->pageInfo['total'] }}
                                                </div>
                                                <div class="selector" id="">
                                                    <select name="perPage" id="perPage" class="form-select"
                                                            wire:model.blur="perPage">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- LIST ROW CLOSED -->


            <!-- BUTTONS ROW OPEN -->
            <div class="row mt-5 mb-5">
                <div class="btn-list ">

                    @if (in_array('delete', $forms['list']['buttons']) || in_array('delete', array_keys($forms['list']['buttons'])))
                        <a type="button" wire:click.prevent="delete(formData('formlist'))" class="btn btn-light"><i
                                class="fe fe-trash"></i>{{ translate('BUTTONS_DELETE_ITEM_TITLE') }}</a>
                    @endif

                    @if (in_array('add', $forms['list']['buttons']) || in_array('add', array_keys($forms['list']['buttons'])))
                        <a type="button" href="{{ route($forms['routes']['item'], ['id' => 'add']) }}" class="btn btn-primary"><i
                                class="fe fe-plus"></i>{{ translate('BUTTONS_ADD_ITEM_TITLE') }}</a>
                    @endif

                    @foreach($forms['list']['buttons'] as $button)
                        @if( is_array($button) )
                            <a type="button" wire:click.prevent="button('{{ $button['name'] }}')"
                               class="{{ $button['class'] ? $button['class'] : 'btn btn-light' }}">
                                @if( isset($button['icon']) )
                                    <i class="{{ $button['icon'] }}"></i>
                                @endif
                                {{ $button['title'] }}</a>
                        @endif
                    @endforeach

                    <!--
                    <a href="javascript:void(0)" class="btn btn-radius btn-secondary">Secondary</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-success">Success</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-info">Info</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-warning">Warning</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-danger">Danger</a>
                    <a href="javascript:void(0)" class="btn btn-radius btn-dark">Dark</a>
                    -->
                </div>
            </div>
            <!-- BUTTONS ROW CLOSE -->

        </form>

    @endif

    <script src="{{ asset('vendor/hilara/js/master.js') }}"></script>

    <script>

        // onload listener
        window.addEventListener('OnPageLoad', e => {

            if (e.detail.pushStateUrl) {
                window.history.pushState({}, 'tab', e.detail.pushStateUrl);
            }

        })

        function formData(id) {
            return $('#' + id).serialize()
            //return Object.fromEntries(new FormData(document.getElementById(id)));
        }

        // onchanged filters listener
        //window.addEventListener('OnFilterChanged', e => {
        //    @this.set('newFilter',JSON.stringify(e.detail));
        //})
        
        
    </script>

</div>
