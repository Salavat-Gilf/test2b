<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Предложения</title>
</head>

<body>
    <h1>Предложения</h1>
    <div>
        @foreach ($offers as $offer)
        <tr>
            <td>{{ $offer->name }}</td>
            <td>{{ $offer->offer }}</td>
            <td>{{ $offer->department }}</td>
            <td>{{ $offer->status}}</td>
        </tr>
        @endforeach
    </div>
</body>

</html>