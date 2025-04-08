<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel - {{ config('app.name', 'CRAJ') }}</title>

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AdminLTE style -->
    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-bg: #343a40;
            --sidebar-color: #c2c7d0;
            --sidebar-hover: #494e53;
            --header-height: 60px;
            --active-link: #3f6791;
        }
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .admin-container {
            display: flex;
            flex: 1;
        }
        .sidebar {
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            color: var(--sidebar-color);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        .sidebar-header {
            height: var(--header-height);
            padding: 10px 15px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-brand {
            color: white;
            font-size: 20px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .sidebar-brand:hover {
            color: white;
        }
        .sidebar-nav {
            padding: 15px 0;
        }
        .sidebar-item {
            margin-bottom: 5px;
        }
        .sidebar-link {
            padding: 12px 20px;
            color: var(--sidebar-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }
        .sidebar-link:hover {
            background: var(--sidebar-hover);
            color: white;
        }
        .sidebar-link.active {
            background: var(--active-link);
            color: white;
        }
        .sidebar-icon {
            margin-right: 10px;
            font-size: 18px;
            width: 25px;
            text-align: center;
        }
        .content-wrapper {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
        }
        .content-header {
            height: var(--header-height);
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .content {
            padding: 20px;
            background: #f4f6f9;
            min-height: calc(100vh - var(--header-height));
        }
        .user-menu {
            position: relative;
        }
        .user-menu-toggle {
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 0;
        }
        .user-menu-toggle img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .toggle-sidebar {
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            font-size: 20px;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .content-wrapper {
                margin-left: 0;
            }
            .sidebar.show {
                transform: translateX(0);
            }
        }
        .dropdown-menu {
            right: 0 !important;
            left: auto !important;
        }
    </style>

    @stack('styles')
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" height="30" class="me-2">
                    CRAJ Admin
                </a>
            </div>
            <div class="sidebar-nav">
                <div class="sidebar-item">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2 sidebar-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.issues.index') }}" class="sidebar-link {{ request()->routeIs('admin.issues.*') ? 'active' : '' }}">
                        <i class="bi bi-journal sidebar-icon"></i>
                        <span>Issues</span>
                    </a>
                    <!-- <div class="ms-4 ps-2 mt-2" style="border-left: 1px solid rgba(255,255,255,0.1);">
                        <a href="{{ route('admin.issues.index') }}" class="sidebar-link py-2 {{ request()->routeIs('admin.issues.index') ? 'active' : '' }}">
                            <i class="bi bi-chevron-right sidebar-icon" style="font-size: 14px;"></i>
                            <span>Current Issues</span>
                        </a>
                    </div> -->
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.articles.index') }}" class="sidebar-link {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
                        <i class="bi bi-file-earmark-text sidebar-icon"></i>
                        <span>Articles</span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.subject-areas.index') }}" class="sidebar-link {{ request()->routeIs('admin.subject-areas.*') ? 'active' : '' }}">
                        <i class="bi bi-tags sidebar-icon"></i>
                        <span>Subject Areas</span>
                    </a>
                </div>

                <div class="sidebar-item">
                    <a href="{{ route('admin.journal-indexing.index') }}" class="sidebar-link {{ request()->routeIs('admin.journal-indexing.*') ? 'active' : '' }}">
                        <i class="bi bi-tags sidebar-icon"></i>
                        <span>Journal indexing</span>
                    </a>
                </div>
                
                <div class="sidebar-item">
                    <a href="{{ route('admin.editorial-board.index') }}" class="sidebar-link {{ request()->routeIs('admin.editorial-board.*') ? 'active' : '' }}">
                        <i class="bi bi-person sidebar-icon"></i>
                        <span>Editorial Board </span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.editorial-board.pending') }}" class="sidebar-link {{ request()->routeIs('admin.editorial-board.pending') ? 'active' : '' }}">
                        <i class="bi bi-hourglass-split sidebar-icon"></i>
                        <span>Pending Applications</span>
                        <span class="badge badge-pill badge-primary ml-2">{{ \App\Models\EditorialBoard::pending()->count() }}</span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.profile') }}" class="sidebar-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                        <i class="bi bi-person sidebar-icon"></i>
                        <span>Profile</span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <a href="{{ route('admin.settings.index') }}" class="sidebar-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                        <i class="bi bi-gear sidebar-icon"></i>
                        <span>Settings</span>
                    </a>
                </div>
                <div class="sidebar-item">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="sidebar-link w-100 text-start border-0 bg-transparent">
                            <i class="bi bi-box-arrow-right sidebar-icon"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Content Area -->
        <div class="content-wrapper">
            <header class="content-header">
                <button class="toggle-sidebar" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                <div class="user-menu">
                    <div class="dropdown">
                        <button class="user-menu-toggle dropdown-toggle" type="button" id="userMenuDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-none d-md-block">{{ Auth::guard('admin')->user()->name }}</div>
                            <i class="bi bi-person-circle ms-2"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            
            <main class="content">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    
    <!-- TinyMCE Editor -->
    <script src="https://cdn.tiny.cloud/1/97v8e9eizb9yla8pusta8im51ua8vwc3bx5p36yxnbs0r9fw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });
        
        // Hide sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(event.target) && 
                !sidebarToggle.contains(event.target) &&
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });
    </script>

    @stack('scripts')
</body>
</html> 