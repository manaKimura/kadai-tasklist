@extends('layouts.app')

@section('content')

    <h1>タスク作成ページ</h1>
    
     @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', '状況:') !!}
        {!! Form::select('status',[
            '完了' => '完了',
            '作業中' => '作業中',
            '途中' => '途中',
            '保留' => '保留']
            ) !!}
        
        {!! Form::submit('投稿') !!}
    {!! Form::close() !!}

@endsection
