@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Admin Home page
                </div>
                <div class="btn btn-default pull-right">
                      <a href="{{ route('admin.logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
