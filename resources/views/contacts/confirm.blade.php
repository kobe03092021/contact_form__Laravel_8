@php
 $title="お問い合わせ ｜ 確認"
@endphp
@extends('layout')

  @section('content')
<h1 class="text-center mt-2 mb-5">
  お問い合わせ確認
</h1>
<div class="container">
  {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
  {{csrf_field()}}

  <div class="form-group row">
    <p class="col-sm-4 col-form-label">氏名(10文字以内)<span class="badge badge-danger ml-1">必須</span></p>
    <div class="col-sm-8">
      {{ $inputs['name'] }}
    </div>
    <input type="hidden" name="name" value="{{ $inputs['name'] }}"
  </div>

  <div class="form-group row">
    <p class="col-sm-4 col-form-label">メール<span class="badge badge-danger ml-1">必須</span></p>
    <div class="col-sm-8">
      {{$inputs['email']}}
    </div>
    <input type="hidden" name="email" value="{{ $inputs['email'] }}"
  </div>

  <div class="form-group row">
    <p class="col-sm-4 col-form-label">電話番号<span class="badge badge-danger ml-1">必須</span></p>
    <div class="col-sm-8">
      {{ $inputs['tel'] }}
    </div>
    <input type="hidden" name="tel" value="{{ $inputs['tel'] }}"
  </div>
  <div class="form-group row">
    <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
    <div class="col-sm-8">
      {{ $inputs['gender'] }}
    </div>
    <input type="hidden" name="gender" value="{{ $inputs['gender'] }}"
  </div>

  <div class="form-group row">
    <p class="col-sm-4 col-form-label">問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
    <div class="col-sm-8">
      {{$inputs['contents']}}
    </div>
    <input type="hidden" name="contents" value="{{ $inputs['contents'] }}"
  </div>

  <div class="text-center">
    <button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
    <button name="action" type="submit" value="submit" class="btn btn-dark">送信</button>
  </div>

  {!! Form::close() !!}
@endsection