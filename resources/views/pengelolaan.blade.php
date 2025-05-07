@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1>Data Produk</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item['nama'] }}</td>
                <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
@endsection