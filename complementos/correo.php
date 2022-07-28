<?php 

//$para ='ventas@smokeshopmex.com,alfamovies1@gmail.com'; 
//'ventas@smokeshopmex.com';
$para ='contact@munbar.net';
$título   = 'Contact';
$título_cliente = 'Thank you for contacting us';
$nombre   = $_POST['nombre'];
$correo   = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje  = $_POST['mensaje'];

$mensaje_texto='
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CONTACT MUNBAR</title>
        
    <style type="text/css">
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage,.mcnRetinaImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}

		h1{
			 color:#222222;
			 font-family:Helvetica;
			 font-size:40px;
			 font-style:normal;
			 font-weight:bold;
			 line-height:150%;
			 letter-spacing:normal;
			 text-align:center;
		}
	
		h2{
			 color:#222222;
			 font-family:Helvetica;
			 font-size:34px;
			 font-style:normal;
			 font-weight:bold;
			 line-height:150%;
			 letter-spacing:normal;
			 text-align:left;
		}

		h3{
			 color:#444444;
			 font-family:Helvetica;
			 font-size:22px;
			 font-style:normal;
			 font-weight:bold;
			 line-height:150%;
			 letter-spacing:normal;
			 text-align:left;
		}

		h4{
			 color:#949494;
			 font-family:Georgia;
			 font-size:20px;
			 font-style:italic;
			 font-weight:normal;
			 line-height:125%;
			 letter-spacing:normal;
			 text-align:left;
		}

		#templateHeader{
			 background-color:#ffffff;
			 background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/d9bdbe5d-0049-40ce-8f21-df02a03c6f4a.jpg");
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:45px;
			 padding-bottom:5px;
		}

		.headerContainer{
			 background-color:#transparent;
			 background-image:none;
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:0;
			 padding-bottom:0;
		}

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			 color:#757575;
			 font-family:Helvetica;
			 font-size:16px;
			 line-height:150%;
			 text-align:center;
		}

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
			 color:#007C89;
			 font-weight:normal;
			 text-decoration:underline;
		}

		#templateBody{
			 background-color:#ffffff;
			 background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/d9bdbe5d-0049-40ce-8f21-df02a03c6f4a.jpg");
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:36px;
			 padding-bottom:45px;
		}

		.bodyContainer{
			 background-color:#transparent;
			 background-image:none;
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:0;
			 padding-bottom:0;
		}

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			 color:#757575;
			 font-family:Helvetica;
			 font-size:16px;
			 line-height:150%;
			 text-align:left;
		}

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
			 color:#007C89;
			 font-weight:normal;
			 text-decoration:underline;
		}

		#templateFooter{
			 background-color:#333333;
			 background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/b5796a31-b02c-45e2-b9cc-4066c7b9c99e.jpg");
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:45px;
			 padding-bottom:63px;
		}

		.footerContainer{
			 background-color:#transparent;
			 background-image:none;
			 background-repeat:no-repeat;
			 background-position:center;
			 background-size:cover;
			 border-top:0;
			 border-bottom:0;
			 padding-top:0;
			 padding-bottom:0;
		}

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			 color:#FFFFFF;
			 font-family:Helvetica;
			 font-size:12px;
			 line-height:150%;
			 text-align:center;
		}

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
			 color:#FFFFFF;
			 font-weight:normal;
			 text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){

		h1{
			 font-size:30px !important;
			 line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h2{
			 font-size:26px !important;
			 line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h3{
			 font-size:20px !important;
			 line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		h4{
			 font-size:18px !important;
			 line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			 font-size:14px !important;
			 line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			 font-size:16px !important;
			 line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			 font-size:16px !important;
			 line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			 font-size:14px !important;
			 line-height:150% !important;
		}

}</style></head>
    <body>
<span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">CONTACT MUNBAR</span>
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" valign="top" id="templateHeader" data-template-container>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://munbar.net/img/logo-p.png" width="197.56" style="max-width:449px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateBody" data-template-container>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h3 style="text-align: center;"><span style="font-size:29px"><strong>CONTACT</strong></span></h3>

<div style="text-align: center;">&nbsp;</div>

<div><span style="font-size:24px"><span style="color:#000000"><strong>Name:</strong>'.$nombre.'<br>
<strong>Phone: </strong>'.$telefono.'&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
<strong>Email:</strong>'.$correo.'</span></span><br>
&nbsp;</div>

<div style="text-align: left;"><span style="font-size:24px"><span style="color:#000000"><strong>YOUR INQUIRY</strong></span></span><span style="font-size:24px"><span style="color:#000000"><strong>:</strong><br>
'.$mensaje.'</span></span><br>
<br>
<br>
<br>
<br>
&nbsp;</div>

<h3 style="text-align: center;">&nbsp;</h3>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateFooter" data-template-container>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:0px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://munbar.net/img/logo.png" width="139.19" style="max-width:449px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://munbar.net/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" alt="Website" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="mailto:contact@munbar.net" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-forwardtofriend-48.png" alt="Email" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            ©2021 by Wonder
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
';
$mensaje_texto_cliente='<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Munbar Thank you</title>
        
    <style type="text/css">
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage,.mcnRetinaImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}

		h1{
			  color:#222222;
			  font-family:Helvetica;
			  font-size:40px;
			  font-style:normal;
			  font-weight:bold;
			  line-height:150%;
			  letter-spacing:normal;
			  text-align:center;
		}

		h2{
			  color:#222222;
			  font-family:Helvetica;
			  font-size:34px;
			  font-style:normal;
			  font-weight:bold;
			  line-height:150%;
			  letter-spacing:normal;
			  text-align:left;
		}

		h3{
			  color:#444444;
			  font-family:Helvetica;
			  font-size:22px;
			  font-style:normal;
			  font-weight:bold;
			  line-height:150%;
			  letter-spacing:normal;
			  text-align:left;
		}

		h4{
			  color:#949494;
			  font-family:Georgia;
			  font-size:20px;
			  font-style:italic;
			  font-weight:normal;
			  line-height:125%;
			  letter-spacing:normal;
			  text-align:left;
		}

		#templateHeader{
			  background-color:#ffffff;
			  background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/d9bdbe5d-0049-40ce-8f21-df02a03c6f4a.jpg");
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:45px;
			  padding-bottom:5px;
		}

		.headerContainer{
			  background-color:#transparent;
			  background-image:none;
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:0;
			  padding-bottom:0;
		}

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			  color:#757575;
			  font-family:Helvetica;
			  font-size:16px;
			  line-height:150%;
			  text-align:center;
		}

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
			  color:#007C89;
			  font-weight:normal;
			  text-decoration:underline;
		}

		#templateBody{
			  background-color:#ffffff;
			  background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/d9bdbe5d-0049-40ce-8f21-df02a03c6f4a.jpg");
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:36px;
			  padding-bottom:45px;
		}

		.bodyContainer{
			  background-color:#transparent;
			  background-image:none;
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:0;
			  padding-bottom:0;
		}

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			  color:#757575;
			  font-family:Helvetica;
			  font-size:16px;
			  line-height:150%;
			  text-align:left;
		}

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
			  color:#007C89;
			  font-weight:normal;
			  text-decoration:underline;
		}

		#templateFooter{
			  background-color:#333333;
			  background-image:url("https://mcusercontent.com/19735f8bfaa1e4fd004f10dd8/images/b5796a31-b02c-45e2-b9cc-4066c7b9c99e.jpg");
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:45px;
			  padding-bottom:63px;
		}

		.footerContainer{
			  background-color:#transparent;
			  background-image:none;
			  background-repeat:no-repeat;
			  background-position:center;
			  background-size:cover;
			  border-top:0;
			  border-bottom:0;
			  padding-top:0;
			  padding-bottom:0;
		}

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			  color:#FFFFFF;
			  font-family:Helvetica;
			  font-size:12px;
			  line-height:150%;
			  text-align:center;
		}

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
			  color:#FFFFFF;
			  font-weight:normal;
			  text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){

		h1{
			  font-size:30px !important;
			  line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h2{
			  font-size:26px !important;
			  line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h3{
			  font-size:20px !important;
			  line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		h4{
			  font-size:18px !important;
			  line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	
		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			  font-size:14px !important;
			  line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			  font-size:16px !important;
			  line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){
	
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			  font-size:16px !important;
			  line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			  font-size:14px !important;
			  line-height:150% !important;
		}

}</style></head>
    <body>
<span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">Wonder Thank you</span>
   
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                 
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td align="center" valign="top" id="templateHeader" data-template-container>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="headerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://munbar.net/img/logo-p.png" width="248.16" style="max-width:960px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateBody" data-template-container>
           
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="bodyContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <h3 style="text-align: center;"><span style="font-size:29px"><strong>THANK YOU FOR CONTACTING US&nbsp;</strong></span></h3>
<br>
<pre data-placeholder="Traducción" dir="ltr" id="tw-target-text" style="text-align: center;">Message sent shortly we will contact you.</pre>
&nbsp;

<pre data-placeholder="Traducción" dir="ltr" id="tw-target-text">

                                           
&nbsp;</pre>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" id="templateFooter" data-template-container>

                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                                        <tr>
                                            <td valign="top" class="footerContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:0px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 0px; padding-left: 0px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://munbar.net/img/logo.png" width="139.19" style="max-width:449px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
    <tbody class="mcnFollowBlockOuter">
        <tr>
            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
    <tbody><tr>
        <td align="center" style="padding-left:9px;padding-right:9px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                <tbody><tr>
                    <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td align="center" valign="top">

                                        
                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="https://munbar.net/" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" alt="Website" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                        
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                <tbody><tr>
                                                    <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                            <tbody><tr>
                                                                <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody><tr>
                                                                            
                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                                    <a href="mailto:contact@munbar.net" target="_blank"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-forwardtofriend-48.png" alt="Email" style="display:block;" height="24" width="24" class=""></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            ©2022 by Munbar
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
         
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
';


$servername = "localhost";
$database = "munbar_contactos";
$username = "munbar_freddy";
$password = "soyelnumero4";

// // Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

	//echo "Connected successfully<br>";
}

$cabeceras  = 'MIME-Version: 1.0' . "\r\n".
 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
 'From: Contact Munbar <contact@munbar.net>' . "\r\n".
 'Bcc:javierfreddyponceescobar@gmail.com'."\r\n".
 'X-Mailer: PHP/' . phpversion();

$cabecerascliente  = 'MIME-Version: 1.0' . "\r\n".
 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
 'From: Contact Munbar <contact@munbar.net>' . "\r\n".
 'Bcc:javierfreddyponceescobar@gmail.com'."\r\n".
 'X-Mailer: PHP/' . phpversion();

if ( (!empty($nombre))&&(!empty($correo))&&(!empty($telefono)) ) {

$fecha = date('Y-m-d h:i:s', time());

$sql = "INSERT INTO Contactos (nombre, telefono, correo, comentarios, fecha_registro) VALUES ('$nombre', '$telefono' ,'$correo', '$mensaje', '$fecha')";

			if (mysqli_query($conn, $sql)) {

				mail($para, $título, utf8_decode($mensaje_texto), $cabeceras);//Admin
				mail($correo,$título_cliente, utf8_decode($mensaje_texto_cliente), $cabecerascliente); //Cliente
				echo'Enviado';
			}else{
				echo'No enviado';
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}



}


?>


