<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$install = array(
		'CHARSET' => 'UTF-8',
		'InstallEasy' => 'We hebben geprobeerd om de Speedealing installatie zo eenvoudig mogelijk te maken. Volg de instructies stap voor stap.',
		'MiscellanousChecks' => 'Vereisten controleren',
		'SpeedealingWelcome' => 'Welcome to Speedealing',
		'ConfFileExists' => 'Configuratiebestand <b>%s</b> bestaat.',
		'ConfFileDoesNotExists' => 'Configuratiebestand <b>%s</b> bestaat niet!',
		'ConfFileDoesNotExistsAndCouldNotBeCreated' => 'Configuratiebestand <b>%s</b> bestaat niet en kan niet worden gemaakt!',
		'ConfFileCouldBeCreated' => 'Configuratiebestand <b>%s</b> kan worden gecreëerd.',
		'ConfFileIsNotWritable' => 'Configuratiebestand <b>%s</b> is niet schrijfbaar. Controleer de machtigingen. Wanneer u voor het eerst installeert zal u aan uw web-server schrijfrechten moet verlenen aan het configuratiebestand tijdens het installatie proces ( "chmod 666", bijvoorbeeld op Unix zoals OS).',
		'ConfFileIsWritable' => 'Configuratiebestand <b>%s</b> is schrijfbaar.',
		'ConfFileReload' => 'Reload all information from configuration file.',
		'PHPSupportSessions' => 'Dit PHP ondersteunt sessies.',
		'PHPSupportPOSTGETOk' => 'Dit PHP ondersteunt variabelen POST en GET.',
		'PHPSupportPOSTGETKo' => 'Het is mogelijk dat uw PHP configuratie geen POST en / of GET variabelen ondersteunt. Controleer uw  parameter <b>variables_order</b> in php.ini.',
		'PHPSupportGD' => 'Dit PHP ondersteuning GD grafische functies.',
		'PHPSupportUTF8' => 'Dit PHP ondersteuning UTF8 functies.',
		'PHPMemoryOK' => 'Uw PHP max. session geheugen is ingesteld op <b>%s</b>. Dit moet genoeg zijn.',
		'PHPMemoryTooLow' => 'Uw PHP max. session geheugen is ingesteld op <b>%s</b> bytes. Dit zal te laag zijn. Verander uw <b>php.ini</b> om <b>memory_limit</b> parameter in te stellen naar ten minste <b>%s</b> bytes.',
		'Recheck' => 'Klik hier voor een meer uitgebreide test',
		'ErrorPHPDoesNotSupportSessions' => 'Uw PHP installatie ondersteunt geen sessies. Deze functie is vereist om Speedealing doen te werken. Controleer uw PHP installatie.',
		'ErrorPHPDoesNotSupportGD' => 'Uw PHP installatie biedt geen ondersteuning voor grafische functie GD. Geen grafiek zal beschikbaar zijn.',
		'ErrorPHPDoesNotSupportUTF8' => 'Uw PHP installatie biedt geen ondersteuning voor UTF8 functies. Speedealing kan niet correct werken. Los dit op voordat u Speedealing installeert.',
		'ErrorDirDoesNotExists' => 'Map bestaat %s niet.',
		'ErrorGoBackAndCorrectParameters' => 'Ga terug en verbeter verkeerde parameters.',
		'ErrorWrongValueForParameter' => 'Mogelijk heeft u een verkeerde waarde ingegeven voor parameter \'%s\'.',
		'ErrorFailedToCreateDatabase' => 'Mislukt om database \'%s\' te creëren.',
		'ErrorFailedToConnectToDatabase' => 'Kan geen verbinding maken met database \'%s\'.',
		'ErrorDatabaseVersionTooLow' => 'Database version (%s) too old. Version %s or higher is required.',
		'ErrorPHPVersionTooLow' => 'PHP versie te oud. Versie %s is vereist.',
		'WarningPHPVersionTooLow' => 'PHP version too old. Version %s or more is expected. This version should allow install but is not supported.',
		'ErrorConnectedButDatabaseNotFound' => 'Succesvol verbinding gemaakt met server maar database \'%s\' niet gevonden.',
		'ErrorDatabaseAlreadyExists' => 'Database \'%s\' bestaat reeds.',
		'IfDatabaseNotExistsGoBackAndUncheckCreate' => 'Als database niet bestaat, ga terug en vink de optie "Maak database" aan.',
		'IfDatabaseExistsGoBackAndCheckCreate' => 'Als de database reeds bestaat, ga terug en verwijder het vinkje bij de optie "Maak database".',
		'WarningBrowserTooOld' => 'Too old version of browser. Upgrading your browser to a recent version of Firefox, Chrome or Opera is highly recommanded.',
		'PHPVersion' => 'PHP versie',
		'YouCanContinue' => 'U kunt doorgaan ...',
		'PleaseBePatient' => 'Even geduld aub ...',
		'License' => 'Licentie gebruiken',
		'ConfigurationFile' => 'Configuratiebestand',
		'WebPagesDirectory' => 'Directorie waarin webpagina\'s worden opgeslagen',
		'DocumentsDirectory' => 'Directorie om geüploade en gegenereerde documenten op te slaan',
		'URLRoot' => 'URL Root',
		'ForceHttps' => 'Force secure connections (https)',
		'CheckToForceHttps' => 'Check this option to force secure connections (https).<br>This requires that the web server is configured with an SSL certificate.',
		'SpeedealingDatabase' => 'Speedealing Database',
		'DatabaseChoice' => 'Database keuze',
		'DatabaseType' => 'Database type',
		'DriverType' => 'Driver type',
		'Server' => 'Server',
		'ServerAddressDescription' => 'Naam of IP-adres voor de database server, meestal "localhost" als database server wordt gehost op dezelfde server dan de web-server',
		'ServerPortDescription' => 'Database server poort. Leeg houden als onbekend.',
		'DatabaseServer' => 'Database server',
		'DatabaseName' => 'Database naam',
		'DatabasePrefix' => 'Database prefix table',
		'Login' => 'Inloggen',
		'AdminLogin' => 'Login voor administrator van de Speedealing database.',
		'Password' => 'Wachtwoord',
		'PasswordAgain' => 'Bevestig uw wachtwoord een tweede keer',
		'AdminPassword' => 'Wachtwoord voor administrator van de Speedealing database.',
		'CreateDatabase' => 'Maak database',
		'CreateUser' => 'Maak gebruiker',
		'DatabaseSuperUserAccess' => 'Database - super gebruiker toegang',
		'CheckToCreateDatabase' => 'Aankruisvakje als de database niet bestaat en aangemaakt moet worden. <br> In dit geval moet u login en wachtwoord voor superuser account onderaan deze pagina invullen.',
		'CheckToCreateUser' => 'Aankruisvakje als login niet bestaat en moet worden gemaakt. <br> In dit geval moet u login en wachtwoord voor superuser account onderaan deze pagina invullen.',
		'Experimental' => '(experimenteel, niet operationele)',
		'DatabaseRootLoginDescription' => 'Login van de gebruiker mogelijk om nieuwe databases of nieuwe gebruikers, nutteloos als uw database en uw database login al bestaat (zoals wanneer je gehost door een web hosting provider).',
		'KeepEmptyIfNoPassword' => 'Laat leeg als gebruiker geen wachtwoord heeft (dit vermijden)',
		'SaveConfigurationFile' => 'Opslaan waarden',
		'ConfigurationSaving' => 'Configuratiebestand opslaan',
		'ServerConnection' => 'Server-verbinding',
		'DatabaseConnection' => 'Database connectie',
		'DatabaseCreation' => 'Database creatie',
		'UserCreation' => 'Gebruiker creëren',
		'CreateDatabaseObjects' => 'Database-objecten creëren',
		'ReferenceDataLoading' => 'Referentiegegevens laden',
		'TablesAndPrimaryKeysCreation' => 'Maken tabellen en primaire sleutels',
		'CreateTableAndPrimaryKey' => 'Maak tabel %s',
		'CreateOtherKeysForTable' => 'Maak vreemde sleutels en indexen voor tabel %s',
		'OtherKeysCreation' => 'Maken vreemde sleutels en indexen',
		'FunctionsCreation' => 'Functies creëren',
		'AdminAccountCreation' => 'Maken administrator login',
		'PleaseTypePassword' => 'Typ een wachtwoord, lege wachtwoorden zijn niet toegestaan!',
		'PleaseTypeALogin' => 'Geef een login!',
		'PasswordsMismatch' => 'Wachtwoorden verschilt, probeer het opnieuw!',
		'SetupEnd' => 'Einde van de setup',
		'SystemIsInstalled' => 'Deze installatie is voltooid.',
		'SystemIsUpgraded' => 'Speedealing is met succes opgewaardeerd.',
		'YouNeedToPersonalizeSetup' => 'U moet Speedealing configureren om aan uw behoeften te voldoen (uiterlijk, de functies, ...). Om dit te doen, volgt u de onderstaande link:',
		'AdminLoginCreatedSuccessfuly' => 'Speedealing administrator login \'<b>%s</b>\' succesvol gemaakt.',
		'GoToSpeedealing' => 'Go to Speedealing',
		'GoToSetupArea' => 'Ga naar Speedealing (setup gebied)',
		'MigrationNotFinished' => 'Version of your database is not completely up to date, so you\'ll have to run the upgrade process again.',
		'GoToUpgradePage' => 'Go to upgrade page again',
		'Examples' => 'Voorbeelden',
		'WithNoSlashAtTheEnd' => 'Zonder de schuine streep "/" aan het eind',
		'DirectoryRecommendation' => 'Het wordt aanbevolen deze directorie te plaatsen uit de directorie van de webpagina\'s.',
		'LoginAlreadyExists' => 'Bestaat al',
		'SpeedealingAdminLogin' => 'Speedealing admin login',
		'AdminLoginAlreadyExists' => 'Speedealing administrator account \'<b>%s</b>\' bestaat reeds.',
		'WarningRemoveInstallDir' => 'Waarschuwing, nadat de installatie of upgrade is voltooid, moet u om veiligheidsredenen de <b>install<b> directorie verwijderen of hernoemen naar <b>install.lock</b> om kwaadwillige gebruik te voorkomen.',
		'ThisPHPDoesNotSupportTypeBase' => 'Dit PHP-systeem biedt geen ondersteuning voor enig interface om toegang te krijgen tot database type %s',
		'FunctionNotAvailableInThisPHP' => 'Niet beschikbaar op deze PHP',
		'MigrateScript' => 'Migreer script',
		'ChoosedMigrateScript' => 'Gekozen migratie script',
		'DataMigration' => 'Data migratie',
		'DatabaseMigration' => 'Structuur database migratie',
		'ProcessMigrateScript' => 'Script verwerking',
		'ChooseYourSetupMode' => 'Kies uw setup-modus en klik op "Start" ...',
		'FreshInstall' => 'Eerste installatie',
		'FreshInstallDesc' => 'Gebruik deze modus als dit uw eerste installatie is. Zo niet kan deze modus een eerdere onvolledige installatie repareren, maar als u een upgrade van uw huidige versie wilt, kies "Upgrade"-modus.',
		'Upgrade' => 'Upgrade',
		'UpgradeDesc' => 'Gebruik deze modus als u oude Speedealing bestanden heeft vervangen met bestanden van een nieuwere versie. Dit zal uw database en gegevens upgraden.',
		'Start' => 'Start',
		'InstallNotAllowed' => 'Setup niet toegestaan door <b>conf.php</b> machtigingen',
		'NotAvailable' => 'Niet beschikbaar',
		'YouMustCreateWithPermission' => 'U moet bestand %s aanmaken en schrijfrechten geven voor de webserver tijdens het installatieproces.',
		'CorrectProblemAndReloadPage' => 'Gelieve het probleem op te lossen en druk op F5 om de pagina te herladen.',
		'AlreadyDone' => 'Al gemigreerd',
		'DatabaseVersion' => 'Database versie',
		'ServerVersion' => 'Database server versie',
		'YouMustCreateItAndAllowServerToWrite' => 'U moet deze directorie creëren en schrijfrechten geven zodat de webserver in deze directorie kan schrijven.',
		'CharsetChoice' => 'Tekenset keuze',
		'CharacterSetClient' => 'Tekenset gebruikt voor gegenereerde HTML-webpagina\'s',
		'CharacterSetClientComment' => 'Kies tekenset voor web display. <br/> Standaard voorgesteld tekenset die van uw database.',
		'CollationConnection' => 'Teken sorteervolgorde',
		'CollationConnectionComment' => 'Choose page code that defines character\'s sorting order used by database. This parameter is also called \'collation\' by some databases.<br/> Deze parameter kan niet worden gedefiniëerd als de database al bestaat.',
		'CharacterSetDatabase' => 'Tekenset voor database',
		'CharacterSetDatabaseComment' => 'Kies tekenset gewild voor database creatie. <br/> Deze parameter kan niet worden gedefinieerd als database al bestaat.',
		'YouAskDatabaseCreationSoSpeedealingNeedToConnect' => 'You ask to create database <b>%s</b>, but for this, Speedealing need to connect to server <b>%s</b> with super user <b>%s</b> permissions.',
		'YouAskLoginCreationSoSpeedealingNeedToConnect' => 'You ask to create database login <b>%s</b>, but for this, Speedealing need to connect to server <b>%s</b> with super user <b>%s</b> permissions.',
		'BecauseConnectionFailedParametersMayBeWrong' => 'Als verbinding mislukt, host of super-gebruiker parameters moeten verkeerd zijn.',
		'OrphelinsPaymentsDetectedByMethod' => 'Orphelins betalingen gedetecteerd door methode %s',
		'RemoveItManuallyAndPressF5ToContinue' => 'Verwijder deze handmatig en druk op F5 om verder te gaan.',
		'KeepDefaultValuesWamp' => 'U gebruikt de wizard voor het instellen van DoliWamp, dus waarden die hier zijn voorgesteld zijn al geoptimaliseerd. Verander ze alleen als je weet wat je doet.',
		'KeepDefaultValuesDeb' => 'You use the Speedealing setup wizard from a Linux package (Ubuntu, Debian, Fedora...), so values proposed here are already optimized. Only the password of the database owner to create must be completed. Change other parameters only if you know what you do.',
		'KeepDefaultValuesMamp' => 'U gebruikt de wizard voor het instellen van DoliMamp, dus waarden die hier zijn voorgesteld zijn al geoptimaliseerd. Verander ze alleen als je weet wat je doet.',
		'KeepDefaultValuesProxmox' => 'You use the Speedealing setup wizard from a Proxmox virtual appliance, so values proposed here are already optimized. Change them only if you know what you do.',
		'FieldRenamed' => 'Veld naam',
		'IfLoginDoesNotExistsCheckCreateUser' => 'Als login nog niet bestaat, u moet de optie "Maak gebruiker" controleren',
		'ErrorConnection' => 'Server "<b>%s</b>", database naam "<b>%s</b>", login "<b>%s</b>", of database wachtwoord kan verkeerd zijn of PHP client versie kan te oud zijn vergeleken met de database versie.',
		'InstallChoiceRecommanded' => 'Recommended choice to install version <b>%s</b> from your current version <b>%s</b>',
		'InstallChoiceSuggested' => '<b>Install choice suggested by installer</b>.',
		'MigrateIsDoneStepByStep' => 'The targeted version (%s) has a gap of several versions, so install wizard will come back to suggest next migration once this one will be finished.',
		'CheckThatDatabasenameIsCorrect' => 'Check that database name "<b>%s</b>" is correct.',
		'IfAlreadyExistsCheckOption' => 'If this name is correct and that database does not exist yet, you must check option "Create database".',
		'OpenBaseDir' => 'PHP openbasedir parameter',
		'YouAskToCreateDatabaseSoRootRequired' => 'You checked the box "Create database". For this, you need to provide login/password of superuser (bottom of form).',
		'YouAskToCreateDatabaseUserSoRootRequired' => 'You checked the box "Create database owner". For this, you need to provide login/password of superuser (bottom of form).',
		'NextStepMightLastALongTime' => 'Current step may last several minutes. Please wait until the next screen is shown completely before continuing.',
		'MigrationCustomerOrderShipping' => 'Migrate shipping for customer orders storage',
		'MigrationShippingDelivery' => 'Upgrade storage of shipping',
		'MigrationShippingDelivery2' => 'Upgrade storage of shipping 2',
		'MigrationFinished' => 'Migration finished',
		'LastStepDesc' => '<strong>Last step</strong>: Define here login and password you plan to use to connect to software. Do not loose this as it is the account to administer all others.',
		'ActivateModule' => 'Activate module %s',
		'ShowEditTechnicalParameters' => 'Click here to show/edit advanced parameters (expert mode)',
		'ServerPortCouchdbDescription' => 'Port du serveur. Défaut 5984.',
		'ServerAddressCouchdbDescription' => 'Nom FQDN du serveur de base de données, \'localhost.localdomain\' quand le serveur est installé sur la même machine que le serveur web',
		'DatabaseCouchdbUserDescription' => 'Login du super administrateur ayant tous les droits sur le serveur CouchDB ou l\'administrateur propriétaire de la base si la base et son compte d\'accès existent déjà (comme lorsque vous êtes chez un hébergeur).<br><br><div class="alert-box info">Cet utilisateur/mot de passe sera l\'administrateur pour se connecter à Speedealing.</div>',
		'CheckToCreateCouchdbDatabase' => 'Cochez cette option si la base de données n\'existe pas et doit être créée.',
		'CreateAdminUser' => 'Créer le super administrateur (Première installation de couchDB)',
		'MemcachedDescription' => 'Activer Memcached necessite l\'installation d\'un serveur Memcached et des lib php-memcached ou php-memcache. Il peut être activer après l\'installation.',
		'ServerAddressMemcachedDesc' => 'Nom ou adresse ip du serveur memcached, généralement \'localhost\' quand le serveur est installé sur la même machine que le serveur web',
		'ServerPortMemcachedDesc' => 'Port du serveur memcached. Défaut : 11211',
		'EnabledMemcached' => 'Activer Memcached',
		'DatabaseNoSQL' => 'Base de données CouchDB',
		'DatabaseSQL' => 'Base de données SQL',
		'FailedToCreateAdminLogin' => 'Echec de la création du compte administrateur Speedealing.',
		'LinkedElementsInvalidDeleted' => '<b>%s</b> liaisons invalides ont été supprimées',
		'NothingToDelete' => 'Aucune liaison invalide trouvée',
		'SourceType' => 'Source',
		'TargetType' => 'Cible',
		'MigrationContractsEmptyCreationDatesUpdateSuccess' => 'Ok pour date création',
		//////////////////
		// upgrade
		//////////////////
		'MigrationFixData' => 'Fix for denormalized data',
		'MigrationOrder' => 'Data migratie voor klanten bestellingen',
		'MigrationSupplierOrder' => 'Data migratie voor leveranciers bestellingen',
		'MigrationProposal' => 'Data migratie voor commerciële voorstellen',
		'MigrationInvoice' => 'Data migratie voor klanten facturen',
		'MigrationContract' => 'Data migratie voor contracten',
		'MigrationSuccessfullUpdate' => 'Upgrade succesvol',
		'MigrationUpdateFailed' => 'Upgrade proces mislukt',
		'MigrationRelationshipTables' => 'Data migration for relationship tables (%s)',
		'MigrationPaymentsUpdate' => 'Correctie betaalgegevens',
		'MigrationPaymentsNumberToUpdate' => '%s betaling(en) up te daten',
		'MigrationProcessPaymentUpdate' => 'Update betaling(en) %s',
		'MigrationPaymentsNothingToUpdate' => 'Geen dingen meer te doen',
		'MigrationPaymentsNothingUpdatable' => 'Geen betalingen dat kunnen gecorrigeerd worden',
		'MigrationContractsUpdate' => 'Contract gegevens correctie',
		'MigrationContractsNumberToUpdate' => '%s contracten(en) up te daten',
		'MigrationContractsLineCreation' => 'Maak contractlijn voor contract ref %s',
		'MigrationContractsNothingToUpdate' => 'Geen dingen meer te doen',
		'MigrationContractsFieldDontExist' => 'Veld fk_facture bestaat niet meer. Niets te doen.',
		'MigrationContractsEmptyDatesUpdate' => 'Contract lege datum correctie',
		'MigrationContractsEmptyDatesUpdateSuccess' => 'Contract lege datum correctie succesvol gedaan',
		'MigrationContractsEmptyDatesNothingToUpdate' => 'Geen contract lege datum te corrigeren',
		'MigrationContractsEmptyCreationDatesNothingToUpdate' => 'Geen contract aanmaakdatum te corrigeren',
		'MigrationContractsInvalidDatesUpdate' => 'Bad value date contract correction',
		'MigrationContractsInvalidDateFix' => 'Correct contract %s (Contract date=%s, Starting service date min=%s)',
		'MigrationContractsInvalidDatesNumber' => '%s contracten gemodifieerd',
		'MigrationContractsInvalidDatesNothingToUpdate' => 'Geen datum met slechte waarde te corrigeren',
		'MigrationContractsIncoherentCreationDateUpdate' => 'Bad value contract creation date correction',
		'MigrationContractsIncoherentCreationDateUpdateSuccess' => 'Bad value contract creation date correction done succesfuly',
		'MigrationContractsIncoherentCreationDateNothingToUpdate' => 'No bad value for contract creation date to correct',
		'MigrationReopeningContracts' => 'Open contract gesloten door fout',
		'MigrationReopenThisContract' => 'Heropenen contract %s',
		'MigrationReopenedContractsNumber' => '%s contracten gemodifieerd',
		'MigrationReopeningContractsNothingToUpdate' => 'Geen gesloten contract te openen',
		'MigrationBankTransfertsUpdate' => 'Update links tussen banktransactie en een banktransfer',
		'MigrationBankTransfertsNothingToUpdate' => 'Alle links zijn up-to-date',
		'MigrationShipmentOrderMatching' => 'Verzendingen ontvangst update',
		'MigrationDeliveryOrderMatching' => 'Leveringsbon update',
		'MigrationDeliveryDetail' => 'Levering update',
		'MigrationStockDetail' => 'Update voorraad van producten',
		'MigrationMenusDetail' => 'Update dynamic menus tables',
		'MigrationDeliveryAddress' => 'Update delivery address in shipments',
		'MigrationProjectTaskActors' => 'Data migration for llx_projet_task_actors table',
		'MigrationProjectUserResp' => 'Data migration field fk_user_resp of llx_projet to llx_element_contact',
		'MigrationProjectTaskTime' => 'Update time spent in seconds',
		'MigrationActioncommElement' => 'Update data on actions',
		'MigrationPaymentMode' => 'Data migration for payment mode',
		'MigrationCategorieAssociation' => 'Migration of categories'
);
?>