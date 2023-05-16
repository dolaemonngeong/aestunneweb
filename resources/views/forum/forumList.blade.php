{{-- @extends('layouts.app')
@section('home') --}}
<div class="container-fluid my-4">
    <a><p>All</p></a>
    @foreach($categories as $category)
    <a><p>{{ $category->name }}</p></a>
    @endforeach
</div>
<div class="container-fluid my-4">
    <form id="form" action="/forum" method="POST" class="form d-flex" role="search">
        @csrf
        <input type="search" value="{{ $search }}" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" class="form-control">
        <button class="btn btn-outline-secondary ml-4" type="submit" onclick="filterData()">Search</button>
        <a class="btn text-light ms-auto" href="{{ route("questions.create") }}" role="button" style="background-color: #124A49">Ask Question</a>
    </form>
</div>
<div class="container-fluid p-5">
    {{-- <h1 class="fs-1 fw-bold mb-4 text-center">Prestasi Desa Tulungrejo</h1> --}}
    
    <section>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-flex justify-content-center">
            @foreach($questions as $question)
            <div class="col d-flex justify-content-center">
                <div class="card">
                <div class="card-body">
                        {{-- <span class="badge text-white mb-2" style="background-color: #124A49">{{ $achievement->category->name}}</span> --}}
                        <h5 class="card-title fw-bold">{{ $question->sentence }}</h5>
                        {{-- <p class="card-text">{{ $question->description }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="post-group">
                            </div>
                            {{-- <span class="small"><span class="far fa-calendar-alt me-2"></span>{{ $achievement->date_achievement }}</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
{{$questions->links('forum.custompagination')}}
{{-- @endsection --}}
