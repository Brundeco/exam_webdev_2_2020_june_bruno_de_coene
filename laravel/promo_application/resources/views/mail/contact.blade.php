{{-- {{ dd($data) }} --}}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>My Basic Template Email Template Subject</title>
  </head>
    <body>
      <span class="preheader"></span>

<div class="mail-wrapper" style="background-image: url('{{ asset('images/asmr-dripplets.jpg')}}')">
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
                      <p class="mail-intro">Hello <span>{{ $data->firstname . ' ' . $data->lastname  }}</span> we received the following mail from you.</p>
                      <p class="mail-content"> Subect: {{ $data->subject }} </p>
                      <p class="mail-content clear-margin"> Content: {{ $data->content }} </p>
                      <p class="mail-outro">Thanks for reaching out to us. We will try to get back at you as soon as possible! </p>
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
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
  </body>
</html>
