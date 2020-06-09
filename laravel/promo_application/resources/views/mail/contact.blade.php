<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sleep Orbit mail</title>
</head>

<body>

    <style type="text/css">
        .mail-wrapper {
            height: 100vh;
            width: 100%;
            background: $soft-grey;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .mail-wrapper h1 {
            @include main-section-title;
            text-align: left;
            border-bottom: 1px solid black;
            margin-bottom: 30px;
        }

        .mail-wrapper h2 {
            font-weight: 400;
            font-size: 1.3em;
            color: $dark-grey;
            text-align: left;
            margin-top: 30px;
        }

        .mail-container {
            width: 80%;
            height: 65%;
            background-color: rgba(250, 250, 250, 0.9);
            border-radius: 20px;
        }

        .center-mail-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 10%;
        }

        .mail-content,
        .mail-intro {
            text-align: left;
        }

        .mail-intro {
            font-weight: 400;
        }

        .mail-outro {
            margin-top: 30px;
            font-weight: 500;
            text-align: left;
            padding: 2%;
            padding-left: 0;
        }

        .mail-content,
        .mail-subject {
            font-weight: 200;
            text-align: left;
            margin-top: 30px !important;
            display: block;
        }

        .mail-content {
            background: #dadada;
            border-radius: 10px;
            padding: 3%;
        }

        .mail-subject {
            font-weight: 600;
            font-size: 1em;
            background: $soft-green;
            border-radius: 10px;
            padding: 1.5% 3%;
        }

        .mail-subject span {
            font-weight: 600;
        }
    </style>
    <span class="preheader"></span>

    <div class="mail-wrapper" style="background-image: url(' {{ asset('images/asmr-dripplets.jpg') }} ') ">
        <table align="center" class="mail-container float-center">
            <tbody class="center-mail-content">
                <tr>
                    <td>
                        <table class="spacer">
                            <tbody>
                                <tr>
                                    <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row">
                            <tbody>
                                <tr>
                                    <th class="small-12 large-12 columns first last">
                                        <table>
                                            <tr>
                                                <th>
                                                    <h1 class="main-section-title"> Sleep Orbit mail </h1>
                                                    <p class="mail-intro">Hello
                                                        {{ $data->firstname . ' ' . $data->lastname  }} we received the
                                                        following mail from you.</p>
                                                    <p class="mail-subject"><span> {{ $data->subject }} </span></p>
                                                    <p class="mail-content clear-margin"> {{ $data->content }} </p>
                                                    <p class="mail-outro">Thanks for reaching out to us. We will try to
                                                        get back at you as soon as
                                                        possible! </p>
                                                </th>
                                                <th class="expander"></th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" class="wrapper secondary">
                            <tr>
                                <td class="wrapper-inner">
                                    <table class="spacer">
                                        <tbody>
                                            <tr>
                                                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>

</html>