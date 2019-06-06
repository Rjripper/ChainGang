@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">
                    Nieuwsbrief -
                    @foreach ($newsletter as $item)
                    {{$item->title}}
                    @endforeach
                </h4>
               
                {{-- Begin Form --}}
                <form>
                    {{-- Nieuwsbrief bekijken --}}
                    <div class="row">
                            <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="inputTitle">Titel</label>
                                        <input type="text" class="form-control" id="validationCustom05" value="{{$newsletter[0]->title}}" disabled required>
                                    </div>
                                    <div class="form-group"><label for="inputAteur">Auteur</label> 
                                        @foreach ($newsletter as $item)
                                        @php
                                        $userReference = App\User::Where('id', $item->reference)->get();
                                        // dd($userReference[0]->first_name);
                                        @endphp
                                        <input type="text" class="form-control" id="validationCustom05" value="{{ $userReference[0]->first_name }}" disabled required>
                                        @endforeach
                                    </div>                                     
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tag">Preview Nieuwsbrief:</div>
                                    {{-- <iframe class="iframe-layout" name="targetCode" id="targetCode"></iframe> --}}
                                    <textarea class="iframe-layout" disabled>{{$newsletter[0]->message}}</textarea>
                                </div>
                            </div>
                            </div>
                        </div> 
                </form>
                {{-- EIND Form--}}


                <div class="row">   
                    <div class="btn-back">
                        <a href="{{ url('/admin/newsletters') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>                    
                    <div class="btn-add-newsletter-layout">
                    </div>                
                    </div>   
                </div>            
            {{-- EIND Nieuwsbrief bekijken--}}
            </div>                   
              
        </div>
    </div>
</div>

<script>
    function runCode() {
        var iframe = document.getElementById('targetCode');
        iframe = (iframe.contentWindow)?iframe.contentWindow:(iframe.contentDocument)? iframe.contentDocument.document: 
        iframe.contentDocument;
        

    var myvar = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'+
    '<html xmlns="http://www.w3.org/1999/xhtml">'+
    '<head>'+
    '<meta name="viewport" content="width=device-width, initial-scale=1.0">'+
    '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">'+
    '</head>'+
    '<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">'+
    '    <style>'+
    '        @media  only screen and (max-width: 600px) {'+
    '            .inner-body {'+
    '                width: 100% !important;'+
    '            }'+
    ''+
    '            .footer {'+
    '                width: 100% !important;'+
    '            }'+
    '        }'+
    ''+
    '        @media  only screen and (max-width: 500px) {'+
    '            .button {'+
    '                width: 100% !important;'+
    '            }'+
    '        }'+
    '    </style>'+
    '<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr>'+
    '<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">'+
    '                <table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">'+
    '<tr>'+
    '<td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">'+
    '        <a href="http://localhost" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #bbbfc3; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 white;">'+
    '            Laravel'+
    '        </a>'+
    '    </td>'+
    '</tr>'+
    '<!-- Email Body --><tr>'+
    '<td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">'+
    '                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">'+
    '<!-- Body content --><tr>'+
    '<td class="content-cell" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">'+
    '                                        <h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;">Please verify: minecraft123</h1>'+
    '<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Welcome to Laravel, minecraft123@minecraft.com</p>'+
    '<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Thank you for registering, please verify your account by pressing the button below.</p>'+
    '<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr>'+
    '<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">'+
    '            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;"><tr>'+
    '<td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">'+
    '                        <table border="0" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;"><tr>'+
    '<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">'+
    '                                    <a href="http://127.0.0.1:8000/user/verifyDvSQ2z1JHFtZoF7SL1GCjgnrDmzfA4og5HPE8ct113" class="button button-primary" target="_blank" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #FFF; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #3097D1; border-top: 10px solid #3097D1; border-right: 18px solid #3097D1; border-bottom: 10px solid #3097D1; border-left: 18px solid #3097D1;">Verify</a>'+
    '                                </td>'+
    '                            </tr></table>'+
    '</td>'+
    '                </tr></table>'+
    '</td>'+
    '    </tr></table>'+
    '<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">if the button is not functioning please copy and paste this url below in your web browser.'+
    '<a href="https://www.ninekek.com/user/verify/DvSQ2z1JHFtZoF7SL1GCjgnrDmzfA4og5HPE8ct113" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #3869D4;">https://www.chaingang.com/user/verify/DvSQ2z1JHFtZoF7SL1GCjgnrDmzfA4og5HPE8ct113</a></p>'+
    '<p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">Thanks,<br>'+
    'Laravel</p>'+
    ''+
    '                                        '+
    '                                    </td>'+
    '                                </tr>'+
    '</table>'+
    '</td>'+
    '                    </tr>'+
    '<tr>'+
    '<td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">'+
    '        <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;"><tr>'+
    '<td class="content-cell" align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">'+
    '                    <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;">© 2019 Laravel. All rights reserved.</p>'+
    '                </td>'+
    '            </tr></table>'+
    '</td>'+
    '</tr>'+
    '</table>'+
    '</td>'+
    '        </tr></table>'+
    '</body>'+
    '</html>';
        

        iframe.document.open();
        iframe.document.write(myvar);
        iframe.document.close();
        return false;
    }
runCode();
</script>


@endsection





