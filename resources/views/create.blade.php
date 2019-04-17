<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Validation Sample</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h1>バリデーションサンプル</h1>
        <br>
        <!-- 登録フォーム -->
        {!! Form::open() !!}
            <div class="col-4">
                <div class="form-group">
                    <div>
                    {!! Form::label('label1', '必須入力') !!}
                    {!! Form::text('text1', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('text1'))
                        <p class='error-string'>{{ $errors->first('text1') }}</p>
                    @endif
                    </div>
                    {!! Form::label('label2', 'メールアドレス') !!}
                    {!! Form::text('text2', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('text2'))
                        <p class='error-string'>{{ $errors->first('text2') }}</p>
                    @endif
                    {!! Form::label('label3', '数値（1〜100）') !!}
                    {!! Form::text('text3', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('text3'))
                        <p class='error-string'>{{ $errors->first('text3') }}</p>
                    @endif
                    {!! Form::label('label4', '文字数制限（5文字以内）') !!}
                    {!! Form::text('text4', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('text4'))
                        <p class='error-string'>{{ $errors->first('text4') }}</p>
                    @endif
                    {!! Form::label('label5', '必須選択') !!}
                    <div class="radio">
                        <label>{!! Form::radio('radio1', '1') !!}&nbsp;男性</label>
                        <label>{!! Form::radio('radio1', '2') !!}&nbsp;女性</label>
                    </div>
                    @if ($errors->has('radio1'))
                        <p class='error-string'>{{ $errors->first('radio1') }}</p>
                    @endif
                    {!! Form::label('label6', '英語のみ') !!}
                    {!! Form::text('text6', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('text6'))
                        <p class='error-string'>{{ $errors->first('text6') }}</p>
                    @endif
                </div>
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
        {!! Form::close() !!}

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>