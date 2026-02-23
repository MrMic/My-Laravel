@extends('app')

@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5 mb-5 card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Message</label>
                                <textarea name="" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
