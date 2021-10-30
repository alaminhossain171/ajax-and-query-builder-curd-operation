@foreach ($student as $item)
    <li>Name:-{{ $item->Name }}</li><br>
    <li>Roll:-{{ $item->Roll }} </li><br>
    <li>Class:-{{ $item->Class }}</li><br>
@endforeach