<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </span>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">

        <title>Document</title>
</head>

<body>

    <section>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sl NO.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Asset</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requisitions as $requisition)
                    <tr>
                        <td>{{$requisition->name}}</td>
                        <td>Doe</td>
                        <td>johndoe@example.com</td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </section>
</body>

</html>