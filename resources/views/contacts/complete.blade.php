@php
 $title='お問い合わせ ｜ 完了'
@endphp
@extends('layout')

@section('content')
  <h1 class="text-center mt-2 mb-5">お問い合わせありがとうな</h1>
  <a href="{{ route('contact') }}" class="btn btn-primary">お問い合わせ入力画面へ戻る</a>
@endsection