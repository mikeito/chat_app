@extends('layouts.app')

@section('content')

        <chat :auth="{{ auth()->user() }}"/>

@endsection
