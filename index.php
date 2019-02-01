<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
        if (isset($_POST['content'])) {
            $folderName = $_POST['folderName'];
            mkdir($folderName, 0777, true);
            $fileName = $folderName.'/index.html';
            $myfile = fopen($fileName, "w") or die("Unable to open file!");
            $head = '<!DOCTYPE html> <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"> <head>';
            $footer = '</body> </html>';
            $txt = $head.$_POST['content'].$footer;
            fwrite($myfile, $txt);
            fclose($myfile);
            header("Refresh:0");
        }
    ?>

    <div class="creator">
        <button class="btn" id="appendHeader">Header</button>
        <button class="btn" id="appendHeroImage">Hero Image</button>
        <button class="btn" id="append1ColumnTextPlusButton">1 Column Text + Button</button>
        <button class="btn" id="appendBackgroundImageWithText">Background Image With Text</button>
        <button class="btn" id="append2EvenColumns">2 Even Columns</button>
        <button class="btn" id="append3EvenColumns">3 Even Columns</button>
        <button class="btn" id="appendThumbnailLeftTextRight">Thumbnail Left Text Right</button>
        <button class="btn" id="appendThumbnailRightTextLeft">Thumbnail Right Text Left</button>
        <button class="btn" id="appendClearSpacer">Clear Spacer</button>
        <button class="btn" id="append1ColumnText">1 Column Text</button>
        <button class="btn" id="appendFooter">Footer</button>
        <form action="" method="POST">
            <input type="text" name="folderName" placeholder="Nazwa katalogu">
            <input type="hidden" name="content" id="contentEmail">
            <button type="submit" class="btn" id="save">Save</button>
        </form>
    </div>
    
    <div class="temp-email">
        <!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

        <head>
            <meta charset="utf-8"> <!-- utf-8 works for most cases -->
            <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
            <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
            <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

            <!-- Web Font / @font-face : BEGIN -->
            <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

            <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
            <!--[if mso]>
                <style>
                    * {
                        font-family: 'Roboto', sans-serif !important;
                    }
                </style>
            <![endif]-->

            <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
            <!--[if !mso]><!-->
            <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
            <!--<![endif]-->

            <!-- Web Font / @font-face : END -->

            <!-- CSS Reset : BEGIN -->
            <style>
                /* What it does: Remove spaces around the email design added by some email clients. */
                /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
                html,
                body {
                    margin: 0 auto !important;
                    padding: 0 !important;
                    height: 100% !important;
                    width: 100% !important;
                }

                * {
                    font-family: sans-serif !important;
                }


                /* What it does: Stops email clients resizing small text. */
                * {
                    -ms-text-size-adjust: 100%;
                    -webkit-text-size-adjust: 100%;
                }

                /* What it does: Centers email on Android 4.4 */
                div[style*="margin: 16px 0"] {
                    margin: 0 !important;
                }

                /* What it does: Stops Outlook from adding extra spacing to tables. */
                table,
                td {
                    mso-table-lspace: 0pt !important;
                    mso-table-rspace: 0pt !important;
                }

                /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
                table {
                    border-spacing: 0 !important;
                    border-collapse: collapse !important;
                    table-layout: fixed !important;
                    margin: 0 auto !important;
                }

                table table table {
                    table-layout: auto;
                }

                /* What it does: Uses a better rendering method when resizing images in IE. */
                img {
                    -ms-interpolation-mode: bicubic;
                }

                /* What it does: A work-around for email clients meddling in triggered links. */
                *[x-apple-data-detectors],
                /* iOS */
                .x-gmail-data-detectors,
                /* Gmail */
                .x-gmail-data-detectors *,
                .aBn {
                    border-bottom: 0 !important;
                    cursor: default !important;
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }

                /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
                .a6S {
                    display: none !important;
                    opacity: 0.01 !important;
                }

                /* If the above doesn't work, add a .g-img class to any image in question. */
                img.g-img+div {
                    display: none !important;
                }

                /* What it does: Prevents underlining the button text in Windows 10 */
                .button-link {
                    text-decoration: none !important;
                }

                /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
                /* Create one of these media queries for each additional viewport size you'd like to fix */
                /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
                @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {

                    /* iPhone 6 and 6+ */
                    .email-container {
                        min-width: 375px !important;
                    }
                }
            </style>
            <!-- CSS Reset : END -->

            <!-- Progressive Enhancements : BEGIN -->
            <style>
                /* What it does: Hover styles for buttons */
                .button-td,
                .button-a {
                    transition: all 200ms ease-in;
                }

                .button-td:hover,
                .button-a:hover {
                    background: #f3b000 !important;
                    border-color: #f3b000 !important;
                }

                .link {
                    font-size: 16px;
                }

                .footer {
                    font-size: 14px;
                }

                .cta {
                    background: #ffba02;
                    color: #ffffff;
                    font-weight: 600;
                    padding: 12px 35px;
                    font-size: 24px;
                    border-radius: 26px;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .boxp {
                    padding: 30px 65px;
                }

                /* Media Queries */
                @media screen and (max-width: 640px) {

                    .email-container {
                        width: 100% !important;
                        margin: auto !important;
                    }

                    /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
                    .fluid {
                        max-width: 100% !important;
                        height: auto !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }

                    /* What it does: Forces table cells into full-width rows. */
                    .stack-column,
                    .stack-column-center {
                        display: block !important;
                        width: 100% !important;
                        max-width: 100% !important;
                        direction: ltr !important;
                    }

                    /* And center justify these ones. */
                    .stack-column-center {
                        text-align: center !important;
                    }

                    /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
                    .center-on-narrow {
                        text-align: center !important;
                        display: block !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                        float: none !important;
                    }

                    table.center-on-narrow {
                        display: inline-block !important;
                    }

                    /* What it does: Adjust typography on small screens to improve readability */
                    .email-container p {
                        font-size: 17px !important;
                        line-height: 22px !important;
                    }

                    .link {
                        font-size: 14px;
                    }

                    .footer {
                        font-size: 12px;
                    }

                    .cta {
                        font-size: 16px;
                        padding: 12px 15px;
                    }

                    .boxp {
                        padding: 30px 15px 20px;
                    }
                }
            </style>
            <!-- Progressive Enhancements : END -->

            <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
            <!--[if gte mso 9]>
            <xml>
                <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->

        </head>

        <body width="100%" bgcolor="#ffffff" style="margin: 0; mso-line-height-rule: exactly;">
            <center style="width: 100%; background: #ffffff; text-align: left;">

                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: Verdana, Arial, Helvetica, sans-serif;">
                </div>
                <!-- Visually Hidden Preheader Text : END -->

                <div style="max-width: 640px; margin: auto; min-width: auto !important;" class="email-container">

                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="640" style="margin: auto;"
                        class="email-container" id="email-container">

                    </table>

                </div>

            </center>
        </body>

        </html>

    </div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var emailWidth = 640;
    $(() => {

        var arrayTr = [];

        $(document).on('click','tr', function() {
            arrayTr.push(this);
            console.log(arrayTr);
        })
        
        $('#save').click(function() {
            var content = $(document).find('.temp-email').html();
            $('#contentEmail').val(content);
        })
        
        $emailContainer = $(document).find('#email-container');
        $('#appendHeader').click(function() { $($emailContainer).append(appendHeader()); })
        $('#appendHeroImage').click(function() { $($emailContainer).append(appendHeroImage()); })
        $('#append1ColumnTextPlusButton').click(function() { $($emailContainer).append(append1ColumnTextPlusButton()); })
        $('#appendBackgroundImageWithText').click(function() { $($emailContainer).append(appendBackgroundImageWithText()); })
        $('#append2EvenColumns').click(function() { $($emailContainer).append(append2EvenColumns()); })
        $('#append3EvenColumns').click(function() { $($emailContainer).append(append3EvenColumns()); })
        $('#appendThumbnailLeftTextRight').click(function() { $($emailContainer).append(appendThumbnailLeftTextRight()); })
        $('#appendThumbnailRightTextLeft').click(function() { $($emailContainer).append(appendThumbnailRightTextLeft()); })
        $('#appendClearSpacer').click(function() { $($emailContainer).append(appendClearSpacer()); })
        $('#append1ColumnText').click(function() { $($emailContainer).append(append1ColumnText()); })
        $('#appendFooter').click(function() { $($emailContainer).append(appendFooter()); })

    })

    function appendHeader() {
        return $content = '<tr> <td bgcolor="#ffffff" style="padding: 10px 15px 10px; text-align: center;"> <h1 style="margin: 0; font-family: Open sans condensed; font-size: 12px; color: #505050; text-decoration: underline; font-weight: normal;"><a href="$preview$" style="color: #505050;">Kliknij tutaj, jeśli mail nie wyświetla się poprawnie</a></h1> </td> </tr>';
    }

    function appendHeroImage() {
        return $content = '<tr> <td style="background-color: #ffffff;"> <img src="https://via.placeholder.com/1200x600" width="'+emailWidth+'" height="" alt="alt_text" border="0" style="width: 100%; max-width: '+emailWidth+'px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto;" class="g-img"> </td> </tr>';
    }

    function append1ColumnTextPlusButton() {
        return $content = '<tr> <td style="background-color: #ffffff;"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"> <h1 style="margin: 0 0 10px; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">Praesent laoreet malesuada&nbsp;cursus.</h1> <p style="margin: 0 0 10px;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p> <ul style="padding: 0; margin: 0; list-style-type: disc;"> <li style="margin:0 0 10px 20px;" class="list-item-first">A list item.</li> <li style="margin:0 0 10px 20px;">Another list item here.</li> <li style="margin: 0 0 0 20px;" class="list-item-last">Everyone gets a list item, list items for everyone!</li> </ul> </td> </tr> <tr> <td style="padding: 0 20px 20px;"> <!-- Button : BEGIN --> <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto;"> <tbody><tr> <td class="button-td button-td-primary" style="border-radius: 4px; background: #222222;"> <a class="button-a button-a-primary" href="https://google.com/" style="background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Centered Primary Button</a> </td> </tr> </tbody></table> <!-- Button : END --> </td> </tr> </tbody></table> </td> </tr>';
    }

    function appendBackgroundImageWithText() {
        return $content = '<tr> <td valign="middle" style="text-align: center; background-image: url(\'https://via.placeholder.com/600x230/222222/666666\'); background-color: #222222; background-position: center center !important; background-size: cover !important;"> <div> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <td valign="middle" style="text-align: center; padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.</p> </td> </tr> </tbody></table> </div> </td> </tr>';
    }

    function append2EvenColumns() {
        return $content = '<tr> <td valign="top" style="padding: 10px; background-color: #ffffff;"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <!-- Column : BEGIN --> <td class="stack-column-center"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <td style="padding: 10px; text-align: center"> <img src="https://via.placeholder.com/270" width="270" height="270" alt="alt_text" border="0" class="fluid" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> <tr> <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> </td> </tr> </tbody></table> </td> <!-- Column : END --> <!-- Column : BEGIN --> <td class="stack-column-center"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <td style="padding: 10px; text-align: center"> <img src="https://via.placeholder.com/270" width="270" height="270" alt="alt_text" border="0" class="fluid" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> <tr> <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> </td> </tr> </tbody></table> </td> <!-- Column : END --> </tr> </tbody></table> </td> </tr>';
    }

    function append3EvenColumns() {
        return $content = '<tr> <td valign="top" style="padding: 10px; background-color: #ffffff;"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <!-- Column : BEGIN --> <td width="33.33%" class="stack-column-center"> <table role="presentation" cellspacing="0" cellpadding="0" border="0"> <tbody><tr> <td style="padding: 10px; text-align: center"> <img src="https://via.placeholder.com/170" width="170" height="170" alt="alt_text" border="0" class="fluid" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> <tr> <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> </td> </tr> </tbody></table> </td> <!-- Column : END --> <!-- Column : BEGIN --> <td width="33.33%" class="stack-column-center"> <table role="presentation" cellspacing="0" cellpadding="0" border="0"> <tbody><tr> <td style="padding: 10px; text-align: center"> <img src="https://via.placeholder.com/170" width="170" height="170" alt="alt_text" border="0" class="fluid" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> <tr> <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> </td> </tr> </tbody></table> </td> <!-- Column : END --> <!-- Column : BEGIN --> <td width="33.33%" class="stack-column-center"> <table role="presentation" cellspacing="0" cellpadding="0" border="0"> <tbody><tr> <td style="padding: 10px; text-align: center"> <img src="https://via.placeholder.com/170" width="170" height="170" alt="alt_text" border="0" class="fluid" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> <tr> <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow"> <p style="margin: 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> </td> </tr> </tbody></table> </td> <!-- Column : END --> </tr> </tbody></table> </td> </tr>';
    }

    function appendThumbnailLeftTextRight() {
        return $content = '<tr> <td dir="ltr" valign="top" width="100%" style="padding: 10px; background-color: #ffffff;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <!-- Column : BEGIN --> <td width="33.33%" class="stack-column-center"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <td dir="ltr" valign="top" style="padding: 0 10px;"> <img src="https://via.placeholder.com/170" width="170" height="170" alt="alt_text" border="0" class="center-on-narrow" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> </tbody></table> </td> <!-- Column : END --> <!-- Column : BEGIN --> <td width="66.66%" class="stack-column-center"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow"> <h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;">Class aptent taciti sociosqu</h2> <p style="margin: 0 0 10px 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> <!-- Button : BEGIN --> <table role="presentation" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;"> <tbody><tr> <td class="button-td button-td-primary" style="border-radius: 4px; background: #222222;"> <a class="button-a button-a-primary" href="https://google.com/" style="background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Primary Button</a> </td> </tr> </tbody></table> <!-- Button : END --> </td> </tr> </tbody></table> </td> <!-- Column : END --> </tr> </tbody></table> </td> </tr>';
    }

    function appendThumbnailRightTextLeft() {
        return $content = '<tr> <td dir="rtl" valign="top" width="100%" style="padding: 10px; background-color: #ffffff;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <!-- Column : BEGIN --> <td width="33.33%" class="stack-column-center"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <td dir="ltr" valign="top" style="padding: 0 10px;"> <img src="https://via.placeholder.com/170" width="170" height="170" alt="alt_text" border="0" class="center-on-narrow" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;"> </td> </tr> </tbody></table> </td> <!-- Column : END --> <!-- Column : BEGIN --> <td width="66.66%" class="stack-column-center"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody><tr> <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow"> <h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 22px; color: #333333; font-weight: bold;">Class aptent taciti sociosqu</h2> <p style="margin: 0 0 10px 0;">Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p> <!-- Button : BEGIN --> <table role="presentation" cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;"> <tbody><tr> <td class="button-td button-td-primary" style="border-radius: 4px; background: #222222;"> <a class="button-a button-a-primary" href="https://google.com/" style="background: #222222; border: 1px solid #000000; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Primary Button</a> </td> </tr> </tbody></table> <!-- Button : END --> </td> </tr> </tbody></table> </td> <!-- Column : END --> </tr> </tbody></table> </td> </tr>';
    }

    function appendClearSpacer() {
        return $content = '<tr> <td aria-hidden="true" height="40" style="font-size: 0px; line-height: 0px;"> &nbsp; </td> </tr>';
    }

    function append1ColumnText() {
        return $content = '<tr> <td style="background-color: #ffffff;"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tbody><tr> <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"> Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat. </td> </tr> </tbody></table> </td> </tr>';
    }

    function appendFooter() {
        return $content = '<tr> <td valign="top" class="mcnTextBlockInner footer" style="background: #ffffff; padding: 15px 0;"> <center style="color: #999;"><!--<a href="$opt-out$">Szanujemy Twoją prywatność, dlatego jeśli nie chcesz otrzymywać od nas wiadomości, możesz się wypisać.</a>--> Jeśli nie chcesz już otrzymywać newslettera kliknij <a style="color: #999;" href="$opt-out$" target="_blank">tutaj.</a></center> </td> </tr>';
    }
</script>
    
</body>
</html>
