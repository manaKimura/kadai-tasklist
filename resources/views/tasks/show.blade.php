@extends('layouts.app')

@section('content')

    <h1>id番号{{ $task->id }} の タスク詳細ページ</h1>
    <p>状況: {{ $task->status }}</p><p>タスク内容: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method'=>'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
