@extends('layouts.app')

@section('content')


<div class="col-12">
    <!-- Main Content -->
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>Login</h2>
        </div>
    </div>
    <main class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label ml-2">Remember Me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Main Content -->
</div>


