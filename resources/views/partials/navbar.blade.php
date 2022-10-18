<div class="position-sticky pt-3 sidebar-sticky">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'Dashboard') ? 'active' : '' }}" aria-current="page" href="/">
        <span data-feather="home" class="align-text-bottom"></span>
        Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'Test') ? 'active' : '' }}" href="/test">
        <span data-feather="file" class="align-text-bottom"></span>
        Test
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'Report') ? 'active' : '' }}" href="/report">
        <span data-feather="bar-chart-2" class="align-text-bottom"></span>
        Report
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="layers" class="align-text-bottom"></span>
        Integrations
      </a>
    </li>
  </ul>

  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
    <span>Saved reports</span>
    <a class="link-secondary" href="#" aria-label="Add a new report">
      <span data-feather="plus-circle" class="align-text-bottom"></span>
    </a>
  </h6>
  <ul class="nav flex-column mb-2">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Current month
      </a>
    </li>
  </ul>
</div>
