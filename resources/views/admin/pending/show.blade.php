@extends('layouts.dashmin')

@section("content")
<div class="row">
    <div class="col-12">
    
        <div class="form-element with-icons mb-30">
            

            <!-- Invoice Top -->
            
            <div class="invoice-pd c2-bg" data-bg-img="../../../assets/img/media/invoice-pattern.png">
                <div class="row">
                    <div class="col-md-6">
                            <!-- Invoice Left -->
                            <div class="invoice-left">
                                @if($course->picture)
                                    <div class="logo mb-3"><img alt="{{ $title }}" class="img-fluid" width="150" src="{{ $course->imagePath() }}" /></div>
                                @endif
                            </div>
                            <!-- End Invoice Left -->
                    </div>

                    <div class="col-md-6">
                        <!-- Invoice Right -->
                        <div class="invoice-right mt-5 mt-md-0">
                            <h3 class="white font-20 mb-3">Informacion del Curso</h3>

                            <ul class="status-list">
                            <li><span class="key font-14">Nombre:</span> <span class="white bold font-17">{{ $course->title }}</span></li>
                            <li><span class="key font-14">Descripcion:</span> <span class="white bold font-17">{{ $course->description }}</span></li>
                            <li><span class="key font-14">Precio:</span> <span class="white bold font-17">{{ $course->price }}</span></li>
                            <li><span class="key font-14">Subido:</span> <span class="white bold font-17">{{ $course->created_at->format("d/m/Y H:i") }}</span></li>
                            <li><span class="key font-14">Estado:</span>@include('partials.courses.status')</li>
                            </ul>
                        </div>
                        <!-- End Invoice Right -->
                    </div>
                    
                </div>
            </div>
            
            <!-- End Invoice Top -->

            <!-- Invoice Details List Wrapper -->
            <div class="card_color-bg details-list-wrap">
                <div class="table-responsive">
                    <!-- Invoice List Table -->
                    <table class="invoice-list-table style-two some-center text-nowrap">
                        <thead>
                            <tr>
                            <th>{{ __("Nombre") }}</th>
                            <th>{{ __("Tipo") }}</th>
                            <th>{{ __("Contenido") }}</th>
                            </tr>
                        </thead>

                        <tbody class="card_color-bg">
                            @forelse($course->units as $unit)
                                <tr>
                                    <td>{{ $unit->title }}</td>
                                    <td>{{ $unit->unit_type }}</td>
                                    <td>
                                        @switch($unit->unit_type)
                                            @case(\App\Models\Unit::SECTION)
                                                
                                                    {{ $unit->title }}
                                                
                                            @break
                                            @case(\App\Models\Unit::ZIP)
                                                <a href="{{ route('admin.pending.download', $unit) }}">Descargar archivo</a>
                                            @break
                                            @case(\App\Models\Unit::VIDEO)
                                                <iframe id="player" type="text/html" width="100%" src="{{ $unit->content }}" frameborder="0" scrolling="no"></iframe>
                                            @break
                                        @endswitch
                                    </td>
                                </tr>
                                @empty
                                <div class="container">
                                    <div class="empty-results">
                                        {!! __("Este curso no tiene ninguna unidad todavía") !!}
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Invoice List Table -->
                </div>

            </div>
            <!-- End Invoice Details List Wrapper -->

            <div class="proceed-to-checkout invoice-edit d-flex align-items-center justify-content-end mr-20 mt-4">
                <a href="#" class="download-btn mr-3"><img src="{{ asset('../../assets/img/svg/table-colse.svg') }}" alt="" class="svg"></a>
                <a href="{{ route('admin.course.status', ['id' => $course->id, 'status' => 1]) }}" class="print-btn mr-20"><img src="{{ asset('../../assets/img/svg/done-check.svg') }}" alt="" class="svg"></a>
            </div>

            
        </div>
    </div>
    
</div>
@endsection

