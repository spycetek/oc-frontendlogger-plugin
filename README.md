# Frontend Logger Plugin


This is an [OctoberCMS](http://octobercms.com/) plugin that helps developer to record frontend logs.

## Components
### FrontendLogger
This [OctoberCMS](http://octobercms.com/) component provides logger methods that
the script in the page that has this component can record frontend logs to system.log file.

Types of Logging levels:

* FrontendLogger::onEmergency
* FrontendLogger::onAlert
* FrontendLogger::onCritical
* FrontendLogger::onError
* FrontendLogger::onWarning
* FrontendLogger::onNotice
* FrontendLogger::onInfo
* FrontendLogger::onDebug


NOTE: Please put ```{% framework %}``` or ```{% framework extras %}``` to use ```$.request``` method. Please refer example below.

Example usage:

```
<script>
    $.request('FrontendLogger::onError', {
        data: {
            message : 'error message here!'
        }
    });
</script>
{% framework %}
{% framework extras %}
```

##Other
* [How to call handler via OctoberCMS JavaScript API](https://octobercms.com/docs/ajax/javascript-api)
