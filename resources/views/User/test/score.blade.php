@extends('User.layouts.layout')

@section('content')

<section class="content-header">
    <h1>テスト名</h1>
</section>

<section class="content">
  <div class="box tabs-box">
    <div class="box-body tabs-box-body">
      <div class="nav-tabs-custom nav-tabs-left">

        <ul class="nav nav-tabs">
{{--          @foreach($test->questions as $question)--}}
{{--            <li class="@if($question->id == $questionId) active @endif"><a href="{{ route('user.testScore', ['id' => $question->test_id, 'question_id' => $question->id]) }}">{{ $question->title }}</a></li>--}}
{{--          @endforeach--}}
            <li class="active">
                <a href="#1">testtitle</a>
            </li>
        </ul>

        <div class="tab-content">
{{--          @foreach($test->questions as $question)--}}
{{--          <div class="tab-pane @if($question->id == $questionId) active @endif" id="tab_{{ $loop->iteration }}">--}}
{{--            @include('User.tests.detail',[$question])--}}
{{--          </div>--}}
{{--          @endforeach--}}

            <div class="tab-pane active" id="1">
{{--                @include('User.tests.detail',[$question])--}}
                @include('User.test.detail')
            </div>
        </div><!-- /.tab-content -->

      </div><!-- nav-tabs-custom -->
    </div>
  </div>
</section>





@endsection
