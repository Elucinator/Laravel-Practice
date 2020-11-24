@extends('layouts.app')

@section('content')
<div class="title">{{ $name }} {{ $age }} {{ $education }}</div>
@endsection

@section('footer')
<script>console.log('custom javascript only in contact page.')</script>
@endsection