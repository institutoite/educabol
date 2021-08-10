@extends('layouts.admin')

@section("content")
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Regular Form
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        {{ $title }}
                    </h2>
                </div>
                @include("partials.form_errors")
                {{ Form::model($category, $options) }}
                    @isset($update)
                        @method("PUT")
                    @endisset
                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <div>
                                {!! Form::label('name', __("Nombre")) !!}
                                {!! Form::text('name', null, ['class' => 'form-control','required']) !!}    
                            </div>
                            <div class="mt-3">
                                {!! Form::label('description', __("Descripcion")) !!}
                                {!! Form::text('description', null, ['class' => 'form-control','required']) !!}
                            </div>
                            <div class="form-check mt-5">
                                {!! Form::file('picture', ['class' => 'custom-file-input', 'id' => 'picture']) !!}
                            </div>
                            <div class="form-check mt-5">
                                {!! Form::submit($textButton, ['class' => 'btn btn-primary mt-5"','required']); !!}
                            </div>
                            
                        </div>
                        <div class="source-code hidden">
                            <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                            <div class="overflow-y-auto mt-3 rounded-md">
                                <pre id="copy-vertical-form" class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagEmailHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;vertical-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;form-check mt-5&quot;HTMLCloseTag HTMLOpenTaginput id=&quot;vertical-form-3&quot; class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot;HTMLCloseTag HTMLOpenTaglabel class=&quot;form-check-label&quot; for=&quot;vertical-form-3&quot;HTMLCloseTagRemember meHTMLOpenTag/labelHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagLoginHTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <!-- END: Vertical Form -->
            
        </div>
    </div>
@endsection