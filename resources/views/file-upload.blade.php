@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5 mb-5 card">
                    <div class="card-body ">
                        <form action="{{ route('file-upload.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">File</label>
                                <input type="file" class="form-control" id="" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
