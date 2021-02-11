@extends('layouts.dashmin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
@endpush
@section("content")
<div class="row">
    <div class="col-12">
    
        <div class="form-element with-icons mb-30">

            <!-- Invoice Details List Wrapper -->
            <div class="card_color-bg details-list-wrap">
                <div class="table-responsive">
                    <!-- Invoice List Table -->
                    <table class="invoice-list-table style-two some-center text-nowrap" id="usuarios">
                        <thead>
                            <tr>
                            <th>{{ __("Nombre") }}</th>
                            <th>{{ __("Email") }}</th>
                            </tr>
                        </thead>

                        <tbody class="card_color-bg">
                            @forelse($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                </tr>
                                @empty
                                <div class="container">
                                    <div class="empty-results">
                                        {!! __("Este curso no tiene estudiantes todavía") !!}
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Invoice List Table -->
                </div>

            </div>
            <!-- End Invoice Details List Wrapper -->

        </div>
    </div>
    
</div>
@endsection
@push("js")
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#usuarios').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
        });
        
    </script>
@endpush
