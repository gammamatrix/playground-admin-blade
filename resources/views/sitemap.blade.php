<div class="card my-1">
    <div class="card-body">

        <h2>Admin</h2>

        <div class="row">

            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-header">
                    Content Management System
                    <small class="text-muted">users and settings</small>
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="{{ route('playground.admin.resource.users') }}" class="list-group-item list-group-item-action">
                            Users
                        </a>
                        <a href="{{ route('playground.admin.resource.settings') }}" class="list-group-item list-group-item-action">
                            Settings
                        </a>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>
