@extends('layouts.app')

@section('title', 'Archive - CRAJ')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mb-4">Archive</h1>
            <p class="lead mb-5">Browse our previous issues and publications.</p>
            
            @if(isset($archives) && count($archives) > 0)
                @foreach($archives as $volume => $issues)
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <h2 class="mb-0 fs-4">Volume {{ $volume }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionVolume{{ $volume }}">
                                @foreach($issues as $issue => $articles)
                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="heading{{ $volume }}{{ $issue }}">
                                            <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $volume }}{{ $issue }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $volume }}{{ $issue }}">
                                                Issue {{ $issue }}
                                            </button>
                                        </h3>
                                        <div id="collapse{{ $volume }}{{ $issue }}" class="accordion-collapse collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $volume }}{{ $issue }}" data-bs-parent="#accordionVolume{{ $volume }}">
                                            <div class="accordion-body">
                                                <div class="list-group">
                                                    @foreach($articles as $article)
                                                        <a href="{{ route('article.detail', $article->id) }}" class="list-group-item list-group-item-action">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h4 class="mb-1">{{ $article->title }}</h4>
                                                                <small>Pages: {{ $article->page_no }}</small>
                                                            </div>
                                                            <p class="mb-1">{{ $article->author_name }}</p>
                                                            <small>DOI: {{ $article->doi }}</small>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Default content when no archives data is available -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0 fs-4">Volume 8 (2025)</h2>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionVolumeDefault">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingIssue3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIssue3" aria-expanded="true" aria-controls="collapseIssue3">
                                        Issue 3 (March 2025)
                                    </button>
                                </h3>
                                <div id="collapseIssue3" class="accordion-collapse collapse show" aria-labelledby="headingIssue3" data-bs-parent="#accordionVolumeDefault">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Financial Governance in Africa In the Digital Age: Financial Governance of Academic Institutions</h4>
                                                    <small>Pages: 995-1005</small>
                                                </div>
                                                <p class="mb-1">Ikrame HAI, Hicham OUZIF, Mohammed ABDELLAOUI, Hayat EL BOUKHARI</p>
                                                <small>DOI: 10.55677/CRAJ/v8i3.01</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Climate Change Impact on Agricultural Productivity in Southeast Asia</h4>
                                                    <small>Pages: 1006-1018</small>
                                                </div>
                                                <p class="mb-1">Sarah Johnson, Michael Chen, Anwar Rahman</p>
                                                <small>DOI: 10.55677/CRAJ/v8i3.02</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Emerging Trends in Healthcare Robotics: A Systematic Review</h4>
                                                    <small>Pages: 1019-1032</small>
                                                </div>
                                                <p class="mb-1">Elena Petrova, David Williams</p>
                                                <small>DOI: 10.55677/CRAJ/v8i3.03</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingIssue2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIssue2" aria-expanded="false" aria-controls="collapseIssue2">
                                        Issue 2 (February 2025)
                                    </button>
                                </h3>
                                <div id="collapseIssue2" class="accordion-collapse collapse" aria-labelledby="headingIssue2" data-bs-parent="#accordionVolumeDefault">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Sustainable Urban Development Strategies: Case Studies from Global Cities</h4>
                                                    <small>Pages: 850-865</small>
                                                </div>
                                                <p class="mb-1">James Wilson, Maria Garcia</p>
                                                <small>DOI: 10.55677/CRAJ/v8i2.01</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Quantum Computing Applications in Cryptography</h4>
                                                    <small>Pages: 866-878</small>
                                                </div>
                                                <p class="mb-1">Alex Zhang, Priya Patel</p>
                                                <small>DOI: 10.55677/CRAJ/v8i2.02</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingIssue1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIssue1" aria-expanded="false" aria-controls="collapseIssue1">
                                        Issue 1 (January 2025)
                                    </button>
                                </h3>
                                <div id="collapseIssue1" class="accordion-collapse collapse" aria-labelledby="headingIssue1" data-bs-parent="#accordionVolumeDefault">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">The Evolution of Digital Identity: Privacy and Security Challenges</h4>
                                                    <small>Pages: 720-735</small>
                                                </div>
                                                <p class="mb-1">Thomas Brown, Linda Chen</p>
                                                <small>DOI: 10.55677/CRAJ/v8i1.01</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Neuroplasticity and Language Acquisition in Adults</h4>
                                                    <small>Pages: 736-750</small>
                                                </div>
                                                <p class="mb-1">Sophie Martin, Carlos Rodriguez</p>
                                                <small>DOI: 10.55677/CRAJ/v8i1.02</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0 fs-4">Volume 7 (2024)</h2>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionVolume7">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingVol7Issue12">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVol7Issue12" aria-expanded="true" aria-controls="collapseVol7Issue12">
                                        Issue 12 (December 2024)
                                    </button>
                                </h3>
                                <div id="collapseVol7Issue12" class="accordion-collapse collapse show" aria-labelledby="headingVol7Issue12" data-bs-parent="#accordionVolume7">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h4 class="mb-1">Artificial Intelligence Applications in Healthcare: Current Trends and Future Prospects</h4>
                                                    <small>Pages: 650-665</small>
                                                </div>
                                                <p class="mb-1">David Lee, Elena Petrova, Samuel Okafor</p>
                                                <small>DOI: 10.55677/CRAJ/v7i12.01</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                @if(isset($articles) && $articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    {{ $articles->links() }}
                @endif
            </div>
            
        </div>
    </div>
</div>
@endsection 