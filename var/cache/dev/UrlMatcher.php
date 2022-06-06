<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\AdminsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, true, false, null]],
        '/contacts/formulaireContacts' => [[['_route' => 'formulaireContacts_index', '_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacts/nouveauContacts' => [[['_route' => 'nouveauContacts_index', '_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, null, null, false, false, null]],
        '/factures' => [[['_route' => 'app_factures', '_controller' => 'App\\Controller\\FacturesController::index'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations_index', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, true, false, null]],
        '/formations/formulaireFormations' => [[['_route' => 'formulaireFormations_index', '_controller' => 'App\\Controller\\FormationsController::formulaireFormations'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formations/nouvelleFormation' => [[['_route' => 'nouvelleFormation_index', '_controller' => 'App\\Controller\\FormationsController::nouvelleFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formationspageAccueilBIOInformatique' => [[['_route' => 'pageAccueilBIOInformatique_index', '_controller' => 'App\\Controller\\FormationsController::pageAccueilBIOInformatique'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationPHP' => [[['_route' => 'formationPHP_index', '_controller' => 'App\\Controller\\FormationsController::formationPHP'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationJAVA' => [[['_route' => 'formationJAVA_index', '_controller' => 'App\\Controller\\FormationsController::formationJAVA'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationDeveloppeurWEB' => [[['_route' => 'developpeurWEB_index', '_controller' => 'App\\Controller\\FormationsController::developpeurWEB'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationSymfony' => [[['_route' => 'formationSymfony_index', '_controller' => 'App\\Controller\\FormationsController::formationSymfony'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'accueil_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/langages' => [[['_route' => 'app_langages', '_controller' => 'App\\Controller\\LangagesController::index'], null, null, null, false, false, null]],
        '/medias' => [[['_route' => 'medias_index', '_controller' => 'App\\Controller\\MediasController::index'], null, null, null, true, false, null]],
        '/medias/formulaireMedias' => [[['_route' => 'formulaireMedias_index', '_controller' => 'App\\Controller\\MediasController::formulaireMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias/nouveauMedias' => [[['_route' => 'nouveauMedias_index', '_controller' => 'App\\Controller\\MediasController::nouveauMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediaspageAccueilGuinot' => [[['_route' => 'pageAccueilGuinot_index', '_controller' => 'App\\Controller\\MediasController::pageAccueilGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasmotDuPresidentDeGuinot' => [[['_route' => 'motDuPresidentDeGuinot_index', '_controller' => 'App\\Controller\\MediasController::motDuPresidentDeGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediashistoriqueDeGuinot' => [[['_route' => 'historiqueGuinot_index', '_controller' => 'App\\Controller\\MediasController::historiqueGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasintroductionSurGuinot' => [[['_route' => 'introductionGuinot_index', '_controller' => 'App\\Controller\\MediasController::introductionGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationMasseurGuinot' => [[['_route' => 'masseurGuinot_index', '_controller' => 'App\\Controller\\MediasController::masseurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationGuinot' => [[['_route' => 'formationGuinot_index', '_controller' => 'App\\Controller\\MediasController::formationGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationDeveloppeurGuinot' => [[['_route' => 'developpeurGuinot_index', '_controller' => 'App\\Controller\\MediasController::developpeurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationConseillerGuinot' => [[['_route' => 'conseillerGuinot_index', '_controller' => 'App\\Controller\\MediasController::conseillerGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediastemoignages' => [[['_route' => 'temoignages_index', '_controller' => 'App\\Controller\\MediasController::temoignages'], null, ['GET' => 0], null, false, false, null]],
        '/messages' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, true, false, null]],
        '/messages/formulaireMessages' => [[['_route' => 'formulaireMessages_index', '_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/nouveauMessages' => [[['_route' => 'nouveauMessage_index', '_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/messagesEnvoyer' => [[['_route' => 'messagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::messageEnvoyer'], null, null, null, false, false, null]],
        '/messages/messagesRecu' => [[['_route' => 'messagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::messageReçu'], null, null, null, false, false, null]],
        '/messages/listeMessagesEnvoyer' => [[['_route' => 'listeMessagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesEnvoyer'], null, null, null, false, false, null]],
        '/messages/listeMessagesRecu' => [[['_route' => 'listeMessagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesRecu'], null, null, null, false, false, null]],
        '/profs' => [[['_route' => 'app_profs', '_controller' => 'App\\Controller\\ProfsController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register-admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/register-abonner' => [[['_route' => 'app_register_abonner', '_controller' => 'App\\Controller\\RegistrationController::registerAbonner'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/stagiaires' => [[['_route' => 'app_stagiaires', '_controller' => 'App\\Controller\\StagiairesController::index'], null, null, null, false, false, null]],
        '/types' => [[['_route' => 'app_types', '_controller' => 'App\\Controller\\TypesController::index'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formulaireUtilisateur' => [[['_route' => 'formulaireUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nouvelUtilisateur' => [[['_route' => 'nouvelUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/abonner' => [
            [['_route' => 'monEspacePersonel_index', '_controller' => 'App\\Controller\\UtilisateursController::monEspacePersonnel'], null, null, null, false, false, null],
            [['_route' => 'pageAccueilEspacePerso_index', '_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], null, null, null, false, false, null],
        ],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/contacts/(?'
                    .'|afficherContacts/([^/]++)(*:207)'
                    .'|modifierContacts/([^/]++)(*:240)'
                    .'|supprimerContacts/([^/]++)(*:274)'
                .')'
                .'|/formations/(?'
                    .'|afficherFormations/([^/]++)(*:325)'
                    .'|modifierFormations/([^/]++)(*:360)'
                    .'|supprimerFormations/([^/]++)(*:396)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|dias/(?'
                            .'|recherchesMedias/([^/]++)(*:447)'
                            .'|afficherMedias/([^/]++)(*:478)'
                            .'|modifierMedias/([^/]++)(*:509)'
                            .'|supprimerMedias/([^/]++)(*:541)'
                        .')'
                        .'|ssages/(?'
                            .'|afficherMessage/([^/]++)(*:584)'
                            .'|m(?'
                                .'|odifierMessages/([^/]++)(*:620)'
                                .'|essagesLu/([^/]++)(*:646)'
                            .')'
                            .'|supprimerMessages/([^/]++)(*:681)'
                        .')'
                    .')'
                    .'|odifierUtilisateur/([^/]++)(*:718)'
                .')'
                .'|/rechercheUtilisateur/([^/]++)(*:757)'
                .'|/afficherUtilisateur/([^/]++)(*:794)'
                .'|/supprimerUtilisateur/([^/]++)(*:832)'
                .'|/e(?'
                    .'|xpediteur/([^/]++)(*:863)'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:907)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:950)'
                .')'
                .'|/destinataire/([^/]++)(*:981)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'afficherContacts_index', '_controller' => 'App\\Controller\\ContactsController::afficherContacts'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'modifierContacts_index', '_controller' => 'App\\Controller\\ContactsController::modifierContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        274 => [[['_route' => 'supprimerContacts_index', '_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        325 => [[['_route' => 'afficherFormations_index', '_controller' => 'App\\Controller\\FormationsController::afficherFormations'], ['id'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'modifierFormations_index', '_controller' => 'App\\Controller\\FormationsController::modifierFormations'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        396 => [[['_route' => 'supprimerFormations_index', '_controller' => 'App\\Controller\\FormationsController::supprimerFormations'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        447 => [[['_route' => 'rechercheMedias_index', '_controller' => 'App\\Controller\\MediasController::rechercheMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        478 => [[['_route' => 'afficherMedias_index', '_controller' => 'App\\Controller\\MediasController::afficherMedias'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'modifierMedias_index', '_controller' => 'App\\Controller\\MediasController::modifierMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        541 => [[['_route' => 'supprimerMedias_index', '_controller' => 'App\\Controller\\MediasController::supprimerMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        584 => [[['_route' => 'afficherMessage_index', '_controller' => 'App\\Controller\\MessagesController::afficherMessage'], ['id'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'modifierMessage_index', '_controller' => 'App\\Controller\\MessagesController::modifierMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        646 => [[['_route' => 'messagesLu_index', '_controller' => 'App\\Controller\\MessagesController::messageLu'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'supprimerMessage_index', '_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        718 => [[['_route' => 'modifierUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        757 => [[['_route' => 'rechercheUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        794 => [[['_route' => 'afficherUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], ['id'], ['GET' => 0], null, false, true, null]],
        832 => [[['_route' => 'supprimerUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        863 => [[['_route' => 'expediteur_index', '_controller' => 'App\\Controller\\UtilisateursController::expediteur'], ['id'], null, null, false, true, null]],
        907 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        950 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        981 => [
            [['_route' => 'destinataire_index', '_controller' => 'App\\Controller\\UtilisateursController::destinataire'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
