@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Add New Company
                </h5>
            </div>

            <div class="card-body">
                <form action="{{ route('companies.store') }}" enctype="multipart/form-data" method="post" id="addCompanyForm">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input value="{{ old('name') }}" placeholder="Microsoft" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="nameHelp">
                        @error('name')
                            <div id="nameHelp" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input value="{{ old('email') }}" placeholder="example@example.com" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp">
                        @error('email')
                            <div id="emailHelp" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo (min: 100 x 100)</label>
                        <input accept=".png,.jpg,.jpeg" type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" aria-describedby="logoHelp">
                        @error('logo')
                        <div id="logoHelp" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input value="{{ old('website') }}" placeholder="https://example.com" type="email" class="form-control @error('email') is-invalid @enderror" id="website" name="website" aria-describedby="websiteHelp">
                        @error('website')
                        <div id="websiteHelp" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </form>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success" form="addCompanyForm">Submit</button>

                <a href="{{ route('companies.index') }}" class="btn">Back to List</a>
            </div>
        </div>
    </div>
@stop
