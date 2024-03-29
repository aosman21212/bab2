






                        @extends('layouts.app')

@section('content')

<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-breadcrumb">
                        <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">client Data</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        
                                    </div>
                                
                                  
                                    <div class="action-btn">
                                    <a class="btn btn-primary float-right"
                                    href="{{ route('clientdatas.index') }}">
                                           <i class="fa fa-arrow-left"></i> Back</a>
                                    </div>
                                </div>
                            </div>
                    
               
                        </div>

                    </div>
                </div>
            </div>

<div class="card card-horizontal card-default card-md mb-4">

<div class="col-lg-12">
                                    <div class="card card-horizontal card-default card-md mb-4">
                                       
                                        <div class="card-body py-md-30">
                                            <div class="horizontal-form">
                                            {!! Form::model($clientdata, ['route' => ['clientdatas.update', $clientdata->id], 'method' => 'patch']) !!}
                                            @include('clientdatas.fields')

                                                    <div class="card-footer">
                    <div class="layout-button mt-0">
                        <a href="{{ route('clientdatas.index') }}" class="btn btn-default btn-squared border-normal bg-normal px-10">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-default btn-squared px-20">Save</button>
                    </div>
                </div>
                
                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ends: .card -->

                                </div>
</div>
 
@endsection
