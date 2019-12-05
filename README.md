sf3GrcEternity
==============

A Symfony project created on July 9, 2018, 4:23 pm.


Pour connecter un compte eternity à l'appli de GRC:


-----------------

     Vous devez d'abord générer 3 chaines de caractères qui 
    serviront respectivement de login, mot de passe et clé de cryptage
     pour l'authentification entre eternity et la plateforme GRC.
     
     Insérer ces clés générées dans les paramèters Eternity ( dans config.yml ) 
     Ainsi qu'un tableau contenant les roles de GRC authorisés à effectuer
     des actions sur la plateforme eternity en question.
 
 
    parameters:
  
        eternity_access_login: dK^BWp9F4G9*^5@5
        eternity_access_pwd: v6L'KXtw8e
        eternity_encode_key: PlapxslquauHC3
        eternity_authorized_grc_roles: ['ROLE_GRC','ROLE_ADMIN']
     
 
 
-----------------
 
    Rajouter dans twig globals le nom de l'opérateur et le nom du site
    ( pour les templates mails ) 
 
     twig:
        globals:
            site_name: localiser-mobile.com
            agent_name: Clara
        
-----------------
        
        Enfin rajouter en BDD dans le projet GRC une ligne dans la table eternity cotenant 
        les informations précédement saisies en config:
            - name ( nom qui apparait sur l'appli GRC ) 
            - login ( le login que vous avez mis en config )
            - pwd ( le password que vous avez mis en config )
            - url_api ( l'url du eternity avec un '/' final  ( ex : https://localiser-mobile.eternity-access.com/ )