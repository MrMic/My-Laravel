@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger mt-3 mb-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-5 mb-5 card">
                    <div class="card-body">
                        <form action="{{ route('contact.submit') }}" method="POST">
                            {{-- <input type="hidden" name="__token" value="{{ csrf_token() }}"> --}}
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" id="" name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="">Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
