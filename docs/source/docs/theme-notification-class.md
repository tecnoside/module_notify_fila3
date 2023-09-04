---
title: Notifica ThemeNotification
description: Notifica ThemeNotification
extends: _layouts.documentation
section: content
---

# Notifica ThemeNotification

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Classe che si occupa di recuperare il template della notifica che si vuole utilizzare,  
già precedentemente creata nella tabella notify_themes.  
Esempo:

```php
$template = new ThemeNotification('reported_company', $company->toArray());
```

In questo caso nella variabile $template verrà inserita la notifica reported_company (primo parametro),  
come secondo parametro verrà passato un array di valori che verranno poi utilizzate nel corpo della notifica. 
Una volta recuperato il template della notifica, si procede all'invio (tramite codice):

```php
Notification::send($recipients, $template);
```

Il primo parametro $recipients è una collezione di destinatari a cui verrà mandata la notifica,  
il secondo parametro $template è quello appena recuperato dalla tabella notify_themes
=======
Classe notifica utilizzata per inviare email/sms/ecc.
>>>>>>> b0b881b (.)
=======
Classe notifica utilizzata per gestire le notifiche (email/sms/ecc).
>>>>>>> cac1c0d (.)
=======
Classe notifica utilizzata per gestire le notifiche (email/sms/ecc).

```php
Notification::send($company->reporter, new ThemeNotification('accepted_company', $company->toArray()));
<<<<<<< HEAD
```
>>>>>>> 4741bb3 (.)
=======
```
>>>>>>> ea7e096 (.)
=======
Classe che si occupa di recuperare il template della notifica che si vuole utilizzare,  
già precedentemente creata nella tabella notify_themes.  
Esempo:

```php
$template = new ThemeNotification('reported_company', $company->toArray());
```

In questo caso nella variabile $template verrà inserita la notifica reported_company (primo parametro),  
come secondo parametro verrà passato un array di valori che verranno poi utilizzate nel corpo della notifica. 
Una volta recuperato il template della notifica, si procede all'invio (tramite codice):

```php
Notification::send($recipients, $template);
```

Il primo parametro $recipients è una collezione di destinatari a cui verrà mandata la notifica,  
il secondo parametro $template è quello appena recuperato dalla tabella notify_themes
>>>>>>> 4c7a06e (.)
=======
Classe notifica utilizzata per inviare email/sms/ecc.
>>>>>>> 9b35d99 (.)
=======
Classe notifica utilizzata per gestire le notifiche (email/sms/ecc).
>>>>>>> b349bf0 (.)
