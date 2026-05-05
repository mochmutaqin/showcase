<!DOCTYPE html>
<html>
<head>
    <title>{{ $s->serial_number }}</title>
    <meta name="description" content="Showcase Industri Indonesia">
    <script type="application/ld+json">
    {
    @verbatim
    "@context": "https://schema.org",
    "@type": "Product",
    @endverbatim
    "name": "{{ $s->serial_number }}"
    }
</script>
</head>
<body>

<h1>{{ $s->serial_number }}</h1>

<p>Kompresor: {{ $s->compressor_type ?? '-' }}</p>
<p>Kaca: {{ $s->glass_spec ?? '-' }}</p>

<form>
    <input type="hidden" name="serial_number" value="{{ $s->serial_number }}">
    <button>Request Service</button>
</form>

<img src="https://via.placeholder.com/800" loading="lazy">

</body>
</html>