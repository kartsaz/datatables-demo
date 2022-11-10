@extends('master')

@section('body')

    <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
        <b>Clicking 'Export' gives QueryException:</b>
        Column not found: 1054 Unknown column 'roles.name' in 'field list'
    </div>

    <livewire:users-table />

@endsection
