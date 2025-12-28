 
    <div class="@if (count($this->classList)) {{ implode(' ', $this->classList) }}@else row mb-4 @endif ">

        <div class="py-5">
            <div class="btn-list ">
                <!-- <a href="javascript:void(0)" class="btn btn-danger">Cancel</a> -->
                <a href="javascript:void(0)" class="btn btn-primary" wire:click="saveArrangement()">Save Arrangement</a>
            </div>
        </div>

        <div aria-multiselectable="false" class="accordion-primary mb-2" id="accordion0" parent-id="0" role="tablist">
            
            @foreach( $this->level1List as $index => $item)
            <div class="card draggable mb-0 mt-2" item-id="{{ $item->id }}">
                <div class="card-header border-bottom-0" role="tab">
                    <div class="accor-style2 px-3 {{ $this->level1Index == $item->id ? '' : 'collapsed' }}" data-bs-toggle="collapse" wire:click="selectLevel1('{{ $item->id }}')"  >
                        <i class="fe openclose me-2"></i>
                        <span class="handle0">{{ $item->name }}</span>
                    </div>
                    <div class="p-3">
                        <a href="{{ route('admin.categories.edit' , ['id' => $item->id ] ) }}" class="btn btn-primary py-0" >
                            Edit
                        </a>
                    </div>
                </div>
                <div  class="collapse {{ $this->level1Index == $item->id ? 'show' : '' }}"  role="tabpanel" style="">
                    <div class="card-body">

                            @if( $this->level1Index == $item->id )
                            <div aria-multiselectable="false" class="accordion-primary mb-2" id="accordion1" parent-id="{{ $item->id }}" role="tablist">
                            
                                @foreach( $this->level2List as $index => $item)
                                <div class="card mb-0 mt-2" item-id="{{ $item->id }}">
                                    <div class="card-header border-bottom-0"   role="tab">
                                        <div class="accor-style2 px-3 {{ $this->level2Index == $item->id ? '' : 'collapsed' }}"    data-bs-toggle="collapse" href="#"  wire:click = "selectLevel2('{{ $item->id }}')"  >
                                            <i class="fe openclose me-2"></i>
                                            <span class="handle1">{{ $item->name }}</span>
                                        </div>
                                        <div class="p-3">
                                            <a href="{{ route('admin.categories.edit' , ['id' => $item->id ] ) }}" class="btn btn-primary py-0" >
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div  class="collapse {{ $this->level2Index == $item->id ? 'show' : '' }}"    role="tabpanel" style="">
                                        <div class="card-body">

                                            @if( $this->level2Index == $item->id )
                                            <div aria-multiselectable="false" class="accordion-primary mb-2 " id="accordion2" parent-id="{{ $item->id }}" role="tablist">
                                                @foreach( $this->level3List as $index => $item)
                                                <div class="card mb-0 mt-2" item-id="{{ $item->id }}">
                                                    <div class="card-header border-bottom-0"  role="tab">
                                                        <div class="accor-style2 px-3 {{ $this->level3Index == $item->id ? '' : 'collapsed' }}"   data-bs-toggle="collapse" href="#"  wire:click = "selectLevel3('{{ $item->id }}')" >
                                                            <i class="fe openclose me-2"></i>
                                                            <span class="handle2">{{ $item->name }}</span>
                                                        </div>
                                                        <div class="p-3">
                                                            <a href="{{ route('admin.categories.edit' , ['id' => $item->id ] ) }}" class="btn btn-primary py-0" >
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div   class="collapse {{ $this->level3Index == $item->id ? 'show' : '' }}"    role="tabpanel" style="">
                                                        <div class="card-body">

                                                            @if( $this->level3Index == $item->id )
                                                            <div aria-multiselectable="false" class="accordion-primary mb-2" id="accordion3" parent-id="{{ $item->id }}" role="tablist">
                                                            @foreach( $this->level4List as $index => $item)
                                                                <div class="card mb-0 mt-2" item-id="{{ $item->id }}">
                                                                    <div class="card-header border-bottom-0"  role="tab">
                                                                        <div class="accor-style2 px-3 {{ $this->level4Index == $item->id ? '' : 'collapsed' }}"    data-bs-toggle="collapse" href="#" wire:click = "selectLevel4('{{ $item->id }}')" >
                                                                            <i class="fe openclose me-2"></i>
                                                                            <span class="handle3">{{ $item->name }}</span>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <a href="{{ route('admin.categories.edit' , ['id' => $item->id ] ) }}" class="btn btn-primary py-0" >
                                                                                Edit
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div   class="collapse {{ $this->level4Index == $item->id ? 'show' : '' }}"  role="tabpanel" style="">
                                                                        <div class="card-body">

                                                                        @if( $this->level4Index == $item->id )
                                                                            @foreach( $this->level5List as $index => $item)


                                                                            
                                                                            @endforeach
                                                                        @endif


                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            @endif


                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif


                                        </div>
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                            @endif


                    </div>
                </div>
                
            </div>
            @endforeach
        </div>

    
        
    <style>

        .accordion-primary .card-header a {
            background-color: transparent;
            color:#2a2a2a;
        }

        .accordion-primary .card-header a:hover, .accordion-primary .card-header a:focus {
            color:#2a2a2a;
            font-weight:bold;
        }

        .accordion-primary .card {
            background-color: rgb(85 140 185 / 12%);
        }

        .accor-style2 {
            font-weight: bold;
        }  

        .accor-style2.collapsed {
            font-weight: normal;
        }  
        
        .card-header{
            justify-content: space-between;
        }

        .card-header .collapsed .openclose:before {
            content: "\e9b0";
        }        
        
        .card-header .openclose:before {
            content: "\e995";
        }

        .collapse.show .accordion-primary{
            animation: fadeAnim 0.5s ease forwards;
        }

        .container-draggables {
        }

        .handle0,.handle1,.handle2,.handle3,handle4 {
            cursor: grab;
        }

        .openclose{
            cursor: pointer;
        }

        .dragging {
            opacity: 0.5;
        }

        @keyframes fadeAnim {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
    </style>

@push('scripts')
    
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
                       
        document.addEventListener('livewire:init', function () {
            Livewire.on('runCustomScript', function (script) {
                eval(script);
            }); 

            makeSortable('0');
        });

        function makeSortable(index)
        {
            var sortableContainer = document.getElementById('accordion'+index);
            var sortable = new Sortable(sortableContainer, {
                group: 'shared',
                handle: '.handle'+index, 
                animation: 150,
                onEnd: function (evt) {


                    var container = document.getElementById('accordion0');
                    if(container)
                    {
                        var order = Array.from(container.children).map(child => child.getAttribute('item-id'));
                        Livewire.emit('changeSortList', container.getAttribute('parent-id'), order);
                    }
                 
                    var container = document.getElementById('accordion1');
                    if(container)
                    {
                        var order = Array.from(container.children).map(child => child.getAttribute('item-id'));
                        Livewire.emit('changeSortList', container.getAttribute('parent-id'), order);
                    }
                 
                    var container = document.getElementById('accordion2');
                    if(container)
                    {
                        var order = Array.from(container.children).map(child => child.getAttribute('item-id'));
                        Livewire.emit('changeSortList', container.getAttribute('parent-id'), order);
                    }
                 
                    var container = document.getElementById('accordion3');
                    if(container)
                    {
                        var order = Array.from(container.children).map(child => child.getAttribute('item-id'));
                        Livewire.emit('changeSortList', container.getAttribute('parent-id'), order);
                    }
                 
                    var container = document.getElementById('accordion4');
                    if(container)
                    {
                        var order = Array.from(container.children).map(child => child.getAttribute('item-id'));
                        Livewire.emit('changeSortList', container.getAttribute('parent-id'), order);
                    }
                 
                    

                }
            });
        }

    </script>
@endpush



</div>
