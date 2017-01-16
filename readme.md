# NewRelic Service Provider
This service provider set the NewRelic Application Name to be equals to the Domain Name.

Install running
```
composer require larapack/newrelic-service-provider
```

Then add the service provider to your application providers 
```
'providers' => [
    // Laravel Providers...
    // ...
    
    // Package Providers...
    Larapack\NewRelicServiceProvider\ServiceProvider::class,
    
    // Application Providers...
    // ...
]
```

Then your good to go!
