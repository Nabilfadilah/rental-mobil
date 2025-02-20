@extends('layout.template')

@section('title', 'Transaksi')

@section('content')
    @livewire('LihatTransaksi')
    @livewire('TransaksiComponent')
@endsection
