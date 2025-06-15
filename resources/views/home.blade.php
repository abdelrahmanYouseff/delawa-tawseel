@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row align-items-center py-5">
        <div class="col-lg-6">
            <h1 class="display-3 fw-bold mb-4 text-gradient">هتلاقوني في</h1>
            <p class="lead mb-4">Manage and share your important links in one beautiful place. Create your personalized link page today!</p>
            <a href="{{ route('register') }}" class="btn btn-gradient btn-lg px-4 me-2">Get Started</a>
            <a href="#features" class="btn btn-outline-primary btn-lg px-4">Learn More</a>
        </div>
        <div class="col-lg-6">
            <img src="https://placehold.co/600x400" alt="Hero Image" class="img-fluid rounded-3 shadow">
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-5">
        <h2 class="text-center mb-5">Why Choose Us?</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body text-center p-3">
                        <i class="bi bi-link-45deg text-primary display-4 mb-2"></i>
                        <h5 class="card-title h6">Easy Link Management</h5>
                        <p class="card-text small">Organize all your important links in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body text-center p-3">
                        <i class="bi bi-brush text-primary display-4 mb-2"></i>
                        <h5 class="card-title h6">Beautiful Design</h5>
                        <p class="card-text small">Create stunning link pages with our templates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm feature-card">
                    <div class="card-body text-center p-3">
                        <i class="bi bi-graph-up text-primary display-4 mb-2"></i>
                        <h5 class="card-title h6">Analytics & Insights</h5>
                        <p class="card-text small">Track your link performance easily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center py-5">
        <div class="p-5 rounded-3 bg-light">
            <h2 class="mb-4">Ready to Get Started?</h2>
            <p class="lead mb-4">Join thousands of users who trust Bakiza Links for their link management needs.</p>
            <a href="{{ route('register') }}" class="btn btn-gradient btn-lg px-5">Create Your Page</a>
        </div>
    </div>
</div>
@endsection
