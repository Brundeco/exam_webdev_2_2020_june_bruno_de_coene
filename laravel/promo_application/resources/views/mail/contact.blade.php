<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sleep Orbit mail</title>
</head>

<body>

    <span class="preheader"></span>

    <div class="mail-wrapper" style="
        height: 100vh;
        width: 100%;
        background: #666F71;
        display: flex;
        justify-content: center;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-image:url(http://stasseynsjonas.be/images/header-main.png)">
        <table align="center" class="mail-container float-center" style="
            width: 80%;
            height: 65%;
            background-color: rgba(250, 250, 250, 0.9);
            border-radius: 20px;">
            <tbody class="center-mail-content" style="
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                padding: 10%;">
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
                                                    <h1 class="main-section-title" style="
                                                        font-weight: 600;
                                                        font-style: italic;
                                                        font-size: 2em;
                                                        line-height: 2.3em;
                                                        text-transform: uppercase;
                                                        text-align: left;
                                                        border-bottom: 1px solid black;
                                                        margin-bottom: 30px;">
                                                    Sleep Orbit mail </h1>
                                                    <p class="mail-intro" style=" text-align: left;font-weight: 400;">Hello
                                                        {{ $data->firstname . ' ' . $data->lastname }}
                                                        we received the
                                                        following mail from you.</p>
                                                    <p class="mail-subject" style="
                                                        text-align: left;
                                                        margin-top: 30px !important;
                                                        display: block;
                                                        font-weight: 600;
                                                        font-size: 1em;
                                                        background: rgba(173, 194, 80, 0.5);
                                                        border-radius: 10px;
                                                        padding: 1.5% 3%;"><span style="
                                                        font-weight: 600;"> {{ $data->subject }} </span></p>
                                                    <p class="mail-content clear-margin" style="
                                                        font-weight: 200;
                                                        text-align: left;
                                                        margin-top: 30px !important;
                                                        display: block;
                                                        background: #dadada;
                                                        border-radius: 10px;
                                                        padding: 3%;"> {{ $data->content }} </p>
                                                    <p class="mail-outro" style="text-align: left;
                                                        margin-top: 30px;
                                                        font-weight: 500;
                                                        text-align: left;
                                                        padding: 2%;
                                                        padding-left: 0;">Thanks for reaching out to us. We will try to
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
