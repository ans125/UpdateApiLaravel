<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
</head>
<body>
    <h1>Logs</h1>
    <ul>
        @foreach ($logs as $log)
            <li>
                <strong>URL:</strong> {{ $log->url }} <br>
                <strong>Method:</strong> {{ $log->method }} <br>
                <strong>User Agent:</strong> {{ $log->user_agent }} <br>
                <strong>Request:</strong> {{ $log->request }} <br>
                <strong>Response:</strong> {{ $log->response }}
            </li>
        @endforeach
    </ul>
</body>
</html>
