<?php

/**
 * LOLCAT language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('lc_XX', $lang) && is_array($lang['lc_XX'])) {
	$lang['lc_XX'] = array_merge($lang['en_US'], $lang['lc_XX']);
} else {
	$lang['lc_XX'] = $lang['en_US'];
}

$lang['lc_XX']['AssetAdmin']['CHOOSEFILE'] = 'CHOOSE FIEL';
$lang['lc_XX']['AssetAdmin']['CONTENTMODBY'] = 'CONTENT MODIFIABLE BY';
$lang['lc_XX']['AssetAdmin']['CONTENTUSABLEBY'] = 'CONTENT USABLE BY';
$lang['lc_XX']['AssetAdmin']['DELETEDX'] = 'DELETD %s FILEZ.%s';
$lang['lc_XX']['AssetAdmin']['FILESREADY'] = 'FILEZ READY 2 UPLOAD:';
$lang['lc_XX']['AssetAdmin']['MENUTITLE'] = 'FILEZ N IMAGEZ';
$lang['lc_XX']['AssetAdmin']['MENUTITLE'] = 'FILEZ N IMAGEZ';
$lang['lc_XX']['AssetAdmin']['MOVEDX'] = 'MOVD %s FILEZ';
$lang['lc_XX']['AssetAdmin']['NEWFOLDER'] = 'NEW FOLDR';
$lang['lc_XX']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'THAR WUZ NUTHIN 2 UPLOAD';
$lang['lc_XX']['AssetAdmin']['NOWBROKEN'] = 'THEES PAGEZ NAO HAS BROKD LINKZ:';
$lang['lc_XX']['AssetAdmin']['OWNER'] = '0WN3R';
$lang['lc_XX']['AssetAdmin']['SAVEDFILE'] = 'SAVD FILE %s';
$lang['lc_XX']['AssetAdmin']['SAVEFOLDERNAME'] = 'SAVE TEH FOLDR NAYM';
$lang['lc_XX']['AssetAdmin']['UPLOAD'] = 'UPLOAD FILEZ LISTD BELOW';
$lang['lc_XX']['AssetAdmin']['UPLOADEDX'] = 'UPLOADD %s FILEZ';
$lang['lc_XX']['AssetAdmin_left.ss']['CREATE'] = 'CREATE';
$lang['lc_XX']['AssetAdmin_left.ss']['DELETE'] = 'DELETE';
$lang['lc_XX']['AssetAdmin_left.ss']['DELFOLDERS'] = 'DELETE TEH SELECTD FOLDRS';
$lang['lc_XX']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'ALLOW DRAG AN DROP REORDERIN';
$lang['lc_XX']['AssetAdmin_left.ss']['FOLDERS'] = 'FOLDERZ';
$lang['lc_XX']['AssetAdmin_left.ss']['GO'] = 'GOGOOG0!!!111!!';
$lang['lc_XX']['AssetAdmin_left.ss']['SELECTTODEL'] = 'SELECT TEH FOLDERS DAT U WANTS 2 DELETE AN DEN CLICK TEH BUTN BELOW';
$lang['lc_XX']['AssetAdmin_left.ss']['TOREORG'] = '2 REORGANIZE UR FOLDERS, DRAG DEM AROUND AS DESIRD.';
$lang['lc_XX']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'PLZ 2 CHOOSE A PAEG FRUM TEH LEFT.';
$lang['lc_XX']['AssetAdmin_right.ss']['WELCOME'] = 'WELCUM TO';
$lang['lc_XX']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'U DO NOT HAS PERMISHUN 2 UPLOAD FILEZ INTO DIS FOLDR.';
$lang['lc_XX']['AssetTableField']['CREATED'] = 'FRIST UPLOADD';
$lang['lc_XX']['AssetTableField']['DIM'] = 'DIMENSHUNZ';
$lang['lc_XX']['AssetTableField']['FILENAME'] = 'FILENAYM';
$lang['lc_XX']['AssetTableField']['LASTEDIT'] = 'TEH LAST CHANGD';
$lang['lc_XX']['AssetTableField']['NOLINKS'] = 'DIS FILE HASNT BEEN LINKD 2 FRUM ANY PAGEZ.';
$lang['lc_XX']['AssetTableField']['OWNER'] = '0WN3R';
$lang['lc_XX']['AssetTableField']['PAGESLINKING'] = 'TEH FOLLOWIN PAGEZ LINK 2 DIS FILE:';
$lang['lc_XX']['AssetTableField']['SIZE'] = 'SEIZ';
$lang['lc_XX']['AssetTableField.ss']['DELFILE'] = 'DELETE DIS FILE';
$lang['lc_XX']['AssetTableField.ss']['DRAGTOFOLDER'] = 'DRAG 2 FOLDR ON LEFT 2 MOOV FILE';
$lang['lc_XX']['AssetTableField']['TITLE'] = 'TITLE';
$lang['lc_XX']['AssetTableField']['TYPE'] = 'TYPE';
$lang['lc_XX']['CMSLeft.ss']['DELPAGE'] = 'DELETE PAGEZ...';
$lang['lc_XX']['CMSLeft.ss']['DELPAGES'] = 'DELETE TEH SELECTED PUJZ';
$lang['lc_XX']['CMSLeft.ss']['GO'] = 'GOGOGO!111';
$lang['lc_XX']['CMSLeft.ss']['NEWPAGE'] = 'NEW PAEG...';
$lang['lc_XX']['CMSLeft.ss']['SELECTPAGESDEL'] = 'SELECT TEH PAGEZ DAT U WANTS 2 DELETE N DEN CLICK TEH BUTN BELOW';
$lang['lc_XX']['CMSLeft.ss']['SITECONT'] = 'SITE CONTENTZ';
$lang['lc_XX']['CMSMain']['CANCEL'] = 'DUNT DO DAT!';
$lang['lc_XX']['CMSMain']['CHOOSEREPORT'] = '(PIK REPORT)';
$lang['lc_XX']['CMSMain']['COMPARINGV'] = 'U R COMPAERING VERSHUNZ #%d and #%d';
$lang['lc_XX']['CMSMain']['COPYPUBTOSTAGE'] = 'R U SHUR 2 COPY TEH PUBLISHD CONTENT 2 TEH STAGE SIET?';
$lang['lc_XX']['CMSMain']['DELETEFP'] = 'DELETE FROM TEH PUBLISHD SITE';
$lang['lc_XX']['CMSMain']['EMAIL'] = 'EMAIL';
$lang['lc_XX']['CMSMain']['GO'] = 'GO';
$lang['lc_XX']['CMSMain']['MENUTITLE'] = 'SITEZ CONTENT';
$lang['lc_XX']['CMSMain']['METADESCOPT'] = 'DESCRIPSHUN';
$lang['lc_XX']['CMSMain']['METAKEYWORDSOPT'] = 'KEYWURDZ';
$lang['lc_XX']['CMSMain']['NEW'] = 'NEW';
$lang['lc_XX']['CMSMain']['NOCONTENT'] = 'NO CONTENTZ';
$lang['lc_XX']['CMSMain']['NOTHINGASSIGNED'] = 'U HAS NOTHIN ASSIGND 2 U.';
$lang['lc_XX']['CMSMain']['NOWAITINGON'] = 'U R NOT W8IN 4 ANYBODY';
$lang['lc_XX']['CMSMain']['NOWBROKEN'] = ' TEH FOLLOWIN PAGEZ NAO HAS BROKD LINKZ:';
$lang['lc_XX']['CMSMain']['NOWBROKEN2'] = 'DEIR OWNERZ HAS BIN EMAILD AND THEY WILL FIKS UP DOZE PAEGZ.';
$lang['lc_XX']['CMSMain']['OK'] = 'K!';
$lang['lc_XX']['CMSMain']['PAGEDEL'] = '%d PAEG DELETD';
$lang['lc_XX']['CMSMain']['PAGENOTEXISTS'] = 'SRY MAN DIS PAEG ISNT EXIST NO MUR';
$lang['lc_XX']['CMSMain']['PAGEPUB'] = '%D PAEG PUBLISHD';
$lang['lc_XX']['CMSMain']['PAGESDEL'] = '%d %d PAEGEZ DELETD';
$lang['lc_XX']['CMSMain']['PAGESPUB'] = '%d PAGEZ PUBLISHD';
$lang['lc_XX']['CMSMain']['PAGETYPEOPT'] = 'TYPE OV TEH PAEG';
$lang['lc_XX']['CMSMain']['PRINT'] = 'PRINT DAT STUFF';
$lang['lc_XX']['CMSMain']['PUBALLCONFIRM'] = 'PLEEZ PUBLISH EVER PAEG IN TEH SITE, COPYINS CONTENT STAEG 2 LIVE';
$lang['lc_XX']['CMSMain']['PUBALLFUN'] = '"PUBLISH ALL" PHUNKSHUNALITY';
$lang['lc_XX']['CMSMain']['PUBALLFUN2'] = 'PRESIN DIS BUTN WILL DO TEH EQUIVALENT OV GOIN 2 EVRY PAEG AN PRESIN "PUBLISH". IZ
INTENDD 2 BE USD AFTR THAR HAS BEEN MASIF EDITS OV TEH CONTENT, SUCH AS WHEN TEH SIET WUZ LIEK
FURST BUILT.';
$lang['lc_XX']['CMSMain']['PUBPAGES'] = 'DUN: PUBLISHD %d PAGEZ';
$lang['lc_XX']['CMSMain']['REMOVEDFD'] = 'REMOVD FRUM TEH DRAFT SIET';
$lang['lc_XX']['CMSMain']['REMOVEDPAGE'] = 'REMOVED %Z FROM TEH PUBLISHD SITE.';
$lang['lc_XX']['CMSMain']['RESTORE'] = 'RESTOREZ';
$lang['lc_XX']['CMSMain']['RESTORED'] = 'I R HAV RESTURD \'%s\' SUCCESSFULLIEZ SO IT IZ NOW RESTORD';
$lang['lc_XX']['CMSMain']['ROLLBACK'] = 'BAK 2 DIS VERSHUN';
$lang['lc_XX']['CMSMain']['ROLLEDBACKPUB'] = 'ROLLD BAK 2 PUBLISHD VERSHUN. NEW VERSHUN NUMBR IZ #%d';
$lang['lc_XX']['CMSMain']['ROLLEDBACKVERSION'] = 'ROLLD BAK 2 VERSHUN #%d. NEW VERSHUN NUMBR IZ #%d';
$lang['lc_XX']['CMSMain']['SAVE'] = 'SAVE';
$lang['lc_XX']['CMSMain']['SENTTO'] = 'SENT 2 %z %z FUR APPROVAL.';
$lang['lc_XX']['CMSMain']['STATUSOPT'] = 'STATOOS';
$lang['lc_XX']['CMSMain']['TOTALPAGES'] = 'ALL TEH PAGEZ:';
$lang['lc_XX']['CMSMain']['VERSIONSNOPAGE'] = 'PWN3D! CAN\'T FIND PAEG #%d';
$lang['lc_XX']['CMSMain']['VIEWING'] = 'U R VIEWIN VERSHUN #%s, CREATD %s';
$lang['lc_XX']['CMSMain']['VISITRESTORE'] = 'VISITEZ RESTOREPAEG/(ID)';
$lang['lc_XX']['CMSMain']['WAITINGON'] = 'U R WAITIN ON ODER PEEPS2  WORK ON THEEZ <b>%d</b> PAEGEZ.';
$lang['lc_XX']['CMSMain']['WORKTODO'] = 'U HAV WRK 2 DO ON THEEZ <b>%d</b> PAEGZ';
$lang['lc_XX']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'ADDD 2 TEH DRAFT SIET AN NOT PUBLISHD YET';
$lang['lc_XX']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'ADD TEH CRATERIA PLZ...';
$lang['lc_XX']['CMSMain_left.ss']['BATCHACTIONS'] = 'BATCH ACSHUNZ';
$lang['lc_XX']['CMSMain_left.ss']['CHANGED'] = 'CHANGD';
$lang['lc_XX']['CMSMain_left.ss']['CLOSEBOX'] = 'CLICK 2 CLOOZ DAT BOX';
$lang['lc_XX']['CMSMain_left.ss']['COMMENTS'] = 'COMMENTZ';
$lang['lc_XX']['CMSMain_left.ss']['COMPAREMODE'] = 'CUMPARE MODE (CLICK 2 BELOW)';
$lang['lc_XX']['CMSMain_left.ss']['CREATE'] = 'CREATE';
$lang['lc_XX']['CMSMain_left.ss']['DEL'] = 'DELETD';
$lang['lc_XX']['CMSMain_left.ss']['DELETECONFIRM'] = 'DELETE TEH SELECTD PAEGEZ';
$lang['lc_XX']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'DELETD FRUM TEH DRAFT SIET BUT STILL ON TEH LIV SIET';
$lang['lc_XX']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'EDITED ON TEH DRAFT SITE AND NOT PUBLISHD YET';
$lang['lc_XX']['CMSMain_left.ss']['EDITEDSINCE'] = 'EDITD SINCEZ';
$lang['lc_XX']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'ALLOW DRAG N DROP REORDERIN';
$lang['lc_XX']['CMSMain_left.ss']['GO'] = 'GO';
$lang['lc_XX']['CMSMain_left.ss']['KEY'] = 'TEH KEY';
$lang['lc_XX']['CMSMain_left.ss']['NEW'] = 'NEW 1';
$lang['lc_XX']['CMSMain_left.ss']['OPENBOX'] = 'CLICK 2 OPEN DIS BOX';
$lang['lc_XX']['CMSMain_left.ss']['PAGEVERSIONH'] = 'PAEG VERSHUN HISTURY';
$lang['lc_XX']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'PUBLISH TEH SELECTD PAGEZ';
$lang['lc_XX']['CMSMain_left.ss']['SEARCH'] = 'SEARCH';
$lang['lc_XX']['CMSMain_left.ss']['SEARCHTITLE'] = 'SEARCH THRU TEH URL, TITLE, MENU TITLE, N CONTENT';
$lang['lc_XX']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'SELECT TEH PAGEZ DAT U WANTS 2 CHANGE N DEN CLICK AN ACSHUN:';
$lang['lc_XX']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'SELECT TEH PAGEZ DAT U WANTS 2 DUPLICATE, WHETHR IZ CHILDREN SHUD BE INCLUDD, AN WER U WANTS TEH DUPLICATEZ PLACD';
$lang['lc_XX']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'SHOW ONLY CHANGD PAGEZ';
$lang['lc_XX']['CMSMain_left.ss']['SHOWUNPUB'] = 'SHOW UNPUBLISHED VERSHUNZ';
$lang['lc_XX']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'SITE CONTENT N STRUKSHUR';
$lang['lc_XX']['CMSMain_left.ss']['SITEREPORTS'] = 'SEIT REPORTZ';
$lang['lc_XX']['CMSMain_left.ss']['TASKLIST'] = 'TASKLIST';
$lang['lc_XX']['CMSMain_left.ss']['WAITINGON'] = 'WAITIN ON';
$lang['lc_XX']['CMSMain_right.ss']['ANYMESSAGE'] = 'DO U HAS ANY MESAGE 4 UR EDITOR?';
$lang['lc_XX']['CMSMain_right.ss']['CHOOSEPAGE'] = 'PLZ CHOOSE PAEG FRUM TEH LEFT.';
$lang['lc_XX']['CMSMain_right.ss']['LOADING'] = 'LOADIN!!11!!!...';
$lang['lc_XX']['CMSMain_right.ss']['MESSAGE'] = 'MSG';
$lang['lc_XX']['CMSMain_right.ss']['SENDTO'] = 'SEND 2';
$lang['lc_XX']['CMSMain_right.ss']['STATUS'] = 'STATOOS';
$lang['lc_XX']['CMSMain_right.ss']['SUBMIT'] = 'SUBMIT 4 APPROVAL';
$lang['lc_XX']['CMSMain_right.ss']['WELCOMETO'] = 'WELCUM TO';
$lang['lc_XX']['CMSMain_versions.ss']['AUTHOR'] = 'TEH AUTHOR';
$lang['lc_XX']['CMSMain_versions.ss']['NOTPUB'] = 'NOT PUBLISHD';
$lang['lc_XX']['CMSMain_versions.ss']['PUBR'] = 'PUBLISHR';
$lang['lc_XX']['CMSMain_versions.ss']['UNKNOWN'] = 'UNKNOWN';
$lang['lc_XX']['CMSMain_versions.ss']['WHEN'] = 'WHEN';
$lang['lc_XX']['CMSRight.ss']['CHOOSEPAGE'] = 'PLZ CHOOSE PAEG FRUM TEH LEFT.';
$lang['lc_XX']['CMSRight.ss']['ECONTENT'] = 'EDIT CONTENT';
$lang['lc_XX']['CMSRight.ss']['WELCOMETO'] = 'WELCUM TO';
$lang['lc_XX']['CommentAdmin']['MENUTITLE'] = 'COMMENTZ';
$lang['lc_XX']['CommentAdmin']['MENUTITLE'] = 'CUMMENTZ';
$lang['lc_XX']['CommentList.ss']['CREATEDW'] = 'COMMENTz R CREATD WHENEVR WAN OV TEH WERKFLOW ACSHUNS
R UNDERTAKEN - PUBLISH, REJECT, SUBMIT.';
$lang['lc_XX']['CommentList.ss']['NOCOM'] = 'THERE IS NO COMMENTZ IN DIS PAEG.';
$lang['lc_XX']['ImageEditor.ss']['CANCEL'] = 'ABANDONEZ';
$lang['lc_XX']['ImageEditor.ss']['CROP'] = 'CROP';
$lang['lc_XX']['ImageEditor.ss']['HEIGHT'] = 'HEIGHT';
$lang['lc_XX']['ImageEditor.ss']['REDO'] = 'REDO';
$lang['lc_XX']['ImageEditor.ss']['ROT'] = 'ROTATE';
$lang['lc_XX']['ImageEditor.ss']['SAVE'] = 'SAV&nbsp;PIKSHUR';
$lang['lc_XX']['ImageEditor.ss']['UNDO'] = 'UNDO';
$lang['lc_XX']['ImageEditor.ss']['UNTITLED'] = 'UNTITLD DOCUMENT';
$lang['lc_XX']['ImageEditor.ss']['WIDTH'] = 'WIDTH';
$lang['lc_XX']['LeftAndMain']['CHANGEDURL'] = 'I R CHANGED TEH URL TO \'%s\'';
$lang['lc_XX']['LeftAndMain']['FILESIMAGES'] = 'FILEZ N IMAGEZ';
$lang['lc_XX']['LeftAndMain']['HELP'] = 'HALP';
$lang['lc_XX']['LeftAndMain']['PAGETYPE'] = 'TYPE OV TEH PAEG:';
$lang['lc_XX']['LeftAndMain']['PERMAGAIN'] = 'U HAS BEEN LOGGD OUT OV TEH CMS. IF U WUD LIEK 2 LOG IN AGAIN, ENTR USERNAME AN PASWORD BELOW.';
$lang['lc_XX']['LeftAndMain']['PERMALREADY'] = 'I R SRY, BUT U CANT ACCES DAT PART OV TEH CMS. IF U WANTS 2 LOG IN AS SUM1 ELSE, DO SO BELOW';
$lang['lc_XX']['LeftAndMain']['PERMDEFAULT'] = 'PLZ CHOOSE AN AUTHENTICASHUN METHOD AN ENTR UR CREDENTIALS 2 ACCES TEH CMS.';
$lang['lc_XX']['LeftAndMain']['PLEASESAVE'] = 'PLZ SAVE PAEG: DIS PAEG CUD NOT BE UPATD CUZ IT HASNT BIN SAVD YET.';
$lang['lc_XX']['LeftAndMain']['REPORTS'] = 'REPORTZ';
$lang['lc_XX']['LeftAndMain']['REQUESTERROR'] = 'ERROR IN TEH REQUESTZ';
$lang['lc_XX']['LeftAndMain']['SAVED'] = 'SAVD';
$lang['lc_XX']['LeftAndMain']['SAVEDUP'] = 'SAVD';
$lang['lc_XX']['LeftAndMain']['SITECONTENTLEFT'] = 'SITEZ CONTENT';
$lang['lc_XX']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'DIS IS TEH';
$lang['lc_XX']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'VERSHUN DAT U R CURRENTLY RUNNIN, TECHNICALLY IZ TEH CVS BRANCH';
$lang['lc_XX']['LeftAndMain.ss']['ARCHS'] = 'ARCHIVED SIET. ';
$lang['lc_XX']['LeftAndMain.ss']['DRAFTS'] = 'DRAFT SIET';
$lang['lc_XX']['LeftAndMain.ss']['EDIT'] = 'EDIT';
$lang['lc_XX']['LeftAndMain.ss']['EDITPROFILE'] = 'PROFILEZ';
$lang['lc_XX']['LeftAndMain.ss']['LOADING'] = 'LOADIN!!11!!!...';
$lang['lc_XX']['LeftAndMain.ss']['LOGGEDINAS'] = 'LOGGD IN AS';
$lang['lc_XX']['LeftAndMain.ss']['LOGOUT'] = 'LOG OUT';
$lang['lc_XX']['LeftAndMain.ss']['PUBLIS'] = 'PUBLISHD SIET';
$lang['lc_XX']['LeftAndMain.ss']['SSWEB'] = 'TEH SILVERSTRIPEZ WEBSEIT';
$lang['lc_XX']['LeftAndMain.ss']['VIEWPAGEIN'] = 'PAEG VIEW:';
$lang['lc_XX']['LeftAndMain']['STATUSTO'] = 'STATUS CHANGD 2 \'%s\'';
$lang['lc_XX']['LeftAndMain']['TREESITECONTENT'] = 'SITEZ CONTENT';
$lang['lc_XX']['MemberList']['ADD'] = 'ADD PLZ';
$lang['lc_XX']['MemberList']['EMAIL'] = 'EMAIL';
$lang['lc_XX']['MemberList']['FILTERBYG'] = 'FILTR BY GROUP';
$lang['lc_XX']['MemberList']['FN'] = 'FURST NAYM';
$lang['lc_XX']['MemberList']['PASSWD'] = 'PASWORD';
$lang['lc_XX']['MemberList']['SEARCH'] = 'SEARCH';
$lang['lc_XX']['MemberList']['SN'] = 'SURNAYM';
$lang['lc_XX']['MemberList.ss']['FILTER'] = 'FILTR';
$lang['lc_XX']['MemberList_Table.ss']['EMAIL'] = 'EMAIL ADDRESZ';
$lang['lc_XX']['MemberList_Table.ss']['FN'] = 'FURSTNAYM';
$lang['lc_XX']['MemberList_Table.ss']['PASSWD'] = 'PASWORD';
$lang['lc_XX']['MemberList_Table.ss']['SN'] = 'SHURNAYM';
$lang['lc_XX']['MemberTableField']['ADD'] = 'ADD';
$lang['lc_XX']['MemberTableField']['ADDEDTOGROUP'] = 'ADDED MEMBR TO GROUP, RITE?';
$lang['lc_XX']['MemberTableField.ss']['ADDNEW'] = 'ADD NEW 1!';
$lang['lc_XX']['MemberTableField.ss']['DELETEMEMBER'] = 'DELETE THIZ MEMBR';
$lang['lc_XX']['MemberTableField.ss']['EDITMEMBER'] = 'EDIT DIS MEMBR';
$lang['lc_XX']['MemberTableField.ss']['SHOWMEMBER'] = 'SHOW DIS MEMBR';
$lang['lc_XX']['ModelAdmin']['CLASSTYPE'] = 'TYPE';
$lang['lc_XX']['PageComment']['COMMENTBY'] = 'COMMENT BY \'%s\' ON %s';
$lang['lc_XX']['PageCommentInterface.ss']['COMMENTS'] = 'COMMENTZ';
$lang['lc_XX']['PageCommentInterface.ss']['NEXT'] = 'NEXT (GOGOGO)';
$lang['lc_XX']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'NO WAN HAS COMMENTD ON DIS PAEG YET.';
$lang['lc_XX']['PageCommentInterface.ss']['POSTCOM'] = 'POST UR COMMENTZ PLZ';
$lang['lc_XX']['PageCommentInterface.ss']['PREV'] = 'PREVIOUS';
$lang['lc_XX']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'DIS COMMENT IZ NOT SPAM';
$lang['lc_XX']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'DIS COMMENT IZ SPAM';
$lang['lc_XX']['PageCommentInterface_singlecomment.ss']['PBY'] = 'POSTD BY';
$lang['lc_XX']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'REMOOV DIS COMMENT';
$lang['lc_XX']['ReportAdmin']['MENUTITLE'] = 'REPORTZ';
$lang['lc_XX']['ReportAdmin_left.ss']['REPORTS'] = 'REPORTZ';
$lang['lc_XX']['ReportAdmin_right.ss']['WELCOME1'] = 'WELCUM TO TEH';
$lang['lc_XX']['ReportAdmin_right.ss']['WELCOME2'] = 'REPORTINS SECSHUN. PLEEZ CHOOSE SPECIFIC REPORT FROM TEH LEFT.  KTHX.';
$lang['lc_XX']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'REPORTZ';
$lang['lc_XX']['SecurityAdmin']['ADDMEMBER'] = 'ADD MEMBR1!1!!11!';
$lang['lc_XX']['SecurityAdmin']['MENUTITLE'] = 'SECURITY';
$lang['lc_XX']['SecurityAdmin']['NEWGROUP'] = 'NEW GROUP';
$lang['lc_XX']['SecurityAdmin']['SAVE'] = 'SAV';
$lang['lc_XX']['SecurityAdmin']['SGROUPS'] = 'SECURITY GROUPZ';
$lang['lc_XX']['SecurityAdmin_left.ss']['CREATE'] = 'CREATE PLZ';
$lang['lc_XX']['SecurityAdmin_left.ss']['DEL'] = 'DELETE';
$lang['lc_XX']['SecurityAdmin_left.ss']['DELGROUPS'] = 'DELETE TEH SELECTD GRUPZ';
$lang['lc_XX']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'ALLOW DRAG AN DROP REORDERIN';
$lang['lc_XX']['SecurityAdmin_left.ss']['GO'] = 'GOGOOG1!!1';
$lang['lc_XX']['SecurityAdmin_left.ss']['SECGROUPS'] = 'SECURITY GROUPZ';
$lang['lc_XX']['SecurityAdmin_left.ss']['SELECT'] = 'SELECT TEH PAGEZ DAT U WANTS 2 DELETE AN DEN CLICK TEH BUTN BELOW';
$lang['lc_XX']['SecurityAdmin_left.ss']['TOREORG'] = '2 REORGANIZE UR SIET, DRAG TEH PAGEZ AROUND AS DESIRD.';
$lang['lc_XX']['SecurityAdmin_right.ss']['WELCOME1'] = 'WELCOM 2 TEH';
$lang['lc_XX']['SecurityAdmin_right.ss']['WELCOME2'] = 'SECURITY ADMININISTRASHUN SECSHUN. PLEEZ CHOOSE GROUP FROM TEH LEFT.';
$lang['lc_XX']['SideReport']['EMPTYPAGES'] = 'EMPTY PAGEZ';
$lang['lc_XX']['SideReport']['LAST2WEEKS'] = 'PAEGEZ EDITED IN TEH LAST 2 WEEKZ. ';
$lang['lc_XX']['SideReport']['REPEMPTY'] = 'TEH %S REPORT IZ EMPTI.';
$lang['lc_XX']['StaticExporter']['BASEURL'] = 'TEH BASE URL';
$lang['lc_XX']['StaticExporter']['EXPORTTO'] = 'EXPORT 2 DAT FOLDR';
$lang['lc_XX']['StaticExporter']['FOLDEREXPORT'] = 'FOLDR 2 EXPORT 2';
$lang['lc_XX']['StaticExporter']['NAME'] = 'STATIC EXPORTR';
$lang['lc_XX']['StaticExporter']['ONETHATEXISTS'] = 'PLZ SPECIFY FOLDR DAT EXISTS';
$lang['lc_XX']['TaskList.ss']['BY'] = 'BY';
$lang['lc_XX']['ThumbnailStripField']['NOTAFOLDER'] = 'DIS AR TEH NOT FOLDR';
$lang['lc_XX']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(PIK FOLDR ABOOV)';
$lang['lc_XX']['ViewArchivedEmail.ss']['CANACCESS'] = 'U CAN ACCES TEH ARCHIVD SIET AT DIS LINK:';
$lang['lc_XX']['ViewArchivedEmail.ss']['HAVEASKED'] = 'YOUZ HAVE ASKED 2 VIEW TEH CONTENT OV OUR SITE ON';
$lang['lc_XX']['WaitingOn.ss']['ATO'] = 'ASSIGND 2';

?>