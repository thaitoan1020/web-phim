@extends('log')

@section('log')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{ asset('public/admin/images/icon/logo.png')}}" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="text" class="au-input au-input--full {{ ($errors->has('email') || $errors->has('username')) ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Tên đang nhập/ email" required>
                            @if ($errors->has('email') || $errors->has('username'))
                                <span class="invalid-feedback" role="alert"><strong>{{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mặt khẩu</label>
                            <input type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" placeholder="Mật khẩu" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
