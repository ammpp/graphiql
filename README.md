# GraphiQL
Simple and easy basic GRAPHQL web interface

## Installation

1. Register it as a bundle
```shell
config/bundles.php:

  ammpp\GraphiQL\GraphiQLBundle::class => ['all' => true],
```

2. Install assets
```shell
bin/console assets:install
```

3. Register route to controller
```shell
config/routes.yaml:

graphiql:
    path: /graphql"
    controller: ammpp\GraphiQL\GraphiQLBundleController
    methods: GET
```

4. Enter the page
   https://your-app/graphql
