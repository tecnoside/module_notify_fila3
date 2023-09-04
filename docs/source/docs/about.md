---
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
title: About Notify
description: About Notify
=======
title: Algolia DocSearch
description: Configure Algolia DocSearch with the Jigsaw docs starter template
>>>>>>> 6b7620e (up)
=======
title: About Notify
description: About Notify
>>>>>>> 733b7e2 (up)
=======
title: About Notify
description: About Notify
>>>>>>> fe06862 (.)
extends: _layouts.documentation
section: content
---

# module_notify

module_notify è un modulo per la gestione delle notifiche.

### Installazione

Per installare il modulo, eseguire il comando seguente:

```php
composer require laraxot/module_notify
```

### Utilizzo

Per utilizzare il modulo, è necessario importarlo e creare un oggetto NotificationManager:

from module_notify import NotificationManager

manager = NotificationManager()

È possibile quindi utilizzare il metodo send_notification per inviare una notifica:

manager.send_notification("Questo è un esempio di notifica.")

Per ulteriori informazioni su come utilizzare il modulo, consultare la documentazione completa.