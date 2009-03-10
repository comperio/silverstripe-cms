<?php

/**
 * Russian (Russia) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['AssetAdmin']['CHOOSEFILE'] = 'Выберите файл';
$lang['ru_RU']['AssetAdmin']['CONTENTMODBY'] = 'Редакторы содержимого:';
$lang['ru_RU']['AssetAdmin']['CONTENTUSABLEBY'] = 'Пользователи содержимого:';
$lang['ru_RU']['AssetAdmin']['DELETEDX'] = 'Удалено файлов: %s. %s';
$lang['ru_RU']['AssetAdmin']['FILESREADY'] = 'Файлы готовые к загрузке:';
$lang['ru_RU']['AssetAdmin']['FOLDERDELETED'] = 'папка удалена.';
$lang['ru_RU']['AssetAdmin']['FOLDERSDELETED'] = 'папки(ок) удалено.';
$lang['ru_RU']['AssetAdmin']['MENUTITLE'] = 'Файлы и Изображения';
$lang['ru_RU']['AssetAdmin']['MENUTITLE'] = 'Файлы и изображения';
$lang['ru_RU']['AssetAdmin']['MOVEDX'] = 'Перемещено файлов: %s';
$lang['ru_RU']['AssetAdmin']['NEWFOLDER'] = 'Новая папка';
$lang['ru_RU']['AssetAdmin']['NOTEMP'] = 'Временная папка для загрузок не существует. Пожалуйста, укажите upload_tmp_dir в php.ini.';
$lang['ru_RU']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Ничего не было для загрузки';
$lang['ru_RU']['AssetAdmin']['NOWBROKEN'] = 'Эти страницы сейчас содержат неверные ссылки:';
$lang['ru_RU']['AssetAdmin']['NOWBROKEN2'] = 'Их владельцы уведомлены по email и исправят эти страницы.';
$lang['ru_RU']['AssetAdmin']['OWNER'] = 'Владелец';
$lang['ru_RU']['AssetAdmin']['SAVEDFILE'] = 'Файл %s сохранен';
$lang['ru_RU']['AssetAdmin']['SAVEFOLDERNAME'] = 'Сохранить имя папки';
$lang['ru_RU']['AssetAdmin']['THUMBSDELETED'] = 'Все неиспользуемые миниатюры были удалены';
$lang['ru_RU']['AssetAdmin']['UPLOAD'] = 'Загрузить указанные файлы';
$lang['ru_RU']['AssetAdmin']['UPLOADEDX'] = 'Загружен(ы) %s файла(ов)';
$lang['ru_RU']['AssetAdmin_left.ss']['CREATE'] = 'Создать';
$lang['ru_RU']['AssetAdmin_left.ss']['DELETE'] = 'Удалить';
$lang['ru_RU']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Удалить выбранные папки';
$lang['ru_RU']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Разрешить перетаскивание';
$lang['ru_RU']['AssetAdmin_left.ss']['FOLDERS'] = 'Папки';
$lang['ru_RU']['AssetAdmin_left.ss']['GO'] = 'Перейти';
$lang['ru_RU']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Выберите папки, которые вы хотите удалить, и нажмите кнопку внизу';
$lang['ru_RU']['AssetAdmin_left.ss']['TOREORG'] = 'Для изменения порядка папок перетащите их мышкой.';
$lang['ru_RU']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Пожалуйста, выберите страницу слева.';
$lang['ru_RU']['AssetAdmin_right.ss']['WELCOME'] = 'Добро пожаловать в';
$lang['ru_RU']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'У вас нет доступа к загрузке файлов в эту папку.';
$lang['ru_RU']['AssetTableField']['CAPTION'] = 'Заголовок';
$lang['ru_RU']['AssetTableField']['CREATED'] = 'Первая загрузка';
$lang['ru_RU']['AssetTableField']['DIM'] = 'Размеры';
$lang['ru_RU']['AssetTableField']['DIMLIMT'] = 'Задать размеры всплывающего окна';
$lang['ru_RU']['AssetTableField']['EDITIMAGE'] = 'Редактировать изображ.';
$lang['ru_RU']['AssetTableField']['FILENAME'] = 'Имя файла';
$lang['ru_RU']['AssetTableField']['GALLERYOPTIONS'] = 'Настройки галереи';
$lang['ru_RU']['AssetTableField']['IMAGE'] = 'Изображение';
$lang['ru_RU']['AssetTableField']['ISFLASH'] = 'документ Flash';
$lang['ru_RU']['AssetTableField']['LASTEDIT'] = 'Последнее изменение';
$lang['ru_RU']['AssetTableField']['MAIN'] = 'Основное';
$lang['ru_RU']['AssetTableField']['NOLINKS'] = 'На этот файл нет ссылок ни с одной страницы.';
$lang['ru_RU']['AssetTableField']['OWNER'] = 'Владелец';
$lang['ru_RU']['AssetTableField']['PAGESLINKING'] = 'На этот файл имеются ссылки со следующих страниц:';
$lang['ru_RU']['AssetTableField']['POPUPHEIGHT'] = 'Высота всплывающего изображ.';
$lang['ru_RU']['AssetTableField']['POPUPWIDTH'] = 'Ширина всплывающего изобр.';
$lang['ru_RU']['AssetTableField']['SIZE'] = 'Размер';
$lang['ru_RU']['AssetTableField.ss']['DELFILE'] = 'Удалить этот файл';
$lang['ru_RU']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Чтобы переместить файл, перетащите его в папку слева';
$lang['ru_RU']['AssetTableField.ss']['EDIT'] = 'Изменить ресурс';
$lang['ru_RU']['AssetTableField.ss']['SHOW'] = 'Показать ресурс';
$lang['ru_RU']['AssetTableField']['SWFFILEOPTIONS'] = 'Настройки файла SWF';
$lang['ru_RU']['AssetTableField']['TITLE'] = 'Название';
$lang['ru_RU']['AssetTableField']['TYPE'] = 'Тип';
$lang['ru_RU']['AssetTableField']['URL'] = 'URL';
$lang['ru_RU']['CMSLeft.ss']['DELPAGE'] = 'Удалить страницы...';
$lang['ru_RU']['CMSLeft.ss']['DELPAGES'] = 'Удалить выбранные страницы';
$lang['ru_RU']['CMSLeft.ss']['GO'] = 'Перейти';
$lang['ru_RU']['CMSLeft.ss']['NEWPAGE'] = 'Новая страница...';
$lang['ru_RU']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Выберите страницы, которые Вы хотите удалить, и нажмите кнопку внизу';
$lang['ru_RU']['CMSLeft.ss']['SITECONT'] = 'Содержимое сайта';
$lang['ru_RU']['CMSMain']['ACCESS'] = 'Доступ к %s в Системе';
$lang['ru_RU']['CMSMain']['ACCESSALLINTERFACES'] = 'Доступ ко всему интерфейсу CMS';
$lang['ru_RU']['CMSMain']['CANCEL'] = 'Отмена';
$lang['ru_RU']['CMSMain']['CHOOSEREPORT'] = '(Выберите отчёт)';
$lang['ru_RU']['CMSMain']['COMPARINGV'] = 'Вы сравниваете версии #%d и #%d';
$lang['ru_RU']['CMSMain']['COPYPUBTOSTAGE'] = 'Вы действительно хотите скопировать опубликованное содержимое в черновой сайт?';
$lang['ru_RU']['CMSMain']['DELETE'] = 'Удалить с чернового сайта';
$lang['ru_RU']['CMSMain']['DELETEFP'] = 'Удалить с опубликованного сайта';
$lang['ru_RU']['CMSMain']['DESCREMOVED'] = 'и %s зависимых';
$lang['ru_RU']['CMSMain']['EMAIL'] = 'Email';
$lang['ru_RU']['CMSMain']['GO'] = 'Перейти';
$lang['ru_RU']['CMSMain']['MENUTITLE'] = 'Содержимое сайта';
$lang['ru_RU']['CMSMain']['MENUTITLE'] = 'Содержимое сайта';
$lang['ru_RU']['CMSMain']['METADESCOPT'] = 'Описание';
$lang['ru_RU']['CMSMain']['METAKEYWORDSOPT'] = 'Ключевые слова';
$lang['ru_RU']['CMSMain']['NEW'] = 'Новый';
$lang['ru_RU']['CMSMain']['NOCONTENT'] = 'содержимого нет';
$lang['ru_RU']['CMSMain']['NOTHINGASSIGNED'] = 'У вас нет ничего назначенного на вас.';
$lang['ru_RU']['CMSMain']['NOWAITINGON'] = 'Вы никого не ожидаете.';
$lang['ru_RU']['CMSMain']['NOWBROKEN'] = 'Сейчас следующие страницы содержат неверные ссылки:';
$lang['ru_RU']['CMSMain']['NOWBROKEN2'] = 'Их владельцы были уведомлены по электронной почте и они исправят эти страницы.';
$lang['ru_RU']['CMSMain']['OK'] = 'ОК';
$lang['ru_RU']['CMSMain']['PAGEDEL'] = '%d страница  удалена';
$lang['ru_RU']['CMSMain']['PAGENOTEXISTS'] = 'Страница не существует';
$lang['ru_RU']['CMSMain']['PAGEPUB'] = '%d страница опубликована';
$lang['ru_RU']['CMSMain']['PAGESDEL'] = '%d страниц(ы) удалено(ы)';
$lang['ru_RU']['CMSMain']['PAGESPUB'] = 'опубликовано(ы) %d страниц(ы) ';
$lang['ru_RU']['CMSMain']['PAGETYPEOPT'] = 'Тип страницы';
$lang['ru_RU']['CMSMain']['PRINT'] = 'Печать';
$lang['ru_RU']['CMSMain']['PUBALLCONFIRM'] = 'Пожалуйста, опубликуйте каждую страницу сайта, перенося содержимое из чернового режима в опубликованный';
$lang['ru_RU']['CMSMain']['PUBALLFUN'] = 'Функция "Опубликовать все"';
$lang['ru_RU']['CMSMain']['PUBALLFUN2'] = 'Нажатие этой кнопки выполнит ту же функцию, что и нажатие кнопки "Опубликовать" для каждой отдельной страницы. Данная функция предназначена для использования после значительных изменений содержимого, например, в момент создания нового сайта.';
$lang['ru_RU']['CMSMain']['PUBPAGES'] = 'Выполнено: Опубликовано %d страниц';
$lang['ru_RU']['CMSMain']['REMOVED'] = 'Удалено \'%s\'%s с опубликованного сайта';
$lang['ru_RU']['CMSMain']['REMOVEDFD'] = 'Удалено с чернового сайта';
$lang['ru_RU']['CMSMain']['REMOVEDPAGE'] = 'Удалено \'%s\' с опубликованного сайта';
$lang['ru_RU']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Удалено \'%s\' с чернового сайта';
$lang['ru_RU']['CMSMain']['REPORT'] = 'Отчет';
$lang['ru_RU']['CMSMain']['RESTORE'] = 'Восстановить';
$lang['ru_RU']['CMSMain']['RESTORED'] = '\'%s\' успешно восстановлено';
$lang['ru_RU']['CMSMain']['ROLLBACK'] = 'Откатить до этой версии';
$lang['ru_RU']['CMSMain']['ROLLEDBACKPUB'] = 'Произведен откат до опубликованной версии. Новая версия #%d';
$lang['ru_RU']['CMSMain']['ROLLEDBACKVERSION'] = 'Произведен откат до версии #%d. Номер новой версии #%d';
$lang['ru_RU']['CMSMain']['SAVE'] = 'Сохранить';
$lang['ru_RU']['CMSMain']['SENTTO'] = 'Послать для подтверждения %s %s.';
$lang['ru_RU']['CMSMain']['STATUSOPT'] = 'Статус';
$lang['ru_RU']['CMSMain']['TOTALPAGES'] = 'Всего страниц:';
$lang['ru_RU']['CMSMain']['VERSIONSNOPAGE'] = 'Не могу найти страницу #%d';
$lang['ru_RU']['CMSMain']['VIEWING'] = 'Вы просматриваете версию #%d, созданную %s';
$lang['ru_RU']['CMSMain']['VISITRESTORE'] = 'перейти к restorepage/(ID)';
$lang['ru_RU']['CMSMain']['WAITINGON'] = 'Вы ожидаете других людей для работы на <b>%d</b> страницах.';
$lang['ru_RU']['CMSMain']['WORKTODO'] = 'Вы запланировали изменения на этих <b>%d</b> страницах.';
$lang['ru_RU']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Не найдено название кнопки';
$lang['ru_RU']['CMSMain_dialog.ss']['NOLINKED'] = 'Не найден window.linkedObject для перенаправления к основному окну после нажатия кнопки';
$lang['ru_RU']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Добавлено на черновой сайт и еще не опубликовано';
$lang['ru_RU']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Добавить критерий...';
$lang['ru_RU']['CMSMain_left.ss']['BATCHACTIONS'] = 'Пакетные действия';
$lang['ru_RU']['CMSMain_left.ss']['CHANGED'] = 'изменено';
$lang['ru_RU']['CMSMain_left.ss']['CLOSEBOX'] = 'нажмите, чтобы закрыть окно';
$lang['ru_RU']['CMSMain_left.ss']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['CMSMain_left.ss']['COMPAREMODE'] = 'Режим сравнения (кликните 2 ниже)';
$lang['ru_RU']['CMSMain_left.ss']['CREATE'] = 'Создать';
$lang['ru_RU']['CMSMain_left.ss']['DEL'] = 'удалено';
$lang['ru_RU']['CMSMain_left.ss']['DELETECONFIRM'] = 'Удалить выбранные страницы';
$lang['ru_RU']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Удалено с чернового сайта, но еще опубликовано на рабочем сайте';
$lang['ru_RU']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Отредактировано на черновом сайте и еще не опубликовано';
$lang['ru_RU']['CMSMain_left.ss']['EDITEDSINCE'] = 'Изменения с';
$lang['ru_RU']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Разрешить перетаскивание мышкой';
$lang['ru_RU']['CMSMain_left.ss']['GO'] = 'Перейти';
$lang['ru_RU']['CMSMain_left.ss']['KEY'] = 'Ключ:';
$lang['ru_RU']['CMSMain_left.ss']['NEW'] = 'новое';
$lang['ru_RU']['CMSMain_left.ss']['OPENBOX'] = 'нажмите, чтобы открыть это окно';
$lang['ru_RU']['CMSMain_left.ss']['PAGEVERSIONH'] = 'История версий страницы';
$lang['ru_RU']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Опубликовать выбранные страницы';
$lang['ru_RU']['CMSMain_left.ss']['SEARCH'] = 'Найти';
$lang['ru_RU']['CMSMain_left.ss']['SEARCHTITLE'] = 'Поиск по URL, названию, пункту в меню и содержимому';
$lang['ru_RU']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Выберите страницы для изменения и затем выберите действие:';
$lang['ru_RU']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Выберите страницы, которые Вы хотите дублировать, нужно ли включать их дочерние страницы, а также, куда поместить дубликаты';
$lang['ru_RU']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Показать только измененные страницы';
$lang['ru_RU']['CMSMain_left.ss']['SHOWUNPUB'] = 'Показать неопубликованные';
$lang['ru_RU']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Содержимое и Структура сайта';
$lang['ru_RU']['CMSMain_left.ss']['SITEREPORTS'] = 'Отчеты сайта';
$lang['ru_RU']['CMSMain_left.ss']['TASKLIST'] = 'Список задач';
$lang['ru_RU']['CMSMain_left.ss']['WAITINGON'] = 'Ожидание';
$lang['ru_RU']['CMSMain_right.ss']['ANYMESSAGE'] = 'У Вас есть сообщение для вашего редактора?';
$lang['ru_RU']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Пожалуйста, выберите слева страницу.';
$lang['ru_RU']['CMSMain_right.ss']['LOADING'] = 'загрузка...';
$lang['ru_RU']['CMSMain_right.ss']['MESSAGE'] = 'Сообщение';
$lang['ru_RU']['CMSMain_right.ss']['SENDTO'] = 'Отправить';
$lang['ru_RU']['CMSMain_right.ss']['STATUS'] = 'Статус';
$lang['ru_RU']['CMSMain_right.ss']['SUBMIT'] = 'Отправить на подтверждение';
$lang['ru_RU']['CMSMain_right.ss']['WELCOMETO'] = 'Добро пожаловать в';
$lang['ru_RU']['CMSMain_versions.ss']['AUTHOR'] = 'Автор';
$lang['ru_RU']['CMSMain_versions.ss']['NOTPUB'] = 'Не опубликовано';
$lang['ru_RU']['CMSMain_versions.ss']['PUBR'] = 'Публикация';
$lang['ru_RU']['CMSMain_versions.ss']['UNKNOWN'] = 'Неизвестный';
$lang['ru_RU']['CMSMain_versions.ss']['WHEN'] = 'Когда';
$lang['ru_RU']['CMSRight.ss']['CHOOSEPAGE'] = 'Пожалуйста, выберите слева страницу.';
$lang['ru_RU']['CMSRight.ss']['ECONTENT'] = 'Редактировать';
$lang['ru_RU']['CMSRight.ss']['WELCOMETO'] = 'Добро пожаловать в';
$lang['ru_RU']['CommentAdmin']['ACCEPT'] = 'Принять';
$lang['ru_RU']['CommentAdmin']['APPROVED'] = 'Принято %s комментариев. ';
$lang['ru_RU']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Одобренные комментарии';
$lang['ru_RU']['CommentAdmin']['AUTHOR'] = 'Автор';
$lang['ru_RU']['CommentAdmin']['COMMENT'] = 'Комментарий';
$lang['ru_RU']['CommentAdmin']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Комментарии, ожидающие модерации';
$lang['ru_RU']['CommentAdmin']['DATEPOSTED'] = 'Дата публикации';
$lang['ru_RU']['CommentAdmin']['DELETE'] = 'Удалить';
$lang['ru_RU']['CommentAdmin']['DELETEALL'] = 'Удалить все';
$lang['ru_RU']['CommentAdmin']['DELETED'] = 'Удалено %s комментариев.';
$lang['ru_RU']['CommentAdmin']['MARKASNOTSPAM'] = 'Пометить как не спам';
$lang['ru_RU']['CommentAdmin']['MARKEDNOTSPAM'] = '%s комментариев помечены как не спам.';
$lang['ru_RU']['CommentAdmin']['MARKEDSPAM'] = '%s комментариев помечены как спам.';
$lang['ru_RU']['CommentAdmin']['MENUTITLE'] = 'Комментарии';
$lang['ru_RU']['CommentAdmin']['MENUTITLE'] = 'Комментарии';
$lang['ru_RU']['CommentAdmin']['NAME'] = 'Имя';
$lang['ru_RU']['CommentAdmin']['PAGE'] = 'Страница';
$lang['ru_RU']['CommentAdmin']['SPAM'] = 'Спам';
$lang['ru_RU']['CommentAdmin']['SPAMMARKED'] = 'Пометить как спам';
$lang['ru_RU']['CommentAdmin_left.ss']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['CommentAdmin_right.ss']['WELCOME1'] = 'Добро пожаловать в ';
$lang['ru_RU']['CommentAdmin_right.ss']['WELCOME2'] = 'Систему Управления Сайтом. Пожалуйста, выберите папку в списке слева.';
$lang['ru_RU']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Одобрено';
$lang['ru_RU']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'На модерации';
$lang['ru_RU']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Спам';
$lang['ru_RU']['CommentList.ss']['CREATEDW'] = 'Комментарии создаются всегда, когда производятся "рабочие действия" - Опубликовать, Отклонить, Отправить.';
$lang['ru_RU']['CommentList.ss']['NOCOM'] = 'На этой странице комментариев нет';
$lang['ru_RU']['CommentTableField']['FILTER'] = 'Фильтр';
$lang['ru_RU']['CommentTableField']['SEARCH'] = 'Поиск';
$lang['ru_RU']['CommentTableField.ss']['APPROVE'] = 'одобрить';
$lang['ru_RU']['CommentTableField.ss']['APPROVECOMMENT'] = 'Одобрить комментарий';
$lang['ru_RU']['CommentTableField.ss']['DELETE'] = 'удалить';
$lang['ru_RU']['CommentTableField.ss']['DELETEROW'] = 'Удалить эту строку';
$lang['ru_RU']['CommentTableField.ss']['EDIT'] = 'изменить';
$lang['ru_RU']['CommentTableField.ss']['HAM'] = 'не спам';
$lang['ru_RU']['CommentTableField.ss']['MARKASSPAM'] = 'Пометить комментарий как спам';
$lang['ru_RU']['CommentTableField.ss']['MARKNOSPAM'] = 'Пометить комментарий как не спам';
$lang['ru_RU']['CommentTableField.ss']['NOITEMSFOUND'] = 'Ничего не найдено';
$lang['ru_RU']['CommentTableField.ss']['SPAM'] = 'спам';
$lang['ru_RU']['ComplexTableField']['CLOSEPOPUP'] = 'Закрыть всплывающее окно';
$lang['ru_RU']['ComplexTableField']['SUCCESSADD'] = 'Добавленно %s %s %';
$lang['ru_RU']['ImageEditor.ss']['ACTIONS'] = 'действия';
$lang['ru_RU']['ImageEditor.ss']['ADJUST'] = 'настройка';
$lang['ru_RU']['ImageEditor.ss']['APPLY'] = 'применить';
$lang['ru_RU']['ImageEditor.ss']['BLUR'] = 'сглаживание';
$lang['ru_RU']['ImageEditor.ss']['BRIGHTNESS'] = 'яркость';
$lang['ru_RU']['ImageEditor.ss']['CANCEL'] = 'отмена';
$lang['ru_RU']['ImageEditor.ss']['CONTRAST'] = 'контраст';
$lang['ru_RU']['ImageEditor.ss']['CROP'] = 'обрезать';
$lang['ru_RU']['ImageEditor.ss']['CURRENTACTION'] = 'текущее&nbsp;действие';
$lang['ru_RU']['ImageEditor.ss']['EDITFUNCTIONS'] = 'изменить&nbsp;функции';
$lang['ru_RU']['ImageEditor.ss']['EFFECTS'] = 'эффекты';
$lang['ru_RU']['ImageEditor.ss']['EXIT'] = 'выход';
$lang['ru_RU']['ImageEditor.ss']['GAMMA'] = 'гамма';
$lang['ru_RU']['ImageEditor.ss']['GREYSCALE'] = 'черно-белый';
$lang['ru_RU']['ImageEditor.ss']['HEIGHT'] = 'высота';
$lang['ru_RU']['ImageEditor.ss']['REDO'] = 'вернуть';
$lang['ru_RU']['ImageEditor.ss']['ROT'] = 'повернуть';
$lang['ru_RU']['ImageEditor.ss']['SAVE'] = 'сохранить&nbsp;изобр.';
$lang['ru_RU']['ImageEditor.ss']['SEPIA'] = 'Сепиа';
$lang['ru_RU']['ImageEditor.ss']['UNDO'] = 'отменить';
$lang['ru_RU']['ImageEditor.ss']['UNTITLED'] = 'Без названия';
$lang['ru_RU']['ImageEditor.ss']['WIDTH'] = 'ширина';
$lang['ru_RU']['LeftAndMain']['CHANGEDURL'] = 'URL изменен на \'%s\'';
$lang['ru_RU']['LeftAndMain']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['LeftAndMain']['FILESIMAGES'] = 'Файлы и Изображения';
$lang['ru_RU']['LeftAndMain']['HELP'] = 'Помощь';
$lang['ru_RU']['LeftAndMain']['PAGETYPE'] = 'Тип страницы:';
$lang['ru_RU']['LeftAndMain']['PERMAGAIN'] = 'Вы вышли из Системы Управления Сайтом. Если Вы хотите войти снова, введите внизу имя пользователя и пароль.';
$lang['ru_RU']['LeftAndMain']['PERMALREADY'] = 'Извините, у вас нет доступа к этому разделу Системы Управления. Если Вы хотите войти под другой учетной записью, сделайте это ниже';
$lang['ru_RU']['LeftAndMain']['PERMDEFAULT'] = 'Введите ваши адрес электр. почты и пароль для доступа к системе.';
$lang['ru_RU']['LeftAndMain']['PLEASESAVE'] = 'Пожалуйста, сохраните страницу: ее нельзя обновить, т.к. она еще не была сохранена.';
$lang['ru_RU']['LeftAndMain']['REPORTS'] = 'Отчёты';
$lang['ru_RU']['LeftAndMain']['REQUESTERROR'] = 'Ошибка в запросе';
$lang['ru_RU']['LeftAndMain']['SAVED'] = 'сохранено';
$lang['ru_RU']['LeftAndMain']['SAVEDUP'] = 'Сохранено';
$lang['ru_RU']['LeftAndMain']['SECURITY'] = 'Безопасность';
$lang['ru_RU']['LeftAndMain']['SITECONTENT'] = 'Содержание сайта';
$lang['ru_RU']['LeftAndMain']['SITECONTENTLEFT'] = 'Содержимое сайта';
$lang['ru_RU']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Это';
$lang['ru_RU']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'версия, которую Вы используете в данный момент, технически она является ответвлением Системы Управления Версиями CVS';
$lang['ru_RU']['LeftAndMain.ss']['ARCHS'] = 'Архивный сайт';
$lang['ru_RU']['LeftAndMain.ss']['DRAFTS'] = 'Черновой сайт';
$lang['ru_RU']['LeftAndMain.ss']['EDIT'] = 'Редактировать';
$lang['ru_RU']['LeftAndMain.ss']['EDITINCMS'] = 'Редактировать эту страницу в Системе';
$lang['ru_RU']['LeftAndMain.ss']['EDITPROFILE'] = 'Профиль';
$lang['ru_RU']['LeftAndMain.ss']['LOADING'] = 'Загрузка...';
$lang['ru_RU']['LeftAndMain.ss']['LOGGEDINAS'] = 'Вы вошли как';
$lang['ru_RU']['LeftAndMain.ss']['LOGOUT'] = 'выйти';
$lang['ru_RU']['LeftAndMain.ss']['PUBLIS'] = 'Опубликованный сайт';
$lang['ru_RU']['LeftAndMain.ss']['REQUIREJS'] = 'CMS необходимо чтобы поддержка JavaScript была включена';
$lang['ru_RU']['LeftAndMain.ss']['SSWEB'] = 'Вебсайт Silverstripe';
$lang['ru_RU']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Смотреть эту страницу на черновом сайте';
$lang['ru_RU']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Смотреть эту страницу на опубликованном сайте';
$lang['ru_RU']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Вид страниц:';
$lang['ru_RU']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = 'Запись \'%s\' опубликована';
$lang['ru_RU']['LeftAndMain']['STATUSTO'] = 'Статус изменен на \'%s\'';
$lang['ru_RU']['LeftAndMain']['TREESITECONTENT'] = 'Содержимое сайта';
$lang['ru_RU']['MemberList']['ADD'] = 'Добавить';
$lang['ru_RU']['MemberList']['ANYGROUP'] = 'Любая группа';
$lang['ru_RU']['MemberList']['ASC'] = 'По возрастанию';
$lang['ru_RU']['MemberList']['DESC'] = 'По убыванию';
$lang['ru_RU']['MemberList']['EMAIL'] = 'Email';
$lang['ru_RU']['MemberList']['FILTERBYG'] = 'Фильтр по группе';
$lang['ru_RU']['MemberList']['FN'] = 'Имя';
$lang['ru_RU']['MemberList']['ORDERBY'] = 'Сортировать';
$lang['ru_RU']['MemberList']['PASSWD'] = 'Пароль';
$lang['ru_RU']['MemberList']['SEARCH'] = 'Найти';
$lang['ru_RU']['MemberList']['SN'] = 'Фамилия';
$lang['ru_RU']['MemberList.ss']['FILTER'] = 'Фильтр';
$lang['ru_RU']['MemberList_PageControls.ss']['DISPLAYING'] = 'Показано';
$lang['ru_RU']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'участников';
$lang['ru_RU']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'участников';
$lang['ru_RU']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'участников';
$lang['ru_RU']['MemberList_PageControls.ss']['OF'] = 'из';
$lang['ru_RU']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'участников';
$lang['ru_RU']['MemberList_PageControls.ss']['TO'] = '-';
$lang['ru_RU']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Смотрееть первых';
$lang['ru_RU']['MemberList_PageControls.ss']['VIEWLAST'] = 'Смотреть последних';
$lang['ru_RU']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Смотреть след.';
$lang['ru_RU']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Смотреть предыд.';
$lang['ru_RU']['MemberList_Table.ss']['EMAIL'] = 'Адрес email';
$lang['ru_RU']['MemberList_Table.ss']['FN'] = 'Имя';
$lang['ru_RU']['MemberList_Table.ss']['PASSWD'] = 'Пароль';
$lang['ru_RU']['MemberList_Table.ss']['SN'] = 'Фамилия';
$lang['ru_RU']['MemberTableField']['ADD'] = 'Добавить';
$lang['ru_RU']['MemberTableField']['ADDEDTOGROUP'] = 'Участник, добавленный в группу';
$lang['ru_RU']['MemberTableField']['ADDINGFIELD'] = 'Не удалось добавить';
$lang['ru_RU']['MemberTableField']['ANYGROUP'] = 'Любая группа';
$lang['ru_RU']['MemberTableField']['ASC'] = 'По возрастанию';
$lang['ru_RU']['MemberTableField']['DESC'] = 'По убыванию';
$lang['ru_RU']['MemberTableField']['EMAIL'] = 'Email';
$lang['ru_RU']['MemberTableField']['FILTER'] = 'Фильтр';
$lang['ru_RU']['MemberTableField']['FILTERBYGROUP'] = 'Фильтр по группе';
$lang['ru_RU']['MemberTableField']['FIRSTNAME'] = 'Имя';
$lang['ru_RU']['MemberTableField']['ORDERBY'] = 'Сортировать';
$lang['ru_RU']['MemberTableField']['SEARCH'] = 'Поиск';
$lang['ru_RU']['MemberTableField.ss']['ADDNEW'] = 'Добавить';
$lang['ru_RU']['MemberTableField.ss']['DELETEMEMBER'] = 'Удалить этого участника';
$lang['ru_RU']['MemberTableField.ss']['EDITMEMBER'] = 'Изменить этого участника';
$lang['ru_RU']['MemberTableField.ss']['SHOWMEMBER'] = 'Показать этого участника';
$lang['ru_RU']['MemberTableField']['SURNAME'] = 'Фамилия';
$lang['ru_RU']['ModelAdmin']['ADDBUTTON'] = 'Добавить';
$lang['ru_RU']['ModelAdmin']['ADDFORM'] = 'Заполните эту форму, чтобы добавить %s в базу данных.';
$lang['ru_RU']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Выберете столбцы...';
$lang['ru_RU']['ModelAdmin']['CLASSTYPE'] = 'Тип';
$lang['ru_RU']['ModelAdmin']['CLEAR_SEARCH'] = 'Очистить результат поиска';
$lang['ru_RU']['ModelAdmin']['CREATEBUTTON'] = 'Создать \'%s\'';
$lang['ru_RU']['ModelAdmin']['DELETE'] = 'Удалить';
$lang['ru_RU']['ModelAdmin']['DELETEDRECORDS'] = 'Удалено %s записей.';
$lang['ru_RU']['ModelAdmin']['FOUNDRESULTS'] = 'Найдено %s подходящих позиций';
$lang['ru_RU']['ModelAdmin']['GOBACK'] = 'Назад';
$lang['ru_RU']['ModelAdmin']['GOFORWARD'] = 'Вперед';
$lang['ru_RU']['ModelAdmin']['IMPORT'] = 'Импорт из CSV';
$lang['ru_RU']['ModelAdmin']['IMPORTEDRECORDS'] = 'Импортировано %s %s.';
$lang['ru_RU']['ModelAdmin']['ITEMNOTFOUND'] = 'Ничего не найдено';
$lang['ru_RU']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' загружается для редактирования.';
$lang['ru_RU']['ModelAdmin']['NOCSVFILE'] = 'Выберите CSV-файл для импорта';
$lang['ru_RU']['ModelAdmin']['NOIMPORT'] = 'Нечего импортировать';
$lang['ru_RU']['ModelAdmin']['NORESULTS'] = 'Нет результатов';
$lang['ru_RU']['ModelAdmin']['SAVE'] = 'Сохранить';
$lang['ru_RU']['ModelAdmin']['SEARCHRESULTS'] = 'Результаты поиска...';
$lang['ru_RU']['ModelAdmin']['SELECTALL'] = 'выбрать всё';
$lang['ru_RU']['ModelAdmin']['SELECTNONE'] = 'снять выделение';
$lang['ru_RU']['ModelAdmin']['UPDATEDRECORDS'] = 'Обновлено %s записей';
$lang['ru_RU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Колонки базы данных';
$lang['ru_RU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Показать спецификацию для %s';
$lang['ru_RU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Связи';
$lang['ru_RU']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Спецификация для %s';
$lang['ru_RU']['ModelAdmin_left.ss']['ADDLISTING'] = 'Добавить список';
$lang['ru_RU']['ModelAdmin_left.ss']['ADD_TAB_HEADER'] = 'Добавить';
$lang['ru_RU']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Импорт';
$lang['ru_RU']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Списки поиска';
$lang['ru_RU']['ModelAdmin_right.ss']['WELCOME1'] = 'Доро пожаловать %s. Выберите запись в левой панели.';
$lang['ru_RU']['PageComment']['Comment'] = 'Комментарий';
$lang['ru_RU']['PageComment']['COMMENTBY'] = 'Комментарий: \'%s\' на %s';
$lang['ru_RU']['PageComment']['IsSpam'] = 'Это спам?';
$lang['ru_RU']['PageComment']['Name'] = 'Имя автора';
$lang['ru_RU']['PageComment']['NeedsModeration'] = 'Требует модерации?';
$lang['ru_RU']['PageComment']['PLURALNAME'] = 'Комментарии к странице';
$lang['ru_RU']['PageComment']['SINGULARNAME'] = 'Комментарий';
$lang['ru_RU']['PageCommentInterface']['COMMENTERURL'] = 'Адрес вашего сайта';
$lang['ru_RU']['PageCommentInterface']['POST'] = 'Публикация';
$lang['ru_RU']['PageCommentInterface']['SPAMQUESTION'] = 'Вопрос для защиты от спама: %s';
$lang['ru_RU']['PageCommentInterface.ss']['COMMENTS'] = 'Комментарии';
$lang['ru_RU']['PageCommentInterface.ss']['NEXT'] = 'следующий';
$lang['ru_RU']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'На этой странице еще нет комментариев.';
$lang['ru_RU']['PageCommentInterface.ss']['POSTCOM'] = 'Оставить комментарий';
$lang['ru_RU']['PageCommentInterface.ss']['PREV'] = 'предыдущий';
$lang['ru_RU']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'RSS лента всех комментариев';
$lang['ru_RU']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Комментарии по RSS для этой страницы';
$lang['ru_RU']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Смотреть все комментарии';
$lang['ru_RU']['PageCommentInterface']['YOURCOMMENT'] = 'Комментарии';
$lang['ru_RU']['PageCommentInterface']['YOURNAME'] = 'Ваше имя';
$lang['ru_RU']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Вопрос для защиты от спама: %s';
$lang['ru_RU']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Ваш комментарий принят и ожидает модерации.';
$lang['ru_RU']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Опубликованное Вами сообщение:';
$lang['ru_RU']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Обнаружен спам!';
$lang['ru_RU']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'одобрить этот комментарий';
$lang['ru_RU']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'этот комментарий - не спам';
$lang['ru_RU']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'этот комментарий - спам';
$lang['ru_RU']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Автор';
$lang['ru_RU']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'удалить этот комментарий';
$lang['ru_RU']['ReportAdmin']['MENUTITLE'] = 'Отчеты';
$lang['ru_RU']['ReportAdmin_left.ss']['REPORTS'] = 'Отчеты';
$lang['ru_RU']['ReportAdmin_right.ss']['WELCOME1'] = 'Добро пожаловать в';
$lang['ru_RU']['ReportAdmin_right.ss']['WELCOME2'] = 'раздел отчетов. Пожалуйста, выберите нужный отчет слева.';
$lang['ru_RU']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Отчеты';
$lang['ru_RU']['SecurityAdmin']['ADDMEMBER'] = 'Добавить участника';
$lang['ru_RU']['SecurityAdmin']['EDITPERMISSIONS'] = 'Задать разрешения и IP адреса для каждой группы';
$lang['ru_RU']['SecurityAdmin']['MENUTITLE'] = 'Права доступа';
$lang['ru_RU']['SecurityAdmin']['MENUTITLE'] = 'Безопасность';
$lang['ru_RU']['SecurityAdmin']['NEWGROUP'] = 'Новая группа';
$lang['ru_RU']['SecurityAdmin']['SAVE'] = 'Сохранить';
$lang['ru_RU']['SecurityAdmin']['SGROUPS'] = 'Группы доступа';
$lang['ru_RU']['SecurityAdmin_left.ss']['CREATE'] = 'Создать';
$lang['ru_RU']['SecurityAdmin_left.ss']['DEL'] = 'Удалить';
$lang['ru_RU']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Удалить выбранные группы';
$lang['ru_RU']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Разрешить перетаскивание';
$lang['ru_RU']['SecurityAdmin_left.ss']['GO'] = 'Перейти';
$lang['ru_RU']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Группы доступа';
$lang['ru_RU']['SecurityAdmin_left.ss']['SELECT'] = 'Выберите группы, которые Вы хотите удалить, и нажмите кнопку внизу';
$lang['ru_RU']['SecurityAdmin_left.ss']['TOREORG'] = 'Для упорядочения страниц, перетаскивайте их мышкой.';
$lang['ru_RU']['SecurityAdmin_right.ss']['WELCOME1'] = 'Добро пожаловать в';
$lang['ru_RU']['SecurityAdmin_right.ss']['WELCOME2'] = 'раздел управления правами доступа. Пожалуйста, выберите группу слева.';
$lang['ru_RU']['SideReport']['EMPTYPAGES'] = 'Пустые страницы';
$lang['ru_RU']['SideReport']['LAST2WEEKS'] = 'Страницы, редактированные последние 2 недели';
$lang['ru_RU']['SideReport']['REPEMPTY'] = 'Отчет %s пуст.';
$lang['ru_RU']['SideReport']['TODO'] = 'Запланировано';
$lang['ru_RU']['StaticExporter']['BASEURL'] = 'Базовый URL';
$lang['ru_RU']['StaticExporter']['EXPORTTO'] = 'Экспорт в эту папку';
$lang['ru_RU']['StaticExporter']['FOLDEREXPORT'] = 'Папка для экспорта';
$lang['ru_RU']['StaticExporter']['NAME'] = 'Статический экспорт';
$lang['ru_RU']['StaticExporter']['ONETHATEXISTS'] = 'Пожалуйста, укажите существующую папку';
$lang['ru_RU']['TableListField_PageControls.ss']['DISPLAYING'] = 'Отображение';
$lang['ru_RU']['TableListField_PageControls.ss']['OF'] = ' ';
$lang['ru_RU']['TableListField_PageControls.ss']['TO'] = ' ';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Первый';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWLAST'] = 'Последний';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Следующий';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Предыдущий';
$lang['ru_RU']['TaskList.ss']['BY'] = '-';
$lang['ru_RU']['ThumbnailStripField']['NOFLASHFOUND'] = 'Flash-файлы не найдены';
$lang['ru_RU']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Флеш-файлов не найдено в';
$lang['ru_RU']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'Картинок не найдено в';
$lang['ru_RU']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Не найдено изображений в';
$lang['ru_RU']['ThumbnailStripField']['NOTAFOLDER'] = 'Это не папка';
$lang['ru_RU']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Выберите выше папку)';
$lang['ru_RU']['ViewArchivedEmail.ss']['CANACCESS'] = 'Вы можете посмотреть архивную версию сайта по этой ссылке:';
$lang['ru_RU']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Вы запросили просмотр содержимого нашего сайта за';
$lang['ru_RU']['WaitingOn.ss']['ATO'] = 'назначено для';
$lang['ru_RU']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Доступные виджеты';
$lang['ru_RU']['WidgetAreaEditor.ss']['INUSE'] = 'Используемые виджеты';
$lang['ru_RU']['WidgetAreaEditor.ss']['NOAVAIL'] = 'В данный момент нет доступных виджетов.';
$lang['ru_RU']['WidgetAreaEditor.ss']['TOADD'] = 'Для добавления виджетов перетащите их сюда слева.';
$lang['ru_RU']['WidgetEditor.ss']['DELETE'] = 'Удалить';

?>