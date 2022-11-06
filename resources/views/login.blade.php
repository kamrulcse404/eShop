@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-sm-center">
            <div class="col-sm-4">
                <h3 class="text-center" style="color: #ee5253">Log in</h3>
            </div>
        </div>
        <div class="row justify-content-sm-center">
            <div class="col-sm-4">
                <form>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
@endsection
