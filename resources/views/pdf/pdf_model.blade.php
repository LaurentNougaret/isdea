<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@lang('form.title') - {{$projects->content[1]}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="/storage/images/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css"/>
    <link href="https://fonts.googleapis.com/css?family=Anton|Raleway" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Raleway', sans-serif;
            src: url('/public/fonts/Raleway-Regular.ttf') format('truetype');
        }

        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>

<body>
<div class="">
    <h1 class="project_id"> @lang('project.project') - {{$projects->content[0] . ' - ' . $projects->content[1]}}</h1>
</div>
<div class="form-group">
    <h2 >@lang('form.line-up')</h2>
    <strong>@lang('form.mandatory') :</strong> {{$projects->content[2]}} <br/><br/>
    <strong>@lang('form.designer') :</strong> {{$projects->content[3]}} <br/><br/>
    <strong>@lang('form.investor.sponsor') :</strong> {{$projects->content[4]}} <br/><br/>
    <strong>@lang('form.manager') :</strong> {{$projects->content[5]}} <br /><br/>
    <strong>@lang('form.other') :</strong> {{$projects->content[6]}} <br/>
</div>
<div class="">
    <div class="form-group">
        <h2>@lang('form.offer_synthesis')</h2>
        <h3>@lang('form.description')</h3>
        {{$projects->content[38]}}<br/>
        <h4>@lang('form.advice.summary')</h4>
        <div class="">
            <div class="">
                {{$projects->content[39]}}<br/>
            </div>
        </div>
    </div>
    <pagebreak />
    @if( $projects->content[29] != '' )
    <div class="">
        <img class="" src="{{url('storage') . "/" . $projects->content[29]}}"/>
    </div>
    @endif
    @if( $projects->content[30] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[30]}}"/>
    </div>
    @endif
    @if( $projects->content[31] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[31]}}"/>
    </div>
    @endif
    @if( $projects->content[32] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[32]}}"/>
    </div>
    @endif
    @if( $projects->content[33] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[33]}}"/>
    </div>
    @endif
    @if( $projects->content[34] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[34]}}"/>
    </div>
    @endif
    @if( $projects->content[35] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[35]}}"/>
    </div>
    @endif
    @if( $projects->content[36] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[36]}}"/>
    </div>
    @endif
    @if( $projects->content[37] != '' )
    <div class="2">
        <img class="" src="{{url('storage') . "/" . $projects->content[37]}}"/>
    </div>
    @endif
    <pagebreak />
    <div class="">
        <div class="form-group">
            <h2 >{{strtoupper(trans('form.completeness.case'))}}</h2>
            <h3>@lang('form.missing_element.commentary')</h3>
            {{$projects->content[7]}}
        </div>
    </div>
    <br><br>
    <div class="">
        <h2>{{strtoupper(trans('form.offer_analysis_particular_conditions'))}}</h2>
        <div class="form-group">
            <h3>@lang('form.recall.stage2')</h3>
            @if($projects->content[8] != '')
                {{$projects->content[8]}}
            @endif
            <h3>@lang('form.vigilance.point')</h3>
            @if( $projects->content[9] != '')
                {{$projects->content[9]}}
            @endif
            <h3>@lang('form.lpd.urban')</h3>
            @if( $projects->content[10] != '')
                {{$projects->content[10]}}
            @endif
        </div>
    </div>
    <pagebreak />
    <div class="">
        <h2 >{{strtoupper(trans('form.analysis.offer'))}} - 1/3</h2>
        <div class="form-group">
            <h3>@lang('form.quality.program')</h3>
            @if( $projects->content[11] != '')
                {{$projects->content[11]}}
            @endif
            <h4>@lang('form.evolution.candidacy')</h4>
            @if( $projects->content[12] != '')
                {{$projects->content[12]}}
            @endif
            <h4>@lang('form.advice.program')</h4>
            @if( $projects->content[13] != '')
            <div class="">
                {{$projects->content[13]}}
            </div>
            @endif
            <h4>{{strtoupper(trans('form.urban.quality'))}}</h4>
            @if( $projects->content[14] != '')
                {{$projects->content[14]}}
            @endif
            <h4>@lang('form.advice.quality')</h4>
            @if( $projects->content[15] != '')
            <div class="">
                {{$projects->content[15]}}
            </div>
            @endif
        </div>
    </div>
    <pagebreak />
    <div class="">
        <h2>{{strtoupper(trans('form.analysis.offer'))}} - 2/3</h2>
        <div class="form-group">
            <h3>@lang('form.innovative.character')</h3>
            @if( $projects->content[16] != '')
                {{$projects->content[16]}}
            @endif
            <h4>@lang('form.evolution.candidacy')</h4>
            @if( $projects->content[17] != '')
            {{$projects->content[17]}}
            @endif
            <h4>@lang('form.advice.innovative')</h4>
            @if( $projects->content[18] != '')
            <div class="">
                {{$projects->content[18]}}
            </div>
            @endif
            <h4>{{strtoupper(trans('form.global.warming'))}}</h4>
            @if( $projects->content[19] != '')
                {{$projects->content[19]}}
            @endif
            <h4>@lang('form.evolution.candidacy')</h4>
            @if( $projects->content[20] != '')
                {{$projects->content[20]}}
            @endif; ?>
            <h4>@lang('form.global.advice')</h4>
            @if( $projects->content[21] != '')
            <div class="">
                {{$projects->content[21]}}
            </div>
            @endif
        </div>
    </div>
    <pagebreak />
    <div class="">
        <h2>{{strtoupper(trans('form.analysis.offer'))}} - 3/3</h2>
        <div class="form-group">
            <div class="form-group">
                <table class="">
                    <tr>
                        <td><h4>@lang('form.legal.assembly')</h4></td>
                        <td><h4>@lang('form.financial.arrangement')</h4></td>
                    </tr>
                    <tr>
                        <td>
                            <div>{{$projects->content[22]}}</div>
                        </td>
                        <td>
                            <div>{{$projects->content[23]}}</div>
                        </td>
                    </tr>
                    <tr class="">
                        <td><h5>@lang('form.advice.assembly')</h5></td>
                        <td><h5>@lang('form.advice.financial')</h5></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="">
                                {{$projects->content[24]}}
                            </div>
                        </td>
                        <td>
                            <div class="">
                                {{$projects->content[25]}}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class ="">
                <h3>{{strtolower(trans('form.sale.price'))}}</h3>
                @if( $projects->content[26] != '')
                    {{$projects->content[26]}}
                @endif
                <h4>@lang('form.advice.price')</h4>
                @if( $projects->content[27] != '')
                <div class="">
                    {{$projects->content[27]}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="">
        <h2>{{strtoupper(trans('form.analysis.domains'))}}</h2>
        @if( $projects->content[28] != '')
        <div class="">
            {{$projects->content[28]}}
        </div>
        @endif
    </div>
</div>
</body>
