<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $page_title }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route( $form_handler, $param ) }}">
                    @csrf