@extends('layouts.app')

@section('title', 'CRAJ - Contemporary Research Analysis Journal')

@section('body-class', 'index-page')

@section('content')
    <!-- Call To Action 2 Section -->
    <section  class="call-to-action-2 section mt-0 mt-md-3" >
      <div class="container">
        <div class="advertise-1 row position-relative">
          <div class="col-lg-3 position-relative" >
            <img src="{{ asset('img/card.png') }}" alt="Digital Platform" class="img-fluid rounded-4  w-100">
            <div class="cta-buttons d-flex flex-wrap gap-3 mt-3">
              <a href="{{ route('article.submit') }}" class="btn btn-primary w-100">Submit Now</a>
            </div>
          </div>

          <div class="col-lg-9" >
            <h2 class="mt-3 mt-md-0">Contemporary Research Analysis Journal (CRAJ) </h2>
            <p class="mt-3"><strong>e-ISSN :</strong> 3050-5909 </p>
            <p><strong>P-ISSN :</strong> 3050-5895</p>
            <p><strong>CrossRef DOI:</strong> 10.55677/CRAJ</p>
            <p><strong>Frequency:</strong> Monthly</p>
            <p><strong>Article type:</strong> Original research article, book reviews, short notes, review articles, case studies, thesis.</p> 
            <p><strong>Email id:</strong> editor@crajour.org</p>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action 2 Section -->

    <section class="tab_section p-3">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-bell"></i> Call for Paper </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-hand-index-thumb"></i> Subject Areas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="bi bi-card-checklist"></i> Indexing</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="editorial-tab" data-bs-toggle="tab" data-bs-target="#editorial" type="button" role="tab" aria-controls="editorial" aria-selected="false"><i class="bi bi-people"></i> Editorial Team</button>
        </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">
                  <div class="description">
                    <div class="my-3">
                      <h2 class="fs-3 fw-bold">Journal Description </h2>
                      <p>Contemporary Research Analysis Journal (CRAJ) is a peer-reviewed, monthly, online and print international research journal. The journal operates with a rigorous peer review process, including double-blind peer review, conducted by members of the editorial board. CRAJ aims to achieve global recognition and ensures prompt publication of high-quality research from diverse epistemological, methodological, theoretical, and cultural perspectives, representing regions worldwide. It serves as an informative platform for higher education, societal changes, research advancements, and creative thinking in various fields. CRAJ offers a reliable and cost-effective means of delivering publications to readers' doorsteps. It encourages innovation, challenges assumptions, and fosters debates to stimulate creative academic scholarship and applications in education, policy-making, professional practice, advocacy, and social action.</p>
                    </div>
                    <div class="my-4">
                      <h2 class="fs-3 fw-bold">Open access policy</h2>
                      <p>This journal provides immediate open access to its content on the principle that creating research freely available to the public supports a greater global exchange of knowledge.</p>
                    </div>
                    <div class="my-4">
                      <h2 class="fs-3 fw-bold">Editorial Policies</h2>
                      <p>CRAJ expect the highest ethical standards from their authors, reviewers and editors while conducting research, submitting papers and throughout the peer-review process. CRA follows double-blind peer review process.</p>
                    </div>
                  </div>
                </div>
                <!-- <h4>Call for Papers</h4>
                <p>CRAJ welcomes submissions of original research in all fields of study.</p> -->
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h4>Subject Areas</h4>
                <p>CRAJ publishes research across multiple disciplines including science, technology, medicine, humanities, and social sciences.</p>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h4>Indexing</h4>
                <p>CRAJ is indexed in multiple academic databases.</p>
            </div>
            <div class="tab-pane fade" id="editorial" role="tabpanel" aria-labelledby="editorial-tab">
                <h4>Editorial Team</h4>
                <p>Our editorial team consists of experts from various fields.</p>
            </div>
        </div>
      </div>
    </section>

    <!-- <section class="p-3">
      <div class="container">
        <div class="description">
          <div class="my-3">
            <h2 class="fs-3 fw-bold">Journal Description </h2>
            <p>Contemporary Research Analysis Journal (CRAJ) is a peer-reviewed, monthly, online and print international research journal. The journal operates with a rigorous peer review process, including double-blind peer review, conducted by members of the editorial board. CRAJ aims to achieve global recognition and ensures prompt publication of high-quality research from diverse epistemological, methodological, theoretical, and cultural perspectives, representing regions worldwide. It serves as an informative platform for higher education, societal changes, research advancements, and creative thinking in various fields. CRAJ offers a reliable and cost-effective means of delivering publications to readers' doorsteps. It encourages innovation, challenges assumptions, and fosters debates to stimulate creative academic scholarship and applications in education, policy-making, professional practice, advocacy, and social action.</p>
          </div>
          <div class="my-4">
            <h2 class="fs-3 fw-bold">Open access policy</h2>
            <p>This journal provides immediate open access to its content on the principle that creating research freely available to the public supports a greater global exchange of knowledge.</p>
          </div>
          <div class="my-4">
            <h2 class="fs-3 fw-bold">Editorial Policies</h2>
            <p>CRAJ expect the highest ethical standards from their authors, reviewers and editors while conducting research, submitting papers and throughout the peer-review process. CRA follows double-blind peer review process.</p>
          </div>
        </div>
      </div>
    </section> -->

    <section class="tab_section bottom_tab p-3">
      <div class="container">
        <ul class="nav nav-tabs" id="articleTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="artical" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home1" aria-selected="true">Latest Article(Current Issue)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="read-article" data-bs-toggle="tab" data-bs-target="#profile1" type="button" role="tab" aria-controls="profile1" aria-selected="false">Most Read Article </button>
        </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-3" id="articleTabsContent">
            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="artical">
              <div class="call-to-action-2 bg-white shadow-sm p-3">
                @if(isset($currentIssue) && $currentIssue)
                  <div class="mb-3">
                    <h3 class="fw-bold fs-4">{{ $currentIssue->title }}</h3>
                    <span class="badge text-uppercase mb-2">Volume {{ $currentIssue->volume }} Issue {{ $currentIssue->issue }} ({{ $currentIssue->year }})</span>
                    
                    @if($currentIssue->description)
                      <p class="my-2">{{ Str::limit(strip_tags($currentIssue->description), 200) }}</p>
                    @endif
                    
                    <a href="{{ route('current') }}" class="btn btn-sm btn-outline-primary mt-2">View All Articles</a>
                  </div>
                  
                  @php
                    $issueArticles = $currentIssue->articles()->published()->orderBy('published_date', 'desc')->take(3)->get();
                  @endphp
                  
                  @if($issueArticles->count() > 0)
                    @foreach($issueArticles as $article)
                      <div class="call-to-action-2 content-left flex-grow-1 aos-init aos-animate p-3 mb-3" data-aos="fade-right" data-aos-delay="200">
                        <span class="badge text-uppercase mb-2">Volume {{ $article->volume }} Issue {{ $article->issue }} ({{ $currentIssue->year }})</span>
                        <h3 class="mt-2 fs-5"><a href="{{ route('article.detail', $article->id) }}">{{ $article->title }}</a></h3>
                        <p class="mb-3 fs-6 text-black">{{ $article->author_name ?? $article->author }} @if($article->pages) Page No. {{ $article->pages }}.@endif</p>

                        <div class="features d-flex flex-wrap gap-3 mb-4">
                          @if($article->pdf_file)
                            <a href="{{ Storage::url($article->pdf_file) }}" class="feature-item" target="_blank">
                              <span>PDF</span>
                            </a>
                          @endif
                          <a class="feature-item" href="{{ route('article.detail', $article->id) }}">
                            <span>Abstract</span>
                          </a>
                          <a class="feature-item" href="{{ route('article.detail', $article->id) }}">
                            <span>Details</span>
                          </a>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <div class="alert alert-info">
                      <p class="mb-0">There are no articles available in the current issue yet.</p>
                    </div>
                  @endif
                @else
                  <div class="alert alert-info">
                    <p class="mb-0">No current issue has been set by the administrator.</p>
                  </div>
                @endif
              </div>
            </div>
            
            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="read-article">
              <div class="call-to-action-2 bg-white shadow-sm p-3">
                @if(isset($popularArticles) && $popularArticles->count() > 0)
                  @foreach($popularArticles as $article)
                    <div class="call-to-action-2 content-left flex-grow-1 aos-init aos-animate p-3 mb-3" data-aos="fade-right" data-aos-delay="200">
                      <span class="badge text-uppercase mb-2">Volume {{ $article->volume }} Issue {{ $article->issue }}
                        @if(isset($article->published_date))
                          ({{ date('Y', strtotime($article->published_date)) }})
                        @endif
                      </span>
                      <h3 class="mt-2 fs-5"><a href="{{ route('article.detail', $article->id) }}">{{ $article->title }}</a></h3>
                      <p class="mb-3 fs-6 text-black">{{ $article->author_name ?? $article->author }} @if($article->pages) Page No. {{ $article->pages }}.@endif</p>

                      <div class="features d-flex flex-wrap gap-3 mb-4">
                        @if($article->pdf_file)
                          <a href="{{ Storage::url($article->pdf_file) }}" class="feature-item" target="_blank">
                            <span>PDF</span>
                          </a>
                        @endif
                        <a class="feature-item" href="{{ route('article.detail', $article->id) }}">
                          <span>Abstract</span>
                        </a>
                        <a class="feature-item" href="{{ route('article.detail', $article->id) }}">
                          <span>Details</span>
                        </a>
                      </div>
                    </div>
                  @endforeach
                @else
                  <div class="call-to-action-2 content-left flex-grow-1 aos-init aos-animate p-3 mb-3" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="fw-bold fs-4">VOLUME 07 ISSUE 12 DECEMBER 2024</h3>
                    <span class="badge text-uppercase mb-2">Vol 7 No 12(2024)</span>
                    <h3 class="mt-2 fs-5">Artificial Intelligence Applications in Healthcare: Current Trends and Future Prospects</h3>
                    <p class="mb-3 fs-6 text-black">David Lee, Elena Petrova, Samuel Okafor Page No. 850-865.</p>

                    <div class="features d-flex flex-wrap gap-3 mb-4">
                      <a href="#" class="feature-item">
                        <span>PDF</span>
                      </a>
                      <a class="feature-item" href="#">
                        <span>Abstract</span>
                      </a>
                      <a class="feature-item" href="#">
                        <span>Details</span>
                      </a>
                    </div>
                  </div>
                @endif
              </div>
            </div>
        </div>
      </div>
    </section>

    <div class="container my-5">
        @if(isset($description))
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">About the Journal</h2>
                <div class="journal-description">
                    {!! $description !!}
                </div>
            </div>
        </div>
        @endif

        <!-- Current Issue Section -->
        
      <?php /*
        <!-- Popular Articles Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">Popular Articles</h2>
                
                @if(isset($popularArticles) && $popularArticles->count() > 0)
                    <div class="row">
                        @foreach($popularArticles as $article)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    @if($article->featured_image)
                                        <img src="{{ asset('storage/' . $article->featured_image) }}" class="card-img-top" alt="{{ $article->title }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <p class="card-text text-muted">{{ $article->author_contributor_list }}</p>
                                        <p class="card-text">{{ Str::limit(strip_tags($article->abstract), 150) }}</p>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <a href="{{ route('article.detail', $article->id) }}" class="btn btn-sm btn-primary">Read More</a>
                                        @if($article->pdf_file)
                                            <a href="{{ asset('storage/' . $article->pdf_file) }}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-file-pdf"></i> PDF
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">
                        No popular articles available yet.
                    </div>
                @endif
            </div>
        </div>
        
        @if(isset($openAccessPolicy))
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">Open Access Policy</h2>
                <div class="policy-content">
                    {!! $openAccessPolicy !!}
                </div>
            </div>
        </div>
        @endif
        
        @if(isset($editorialPolicies))
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">Editorial Policies</h2>
                <div class="policy-content">
                    {!! $editorialPolicies !!}
                </div>
            </div>
        </div>
        @endif
        */ ?>
    </div>
@endsection 


@section('scripts')
<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize all tooltips
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Handle Abstract button clicks
  document.querySelectorAll('a[href*="article.showAbstract"]').forEach(function(button) {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      const url = this.getAttribute('href');
      
      // Get the abstract content via AJAX
      fetch(url)
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            document.getElementById('abstractContent').innerHTML = data.abstract;
            
            // Show the modal
            const abstractModal = new bootstrap.Modal(document.getElementById('abstractModal'));
            abstractModal.show();
          } else {
            console.error('Failed to load abstract');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  });
});
</script> -->
@endsection 