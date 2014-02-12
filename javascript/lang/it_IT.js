if(typeof(ss) == 'undefined' || typeof(ss.i18n) == 'undefined') {
	if(typeof(console) != 'undefined') console.error('Class ss.i18n not defined');
} else {
	ss.i18n.addDictionary('it_IT', {
		'CMSMAIN.WARNINGSAVEPAGESBEFOREADDING' : 'È necessario salvare la pagina prima di aggiungerci dei figli',
		'CMSMAIN.CANTADDCHILDREN' : 'Non è possibile aggiungere figli al nodo selezionato',
		'CMSMAIN.ERRORADDINGPAGE' : 'Errori durante l\'aggiunta della pagina',
		'CMSMAIN.FILTEREDTREE' : 'Filtrare l\'albero per visualizzare solo le pagine modificate',
		'CMSMAIN.ERRORFILTERPAGES' : 'Impossibile filtrare l\'albero per visualizzare solo le pagine modificate<br />%s',
		'CMSMAIN.ERRORUNFILTER' : 'Impossibile visualizzate l\'insieme e l\'albero del sito<br />%s',
		'CMSMAIN.ERRORUNFILTER' : 'Albero non filtrato',
		'CMSMAIN.PUBLISHINGPAGES' : 'Pubblicazione delle pagine...',
		'CMSMAIN.SELECTONEPAGE' : 'Selezionare almeno una pagina.',
		'CMSMAIN.ERRORPUBLISHING' : 'Errore durante la pubblicazione delle pagine',
		'CMSMAIN.REALLYDELETEPAGES' : 'Si vuole veramente eliminare le %s pagine selezionate?',
		'CMSMAIN.DELETINGPAGES' : 'Eliminazione delle pagine...',
		'CMSMAIN.ERRORDELETINGPAGES': 'Errore durante l\'eliminazione delle pagine',
		'CMSMAIN.PUBLISHING' : 'Pubblicazione...',
		'CMSMAIN.RESTORING': 'Ripristino...',
		'CMSMAIN.ERRORREVERTING': 'Errore durante il ripristino verso un contenuto Live',
		'CMSMAIN.SAVING' : 'salvataggio...',
		'CMSMAIN.SELECTMOREPAGES' : 'Hai %s pagine selezionate.\n\nSei sicuro di voler eseguire l\'azione?',
		'ModelAdmin.SAVED': 'Salvato',
		'ModelAdmin.REALLYDELETE': 'Si è sicuri di voler eliminare?',
		'ModelAdmin.DELETED': 'Eliminato',
		'ModelAdmin.VALIDATIONERROR': 'Errore di validazione',
		'LeftAndMain.PAGEWASDELETED': 'Questa pagina è stata eliminata. Per modificare questa pagine, selezionarla a sinistra.',
		'LeftAndMain.CONFIRMUNSAVED': 'Siete sicuri di voler uscire da questa pagina?\nATTENZIONE: I cambiamenti non sono stati salvati.\n\nCliccare OK per continuare, o Annulla per rimanere sulla pagina corrente.',
		'WidgetAreaEditor.TOOMANY': 'Spiacente, hai raggiunto il numero massimo di widget in quest\'area.',
		'CMSMAIN.RollbackConfirmation': 'Volete veramente ripristinare la versione #%s di questa pagina?',
		'CMSMAIN.CopyPublishedConfirmation': 'Vuoi veramente copiare il contenuto pubblicato nel sito bozza?',
		'CMSMAIN.PageTypeSaveAlert': 'Il Tipo Pagina verrà cambiato al salvataggio della pagina.',
		'LOADING': 'caricamento...',
		'TABLEFIELD.DELETECONFIRMMESSAGEV2': '\nCi sono %s pagine che usano questo file, per cortesia verificate la lista delle pagine nella tab Links del file prima di continuare.',
		'TABLEFIELD.SELECTUPLOAD': 'Selezionare almeno un file per il caricamento.',
		'TABLEFIELD.SELECTDELETE': 'Scegliere alcuni files da cancellare!',
		'TABLEFIELD.CONFIRMDELETEV2': 'Volete veramente cancellare i files selezionati?',
		'CMSMAIN.CREATINGFOLDER': 'Creazione nuova cartella...',
		'CMSMAIN.DELETINGFOLDERS': 'Cancellazione cartelle...'
	});
}