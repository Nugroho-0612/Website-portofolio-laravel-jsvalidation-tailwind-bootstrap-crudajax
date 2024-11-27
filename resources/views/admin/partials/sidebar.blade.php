<!-- Sidebar -->
<div class="sidebar d-flex flex-column p-3" style="position: sticky; top: 0; height: 100vh; overflow-y: auto;">
    <h4 class="text-center">Admin Page</h4>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('projects.index') }}"
                class="{{ request()->routeIs('projects.index') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-home me-2"></i> Projects
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('certificates.index') }}"
                class="{{ request()->routeIs('certificates.index') ? 'nav-link active' : 'nav-link' }}">
                <i class="fas fa-table me-2"></i> Certificates
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
                <i class="fas fa-users me-2"></i> Logout
            </a>
        </li>
        </ ul>
</div>