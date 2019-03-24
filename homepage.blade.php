@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Have you filled out yet?') }}</div>

                <div class="card-body">
                    <form action="{{ url('/information') }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">


                                    <form action="{{ route('information.index') }}">
                                <label for="check" class="col-md-5 col-form-label text-md-right">{{ __('I still not done') }}</label>
                                <button type="submit"  class="btn btn-primary" style="width:200px;height:50px">
                                    {{ __('Sign up') }}
                                </button><br><br>
                                    </form>

                                    <form action="{{ url('/continue') }}">
                                <label for="check2" class="col-md-5 col-form-label text-md-right">{{ __('I have done') }}</label>
                                <button type="submit"  class="btn btn-success "style="width:200px;height:50px">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
