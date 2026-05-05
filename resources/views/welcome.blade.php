<h1>Dashboard</h1>

@foreach($data as $d)
<div>
    {{ $d->serial_number }}
    <a href="/showcase/{{ $d->id }}">Detail</a>
</div>
@endforeach