@extends('layouts.main')

@section('page.title', 'Авторизация')

@section('main.content')
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <x-card>
                <x-card-header>
                    <x-card-title>
                        {{ __('Вход') }}
                    </x-card-title>
                </x-card-header>
                <x-card-body>
                    <x-form action="{{ route('login.store') }}" method="POST">
                        <x-form-item>
                            <x-label required>{{ __('Email') }}</x-label>
                            <x-input type="email" name="email" autofocus/>
                        </x-form-item>
                        
                        <x-form-item>
                            <x-label required>{{ __('Пароль') }}</x-label>
                            <x-input type="password" name="password"/>
                        </x-form-item>

                        <x-form-item>
                            <x-checkbox name="remember">
                                {{ __('Запомнить меня') }}
                            </x-checkbox>
                        </x-form-item>

                        <x-button>
                            {{ __('Войти') }}
                        </x-button>
                    </x-form>
                </x-card-body>
            </x-card>
        </div>
    </div>
@endsection