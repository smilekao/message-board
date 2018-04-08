@extends('layouts.app')

@section('content')

    <table class="table table-bordered">

        <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>
        <p>{{ $message->content }}</p>
    
            <tr>
                <th>id</th>
                <td>{{ $message->id }}</td>
            </tr>
            <tr>
                <th>タイトル</th
              <td>{{ $message->title }}</td>
            </tr>
            <tr>
                <th>メッセージ</th>
                <td>{{ $message->content }}</td>
            </tr>
    </table>
    
    {!! link_to_route('messages.edit','このメッセージ編集', ['id' => $message->id]) !!}
    
    {!! Form::model($message, ['route' => ['messages.destroy',$message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    

@endsection
