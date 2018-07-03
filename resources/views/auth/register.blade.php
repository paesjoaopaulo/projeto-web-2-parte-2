@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form class="form" action="{{route('register')}}" id="frmRegister" method="post">
                <fieldset>
                    <legend>Register</legend>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Password confirm">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">
                            <i class="fas fa-user-plus"></i> Register
                        </button>
                    </div>
                    {{csrf_field()}}
                </fieldset>
            </form>
        </div>
        <div class="col-md-6">
            {{$errors}}
        </div>
    </div>
@endsection