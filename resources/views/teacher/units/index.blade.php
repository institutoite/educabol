@extends('layouts.dashmin')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('stylesheet/style.css') }}">
    <style type="text/css">
        .buffer-player,.error-player {
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }
        .buffer-player {
            background: rgba(0,0,0,0.6);
        }
        .hidden{display: none;}
        .error-player span, .buffer-player span {
            display: block;
            background: #333;
            color: #ccc;
            border: 1px solid #555;
            font-size:13px;
            padding: 4px;
            max-width: 230px;
            margin: 23% auto 0 auto;
            text-align: center;
        }
        .error-player button, .buffer-player button {
            display: block;
            margin: 10px auto;
            background: #1d55ff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 4px 12px;
            color: white;
            border: 0;
            cursor: pointer;
        }
        .jw-rightclick {display:none !important;}
        .jw-logo-bar {
            background-image: url('URL');
            background-size: 100px 19px;
            background-repeat: no-repeat;
            background-position: center center;
            height: 30px;
            width: 110px;
            -webkit-transform: translateZ(0);
            -webkit-font-smoothing: antialiased;
        }

        .jw-logo-bar .player-tooltip {
            background: rgba(0,0,0,.4);
            font-size: 8px; /*11px*/
            font-weight: bold;
            line-height: 2.5em;
            font-family: sans-serif, Arial;
            bottom: 100%;
            text-transform: uppercase;
            color: #fff;
            display: block;
            left: -15px;
            margin-bottom: 15px;
            opacity: 0;
            padding: 0 10px;
            pointer-events: none;
            position: absolute;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transition: all .25s ease-out;
            -moz-transition: all .25s ease-out;
            -ms-transition: all .25s ease-out;
            -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
            -webkit-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -moz-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -ms-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -o-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            box-shadow: 2px 2px 6px rgba(0,0,0,.28);
        }

        .jw-logo-bar .player-tooltip:before {
            bottom: -20px;
            content: " ";
            display: block;
            height: 20px;
            left: 0;
            position: absolute;
            width: 100%;
        }

        .jw-logo-bar .player-tooltip:after {
            border-left: solid transparent 10px;
            border-right: solid transparent 10px;
            border-top: solid rgba(0,0,0,.4) 10px;
            bottom: -10px;
            content: " ";
            height: 0;
            left: 50%;
            margin-left: -13px;
            position: absolute;
            width: 0;
        }

        .jw-logo-bar:hover .player-tooltip {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .jw-logo-bar .player-tooltip {
            display: none;
        }

        .jw-logo-bar:hover .player-tooltip {
            display: block;
        }
        .fuckyou{
            position:fixed;
            right:11px;
            top:11px;
            width:41px;
            height:43px;
            z-index:999;
            background:#222;
        }
    </style>
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-30">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h4 class="font-20">Unidades que imparto</h4>

                    <div class="d-flex flex-wrap">
                        <!-- Button -->
                        <button type="button" onclick="window.location.href='{{ route('teacher.units.create') }}'" class="btn style--two orange">Crear Unidad</button>
                        <!-- Button -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="table-striped" id="usuarios">
                    <thead>
                        <tr>
                            <th>{{ __("Orden") }}</th>
                            <th>{{ __("Título") }}</th>
                            <th>{{ __("Curso") }}</th>
                            <th>{{ __("Subido") }}</th>
                            <th>{{ __("Tipo") }}</th>
                            <th>{{ __("Contenido") }}</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($units as $unit)
                            <tr>
                                <td>{{ $unit->order }}</td>
                                <td>{{ $unit->title }}</td>
                                <td>{{ $unit->course->title }}</td>
                                <td>{{ $unit->created_at->format("d/m/Y H:i") }}</td>
                                <td>{{ $unit->unit_type }}</td>
                                <td>
                                    <iframe
                                        src="{{ $unit->path }}"
                                        allowfullscreen
                                        allow="autoplay"
                                    ></iframe>
                                </td>
                                <td>
                                <a href="{{ route('teacher.units.edit', ['unit' => $unit]) }}"><img src="../../assets/img/svg/c-edit.svg" alt="" class="svg"></a>
                                <a href="{{ route('teacher.units.destroy', ['unit' => $unit]) }}"><img src="../../assets/img/svg/table-colse.svg" alt="" class="svg"></a>
                                </td>
                                
                            </tr>
                        @empty
                        <div class="container">
                            <div class="empty-results">
                                {!! __("No tienes ningún unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Crear mi primera unidad</a>"]) !!}
                            </div>
                        </div>
                        @endforelse
                    </tbody>
                    
                </table>
                <!-- End Invoice List Table -->
            </div>
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