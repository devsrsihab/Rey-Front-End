					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header pt-0">
							<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
							<i class="ph-dots-three sidebar-resize-show"></i>
						</li>
						<li class="nav-item">
							<a href="{{ url('admin/dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
								<i class="ph-house"></i>
								<span>
									Dashboard
									<span class="d-block fw-normal opacity-50">No pending orders</span>
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu {{ request()->is('admin/categories') ? 'nav-item-expanded nav-item-open' : '' }}">
							<a href="#" class="nav-link">
								<i class="ph-clipboard-text"></i>
								<span>Product</span>
							</a>
							<ul class="nav-group-sub collapse {{ request()->is('admin/categories') ? 'show' : '' }}">
								<li class="nav-item">
								<a href="{{ route('categories.index') }}" class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">Categories</a></li>
							</ul>
						</li>
					</ul>