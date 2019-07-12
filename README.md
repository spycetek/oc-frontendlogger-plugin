# Frontend Logger Plugin


This is an [OctoberCMS](http://octobercms.com/) plugin that helps developer to record frontend logs.

## Components
### FrontendLogger
This [OctoberCMS](http://octobercms.com/) component provides logger methods that
the script in the page that has this component can record frontend logs to system.log file.

* frontendlogger::onEmergency
* frontendlogger::onAlert
* frontendlogger::onCritical
* frontendlogger::onError
* frontendlogger::onWarning
* frontendlogger::onNotice
* frontendlogger::onInfo
* frontendlogger::onDebug

Example usage;

```
<script>
    $.request('frontendlogger::onError', {
        data: {
            message : 'error message here!'
        }
    });
</script>
```

##Other
* [How to call handler via OctoberCMS JavaScript API](https://octobercms.com/docs/ajax/javascript-api)
