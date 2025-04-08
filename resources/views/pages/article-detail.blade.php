@extends('layouts.app')

@section('title', $article->title ?? 'Article Detail - CRAJ')

@section('body-class', 'article-page')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <!-- Article Details Section -->
        <section id="article-details" class="article-details section">
          <div class="container aos-init aos-animate" data-aos="fade-up">
            <article class="article">
              <div class="article-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="content-header mb-3">
                  <h2 class="title fs-1">{{ $article->title ?? 'Tanjaro River Pollution and its Impact on the Aquatic Food Chain' }}</h2>

                  <div class="author-info pb-3 mb-3">
                    <div class="author-details">
                      <div class="info d-flex flex-wrap gap-3">
                        <h4><i class="bi bi-person-circle me-2"></i> {{ $article->author_name ?? $article->author ?? 'Michael Chen' }}</h4>
                        <h4><i class="bi bi-building me-2"></i> {{ $article->affiliation ?? 'Affiliation' }}</h4>
                        @if(isset($article->country))
                        <h4><i class="bi bi-globe me-2"></i> {{ $article->country }}</h4>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="post-meta post-meta border-bottom pb-3">
                    @if(isset($article->doi))
                    <span class="date">Crossref DOI: <a href="https://doi.org/{{ $article->doi }}" target="_blank">{{ $article->doi }}</a></span>
                    <span class="divider">|</span>
                    @endif
                    
                    @if(isset($article->pages))
                    <span class="date">Page No.: {{ $article->pages }}</span>
                    <span class="divider">|</span>
                    @endif
                    
                    @if(isset($article->published_date))
                    <span class="date">Published: {{ $article->published_date->format('d M, Y') }}</span>
                    <span class="divider">|</span>
                    @endif
                    
                    <span class="views" data-bs-toggle="tooltip" data-bs-placement="top" title="Unique views counted once per IP address within 24 hours">
                      <i class="bi bi-eye me-1"></i> {{ $article->views ?? 0 }} unique views
                    </span>
                    <span class="divider">|</span>
                    <span class="likes"><i class="bi bi-heart me-1"></i> <span id="article-likes-count">{{ $article->likes ?? 0 }}</span> likes</span>
                    <span class="divider">|</span>
                    <span class="comments"><a href="https://scholar.google.com/scholar?q={{ urlencode($article->title) }}" target="_blank">Google Scholar</a></span>
                  </div>
                </div>

                <div class="content">
                  <h3 class="mt-0">Abstract:</h3>
                  <div class="highlight-box mt-2 mb-3">
                    <p>{!! $article->abstract ?? 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' !!}</p>
                  </div>

                  @if(isset($article->keywords))
                  <h3 class="mt-4 mb-3">KeyWords:</h3>
                  <div class="highlight-box mt-2 mb-3">
                    <p>{{ is_array($article->keywords) ? implode(', ', $article->keywords) : $article->keywords }}</p>
                  </div>
                  @endif

                  @if(isset($article->content) && !empty($article->content))
                  <h3 class="mt-4 mb-3">Content:</h3>
                  <div class="article-full-content mt-2 mb-3">
                    {!! $article->content !!}
                  </div>
                  @endif

                  @if(isset($article->references) || isset($article->author_contributor_list))
                  <h3 class="mt-4 mb-3">References:</h3>
                  <div class="highlight-box mt-2 mb-3">
                    @if(isset($article->references))
                      {!! $article->references !!}
                    @elseif(isset($article->author_contributor_list))
                      {!! $article->author_contributor_list !!}
                    @else
                    <ul class="number_ul">
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                      <li>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                    </ul>
                    @endif
                  </div>
                  @endif
                </div>
              </div>
            </article>
          </div>
        </section>
      </div>

      <div class="col-lg-3 sidebar">
        <div class="widgets-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <!-- Download buttons for different file types -->
          <div class="download-buttons mb-4">
            @if(isset($article->pdf_file))
            <a href="{{ Storage::url($article->pdf_file) }}" class="btn btn-primary w-100 mb-2" target="_blank">
              <i class="bi bi-file-pdf"></i> Download PDF
            </a>
            @elseif(isset($article->manuscript_path))
            <a href="{{ Storage::url($article->manuscript_path) }}" class="btn btn-primary w-100 mb-2" target="_blank">
              <i class="bi bi-file-pdf"></i> Download Manuscript
            </a>
            @else
            <a href="#" class="btn btn-primary w-100 mb-2">
              <i class="bi bi-file-pdf"></i> Download PDF
            </a>
            @endif

            @if(isset($article->html_file))
            <a href="{{ Storage::url($article->html_file) }}" class="btn btn-outline-primary w-100 mb-2" target="_blank">
              <i class="bi bi-file-earmark-code"></i> View HTML
            </a>
            @endif

            @if(isset($article->docx_file))
            <a href="{{ Storage::url($article->docx_file) }}" class="btn btn-outline-primary w-100 mb-2" target="_blank">
              <i class="bi bi-file-earmark-word"></i> Download DOCX
            </a>
            @endif
          </div>

          <!-- Abstract view button -->
          <div class="mb-4">
            <button class="btn btn-outline-info w-100 abstract-view-btn" data-article-id="{{ $article->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View article abstract in popup">
              <i class="bi bi-file-text"></i> View Abstract
            </button>
          </div>

          <!-- Like button -->
          <div class="mb-4">
            <button id="like-article-btn" class="btn btn-outline-danger w-100" data-article-id="{{ $article->id }}">
              <i class="bi bi-heart"></i> Like This Article
            </button>
          </div>

          <!-- Article metrics -->
          <div class="article-metrics mb-4">
            <div class="card">
              <div class="card-header bg-light">
                <h5 class="card-title mb-0">Article Metrics</h5>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between gap-3 viewbox mb-2">
                  <p class="d-flex align-items-center gap-2 mb-0"><i class="bi bi-eye fs-5"></i> <b>Views</b></p>
                  <p class="mb-0"><b>{{ $article->views ?? 0 }}</b></p>
                </div>
                
                <div class="d-flex align-items-center justify-content-between gap-3 viewbox mb-2">
                  <p class="d-flex align-items-center gap-2 mb-0"><i class="bi bi-heart fs-5"></i> <b>Likes</b></p>
                  <p class="mb-0"><b><span class="sidebar-likes-count">{{ $article->likes ?? 0 }}</span></b></p>
                </div>
                
                @if(isset($article->published_date))
                <div class="d-flex align-items-center justify-content-between gap-3 viewbox">
                  <p class="d-flex align-items-center gap-2 mb-0"><i class="bi bi-calendar-date fs-5"></i> <b>Published</b></p>
                  <p class="mb-0"><b>{{ $article->published_date->format('d M, Y') }}</b></p>
                </div>
                @endif
              </div>
            </div>
          </div>

          @if(isset($article->category) || (isset($article->subjectAreas) && $article->subjectAreas->count() > 0))
          <h3 class="widget-title mt-4">Subject Category</h3>
          <div class="highlight-box mb-3">
            <ul class="">
              @if(isset($article->subjectAreas) && $article->subjectAreas->count() > 0)
                @foreach($article->subjectAreas as $subjectArea)
                  <li><a href="#">{{ $subjectArea->name }}</a></li>
                @endforeach
              @elseif(isset($article->category))
                @foreach(explode(',', $article->category) as $category)
                  <li><a href="#">{{ trim($category) }}</a></li>
                @endforeach
              @endif
            </ul>
          </div>
          @endif

          <h3 class="widget-title mt-4">Copyrights & License</h3>
          <div class="highlight-box mb-3">
            <p>
              @if(isset($article->license_url))
                License: <a href="{{ $article->license_url }}" target="_blank">
                  {{ $article->license_url }}
                </a>
              @else
                License: This work is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution 4.0 International License.</a>
              @endif
            </p>
            
            @if(isset($article->copyright_holder) || isset($article->copyright_year))
            <p>
              Copyright © 
              {{ $article->copyright_year ?? date('Y') }} 
              {{ $article->copyright_holder ?? 'CRAJ' }}
            </p>
            @endif
            
            <p style="font-size: 13px; color: #355fb5">All Content should be original and unpublished.</p>
          </div>

          @if(isset($popularArticles) && count($popularArticles) > 0)
          <h3 class="widget-title mt-4">Most Read Articles</h3>
          @foreach($popularArticles as $popularArticle)
            <a href="{{ route('article.detail', $popularArticle->id) }}" class="hover_fade">
              <div class="call-to-action-2 content-left flex-grow-1 aos-init aos-animate p-3 mb-3" data-aos="fade-right" data-aos-delay="200">
                <h3 class="fw-bold fs-6">{{ $popularArticle->title }}</h3>
                <span class="badge text-uppercase mb-2">
                  @if(isset($popularArticle->volume) && isset($popularArticle->issue))
                    Vol {{ $popularArticle->volume }} No {{ $popularArticle->issue }}
                    @if(isset($popularArticle->published_date))
                      ({{ $popularArticle->published_date->format('Y') }})
                    @endif
                  @else
                    {{ $popularArticle->views }} views
                  @endif
                </span>      
              </div>
            </a>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection

@push('styles')
<style>
  .article-metrics .card-header {
    border-bottom: 1px solid rgba(0,0,0,0.125);
  }
  .article-full-content {
    line-height: 1.8;
  }
  .highlight-box {
    background-color: #f8f9fa;
    border-radius: 5px;
    padding: 15px;
    border-left: 4px solid #0d6efd;
  }
  .download-buttons .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
  }
  .sidebar .widget-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 15px;
    border-bottom: 2px solid #0d6efd;
    padding-bottom: 5px;
    display: inline-block;
  }
  #like-article-btn.liked {
    background-color: #dc3545;
    color: white;
  }
  .likes-icon-animate {
    animation: heartBeat 0.5s;
  }
  @keyframes heartBeat {
    0% {
      transform: scale(1);
    }
    14% {
      transform: scale(1.3);
    }
    28% {
      transform: scale(1);
    }
    42% {
      transform: scale(1.3);
    }
    70% {
      transform: scale(1);
    }
  }
</style>
@endpush

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {
                trigger: 'hover'
            });
        });

        // Handle abstract view button
        const abstractBtn = document.querySelector('.abstract-view-btn');
        if (abstractBtn) {
            abstractBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const articleId = this.dataset.articleId;
                
                fetch(`/articles/${articleId}/abstract`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Create and show modal with abstract
                            const modalHtml = `
                                <div class="modal fade" id="abstractModal" tabindex="-1" aria-labelledby="abstractModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="abstractModalLabel">Article Abstract</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ${data.abstract}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            
                            // Append modal to body
                            document.body.insertAdjacentHTML('beforeend', modalHtml);
                            
                            // Show modal
                            const modal = new bootstrap.Modal(document.getElementById('abstractModal'));
                            modal.show();
                            
                            // Remove modal from DOM after it's hidden
                            document.getElementById('abstractModal').addEventListener('hidden.bs.modal', function() {
                                this.remove();
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching abstract:', error);
                    });
            });
        }

        // Handle like button
        const likeButton = document.getElementById('like-article-btn');
        const articleId = "{{ $article->id }}";
        const likesCountDisplay = document.getElementById('article-likes-count');
        
        // Check if user has already liked this article
        const hasLiked = localStorage.getItem(`article_liked_${articleId}`) === 'true';
        
        if (hasLiked) {
            likeButton.classList.add('liked');
            likeButton.querySelector('i').classList.remove('bi-heart');
            likeButton.querySelector('i').classList.add('bi-heart-fill');
        }
        
        likeButton.addEventListener('click', function() {
            // If already liked, don't allow multiple likes
            if (hasLiked) return;
            
            // Optimistic UI update
            likeButton.classList.add('liked');
            likeButton.querySelector('i').classList.remove('bi-heart');
            likeButton.querySelector('i').classList.add('bi-heart-fill');
            
            // Send AJAX request to increment likes
            fetch(`/articles/${articleId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update like count
                    likesCountDisplay.textContent = data.likes;
                    
                    // Also update sidebar likes count
                    const sidebarLikesCount = document.querySelector('.sidebar-likes-count');
                    if (sidebarLikesCount) {
                        sidebarLikesCount.textContent = data.likes;
                    }
                    
                    // Add heart animation
                    const heart = document.createElement('div');
                    heart.classList.add('heart-animation');
                    likeButton.appendChild(heart);
                    
                    // Remove animation after it completes
                    setTimeout(() => {
                        heart.remove();
                    }, 1000);
                    
                    // Save liked state in localStorage
                    localStorage.setItem(`article_liked_${articleId}`, 'true');
                }
            })
            .catch(error => {
                console.error('Error liking article:', error);
                // Revert UI if error
                likeButton.classList.remove('liked');
                likeButton.querySelector('i').classList.add('bi-heart');
                likeButton.querySelector('i').classList.remove('bi-heart-fill');
            });
        });
    });
</script>
@endsection 