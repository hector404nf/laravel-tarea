@extends('layouts.clientes')

@section('template_title')
    Create Ciudad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Ciudad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ciudads.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ciudad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
