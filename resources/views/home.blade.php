@extends('layouts.app')
<!-- © 2022 Copyright: RizkiLutfiandi -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white font-weight-bold">Point Of Sale

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda berhasil masuk!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- © 2022 Copyright: RizkiLutfiandi -->
