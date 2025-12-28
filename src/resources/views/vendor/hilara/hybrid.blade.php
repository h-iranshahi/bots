@extends('hilara::layouts.admin')

@section('content')

    @if( $containerType == 'master')
        
        @livewire('hilara::components.master', [
            'moduleName' => $moduleName,
            'modelName' => $modelFullName,
            'formName' => $formFullName,
            'itemId' => isset($id) ? $id : null,
        ])

    @elseif( $containerType == 'treeview')

        @if(isset($id))
            
            @livewire('hilara::components.master', [
                'moduleName' => $moduleName,
                'modelName' => $modelFullName,
                'formName' => $formFullName,
                'itemId' => isset($id) ? $id : null,
            ])

        @else

            @livewire('hilara::components.treeview', [
                'moduleName' => $moduleName,
                'entityFullName' => $modelFullName,
            ])
            
        @endif

    @endif

@endsection
