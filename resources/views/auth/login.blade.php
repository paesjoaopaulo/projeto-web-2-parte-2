@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form class="form" id="frmLogin" action="{{route('login')}}" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>
                    {{csrf_field()}}
                </fieldset>
            </form>
        </div>
        <div class="col-md-6">

        </div>
    </div>
@endsection