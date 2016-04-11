@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="col-sm-12 col-md-8">
                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="alert alert-danger">Ничего нет!</div>
            </div>
            <div class="col-sm-12 col-md-4">

                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-red">Связаться с нами</div>
                    <div class="panel-body">
                        <form action="/feedback" method="post" id="feedback">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Ваш e-mail" required>
                            </div>
                            <div class="form-group">
                                <textarea name="text" name="message" class="form-control" rows="10" placeholder="Ваше сообщение" required></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-danger">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>



        </div>
    </div>

@endsection