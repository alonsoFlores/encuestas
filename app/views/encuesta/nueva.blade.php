@extends ('layout.master')

@section('content')
<div class="row">
        <div class="col-md-7 col-md-offset-1">
            <section class="widget">
            <header>
                <h4>
                    <i class="eicon-window"></i>
                    Encuesta
                    <small>Bienvenida</small>
                </h4>
            </header>
            <div class="body">
                <div id="wizard" class="form-wizard">
                    <ul class="wizard-navigation nav-justified">
                        <li><a href="#tab1" data-toggle="tab"><small>1.</small><strong> Información</strong></a></li>
                        <li><a href="#tab3" data-toggle="tab"><small>3.</small> <strong>Pago</strong></a></li>
                        <li><a href="#tab4" data-toggle="tab"><small>4.</small> <strong>¡Gracias!</strong></a></li>
                    </ul>
                    <div id="bar" class="progress progress-small">
                        <div class="progress-bar progress-bar-inverse"></div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab1">
                            {{Form::open(array('url' => 'encuestas/save', 'class' => 'form-horizontal form-condensed'))}}
                                <fieldset>
                                    <div class="control-group">
                                        {{Form::label('nombre', 'Nombre', array('class' => 'control-label'))}}
                                        <div class="controls form-group">
                                            <div class="col-md-10">
                                                {{Form::text('nombre', '', array('class' => 'form-control'))}}
                                                <span class="help-block">Nombre Completo</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="control-group">
                                        {{Form::label('email', 'Correo', array('class' => 'control-label'))}}
                                        <div class="controls form-group">
                                            <div class="col-md-6">
                                                {{Form::text('email', '', 
                                                        array(
                                                            'class' => 'form-control input-transparent',
                                                            'id' => 'transparent-field'
                                                        )
                                                    )
                                                }}
                                                <span class="help-block">Correo electrónico</span>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="control-group">
                                        {{Form::label('informe_men', 'Le gustaría recibir nuestro informe mensual?', array('class' => 'control-label'))}}
                                        <div class="controls form-group">
                                                <label class="radio">
                                                    {{Form::radio('info', 'SI', true,
                                                            array(
                                                                'class' => 'iCheck',
                                                                'id' => 'radio-1'
                                                            )
                                                        )
                                                    }}
                                                    Absolutamente si.
                                                </label>
                                                <label class="radio">
                                                    {{Form::radio('info', 'SI', false,
                                                            array(
                                                                'class' => 'iCheck',
                                                                'id' => 'radio-2'
                                                            )
                                                        )
                                                    }}
                                                    Por el momento no. 
                                                </label>
                                        </div>
                                    </div>  
                                    <div class="control-group">
                                        {{Form::label('informe_men', 'Le gustaría recibir informacion de su cuenta?', array('class' => 'control-label'))}}
                                        <div class="controls form-group">
                                                <label class="checkbox inline">
                                                    {{Form::checkbox('info', 'quincenal', true,
                                                            array(
                                                                'class' => 'iCheck',
                                                                'id' => 'checkbox-1'
                                                            )
                                                        )
                                                    }}
                                                    Quincenal
                                                </label>
                                                <label class="checkbox inline">
                                                    {{Form::checkbox('info', 'mensual', false,
                                                            array(
                                                                'class' => 'iCheck',
                                                                'id' => 'checkbox-2'
                                                            )
                                                        )
                                                    }}
                                                    Mensual 
                                                </label>
                                                 <label class="checkbox inline">
                                                    {{Form::checkbox('info', 'not', false,
                                                            array(
                                                                'class' => 'iCheck',
                                                                'id' => 'checkbox-2'
                                                            )
                                                        )
                                                    }}
                                                    Por el momento no, gracias.
                                                </label>
                                                <span class="help-block">Saldos y movimientos en su cuenta</span>
                                        </div>
                                    </div> 
                                 </fieldset>
                            {{Form::close()}}
                        </div>
                        <div class="tab-pane" id="tab3">
                            <form class="form-horizontal" action='' method="POST">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label"  for="name">Name on the Card</label>
                                        <div class="controls form-group">
                                            <div class="col-md-10"><input type="text" id="name" name="name" placeholder="" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-row control-group">
                                        <label for="credit-card-type" class="control-label">Credit Card Type</label>
                                        <div class="controls form-group">
                                            <div class="col-md-10"><select id="credit-card-type" data-placeholder="Please select.." class="chzn-select select-block-level">
                                                <option value=""></option>
                                                <option value="Visa">Visa</option>
                                                <option value="Mastercard">Mastercard</option>
                                                <option value="Other">Other</option>
                                            </select></div>
                                        </div>
                                    </div>
                                    <div class="form-row control-group ">
                                        <label class="control-label" for="credit">Credit Card Number </label>
                                        <div class="controls form-group">
                                            <div class="col-md-10"><input id="credit" type="text" tabindex="3" class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="form-row control-group">
                                        <label for="expiration-date" class="control-label">Expiration Date</label>
                                        <div class="controls form-group">
                                            <div class="col-md-10"><input type="text" id="expiration-date"  class="form-control"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <h2>¡Gracias!</h2>
                            <p>Presiona enviar para finalizar tu encuesta.</p>
                        </div>
                        <div class="description">
                            <ul class="pager wizard">
                                <li class="previous">
                                    <button class="btn btn-primary pull-left"><i class="fa fa-caret-left"></i> Anterior</button>
                                </li>
                                <li class="next">
                                    <button class="btn btn-primary pull-right" >Siguiente <i class="fa fa-caret-right"></i></button>
                                </li>
                                <li class="finish" style="display: none">
                                    <button class="btn btn-success pull-right" >Enviar <i class="fa fa-check"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
@stop