@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    

    
        {!! Form::model($message, ['route' => 'messages.store'])!!}
    <div class="row">
        <div class="col-xs-6">
             <div class="form-group">
                {!! Form::label('content','タイトル:') !!}
                {!! Form::text('title',null,['class' => 'form-control']) !!}
            </div>
        
            <div class="form-group">
                {!! Form::label('content','メッセージ:') !!}
                {!! Form::text('content',null,['class' => 'form-control'] !!}
            </div>
        
            {!! Form::submit('投稿', ['class => 'btn btn-primary']) !!}
    
        {!! Form::close() !!}
      </div>
    </div>

        {{ '<p style="color: red; ">htmlentities 関数に通した場合</p>' }}
        {!! '<p style="color: red; ">htmlentities 関数に通さなかった場合</p>' !!}


@endsection