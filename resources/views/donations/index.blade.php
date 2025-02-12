<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations List</title>
</head>
<body>
    <h1>List of Donations</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Amount</th>
                <th>Cause</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->name }}</td>
                    <td>{{ $donation->email }}</td>
                    <td>{{ $donation->amount }}</td>
                    <td>{{ $donation->cause }}</td>
                    <td>{{ $donation->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
