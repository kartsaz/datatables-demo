@extends('master')

@section('body')

    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <b>Clicking 'Export' gives error:</b>
        Attempt to read property "preventExport" on int
    </div>

    <livewire:datatable model="App\Models\User" exportable />

@endsection
