# GraphiQL
Simple and easy basic GRAPHQL web interface

## Installation

1. Configure your composer.json
```shell
{
    "require": {
        "ammpp/graphiql": "*"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ammpp/graphiql.git"
        }
    ]
}
```

2. Download the library
```shell
composer require ammpp/graphiql
```

3. Register the library as a bundle
```shell
[config/bundles.php]

  ammpp\graphiql\GraphiQLBundle::class => ['all' => true],
```

4. Install assets
```shell
bin/console assets:install
```

5. Register route to controller
```shell
[config/routes.yaml]

graphiql:
    path: /graphql"
    controller: ammpp\graphiql\GraphiQLBundleController
    methods: GET
```

6. Enter the page
   https://your-app/graphql
