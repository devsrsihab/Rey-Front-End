    <!-- data table -->
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">All categories</h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg">
                        <span>Add New category</span>
                    </a>
                </div>
            </div>
        </div>
        <table class="table datatable-basic table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('categories.edit', ['id' => 1]) }}" class="dropdown-item">
                                    <i class="ph-pen me-2"></i>
                                    Edit
                                </a>
                                <a href="{{ route('categories.show', ['id' => 1]) }}" class="dropdown-item">
                                    <i class="ph-eye me-2"></i>
                                    View
                                </a>
                                <a href="{{ route('categories.destroy', ['id' => 1]) }}"
                                    class="deleteBtn text-danger dropdown-item">
                                    <i class="ph-trash me-2"></i>
                                    Remove
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /data table -->
