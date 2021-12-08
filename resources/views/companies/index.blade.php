@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">
                        Companies
                    </h3>

                    <div class="float-end">
                        <a href="{{ route('companies.create') }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Logo
                            </th>
                            <th>
                                Website
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <td>
                                    {{ $company->name }}
                                </td>
                                <td>
                                    {{ $company->email }}
                                </td>
                                <td>
                                    <img src="{{ $company->getFirstMediaUrl() }}" alt="{{ $company->name }}" width="50" height="50">
                                </td>
                                <td>
                                    {{ $company->website }}
                                </td>
                                <td>
                                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-secondary">Edit</a>

                                    <form action="{{ route('companies.destroy', $company) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure you want to delete?')" type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer text-center">
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@stop
