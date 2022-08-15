<div class="col-md-4 mb-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
                <img src="/AdminLTE-master/dist/img/user2-160x160.jpg" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h4>{{ $name }}</h4>
                    <p class="text-secondary mb-1">{{ $email }}</p>
                    <p class="text-muted font-size-sm">{{ $address }}</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="https://wa.me/{{ $whatsapp }}" class="btn btn-outline-success">WA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>