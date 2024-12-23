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
            <form action="{{route('requisitions.store')}}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="phone">Phone</label>
                <input type="text" name="phone">
                <label for="email">Email</label>
                <input type="email" name="email">

                <div>
                    <label for="asset">Asset</label>
                    <select name="asset_id" id="asset">
                        <option value="none">Select Asset</option>
                        <option value="1">Mouse</option>
                        <option value="2">Keyboard</option>
                        <option value="3">Monitor</option>
                        <option value="4">CPU</option>
                        <option value="5">Water bottle</option>
                        <option value="6">Tissue paper</option>
                        <option value="7">table fan</option>
                    </select>
                </div>

                <label for="designation">Designation</label>
                <input type="text" name="designation">
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</body>

</html>