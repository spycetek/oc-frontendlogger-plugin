# Frontend Logger Plugin


This is an [OctoberCMS](http://octobercms.com/) plugin that helps developer to record frontend logs.

## Components
### FrontendLogger
This [OctoberCMS](http://octobercms.com/) component provides logger methods that
the script in the page that has this component can record frontend logs to system.log file.

* frontendlogger::emergency
* frontendlogger::alert
* frontendlogger::critical
* frontendlogger::error
* frontendlogger::warning
* frontendlogger::notice
* frontendlogger::info
* frontendlogger::debug

Example usage;

```
<script>
    $(this).request('frontendlogger::error',{data:{value:777}});
</script>
```

##Other
* [How to call handler via OctoberCMS JavaScript API](https://octobercms.com/docs/ajax/javascript-api)
