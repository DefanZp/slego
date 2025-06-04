<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch Alpine</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    <div x-data="{restaurantList:{}}" x-init="restaurantList = await (await fetch('https://restaurant-api.dicoding.dev/list')
    .then(res => res.json())
    .then(res => res.restaurants))
    console.log(restaurantList)">

    <div class="flex flex-row w-full max-h-[400px] overflow-scroll gap-16">
    <template x-for="restaurant in restaurantList">
            <div class="flex flex-col min-w-[200px] h-full ">
            <img  x-bind:src="'https://restaurant-api.dicoding.dev/images/small/' + restaurant.pictureId "
            class="w-full h-[200px] object-cover"
            >
            <h1 x-text="restaurant.name"></h1>
            <h1 x-text="restaurant.description"></h1>
            </div>
    </template>
    </div>
</body>
</html>