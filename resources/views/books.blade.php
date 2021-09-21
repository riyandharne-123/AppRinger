@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Books') }}</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Title</th>
                                        <th>Authors</th>
                                        <th>Thumbnail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->book_id }}</td>
                                            <td>
                                                {{ $book->title }}
                                                <hr>
                                                {{ $book->subtitle }}
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach (json_decode($book->authors) as $author)
                                                        <li>{{ $author }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <img class="img-responsive" width="40px" src="{{ $book->thumbnail }}" />
                                                <hr>
                                                <img class="img-responsive" width="20px"
                                                    src="{{ $book->small_thumbnail }}" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
