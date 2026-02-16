@extends('layouts.helloapp')
@section('title', 'Person.index')
@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>person</th><th>board</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->getData() }}</td>
            <td>@if ($item->board != null)
                <table width="100%">
                    @foreach ($item->board as $b)
                    <tr><td>{{ $b->getData() }}</td></tr>
                    @endforeach
                </table>
                @endif
            </td>
        </tr>
        @endforeach
        </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
