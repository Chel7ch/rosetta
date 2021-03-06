@extends('layouts/app')

@section('title', 'Русские слова')

@include('navbar.ruNavbar')

{{-- вывод списка слов по алфавиту --}}
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-offset-3 col-sm-9">
			@foreach ($words as $word)
			<a href="#myModal{{$word->id}}" data-toggle="modal"><b class="en_word">{{$word->word}}</b></a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;{{$word->translation}}____ {{$word->lesson_num}}<br>
{{--			@include('content.words.components.modal')--}}
			@endforeach

		</div>
	</div>
</div>
@stop
