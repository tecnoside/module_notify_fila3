---
title: Notifica ThemeNotification
description: Notifica ThemeNotification
extends: _layouts.documentation
section: content
---

# Notifica ThemeNotification

Classe notifica utilizzata per gestire le notifiche (email/sms/ecc).

```php
Notification::send($company->reporter, new ThemeNotification('accepted_company', $company->toArray()));
```