<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>Notificaciones Wompi - recibo de tu pedido</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300&family=Open+Sans:wght@400;700&display=swap');

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        p {
            font-size: 16px;
        }

        img {
            border: 0;
        }

        a {
            color: #062a51;
            text-decoration: none;
        }

        @media screen and (max-width: 599.98px) {

            .two-cols .padding,
            .two-thirds-cols .padding,
            .three-cols .padding {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            img.two-col-img {
                width: 300px !important;
                max-width: 300px !important;
            }

            .two-thirds-cols .padding.first {
                padding-bottom: 0 !important;
            }

            .two-thirds-cols .padding.last {
                padding-top: 0 !important;
            }

            img.one-third-col-img,
            img.three-col-img-last {
                width: 200px !important;
                max-width: 200px !important;
            }

            .two-thirds-cols .content {
                text-align: center !important;
            }
        }

        @media screen and (max-width: 399.98px) {
            img.three-col-img {
                width: 200px !important;
                max-width: 200px !important;
            }
        }

        /* Custom Dark Mode Colors */
        :root {
            color-scheme: light dark;
            supported-color-schemes: light dark;
        }

        @media (prefers-color-scheme: dark) {

            body,
            center,
            table {
                background: #2d2d2d !important;
                color: #ffffff !important;
            }

            .darkmode-transparent {
                background-color: transparent !important;
            }
        }
    </style>
    <!--[if (gte mso 9)|(IE))]>
      <style type="text/css">
         table{border-collapse: collapse!important;}
      </style>
   <![endif]-->
</head>

<body style="Margin:0;padding:0;min-width:100%;background-color:#dde0e1;">
    <!--[if (gte mso 9)|(IE))]>
      <style type="text/css">
         body{background-color:#dde0e1!important;}
         body, table, td, p, a {font-family: sans-serif, Arial, Helvetica!important;}
      </style>
   <![endif]-->
    <center style="width: 100%;table-layout: fixed;background-color:#dde0e1;padding-bottom: 40px;">
        <div style="max-width: 600px;background-color: #fafdfe;box-shadow: 0 0 10px rgba(0, 0, 0, .2);">
            <!--PREHEADER (REMOVE COMMENT)-->
            <div
                style="font-size: 0px;color: #fafdfe;line-height: 1px; mso-mso-line-height-rule:exactly;display: none;max-width: 0px;max-height: 0px;opacity: 0;overflow: hidden;mso-hide:all;">
                Tu recibo de Wompi
            </div>
            <!-- END PREHEADER (REMOVE COMMENT)-->
            <!--[if (gte mso 9)|(IE))]>
               <table width="600" align="center" style="border-spacing:0;color:#062a51;" role="presentation">
               <tr>
               <td> style="padding:0;">
            <![endif]-->
            <table align="center"
                style="border-spacing:0;color:#062a51;font-family: 'Nunito', sans-serif, Arial, Helvetica!important;background-color: #fafdfe;Margin:0;padding:0;width: 100%;max-width:600px; border-collapse: separate;"
                role="presentation">
                <!-- START BANNER -->
                <!--background="{{asset('assets/images/fondo_header_mail.png')}}" -->
                <tr>
                    <td 
                    background="https://wompi.facturatech.co/assets/images/fondo_header_mail.png"
                    width="600" height="332"
                        style="background-position: center top;">
                        <!--[if (gte mso 9)|(IE))]>
                        <v:rect xlmns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:332px;">
                            <v:fill type="tile" src="{{asset('assets/images/fondo_header_mail.png')}}"/>
                            <v:textbox inset="0,0,0,0">
                    <![endif]-->
                        <table cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td width="600" height="332" align="center" valign="bottom">
                                    <table class="darkmode-transparent" cellpadding="0" cellspacing="0"
                                        role="presentation">
                                        <tr style="vertical-align: bottom;">
                                            <td align="center">
                                                <table class="darkmode-transparent" role="presentation">
                                                    <tr style="vertical-align: bottom;">
                                                        <!--[if (gte mso 9)|(IE))]>
                                                        <td style="padding-top:100px;padding-bottom:25px;">
                                                    <![endif]-->
                                                        <td align="center"
                                                            style="font-size:30px;line-height:36px;color:#ffffff;padding: 10px 20px ;font-weight:bold;">
                                                            <p
                                                                style="font-size: 25px;line-height:30px;color:#FF4B71;font-weight:900; text-transform: uppercase;">
                                                                Pago con la referencia: <br>  {{$referencia}}
                                                            </p>
                                                        </td>
                                                        <!--[if (gte mso 9)|(IE))]>
                                                    </td>
                                                    <![endif]-->
                                                    </tr>
                                                    <tr>
                                                        <td align="center">
                                                            <table class="darkmode-transparent" cellpadding="0"
                                                                cellspacing="0" role="presentation">
                                                                <tr>
                                                                    <td style="border-radius: 10px;" bgcolor="#eff8fe">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE))]>
                            </v:textbox>
                        </v:rect>
                    <![endif]-->
                    </td>
                </tr>
                <!-- END BANNER -->


                <!-- START TWO THIRDS COLUMNS -->
                <tr>
                    <td style="padding: 10px 0 10px 0; background-color: #f1f6fc;">
                        <table width="100%" style="border-spacing: 0;" role="presentation">
                            <tr>
                                <td class="two-thirds-cols"
                                    style="padding: 0;font-size: 0;text-align: center;background-color: ##f1f6fc;">

                                    <!--[if (gte mso 9)|(IE))]>
                                                    </td><td width="600" valign="top" style="padding: 0;">
                                                <![endif]-->
                                    <table class="col"
                                        style="border-spacing: 0;vertical-align: top;width: 100%;max-width: 400px;display: inline-block;"
                                        role="presentation">
                                        <tr>
                                            <td class="padding last"
                                                style="padding: 30px 10px 15px 10px;background-color: ##f1f6fc;">
                                                <table class="content" style="border-spacing: 0;text-align: left;"
                                                    role="presentation">
                                                    <tr>
                                                        <td
                                                            style="vertical-align: middle;padding: 0px 10px 0px 10px;background-color: #f1f6fc;">
                                                            <p style="font-size:20px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px; "> 
                                                                Estimado:
                                                                @if(isset($datos_generales))
                                                                    {{$datos_generales['usuario'] ?? ''}}
                                                                @endisset
                                                            </p>
                                                        
                                                            <p style="font-size:20px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px;"> Este es el resumen de su compra: </p>
                                                            
                                                            @if(isset($datos_generales))
                                                                <p style="font-size:16px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px;">
                                                                        Total pagado: ${{ $datos_generales['price'] ?? '' }}
                                                                </p>
                                                                <p style="font-size:16px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px;">
                                                                        Fecha del pago: {{ $datos_generales['fecha'] ?? '' }}
                                                                </p>
                                                                <p style="font-size:16px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px;">
                                                                        Referencia: {{ $datos_generales['referencia'] ?? '' }}
                                                                </p>
                                                                <p style="font-size:16px;color:#062a51;letter-spacing:2px;font-weight:900;line-height: 20px;">
                                                                        Estatus: {{ $datos_generales['estatus'] ?? '' }}
                                                                </p>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE))]>
                                                    </td>
                                                    </tr>
                                                    </table>
                                                <![endif]-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- END TWO THIRDS COLUMNS -->

                <!--START TWO COLUMNS -->
                @isset($paquetes)
                    <tr>
                        <td style="padding: 0px 0 30px 0;">
                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                <tr>
                                    <td class="two-cols" style="padding: 0;font-size: 0;text-align: center;">
                                        @foreach($paquetes as $paquete)
                                            <!--[if (gte mso 9)|(IE))]>
                                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                            <tr>
                                            <td width="300" valign="bottom" style="padding: 0;">
                                            <![endif]-->
                                            @if(isset($paquete->total_timbres) && $paquete->total_timbres > 0 || isset($paquete) && $paquete->tipo_package == 'pos' || isset($paquete) && $paquete->tipo_package == 'promocion')
                                                <table class="col"
                                                    style="border-spacing: 0;vertical-align: bottom;width: 100%;max-width: 300px;display: inline-block;"
                                                    role="presentation">
                                                    <tr>
                                                        <td class="padding" style="padding: 20px;">
                                                            <table class="content" style="border-spacing: 0;text-align: center;"
                                                                role="presentation">
                                                                {{--<tr>
                                                                    <td style="text-align: center; font-weight: 800; color: #062a51; font-size: 18px;">
                                                                        <p style="font-size: 18px;">
                                                                            Pago de: {{$paquete->name_paquete ?? ''}} 
                                                                            
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                                <tr>
                                                                    <td align="left" style="padding-left: 10px;">
                                                                        <table witdth="100%" align="left" border="0" cellpading="0"
                                                                            style="border-spacing: 0; border-collapse: separate;">
                                                                            <tr>
                                                                                <td style="border-radius: 10px;" bgcolor="#fff">
                                                                                    <table width="100%">
                                                                                        <tr
                                                                                            style="font-size: 16px;font-weight: bolder;text-decoration: none;color: #062a51;background-color: #ffd066;border: 2px solid #062a51;border-radius: 10px;padding: 10px 25px;display: inline-block;width: 170px; text-align: center;">
                                                                                            <td align="center"
                                                                                                style="text-align: center; width: inherit; min-height: 50px;">
                                                                                                <p style="margin: 0; text-align: center;">
                                                                                                Paquete: 
                                                                                                {{$paquete->name_paquete ?? ''}}
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                {{--<tr>
                                                                    <td style="padding: 10px 10px 20px 10px; font-size: 15px;line-height: 20px;">
                                                                        <p style="margin: 0; font-weight: 800;">
                                                                            Total timbres: {{$paquete->total_timbres ?? '' }}
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                            </table>
                                                        </td>
                                                    </tr> 
                                                </table>
                                                <!--[if (gte mso 9)|(IE))]>
                                                </td>
                                                </tr>
                                                </table>
                                                <![endif]-->
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endisset
                <!--END TWO COLUMNS -->

                <!--START TWO COLUMNS -->
                @isset($combo)
                    <tr>
                        <td style="padding: 0px 0 30px 0;">
                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                <tr>
                                    <td class="two-cols" style="padding: 0;font-size: 0;text-align: center;">
                                        @foreach($combo as $combo)
                                            <!--[if (gte mso 9)|(IE))]>
                                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                            <tr>
                                            <td width="300" valign="bottom" style="padding: 0;">
                                            <![endif]-->
                                            <table class="col"
                                                style="border-spacing: 0;vertical-align: bottom;width: 100%;max-width: 300px;display: inline-block;"
                                                role="presentation">
                                                <tr>
                                                    <td class="padding" style="padding: 20px;">
                                                        <table class="content" style="border-spacing: 0;text-align: center;"
                                                            role="presentation">
                                                            <tr>
                                                                <td style="text-align: center; font-weight: 800; color: #062a51; font-size: 18px;">
                                                                    <p style="font-size: 18px;">
                                                                        {{$combo->name_paquete ?? ''}} 
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            @isset($combo_hijo)
                                                                @foreach($combo_hijo->where('id_combo' , $combo->id_combo ) as $combo_hijo_paquete)
                                                                    <tr>
                                                                        <td align="left" style="padding-left: 10px;">
                                                                            <table witdth="100%" align="left" border="0" cellpading="0"
                                                                                style="border-spacing: 0; border-collapse: separate;">
                                                                                <tr>
                                                                                    <td style="border-radius: 10px;" bgcolor="#fff">
                                                                                        <table width="100%">
                                                                                            <tr
                                                                                                style="font-size: 16px;font-weight: bolder;text-decoration: none;color: #062a51;background-color: #ffd066;border: 2px solid #062a51;border-radius: 10px;padding: 10px 25px;display: inline-block;width: 170px; text-align: center;">
                                                                                                <td align="center"
                                                                                                    style="text-align: center; width: inherit; min-height: 50px;">
                                                                                                    <p style="margin: 0; text-align: center;">
                                                                                                    Paquete: 
                                                                                                    {{$combo_hijo_paquete->name_paquete ?? ''}}
                                                                                                    </p>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <br>
                                                                @endforeach
                                                            @endisset
                                                            {{--<tr>
                                                                <td style="padding: 10px 10px 20px 10px; font-size: 15px;line-height: 20px;">
                                                                    <p style="margin: 0; font-weight: 800;">
                                                                        Total timbres: {{$paquete->total_timbres ?? '' }}
                                                                    </p>
                                                                </td>
                                                            </tr>--}}
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if (gte mso 9)|(IE))]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endisset
                <!--END TWO COLUMNS -->

                <!--START TWO COLUMNS -->
                @isset($servicio)
                    <tr>
                        <td style="padding: 0px 0 30px 0;">
                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                <tr>
                                    <td class="two-cols" style="padding: 0;font-size: 0;text-align: center;">
                                        @foreach($servicio as $paquete)
                                            <!--[if (gte mso 9)|(IE))]>
                                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                            <tr>
                                            <td width="300" valign="bottom" style="padding: 0;">
                                            <![endif]-->
                                            @if(isset($paquete->id_servicio) && $paquete->id_servicio)
                                                <table class="col"
                                                    style="border-spacing: 0;vertical-align: bottom;width: 100%;max-width: 300px;display: inline-block;"
                                                    role="presentation">
                                                    <tr>
                                                        <td class="padding" style="padding: 20px;">
                                                            <table class="content" style="border-spacing: 0;text-align: center;"
                                                                role="presentation">
                                                                {{--<tr>
                                                                    <td style="text-align: center; font-weight: 800; color: #062a51; font-size: 18px;">
                                                                        <p style="font-size: 18px;">
                                                                            Pago de: {{$paquete->name_paquete ?? ''}} 
                                                                            
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                                <tr>
                                                                    <td align="left" style="padding-left: 10px;">
                                                                        <table witdth="100%" align="left" border="0" cellpading="0"
                                                                            style="border-spacing: 0; border-collapse: separate;">
                                                                            <tr>
                                                                                <td style="border-radius: 10px;" bgcolor="#fff">
                                                                                    <table width="100%">
                                                                                        <tr
                                                                                            style="font-size: 16px;font-weight: bolder;text-decoration: none;color: #062a51;background-color: #ffd066;border: 2px solid #062a51;border-radius: 10px;padding: 10px 25px;display: inline-block;width: 170px; text-align: center;">
                                                                                            <td align="center"
                                                                                                style="text-align: center; width: inherit; min-height: 50px;">
                                                                                                <p style="margin: 0; text-align: center;">
                                                                                                Paquete: 
                                                                                                {{$paquete->name_paquete ?? ''}}
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                {{--<tr>
                                                                    <td style="padding: 10px 10px 20px 10px; font-size: 15px;line-height: 20px;">
                                                                        <p style="margin: 0; font-weight: 800;">
                                                                            Total timbres: {{$paquete->total_timbres ?? '' }}
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if (gte mso 9)|(IE))]>
                                                </td>
                                                </tr>
                                                </table>
                                                <![endif]-->
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endisset
                <!--END TWO COLUMNS -->

                <!--START TWO COLUMNS -->
                @isset($servicio_adicional)
                    <tr>
                        <td style="padding: 0px 0 30px 0;">
                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                <tr>
                                    <td class="two-cols" style="padding: 0;font-size: 0;text-align: center;">
                                        @foreach($servicio_adicional as $paquete)
                                            <!--[if (gte mso 9)|(IE))]>
                                            <table width="100%" style="border-spacing: 0;" role="presentation">
                                            <tr>
                                            <td width="300" valign="bottom" style="padding: 0;">
                                            <![endif]-->
                                            @if(isset($paquete->id_servicio_adicional) && $paquete->id_servicio_adicional > 0)
                                                <table class="col"
                                                    style="border-spacing: 0;vertical-align: bottom;width: 100%;max-width: 300px;display: inline-block;"
                                                    role="presentation">
                                                    <tr>
                                                        <td class="padding" style="padding: 20px;">
                                                            <table class="content" style="border-spacing: 0;text-align: center;"
                                                                role="presentation">
                                                                {{--<tr>
                                                                    <td style="text-align: center; font-weight: 800; color: #062a51; font-size: 18px;">
                                                                        <p style="font-size: 18px;">
                                                                            Pago de: {{$paquete->name_paquete ?? ''}} 
                                                                            
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                                <tr>
                                                                    <td align="left" style="padding-left: 10px;">
                                                                        <table witdth="100%" align="left" border="0" cellpading="0"
                                                                            style="border-spacing: 0; border-collapse: separate;">
                                                                            <tr>
                                                                                <td style="border-radius: 10px;" bgcolor="#fff">
                                                                                    <table width="100%">
                                                                                        <tr
                                                                                            style="font-size: 16px;font-weight: bolder;text-decoration: none;color: #062a51;background-color: #ffd066;border: 2px solid #062a51;border-radius: 10px;padding: 10px 25px;display: inline-block;width: 170px; text-align: center;">
                                                                                            <td align="center"
                                                                                                style="text-align: center; width: inherit; min-height: 50px;">
                                                                                                <p style="margin: 0; text-align: center;">
                                                                                                Paquete: 
                                                                                                {{$paquete->name_paquete ?? ''}}
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                {{--<tr>
                                                                    <td style="padding: 10px 10px 20px 10px; font-size: 15px;line-height: 20px;">
                                                                        <p style="margin: 0; font-weight: 800;">
                                                                            Total timbres: {{$paquete->total_timbres ?? '' }}
                                                                        </p>
                                                                    </td>
                                                                </tr>--}}
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--[if (gte mso 9)|(IE))]>
                                                </td>
                                                </tr>
                                                </table>
                                                <![endif]-->
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endisset
                <!--END TWO COLUMNS -->


                <!-- START GREEN BORDER -->
                <tr>
                    <td style="padding: 0;">
                        <table width="100%" style="border-spacing: 0;" role="presentation">
                            <tr>
                                <td height="3" style="background-color: #FF4B71;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- END GREEN BORDER -->
                <!-- START FOOTER -->
                <tr>
                    <td style="padding: 0;background-color: #062a51;">
                        <table width="100%" style="border-spacing: 0;" role="presentation">
                            <tr>
                                <td
                                    style="padding: 20px 0 10px 0;color:#fff;text-align: center;font-size: 16px; font-weight: 700;">
                                    <a href="https://www.facturatech.co/">
                                        <img src="https://wompi.facturatech.co/assets/images/logo_ftech_email.png" alt="logo" width="120px" border="0" 
                                            style="margin: 0 0 20px 0;">
                                    </a>
                                    <!-- <p style="font-size: 16px;padding-bottom: 2px; margin: 0;">
                                        México Puebla
                                    </p>
                                    <p style="font-size: 16px;padding-bottom: 2px; margin: 0;">
                                        7B Sur #4903, Int. 3 Col. Prados de Agua Azul c.p. 72430
                                    </p> -->
                                    <p style="font-size: 16px;padding-bottom: 2px; margin: 0;">
                                        <table width="100%" style="justify-content: center; ">
                                            <tr style="text-align: center;">
                                                <td style="text-align: center;">
                                                    <a href="mailto:soporte@facturatech.co"
                                                        style="text-decoration:none;color:#fff;">
                                                        soporte@facturatech.co
                                                    </a>

                                                    <a href="mailto:info@facturatech.co"
                                                        style="text-decoration:none;color:#fff;">
                                                        info@facturatech.co
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- <table width="100%">
                                            <tr>
                                                <td>
                                                    <a href="mailto:info@facturatech.co"
                                                        style="text-decoration:none;color:#fff;">
                                                        info@facturatech.co
                                                    </a>
                                                </td>
                                            </tr>
                                        </table> -->
                                    </p>
                                    <p style="font-size: 16px;padding-bottom: 2px; margin: 0;">
                                    <table width="100%">
                                        <tr>
                                            <td style="color: #ffffff;">Medellín (604) 609 00 04</td>
                                            <td style="color: #ffffff;">Bogotá (601) 485 08 51</td>
                                            <td style="color: #ffffff;">Cali (602) 389 60 00</td>
                                        </tr>
                                    </table>

                                    </p>
                                    <p style="font-size: 16px;padding: 10px 0 2px 0; margin: 0;">
                                        © 2022 Todos los derechos reservados FacturaTech
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td height="4" style="background-color: #ffd066;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- END FOOTER -->

                <!-- START SOCIAL ICONS -->
                <tr>
                    <td style="padding: 0;">
                        <table width="100%" style="border-spacing: 0;background-color: #ffd066;" role="presentation">
                            <tr>
                                <td height="3" style="background-color: #ffd066;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;padding: 20px 0 8px 0;">
                                    <a href="https://www.youtube.com/channel/UCgWCzsDcBn3d0QMx3Xdw4qQ" target="_blank">
                                        <img src="https://wompi.facturatech.co/assets/images/youtube.png" style="margin-right: 10px;"
                                            alt="Youtube" title="Our Youtube channel" width="30" border="0">
                                    </a>
                                    <a href="https://www.facebook.com/facturatech" target="_blank">
                                        <img src="https://wompi.facturatech.co/assets/images/facebook.png" alt="Mobile Call"
                                            style="margin-right: 10px;" title="follow us on facebook" width="33"
                                            border="0">
                                    </a>
                                    <a href="https://www.instagram.com/facturatech/" target="_blank">
                                        <img src="https://wompi.facturatech.co/assets/images/instagram.png" alt="Whatsapp"
                                            style="margin-right: 10px;" title="Follow us on Instagram" width="33"
                                            border="0">
                                    </a>
                                    <a href="https://wa.me/3022096661" target="_blank">
                                        <img src="https://wompi.facturatech.co/assets/images/whatsapp.png" alt="Message us on Whatsapp" width="33" border="0">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td height="3" style="background-color: #ffd066;">
                                    <p style="font-size: 12px; text-align: center;">
                                        <a href="tel:+522224331390" style="text-decoration:none;color:#062a51;">
                                            
                                        </a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- END SOCIAL ICONS -->
            </table>
            <!--[if (gte mso 9)|(IE))]>
               </td>
               </tr>
               </table>
            <![endif]-->
        </div>
    </center>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>