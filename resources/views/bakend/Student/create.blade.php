@extends('bakend.master')

@push('styles')
 
@endpush()


@section('content')

     <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Management</p>
                <h1 class="h3 mb-1">Add User</h1>
                <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
              </div>
            </div>
            <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{url('/students')}}" ><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to student</a></div>
          </div>

          <section class="row g-3">
            <div class="col-12 col-xl-8">
              <form class="panel needs-validation" novalidate>
                <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus" aria-hidden="true"></i><span>User Information</span></h2><p class="text-muted mb-0">Create a user account with validated fields.</p></div></div>
                <div class="row g-3">
                  <div class="col-md-6"><label class="form-label" for="firstName">First name</label><input class="form-control" id="firstName" type="text" required><div class="invalid-feedback">First name is required.</div></div>
                  <div class="col-md-6"><label class="form-label" for="lastName">Last name</label><input class="form-control" id="lastName" type="text" required><div class="invalid-feedback">Last name is required.</div></div>
                  <div class="col-md-6"><label class="form-label" for="email">Email</label><input class="form-control" id="email" type="email" required><div class="invalid-feedback">Enter a valid email.</div></div>
                  <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input class="form-control" id="phone" type="tel" required><div class="invalid-feedback">Phone number is required.</div></div>
                  <div class="col-md-6"><label class="form-label" for="role">Role</label><select class="form-select" id="role" required><option value="">Choose role</option><option>Admin</option><option>Manager</option><option>Editor</option><option>Viewer</option></select><div class="invalid-feedback">Choose a role.</div></div>
                  <div class="col-md-6"><label class="form-label" for="team">Team</label><select class="form-select" id="team" required><option value="">Choose team</option><option>Operations</option><option>Sales</option><option>Content</option><option>Finance</option></select><div class="invalid-feedback">Choose a team.</div></div>
                  <div class="col-12"><label class="form-label" for="notes">Notes</label><textarea class="form-control" id="notes" rows="4" placeholder="Optional onboarding notes"></textarea></div>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary" href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i class="bi bi-person-check" aria-hidden="true"></i> Create User</button></div>
              </form>
            </div>
            <div class="col-12 col-xl-4">
              <div class="panel h-100">
                <h2 class="h5 mb-3 section-title"><i class="bi bi-list-check" aria-hidden="true"></i><span>Access Checklist</span></h2>
                <div class="activity-list">
                  <div class="activity-item"><span class="activity-dot bg-success"></span><div><p class="mb-1 fw-semibold">Assign role</p><p class="text-muted small mb-0">Start with the least privileged role.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-primary"></span><div><p class="mb-1 fw-semibold">Add team</p><p class="text-muted small mb-0">Team ownership controls dashboards.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-warning"></span><div><p class="mb-1 fw-semibold">Send invite</p><p class="text-muted small mb-0">Users receive activation by email.</p></div></div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Dashboard</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

          <section class="row g-3 mt-1" aria-label="Dashboard metrics">
            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Revenue</span>
                  <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">$48,240</div>
                <div class="metric-meta">
                  <span class="text-success">+12.5%</span>
                  <span>from last month</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Orders</span>
                  <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">1,284</div>
                <div class="metric-meta">
                  <span class="text-success">+8.2%</span>
                  <span>new orders</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Customers</span>
                  <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">8,742</div>
                <div class="metric-meta">
                  <span class="text-success">+5.1%</span>
                  <span>active users</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-danger">
                <div class="metric-top">
                  <span class="metric-label">Tickets</span>
                  <span class="metric-icon"><i class="bi bi-life-preserver" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">36</div>
                <div class="metric-meta">
                  <span class="text-danger">3 urgent</span>
                  <span>need review</span>
                </div>
              </article>
            </div>
          </section>

     

        </div>
      </main>
@endsection

@push('scrips')
 
@endpush()