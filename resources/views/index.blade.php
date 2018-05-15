<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
</head>
<body>
<div id="app">
    <form action="{{route('locations.search')}}">
        Geo code <input type="text" name="geo_code">
        <br>
        City <input type="text" name="city_name">
        <br>
        Pagination <input type="number" name="pagination">
        <br>
        <input type="submit">
    </form>
</div>
<script>
    
</script>
</body>
</html>
