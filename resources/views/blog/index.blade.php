@extends('dashboard.template')

@section('body')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Blog</h1>
            {{-- <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div> --}}
        </div>

        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

        {{-- <h2>Section title</h2> --}}
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Excerpt</th>
                        <th scope="col">Body</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($blog as $b)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->title }}</td>
                            <td>{{ $b->excerpt }}</td>
                            <td style="width: 45%">{{ $b->body }}</td>
                            <td>
                                <a href="">Edit</a> | <a href="">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </main>
@endsection
