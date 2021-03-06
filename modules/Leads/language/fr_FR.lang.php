<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * Contributor(s): www.synolia.com - sugar@synolia.com
 * You can contact SYNOLIA at 51 avenue Jean Jaures 69007 - LYON FRANCE
 * or at email address contact@synolia.com.
 ********************************************************************************/



$mod_strings = array (
	'ERR_DELETE_RECORD'										=> 'Un numéro d&#39;enregistrement doit être renseigné pour toute suppression.',
	'LBL_ACCOUNT_DESCRIPTION'								=> 'Description compte',
	'LBL_ACCOUNT_ID'										=> 'Compte (ID)',
	'LBL_ACCOUNT_NAME'										=> 'Nom du compte:',
  'LBL_ACTIVITIES_COPY' => 'Copier les activités vers',
  'LBL_ACTIVITIES_COPY_HELP' => 'Sélectionner les enregistrements vers lesquels les activités du lead seront copiées lors de la conversion. Des activités de type tâches, appels, réunions et notes seront créés pour chacun des enregistrements sélectionnés. Les emails seront rattachés aux enregistrements sélectionnés.',
  'LBL_ACTIVITIES_MOVE' => 'Déplacer les activités vers',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Sélectionner les enregistrements vers lesquels les activités du lead seront déplacées lors de la conversion. Les activités de type tâches, appels, réunions, notes et emails seront déplacer vers ces enregistrement sélectionnés.',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'							=> 'Activités à réaliser',
	'LBL_ADDRESS_INFORMATION'								=> 'Adresse',
  'LBL_ADD_BUSINESSCARD' => 'Saisir carte de visite',
  'LBL_ALTERNATE_ADDRESS' => 'Adresse secondaire:',
  'LBL_ALT_ADDRESS' => 'Autre adresse:',
	'LBL_ALT_ADDRESS_CITY'									=> 'Adresse secondaire - Ville',
	'LBL_ALT_ADDRESS_COUNTRY'								=> 'Adresse secondaire - Pays',
	'LBL_ALT_ADDRESS_POSTALCODE'							=> 'Adresse secondaire - Code Postal',
	'LBL_ALT_ADDRESS_STATE'									=> 'Adresse secondaire - Région',
  'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1',
	'LBL_ALT_ADDRESS_STREET_2'								=> 'Adresse secondaire - Rue 2',
	'LBL_ALT_ADDRESS_STREET_3'								=> 'Adresse secondaire - Rue 3',
	'LBL_ANY_ADDRESS'										=> 'Adresse quelconque:',
	'LBL_ANY_EMAIL'											=> 'Email quelconque:',
	'LBL_ANY_PHONE'											=> 'Téléphone quelconque:',
	'LBL_ASSIGNED_TO_ID'									=> 'Utilisateur assigné :',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_ASSISTANT' => 'Assistant',
  'LBL_ASSISTANT_PHONE' => 'Téléphone assistant',
	'LBL_BACKTOLEADS'										=> 'Retour aux leads',
  'LBL_BIRTHDATE' => 'Anniversaire :',
	'LBL_BUSINESSCARD'										=> 'Convertir lead',
  'LBL_CAMPAIGN' => 'Campagne:',
  'LBL_CAMPAIGNS' => 'Campagnes',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagnes',
  'LBL_CAMPAIGN_ID' => 'Id Campagne',
  'LBL_CAMPAIGN_LEAD' => 'Campagne(s)',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
	'LBL_CITY'												=> 'Ville:',
  'LBL_CLICK_TO_RETURN' => 'Revenir au portail',
  'LBL_CONTACT' => 'Lead:',
	'LBL_CONTACT_ID'										=> 'Contact (ID)',
	'LBL_CONTACT_INFORMATION'								=> 'Information sur le lead',
	'LBL_CONTACT_NAME'										=> 'Nom du lead:',
	'LBL_CONTACT_OPP_FORM_TITLE'							=> 'Lead-Affaire:',
	'LBL_CONTACT_ROLE'										=> 'Rôle:',
  'LBL_CONVERTED' => 'Converti',
	'LBL_CONVERTED_ACCOUNT'									=> 'Compte converti:',
	'LBL_CONVERTED_CONTACT'									=> 'Contact converti:',
	'LBL_CONVERTED_OPP'										=> 'Affaire convertie:',
	'LBL_CONVERTLEAD'										=> 'Convertir Lead',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_CONVERTLEAD_TITLE' => 'Convertir lead [Alt+V]',
	'LBL_CONVERTLEAD_WARNING'								=> 'Attention : Le statut du lead que vous souhaitez convertir est "converti". Un contact et/ou un compte ont sans doute déja été créés à partir des informations de ce lead. Si vous souhaitez tout de même convertir ce lead, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page précédente.',
	'LBL_CONVERTLEAD_WARNING_INTO_RECORD'					=> ' Nous pensons que ce Lead a été converti vers ce contact : ',
  'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
  'LBL_CONVERT_COPY' => 'Copier',
  'LBL_CONVERT_DELETE' => 'Supprimer',
  'LBL_CONVERT_EDIT' => 'Éditer',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Edition de la mise en page de conversion',
  'LBL_CONVERT_MODULE_NAME' => 'Module',
  'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Module',
  'LBL_CONVERT_REQUIRED' => 'Requis',
  'LBL_CONVERT_SELECT' => 'Sélection',
  'LBL_COPY_TIP' => 'Si la case est cochée, les champs du lead seront copiés dans les champs ayant le même nom dans les enregistrements des modules de destination.',
	'LBL_COUNTRY'											=> 'Pays:',
  'LBL_CREATE' => 'Création',
  'LBL_CREATED' => 'Créé par',
	'LBL_CREATED_ACCOUNT'									=> 'Nouveau Compte créé',
	'LBL_CREATED_CALL'										=> 'Nouvel Appel créé',
	'LBL_CREATED_CONTACT'									=> 'Nouveau Contact créé',
  'LBL_CREATED_ID' => 'Créé par (ID)',
	'LBL_CREATED_MEETING'									=> 'Nouvelle Réunion créée',
  'LBL_CREATED_NEW' => 'Création',
	'LBL_CREATED_OPPORTUNITY'								=> 'Nouvelle Affaire créée',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
  'LBL_DELETE_TIP' => 'Suppression de ce module lors de la conversion de lead.',
	'LBL_DEPARTMENT'										=> 'Service:',
  'LBL_DESCRIPTION' => 'Description:',
	'LBL_DESCRIPTION_INFORMATION'							=> 'Description',
	'LBL_DO_NOT_CALL'										=> 'Ne pas appeler:',
	'LBL_DUPLICATE'											=> 'Leads similaires',
  'LBL_EDITLAYOUT' => 'Editer la mise en page',
  'LBL_EDIT_INLINE' => 'Editer',
  'LBL_EDIT_TIP' => 'Modification de la conversion de lead pour ce module.',
	'LBL_EMAIL_ADDRESS'										=> 'Email:',
  'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
  'LBL_ENTERDATE' => 'Préciser la date',
	'LBL_EXISTING_ACCOUNT'									=> 'Compte existant utilisé',
	'LBL_EXISTING_CONTACT'									=> 'Contact existant utilisé',
	'LBL_EXISTING_OPPORTUNITY'								=> 'Affaire existante utilisée',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
  'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
  'LBL_EXPORT_EMAIL2' => 'Autre email',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
  'LBL_EXPORT_PHONE_MOBILE' => 'Portable',
  'LBL_FAX_PHONE' => 'Fax:',
	'LBL_FIRST_NAME'										=> 'Prénom:',
	'LBL_FULL_NAME'											=> 'Nom Complet:',
	'LBL_HISTORY_SUBPANEL_TITLE'							=> 'Historique et activités terminées',
  'LBL_HOME_PHONE' => 'Ligne directe:',
	'LBL_IMPORT_VCARD'										=> 'Importer vCard',
	'LBL_IMPORT_VCARDTEXT'									=> 'Créer automatiquement un nouveau Lead par import de vcard depuis votre système.',
	'LBL_INVALID_EMAIL'										=> 'Email non valide:',
	'LBL_INVITEE'											=> 'Rapports directs',
	'LBL_LAST_NAME'											=> 'Nom de famille:',
	'LBL_LEAD_SOURCE'										=> 'Origine principale:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description de la principale origine du Lead:',
	'LBL_LIST_ACCEPT_STATUS'								=> 'Statut d&#39;acceptation',
	'LBL_LIST_ACCOUNT_NAME'									=> 'Nom Compte',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
	'LBL_LIST_CONTACT_NAME'									=> 'Nom du Lead',
	'LBL_LIST_CONTACT_ROLE'									=> 'Rôle',
	'LBL_LIST_DATE_ENTERED'									=> 'Date de création',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
	'LBL_LIST_FIRST_NAME'									=> 'Prénom',
	'LBL_LIST_FORM_TITLE'									=> 'Liste des Leads',
	'LBL_LIST_LAST_NAME'									=> 'Nom',
	'LBL_LIST_LEAD_SOURCE'									=> 'Origine principale',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description origine principale',
	'LBL_LIST_MY_LEADS'										=> 'Mes Leads',
	'LBL_LIST_NAME'											=> 'Nom',
	'LBL_LIST_PHONE'										=> 'Téléphone',
	'LBL_LIST_REFERED_BY'									=> 'Fait référence à',
	'LBL_LIST_STATUS'										=> 'Statut',
	'LBL_LIST_TITLE'										=> 'Fonction',
  'LBL_LOADING' => 'Chargement',
  'LBL_MESSAGE' => 'Veuillez entrer vos information ci-dessous. Informations et / ou un compte sera créé pour vous et sera en attente d&#39;approbation.',
	'LBL_MOBILE_PHONE'										=> 'Téléphone mobile:',
  'LBL_MODIFIED' => 'Modifié par',
  'LBL_MODIFIED_ID' => 'Modifié par (ID)',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Leads',
  'LBL_MODULE_NAME_SINGULAR' => 'Lead',
  'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez créer un nouvel enregistrement.',
	'LBL_MODULE_TITLE'										=> 'Leads',
	'LBL_NAME'												=> 'Nom:',
	'LBL_NEW_FORM_TITLE'									=> 'Nouveau Lead',
	'LBL_NEW_PORTAL_PASSWORD'								=> 'Nouveau mot de Passe pour le portail:',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Note: L&#39;écran de conversion de lead suivant contient des champs personnalisés. Lorsque vous personnalisez l&#39;écran de conversion de lead dans le studio pour la première fois, vous allez devoir ajouter vous même les champs personnalisés sur la vue. Les champs personnalisés n&#39;apparaitront plus automatiquement sur la vue comme cela était le cas auparavant.',
	'LBL_OFFICE_PHONE'										=> 'Téléphone:',
	'LBL_OPPORTUNITY_AMOUNT'								=> 'Montant Affaire:',
	'LBL_OPPORTUNITY_ID'									=> 'Affaire (ID)',
	'LBL_OPPORTUNITY_NAME'									=> 'Nom Affaire:',
  'LBL_OPP_NAME' => 'Nom Affaire:',
	'LBL_OTHER_EMAIL_ADDRESS'								=> 'Email autre:',
	'LBL_OTHER_PHONE'										=> 'Téléphone autre:',
	'LBL_PHONE'												=> 'Téléphone:',
  'LBL_PHONE_FAX' => 'Fax',
  'LBL_PHONE_HOME' => 'Téléphone principal',
  'LBL_PHONE_MOBILE' => 'Mobile',
  'LBL_PHONE_OTHER' => 'Téléphone autre',
  'LBL_PHONE_WORK' => 'Ligne directe',
	'LBL_PORTAL_ACTIVE'										=> 'Activer le portail:',
	'LBL_PORTAL_APP'										=> 'Portail application',
	'LBL_PORTAL_INFORMATION'								=> 'Information sur le portail ',
	'LBL_PORTAL_NAME'										=> 'Nom sur le portail:',
	'LBL_PORTAL_PASSWORD_ISSET'								=> 'Le password du portail est enregistré:',
	'LBL_POSTAL_CODE'										=> 'Code postal:',
  'LBL_PRIMARY_ADDRESS' => 'Adresse principale:',
	'LBL_PRIMARY_ADDRESS_CITY'								=> 'Adresse principale - Ville',
	'LBL_PRIMARY_ADDRESS_COUNTRY'							=> 'Adresse principale - Pays',
	'LBL_PRIMARY_ADDRESS_POSTALCODE'						=> 'Adresse principale - Code Postal',
	'LBL_PRIMARY_ADDRESS_STATE'								=> 'Adresse principale - Région',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue 1',
	'LBL_PRIMARY_ADDRESS_STREET_2'							=> 'Adresse principale - Rue 2',
	'LBL_PRIMARY_ADDRESS_STREET_3'							=> 'Adresse principale - Rue 3',
  'LBL_PROSPECT_LIST' => 'Lise des Leads',
	'LBL_REFERED_BY'										=> 'Fait référence à:',
  'LBL_REGISTRATION' => 'Enregistrement',
  'LBL_REPORTS_FROM' => 'Rend compte à :',
  'LBL_REPORTS_TO' => 'Rend compte à:',
  'LBL_REPORTS_TO_ID' => 'Rend compte à (ID)',
  'LBL_REQUIRED_TIP' => 'Les modules requis doivent être créés ou sélectionnés avant de convertir le lead.',
	'LBL_SALUTATION'										=> 'Civilité',
  'LBL_SAVED' => 'Merci de votre enregistrement. Votre compte a été créé et quelqu&#39;un vous contactera trés prochainement.',
	'LBL_SEARCH_FORM_TITLE'									=> 'Rechercher un Lead',
  'LBL_SELECT' => '<b>OU</b> Sélectionner',
  'LBL_SELECTION_TIP' => 'Les modules liés avec le module contacts pourront être sélectionnés plutôt que créés durant le processus de conversion de lead.',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'						=> 'Utiliser Leads sélectionnés',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'						=> 'Utiliser Leads sélectionnés',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Nous sommes désolés, le serveur est actuellement indisponible.<br>Merci de réessayer plus tard.',
	'LBL_STATE'												=> 'Région:',
	'LBL_STATUS'											=> 'Statut:',
  'LBL_STATUS_DESCRIPTION' => 'Description Statut:',
  'LBL_STREET' => 'Rue',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_TARGET_BUTTON_LABEL' => 'Ciblé',
  'LBL_TARGET_BUTTON_TITLE' => 'Ciblé',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campagne réussie:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Merci. Votre inscription à bien été prise en compte.',
	'LBL_TITLE'												=> 'Fonction:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Vue Lead',
  'LBL_WEBSITE' => 'Site web',
  'LNK_IMPORT_LEADS' => 'Import Leads',
	'LNK_IMPORT_VCARD'										=> 'Insérer une vCard',
	'LNK_LEAD_LIST'											=> 'Leads',
  'LNK_LEAD_REPORTS' => 'Rapports de Leads',
	'LNK_NEW_ACCOUNT'										=> 'Créer un nouveau Compte',
	'LNK_NEW_APPOINTMENT'									=> 'Planifier un Rendez-vous ou un Appel',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_CASE' => 'Créer Ticket',
	'LNK_NEW_CONTACT'										=> 'Création du Contact',
	'LNK_NEW_LEAD'											=> 'Créer Lead',
	'LNK_NEW_MEETING'										=> 'Planifier Réunion',
  'LNK_NEW_NOTE' => 'Créer Note',
	'LNK_NEW_OPPORTUNITY'									=> 'Créer une nouvelle Affaire',
  'LNK_NEW_TASK' => 'Créer Tâche',
	'LNK_SELECT_ACCOUNTS'									=> ' <b>OU</b> Sélectionner un Compte',
  'LNK_SELECT_CONTACTS' => '<b>OU</b> Sélectionnez un Contact',
	'NTC_COPY_ALTERNATE_ADDRESS'							=> 'Copier l&#39;adresse alternative sur l&#39;adresse principale',
	'NTC_COPY_PRIMARY_ADDRESS'								=> 'Copier l&#39;adresse principale sur l&#39;adresse alternative',
	'NTC_DELETE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Créer une Affaire nécessite un Compte associé.\\n Merci de le créer ou de le sélectionner.',
	'NTC_REMOVE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer ce lead ?',
	'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION'					=> 'Etes vous sûr de vouloir supprimer cet enregistrement en tant que rapport direct ?',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);
