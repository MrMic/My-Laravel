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
                                @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td><img style="width:400px" src="{{ asset($file->file_path) }}" alt="File"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <table class="table">
                    <tbody>
                        {{-- @foreach ($files as $file) --}}
                        <tr>
                            <a href="{{ route('file-upload.download') }}">Download file</a>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
