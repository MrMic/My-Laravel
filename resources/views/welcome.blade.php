@extends('app')

@section('contents')
    <section class="container py-5 text-center">
        <div class="row py-lg-5">
            <div class="mx-auto col-lg-6 col-md-8">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    @if (true)
                        <a href="#" class="my-2 btn btn-primary">Main call to action</a>
                        <a href="#" class="my-2 btn btn-secondary">Secondary action</a>
                    @endif
                </p>
            </div>
        </div>
    </section>

    {{-- INFO: *INCLUDE* THE GALLERY COMPONENT --}}
    @include('gallery')
@endsection

{{-- INFO: PUSH BACK TO THE *STACK* DIRECTIVE FOR SCRIPTS --}}
@push('scripts')
    <script>
        console.log('Welcome to the Album page!');
    </script>
@endpush
