<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Ugyldig felttype brukt :type.',
    'options_method_not_exists' => 'Modellklassen :model må definere en metode :method() som returnerer vilkår for formfeltet \':field\'.',
  ],
  'widget' => [
    'not_registered' => 'En widget med klassenavnet \':name\' har ikke blitt registrert',
    'not_bound' => 'En widget med klassenavnet \':name\' er ikke bundet til kontrolleren',
  ],
  'page' => [
    'untitled' => 'Uten navn',
    'access_denied' => [
      'label' => 'Ingen tilgang',
      'help' => 'Du har ikke nødvendig tilgang til å se denne siden.',
      'cms_link' => 'Tilbake til backend',
    ],
    'no_database' => [
      'label' => 'Database mangler',
      'help' => 'En database kreves for å koble til backend. Sjekk at databasetilgang er konfigurert og migrert før du prøver igjen.',
      'cms_link' => 'Tilbake til hovedsiden',
    ],
  ],
  'partial' => [
    'not_found_name' => 'En partial ved navn \':name\' ble ikke funnet.',
  ],
  'account' => [
    'sign_out' => 'Logg ut',
    'login_placeholder' => 'brukernavn',
    'password_placeholder' => 'passord',
    'enter_email' => 'Din e-postadresse',
    'email_placeholder' => 'e-postadresse',
    'apply' => 'Fortsett',
    'cancel' => 'Avbryt',
    'delete' => 'Slett',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Dashboard',
    'widget_inspector_title' => 'Widget-konfigurasjon',
    'widget_inspector_description' => 'Konfigurer widgeten',
    'widget_columns_label' => 'Bredde :columns',
    'widget_columns_description' => 'Bredden på widgeten. Tall mellom 1 og 10.',
    'widget_columns_error' => 'Vennligst spesifiser bredden på weidgeten som et tall mellom 1 og 10.',
    'columns' => '{1} kolonne|[2,Inf] kolonner',
    'widget_new_row_label' => 'Tving ny rad',
    'widget_new_row_description' => 'Plasserer widgeten i en ny rad.',
    'widget_title_label' => 'Widget-tittel',
    'widget_title_error' => 'Tittel er obligatorisk.',
    'reset_layout_success' => 'Layout er tilbakestilt',
    'make_default_success' => 'Nåværende layout er nå standard',
    'status' => [
      'widget_title_default' => 'System status',
      'update_available' => '{0} oppdateringer tilgjengelig!|{1} oppdatering tilgjengelig!|[2,Inf] oppdateringer tilgjengelig!',
      'updates_pending' => 'Ventende oppdateringer',
      'updates_nil' => 'Programvaren er oppdatert',
      'updates_link' => 'Oppdater',
      'warnings_pending' => 'Noen snubletråder du må se på',
      'warnings_nil' => 'Ingen advarsler å vise',
      'warnings_link' => 'Vis',
      'core_build' => 'System build',
      'event_log' => 'Event logg',
      'request_log' => 'Request logg',
      'app_birthday' => 'Online siden',
    ],
    'welcome' => [
      'widget_title_default' => 'Velkommen',
      'welcome_back_name' => 'Velkommen til :app, :name.',
      'welcome_to_name' => 'Velkommen til :app, :name.',
      'first_sign_in' => 'Dette er første gangen du har logget inn.',
      'last_sign_in' => 'Forrige innlogging var',
      'view_access_logs' => 'Vis adgangslogg',
      'nice_message' => 'Ha en fantastisk dag!!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'menu_label' => 'Administratorer',
    'menu_description' => 'Administrer backend-administratorer, grupper og tilganger.',
    'list_title' => 'Håndter administratorer',
    'new' => 'Ny administrator',
    'first_name' => 'Fornavn',
    'last_name' => 'Etternavn',
    'full_name' => 'Fullt navn',
    'email' => 'E-postadresse',
    'groups' => 'Grupper',
    'groups_comment' => 'Spesifiser hvilke grupper personen tilhører.',
    'avatar' => 'Avatar',
    'password' => 'Passord',
    'password_confirmation' => 'Bekreft passord',
    'permissions' => 'Tilganger',
    'account' => 'konto',
    'superuser' => 'Superbruker',
    'superuser_comment' => 'Kryss av denne boksen for å gi personen tilgang til alle områder.',
    'send_invite' => 'Send invitasjon via e-post',
    'send_invite_comment' => 'Kryss av denne boksen for å sende personen en invitasjon via e-post',
    'delete_confirm' => 'Vil du virkelig slette denne administratoren?',
    'return' => 'Tilbake til administratoroversikten',
    'allow' => 'Tillat',
    'inherit' => 'Arv',
    'deny' => 'Nekt',
    'activated' => 'Aktivert',
    'last_login' => 'Forrige innlogging',
    'created_at' => 'Opprettet',
    'updated_at' => 'Oppdatert',
    'group' => [
      'name' => 'Gruppe',
      'name_comment' => 'Navnet vises i gruppelisten under valget for å opprette og redigere administratorer.',
      'name_field' => 'Navn',
      'description_field' => 'Beskrivelse',
      'is_new_user_default_field_label' => 'Standardgruppe',
      'is_new_user_default_field_comment' => 'Legg nye administratorer til denne gruppen som standard',
      'code_field' => 'Kode',
      'code_comment' => 'Fyll inn en unik kode for å bruke API-en.',
      'menu_label' => 'Grupper',
      'list_title' => 'Administrere grupper',
      'new' => 'Ny gruppe',
      'delete_confirm' => 'Vil du virkelig slette denne administratorgruppen?',
      'return' => 'Tilbake til gruppeoversikten',
      'users_count' => 'Antall brukere',
    ],
    'preferences' => [
      'not_authenticated' => 'Det er ingen autentiserte brukere å laste eller lagre innstillinger for.',
    ],
  ],
  'list' => [
    'default_title' => 'Liste',
    'search_prompt' => 'Søk...',
    'no_records' => 'Det er ingen treff i denne visningen.',
    'missing_model' => 'Listeegenskapen brukt i :class mangler en modelldefinisjon.',
    'missing_column' => 'Det er ingen kolonnedefinisjoner for :columns.',
    'missing_columns' => 'Liste brukt i :class har ingen definerte kolonner.',
    'missing_definition' => 'Listeegenskapen inneholder ingen kolonner for \':field\'.',
    'missing_parent_definition' => 'Listeegenskapen mangler definisjon for \':definition\'.',
    'behavior_not_ready' => 'Listeegenskapen har ikke blir initialisert, sjekk at du har kalt makeList() i kontrolleren.',
    'invalid_column_datetime' => 'Kolonneverdien \':column\' er ikke et DateTime-objekt, mangler du en $date-referanse i modellen?',
    'pagination' => 'Viser rader: :from-:to av :total',
    'prev_page' => 'Forrige side',
    'next_page' => 'Neste side',
    'refresh' => 'Oppdater',
    'updating' => 'Oppdaterer...',
    'loading' => 'Laster...',
    'setup_title' => 'Listeinnstillinger',
    'setup_help' => 'Kryss av sjekkboksene for å velge hvilke kolonner du vil ha i listen. Du kan sortere kolonnene ved å dra sjekkboksene opp eller ned.',
    'records_per_page' => 'Rader per side',
    'records_per_page_help' => 'Velg antall rader som skal vises på hver side. Vær oppmerksom på at et høyt antall kan redusere ytelsen på siden.',
    'check' => 'Velg',
    'delete_selected' => 'Slett valgte',
    'delete_selected_empty' => 'Det er ingen valgte rader å slette.',
    'delete_selected_confirm' => 'Vil du slette valgte rader?',
    'delete_selected_success' => 'Rader har blitt slettet.',
    'column_switch_true' => 'Ja',
    'column_switch_false' => 'Nei',
  ],
  'fileupload' => [
    'attachment' => 'Vedlegg',
    'help' => 'Legg til tittel og beskrivelse for dette vedlegget.',
    'title_label' => 'Tittel',
    'description_label' => 'Beskrivelse',
    'default_prompt' => 'Klikk %s eller dra filen hit for å laste opp',
    'attachment_url' => 'URL til vedlegg',
    'upload_file' => 'Last opp fil',
    'upload_error' => 'Feil ved opplasting',
    'remove_confirm' => 'Er du sikker?',
    'remove_file' => 'Fjern filen',
  ],
  'form' => [
    'create_title' => 'Ny :name',
    'update_title' => 'Endre :name',
    'preview_title' => 'Forhåndsvis :name',
    'create_success' => ':name har blitt opprettet',
    'update_success' => ':name har blitt endret',
    'delete_success' => ':name har blitt slettet',
    'reset_success' => 'Tilbakestilling fullført',
    'missing_id' => 'Record ID for skjemaet har ikke blitt spesifisert.',
    'missing_model' => 'Skjemaegenskapen brukt i :class mangler en modell.',
    'missing_definition' => 'Skjemaegenskapen mangler et felt for \':field\'.',
    'not_found' => 'Record ID :id ble ikke funnet.',
    'action_confirm' => 'Er du sikker?',
    'create' => 'Opprett',
    'create_and_close' => 'Opprett og lukk',
    'creating' => 'Oppretter...',
    'creating_name' => 'Oppretter :name...',
    'save' => 'Lagre',
    'save_and_close' => 'Lagre og lukk',
    'saving' => 'Lagrer...',
    'saving_name' => 'Lagrer :name...',
    'delete' => 'Slett',
    'deleting' => 'Sletter...',
    'confirm_delete' => 'Slett oppføring?',
    'confirm_delete_multiple' => 'Slett valgte oppføringer?',
    'deleting_name' => 'Sletter :name...',
    'reset_default' => 'Tilbakestill',
    'resetting' => 'Tilbakestiller',
    'resetting_name' => 'Tilbakestiller :name',
    'undefined_tab' => 'Div.',
    'field_off' => 'Av',
    'field_on' => 'På',
    'add' => 'Legg til',
    'apply' => 'Fortsett',
    'cancel' => 'Avbryt',
    'close' => 'Lukk',
    'confirm' => 'Bekreft',
    'reload' => 'Last på nytt',
    'complete' => 'Fullført',
    'ok' => 'OK',
    'or' => 'eller',
    'confirm_tab_close' => 'Vil du virkelig lukke fanen? Endringer som ikke er lagret vil gå tapt.',
    'behavior_not_ready' => 'Skjemaegenskap har ikke blitt initialisert, sjekk at du har kalt initForm() i kontrolleren.',
    'preview_no_files_message' => 'Filer er ikke opplastet',
    'preview_no_record_message' => 'Det er ingen valgte oppføringer.',
    'select' => 'Velg',
    'select_all' => 'Velg alle',
    'select_none' => 'Velg ingen',
    'insert_row' => 'Sett inn rad',
    'insert_row_below' => 'Sett inn rad under',
    'delete_row' => 'Slett rad',
    'concurrency_file_changed_title' => 'Filen er endret',
    'concurrency_file_changed_description' => 'Filen du endrer på har blitt endret på disken av en annen bruker. Du kan enten oppdatere filen og tape endret data, eller overskrive filen på disken.',
    'return_to_list' => 'Tilbake til listen',
  ],
  'recordfinder' => [
    'find_record' => 'Finn oppføring',
  ],
  'relation' => [
    'missing_config' => 'Relasjonen mangler en konfigurasjon for \':config\'.',
    'missing_definition' => 'Relasjonen mangler en definisjon for \':field\'.',
    'missing_model' => 'Relasjonen brukt i :class har ingen definert modell.',
    'invalid_action_single' => 'Denne handlingen kan ikke brukes på en enkel relasjon.',
    'invalid_action_multi' => 'Denne relasjonen kan ikke brukes på fler-relasjoner.',
    'help' => 'Klikk på et element for å legge til',
    'related_data' => 'Relatert :name data',
    'add' => 'Legg til',
    'add_selected' => 'Legg til valgte',
    'add_a_new' => 'Legg til ny :name',
    'link_selected' => 'Link valgte',
    'link_a_new' => 'Link en ny :name',
    'cancel' => 'Avbryt',
    'close' => 'Lukk',
    'add_name' => 'Legg til :name',
    'create' => 'Opprett',
    'create_name' => 'Opprett :name',
    'update' => 'Oppdater',
    'update_name' => 'Oppdater :name',
    'preview' => 'Forhåndsvis',
    'preview_name' => 'Forhåndsvis :name',
    'remove' => 'Fjern',
    'remove_name' => 'Fjern :name',
    'delete' => 'Slett',
    'delete_name' => 'Slett :name',
    'delete_confirm' => 'Er du sikker?',
    'link' => 'Link',
    'link_name' => 'Link :name',
    'unlink' => 'Fjern link',
    'unlink_name' => 'Fjern link :name',
    'unlink_confirm' => 'Er du sikker?',
  ],
  'reorder' => [
    'default_title' => 'Sortere oppføringer',
    'no_records' => 'Det er ingen tilgjengelige oppføringer å sortere.',
  ],
  'model' => [
    'name' => 'Modell',
    'not_found' => 'Modellen \':class\' med ID-en :id ble ikke funnet',
    'missing_id' => 'Det er ingen ID spesifisert for å se opp modellen.',
    'missing_relation' => 'Modellen \':class\' mangler en definisjon for \':relation\'.',
    'missing_method' => 'Modellen \':class\' mangler metoden \':method\'.',
    'invalid_class' => 'Modellen :model som brukes i :class er ugyldig, den må arve \\Model-klassen.',
    'mass_assignment_failed' => 'Mass assignment feilet for modell-attributten \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Tips for systemkonfigurasjon',
    'tips_description' => 'Det er problemer du må være oppmerksom på for å konfigurere systemet riktig.',
    'permissions' => 'Mappen :name eller dens undermapper kan ikke skrives på av PHP. Vennligst sjekk skrivetilganger på serveren.',
    'extension' => 'PHP-extensionen :name er ikke installert..',
  ],
  'editor' => [
    'menu_label' => 'Teksteditor-innstillinger',
    'menu_description' => 'Endre teksteditor-innstillingene dine, for eksemplem tekststørrelse og fargevalg.',
  ],
  'tooltips' => [
    'preview_website' => 'Forhåndsvis nettsiden',
  ],
  'mysettings' => [
    'menu_label' => 'Mine innstillinger',
    'menu_description' => 'Innstillinger relatert til din administratorkonto',
  ],
  'myaccount' => [
    'menu_label' => 'Min konto',
    'menu_description' => 'Oppdater dine kontodetaljer, som navn, e-postadresse og passord.',
    'menu_keywords' => 'sikkerhetsinnlogging',
  ],
  'branding' => [
    'menu_label' => 'Tilpass backend',
    'menu_description' => 'Tilpass administratorområdet, for eksempel navn, farger og logo.',
    'accent_color' => 'Accentfarge',
  ],
  'backend_preferences' => [
    'menu_label' => 'Backend-innstillinger',
    'menu_description' => 'Administrer kontoinnstillinger som for eksempel språk.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'alle',
    'options_method_not_exists' => 'Modellen :model må definere en metode :method() som sender tilbake regler for  \':filter\' filteret.',
    'date_all' => 'hele perioden',
  ],
  'import_export' => [
    'upload_csv_file' => '1. Last opp en CSV-fil',
    'import_file' => 'Importere fil',
    'first_row_contains_titles' => 'Første raden inneholder kolonnetitler',
    'first_row_contains_titles_desc' => 'La denne være valgt hvis den første raden i CSV-filen inneholder titler på kolonnene.',
    'match_columns' => '2. Koble kolonner til felter i databasen',
    'file_columns' => 'Filkolonner',
    'database_fields' => 'Databasefelter',
    'set_import_options' => '3. Valg for import',
    'export_output_format' => '1. Eksport-format',
    'file_format' => 'Filformat',
    'standard_format' => 'Standard format',
    'custom_format' => 'Tilpasset format',
    'delimiter_char' => 'Deletegn',
    'enclosure_char' => 'Innhegningstegn',
    'escape_char' => 'Escape-tegn',
    'select_columns' => '2. Velg kolonner å eksportere',
    'columns' => 'Kolonner',
    'set_export_options' => '3. Valg for eksport',
    'show_ignored_columns' => 'Vis ignorerte kolonner',
    'auto_match_columns' => 'Auto-match kolonner',
    'created' => 'Opprettet',
    'updated' => 'Oppdatert',
    'skipped' => 'Ignorert',
    'warnings' => 'Advarsler',
    'errors' => 'Feil',
    'skipped_rows' => 'Ignorerte rader',
    'import_progress' => 'Status for import',
    'processing' => 'Behandler',
    'import_error' => 'Feil under import',
    'upload_valid_csv' => 'Vennligst last opp en gyldig CSV-fil.',
    'drop_column_here' => 'Dropp kolonne her...',
    'ignore_this_column' => 'Ignorer denne kolonnen',
    'processing_successful_line1' => 'Eksport fullført!',
    'processing_successful_line2' => 'Nettleseren vil nå gå til nedlasting av fil.',
    'export_progress' => 'Status for eksport',
    'export_error' => 'Feil under eksport',
    'file_not_found_error' => 'Filen ikke funnet',
    'empty_error' => 'Ingen data å eksportere',
    'empty_import_columns_error' => 'Vennligst velg kolonner å importere.',
    'match_some_column_error' => 'Vennligst match kolonner først.',
    'required_match_column_error' => 'Vennligst finn match for påkrevet felt :label.',
    'empty_export_columns_error' => 'Vennligst velg kolonner å eksportere.',
    'behavior_missing_uselist_error' => 'Du må implemnetere controlleren med ListController-egenskapen "useList" aktivert for eksport.',
    'missing_model_class_error' => 'Vennligst spesifisér modelClass for :type',
    'missing_column_id_error' => 'Mangler kolonne',
    'unknown_column_error' => 'Ukjent kolonne',
    'encoding_not_supported_error' => 'Formatet i filen er ukjent. Vennligst velg tilpasset format med riktig enkodingvalg for å importere filen.',
    'encoding_format' => 'Filenkoding',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Last opp og behandle media - bilder, video, lydfiler, dokumenter',
  ],
  'mediafinder' => [
    'default_prompt' => 'Klikk på %s knappen for å hente media',
  ],
  'media' => [
    'menu_label' => 'Media',
    'upload' => 'Last opp',
    'move' => 'Flytt',
    'delete' => 'Slett',
    'add_folder' => 'Ny mappe',
    'search' => 'Søk',
    'display' => 'Vis',
    'filter_everything' => 'Alle filer',
    'filter_images' => 'Bilder',
    'filter_video' => 'Video',
    'filter_audio' => 'Lyd',
    'filter_documents' => 'Dokumenter',
    'library' => 'Bibliotek',
    'size' => 'Størrelse',
    'title' => 'Tittel',
    'last_modified' => 'Sist endret',
    'public_url' => 'URL',
    'click_here' => 'Klikk her',
    'thumbnail_error' => 'Kunne ikke lage thumbnail.',
    'return_to_parent' => 'Gå til forrige mappe',
    'return_to_parent_label' => 'Gå opp ..',
    'nothing_selected' => 'Ingenting er valgt.',
    'multiple_selected' => 'Flere filer er valgt.',
    'uploading_file_num' => 'Laster opp :number fil(er)...',
    'uploading_complete' => 'Opplasting fullført',
    'uploading_error' => 'Opplasting feilet',
    'type_blocked' => 'Filtypen er blokkert av sikkerhetsgrunner.',
    'order_by' => 'Sorter etter',
    'folder' => 'Mappe',
    'no_files_found' => 'Ingen filer ble funnet.',
    'delete_empty' => 'Ingen filer er valgt.',
    'delete_confirm' => 'Vil du virkelig slette valgte fil(er)?',
    'error_renaming_file' => 'Kunne ikke gi filen nytt navn.',
    'new_folder_title' => 'Ny mappe',
    'folder_name' => 'Mappenavn',
    'error_creating_folder' => 'Kunne ikke opprette ny mappe',
    'folder_or_file_exist' => 'En fil eller mappe med det navnet eksisterer allerede.',
    'move_empty' => 'Vennligst velg filer å flytte.',
    'move_popup_title' => 'Flytt filer eller mapper',
    'move_destination' => 'Målmappe',
    'please_select_move_dest' => 'Vennligst velg en målmappe.',
    'move_dest_src_match' => 'Please select another destination folder.',
    'empty_library' => 'Mediabiblioteket er tomt. Last opp filer eller opprett mapper for å komme i gang.',
    'insert' => 'Insert',
    'crop_and_insert' => 'Crop & Insert',
    'select_single_image' => 'Vennligst velg ett enkelt bilde.',
    'selection_not_image' => 'Valgte fil er ikke et bilde.',
    'restore' => 'Angre endringer',
    'resize' => 'Endre størrelse...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Fast forhold',
    'selection_mode_fixed_size' => 'Fast størrelse',
    'height' => 'Høyde',
    'width' => 'Bredde',
    'selection_mode' => 'Valgmodus',
    'resize_image' => 'Endre bildestørrelse',
    'image_size' => 'Bildestørrelse:',
    'selected_size' => 'Valgt:',
  ],
];
